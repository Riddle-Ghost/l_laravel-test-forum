<div id="header" class="headerr">
    <div class="headerr-box">
        <div class="headerr-logo">
            <a class="headerr-logo-link" href="/" title="Home">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="headerr-menu">
            <div class="headerr-menu-toggler open">
                <button type="button" class="headerr-menu-toggler-button" data-toggle="dropdown" aria-expanded="false">
                    <span class="headerr-menu-toggler-title">Forums</span>
                    <span class="hidden-xs">
                            <span class="headerr-menu-toggler-current">Мой форум</span>
                        </span>
                </button>
            </div>
        </div>
        <div class="headerr-subscribe">
            <a href="#" target="_blank">
                <img class="headerr-subscribe-img" src="https://cdn01.x-plarium.com/browser/content/forum/common/buttons/youtube_32x122_button_subscribe.png">
            </a>
        </div>

        @if(Auth::check())
            <div id="auth_header" class="headerr-user">
                <div id="portal-chat-button" class="portal-chat-button">
                    <a class="headerr-user-chat icon icon-messages">
                        <span class="badge message-count">0</span>
                    </a>
                </div>
                <a class="headerr-user-link icon icon-profile" href="/profile">
                    <span class="headerr-user-link-span">Profile</span>
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="portal headerr-user-link icon icon-logout"></button>
                </form>
            </div>
        @else
            @guest
                <div class="headerr-auth">
                    <a class="button-auth-log" href="{{ route('login') }}" rel="nofollow">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="button-auth-reg" href="{{ route('register') }}" rel="nofollow">{{ __('Register') }}</a>
                    @endif
                </div>
            @endguest
        @endif
    </div>
</div>
