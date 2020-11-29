<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ACL to Laravel 8') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="{{asset('css/style.css')}}" type="text/css"/>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                @role('super', 'admin')
                <a class="navbar-brand bg-dark text-white" href="{{ url('/admin/users') }}">
                    &nbsp;&nbsp;&nbsp;{{ config('app.name', 'Simple Laravel Admin') }}&nbsp;&nbsp;&nbsp;
                </a>
                @endrole
                @role('manager', 'user')
                <a class="navbar-brand bg-dark text-white" href="{{ url('/admin/clients') }}">
                    &nbsp;&nbsp;&nbsp;{{ config('app.name', 'Simple Laravel Admin') }}&nbsp;&nbsp;&nbsp;
                </a>
                @endrole
                @guest
                <a class="navbar-brand bg-dark text-white" href="{{ url('/public') }}">
                    &nbsp;&nbsp;&nbsp;{{ config('app.name', 'Simple Laravel Admin') }}&nbsp;&nbsp;&nbsp;
                </a>
                @endguest
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(!Auth::check())
                            <li><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                        @else
                                {{ Auth::user()->name }}&nbsp;&nbsp;

                                <li class="nav-item">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            {{ __('Logout') }}
                                        </button>
                                    </form>
                                </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
