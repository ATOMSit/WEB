<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\SocialAccount;
use App\User;
use Illuminate\Auth\Events\Registered as RegisteredEvent;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    use RedirectsUsers;

    protected $scopes = [
        'facebook' => [
            'name',
            'first_name',
            'last_name',
            'email',
            'gender',
            'verified'
        ],
        'linkedin' => [
            'r_basicprofile'
        ],
        'google' => [

        ]
    ];

    /**
     * Redirect the user to the Provider authentication page.
     *
     * @param $provider String
     * @return mixed
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Provider.
     *
     * @param $provider string
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Throwable
     * @throws \Exception
     */
    public function handleProviderCallback($provider)
    {
        try {
            if ($provider === 'facebook') {
                $providerUser = Socialite::driver($provider)->fields($this->scopes[$provider])->user();
            } else {
                $providerUser = Socialite::driver($provider)->scopes($this->scopes[$provider])->user();
            }
        } catch (\Throwable | \Exception $e) {
            // Send actual error message in development
            if (config('app.debug')) {
                throw $e;
            }
            // Lets suppress this error
            return redirect()->route('login')
                ->with('error', __('Unable to authenticate. Please try again.'));
        }
        DB::beginTransaction();
        $user = $this->findOrCreateUser($provider, $providerUser);
        Auth::login($user, true);
        // This session variable can help to determine if user is logged-in via socialite
        session()->put([
            'auth.social_id' => $providerUser->getId()
        ]);
        DB::commit();
        return $this->authenticated($user)
            ?: redirect()->intended($this->redirectPath());
    }

    /**
     * Create a user if does not exist
     *
     * @param $providerName string
     * @param $providerUser
     * @return mixed
     */
    protected function findOrCreateUser($providerName, $providerUser)
    {
        $social = SocialAccount::query()->firstOrNew([
            'provider_user_id' => $providerUser->getId(),
            'provider' => $providerName
        ]);
        if ($social->exists) {
            return $social->user;
        }
        $user = User::query()->firstOrNew([
            'email' => $providerUser->getEmail()
        ]);
        return var_dump($providerUser);
        if (!$user->exists) {
            if ($providerName === 'facebook') {
                $user->first_name = $providerUser->user['first_name'];
                $user->last_name = $providerUser->user['last_name'];
                $user->password = Hash::make(Str::random(30));
                $user->save();
            } elseif ($providerName === 'google') {
                $user->first_name = $providerUser->user['given_name'];
                $user->last_name = $providerUser->user['family_name'];
                $user->password = Hash::make(Str::random(30));
                $user->save();
            } else {
                $user->first_name = $providerUser->first_name;
                $user->last_name = $providerUser->last_name;
                $user->password = Hash::make(Str::random(30));
                $user->save();
            }
        }
        $social->user()->associate($user);
        $social->save();
        return $user;
    }

    /**
     * The user has been authenticated.
     *
     * @param User $user
     * @return mixed
     */
    protected function authenticated(User $user)
    {
    }

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    protected function redirectTo()
    {
        return route('home');
    }
}