@extends('layouts.app')

@section('content')

    <div class="page-box">
        <div id="root">
            <div class="row m0">
                <div class="col-xs-12">
                    <div id="messageContainer">
                        @include('parts.flash')
                    </div>
                </div>
                <form class="form" method="POST" action="{{ route('login') }}" style="width: 100%; margin-top: 50px;">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="page-text-form-login text-center col-xs-12 col-md-9 col-md-offset-3">
                                        Use your Plarium ID to log into the forum.
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-3 hidden-xs hidden-sm">
                                            <label class="field-label" for="Email">{{ __('E-Mail Address') }}</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="field icon icon-email">
                                                <input id="email" type="email"
                                                       class="field-item form-control @error('email') is-invalid @enderror" name="email"
                                                       value="{{ old('email') }}" required autocomplete="email" autofocus style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 hidden-xs hidden-sm">
                                            <label class="field-label" for="Password">{{ __('Password') }}</label></div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="field icon icon-password">
                                                <input id="password" type="password"
                                                       class="field-item form-control @error('password') is-invalid @enderror" name="password"
                                                       required autocomplete="current-password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            @if (Route::has('password.request'))
                                                <div class="page-text text-center padding-5">
                                                    <a href="{{ route('password.request') }}" target="blank">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-3 col-xs-12 col-md-9">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="field-label" for="remember" style="top: 0;">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center col-md-offset-3">
                                        <button class="button-auth-form-log" type="submit">{{ __('Login') }}</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-9 col-md-offset-3">
                                        <div class="page-text text-center">
                                            <div>
                                                Or
                                                <a href="https://plarium.com/forum/en/auth/plariumid/registration/">
                                                    Sign Up
                                                </a>
                                                if you don't have Plarium ID yet
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
