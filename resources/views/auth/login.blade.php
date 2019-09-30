@extends('auth.layouts.app')

@section('content')
    <h3 class="font-size-24">
        @lang('visual.login.title')
    </h3>
    <p>
        @lang('visual.login.subdescription')
    </p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                   autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
                   autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-group clearfix">
                <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                    <input type="checkbox" id="rememberMe" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="rememberMe">
                        @lang('visual.login.rememberme')
                    </label>
                </div>
                <a class="float-right" href="{{ route('password.request') }}">
                    @lang('visual.login.passwordlost')
                </a>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            @lang('visual.login.button')
        </button>
    </form>
    <p>
        @lang('visual.login.register_title')
        <a href="{{route('register')}}">
            @lang('visual.login.register')
        </a>
    </p>
@endsection