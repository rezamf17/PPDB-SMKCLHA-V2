<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('gambar/logoclha.png')}}">
    <title>@yield('title')| PPDB</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{url('style/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
</head>
<body>
    <div id="app">
        <header>
            <div class="atas">
                <img src="{{ asset('gambar/logoclha.png') }}" alt="">
                <h1>Website PPDB Online | SMK Cellular Hauro'49</h1>
            </div>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <ul>
                    <li><a href="/" title=""><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                    <li><a href="{{ url('caraDaftar') }}" title=""><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Cara Daftar</a></li>
                    <li><a href="{{ url('pemberitahuan') }}" title=""><i class="fa fa-bullhorn" aria-hidden="true"></i>Pengumuman</a></li>
                    <li><a href="{{ route('login') }}" title=""><i class="fa fa-lock" aria-hidden="true"></i>Login</a></li>
                </ul>
                <div class="container">
               {{--  <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>

    </nav>
</header><!-- /header -->


<main class="py-4">
    @yield('content')
</main>
</div>
</body>
</html>
