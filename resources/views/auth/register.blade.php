@extends('layouts.app')

@section('content')


    <div class="page-box">
        <div>
            <div id="root">
                <div class="row m0" id="regFormWrap">
                    <div class="col-xs-12">
                        @include('parts.flash')
                    </div>
                    <div class="page-text text-center col-xs-12">
                        Sign up
                    </div>
                    <div class="clearfix"></div>
                    <form class="form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-3 hidden-xs hidden-sm">
                                            <label class="field-label" for="name">
                                                {{ __('Name') }}
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="field icon icon-email">
                                                <input id="name" type="text" placeholder="Username"
                                                       class="field-item form-control @error('name') is-invalid @enderror" name="name"
                                                       value="{{ old('name') }}" required autocomplete="name" autofocus style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 hidden-xs hidden-sm">
                                            <label class="field-label" for="email">{{ __('E-Mail Address') }}</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="field icon icon-email">
                                                <input id="email" type="email" placeholder="Email" class="field-item form-control @error('email') is-invalid @enderror" name="email"
                                                       value="{{ old('email') }}" required autocomplete="email">

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
                                            <label class="field-label" for="Password">
                                                {{ __('Password') }}
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="field icon icon-password">
                                                <input id="password" type="password" placeholder="Password"
                                                       class="field-item form-control @error('password') is-invalid @enderror" name="password"
                                                       required autocomplete="new-password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 hidden-xs hidden-sm">
                                            <label class="field-label" for="Password">
                                                {{ __('Confirm Password') }}
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="field icon icon-password">
                                                <input id="password-confirm" type="password" placeholder="Confirm password" class="field-item form-control"
                                                       name="password_confirmation" required autocomplete="new-password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-offset-3 col-xs-12 col-md-9">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="terms-header">By signing up, you agree to our Forum Rules:</div>
                                <div class="terms-text">
                                    <div>
                                        <p></p>
                                        <p>At Plarium, we believe that the social interactions between the millions of
                                            members of our online player communities are a key part of the gaming
                                            experience. Keeping these player communities a safe, respectful place for
                                            you to interact with friends, fellow players, and Plarium staff is one of
                                            our top priorities.</p>
                                        <p>This Forum is a place where communities made up of players of all Plarium
                                            games can come together to exchange information, catch up on the latest
                                            news, share community-created content, discuss their game with other members
                                            of the community, and ask questions to the Support and Development
                                            Teams.</p>
                                        <p>Please carefully read through the Forum Rules listed below, and make sure to
                                            observe these guidelines during your interactions on this Forum. The
                                            enforcement and interpretation of these rules will be at the sole discretion
                                            of Plarium staff and authorized members of the Support Team.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row page-text">
                                <div class="col-md-12 text-center">
                                    <label class="field-label checkbox-container" style="display: flex; justify-content: center;">
                                        <input type="checkbox" class="checkbox-input" style="height: 20px; width: 20px; margin-right: 10px;">
                                        <span class="checkmark" style="height: 20px; width: 20px; margin-right: 10px;">
                                        </span>
                                        <span>
                                            By signing up, you agree to our
                                            <a href="/">Terms of Use</a>
                                            and
                                            <a href="/">Privacy and Cookie Policy</a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row_margin">
                            <div class="col-xs-12 text-center">
                                <button class="button-auth-form-reg" id="submitButton" type="submit">{{ __('Register') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
