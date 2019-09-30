@extends('auth.layouts.app')

@section('content')
    <h3 class="font-size-24">
        @lang('visual.register.title')
    </h3>
    <p>
        @lang('visual.register.subdescription')
    </p>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row">
            <div class="col-6">
                <input id="first_name" type="text" placeholder="Prénom" class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                       value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                @error('first_name')
                <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                @enderror
            </div>
            <div class="col-6">
                <input id="last_name" type="text" placeholder="Nom de famille" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                       value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                   autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required
                   autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password-confirm" placeholder="Confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                <input type="checkbox" id="inputCheckbox" name="term">
                <label for="inputCheckbox"></label>
            </div>
            <p class="ml-40">By clicking Sign Up, you agree to our <a href="#">Terms</a>.</p>
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            @lang('visual.register.button')
        </button>
    </form>

    <p>
        @lang('visual.register.login_title')
        <a href="{{route('login')}}">
            @lang('visual.register.login')
        </a>
    </p>
@endsection