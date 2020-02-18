<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body style="background-color:#F2F5EA;">
    <div id="app" style="width: 98%" >
        <nav class="navbar navbar-expand-md navbar-light bg-F2F5EA shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                            <a class="nav-link" href="{{ route('samochod.index') }}">{{ __('Oferta') }}</a>
                            <a class="nav-link" href="/firma">{{ __('O firmie') }}</a>
                            <a class="nav-link" href="/kontakt">{{ __('Kontakt') }}</a>
                        @else

                            <a class="nav-link" href="{{ route('oferta.index') }}">{{ __('Oferta') }}</a>
                            <a class="nav-link" href="{{ route('rezerwacja.index') }}">{{ __('Rezerwacja') }}</a>
                            <a class="nav-link" href="{{ route('samochod.index') }}">{{ __('Samochody') }}</a>
                            <a class="nav-link" href="{{ route('oddzial.index') }}">{{ __('Oddziały') }}</a>
                            <a class="nav-link" href="{{ route('ubezpieczenie.index') }}">{{ __('Ubezpieczenia') }}</a>
                            <a class="nav-link" href="{{ route('terminRezerwacji.index') }}">{{ __('Terminy rezerwacji') }}</a>
                            <a class="nav-link" href="{{ route('marka.index') }}">{{ __('Marki') }}</a>
                            <a class="nav-link" href="{{ route('segment.index') }}">{{ __('Segmenty') }}</a>
                            <a class="nav-link" href="/firma">{{ __('O firmie') }}</a>
                            <a class="nav-link" href="/kontakt">{{ __('Kontakt') }}</a>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Zaloguj') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Zarejestruj') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->imie }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.edit')}}">{{ __('Edytuj dane') }}</a>
                                    @if (Route::has('password.request'))
                                        <a class="dropdown-item" href="{{ route('password.request') }}">
                                            {{ __('Zmień hasło') }}
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="">{{ __('Historia wypożyczeń') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row bg_top" align="center"><img src="/images/tlo.jpg" width="100%" alt="baner" class="img-responsive banner-main rest_height img-hidden" style="border-radius: 8px; align: center;">
        </div>
        <main class="py-4">
            @yield('content')
{{--            {{Auth::user()->id}}--}}
        </main>
    </div>
</body>
</html>
