<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" 
    integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <nav class="col-md-3" style="overflow:hidden">
                    <div class="nav-tile" title="home"><a href="{{url('/home')}}">
                        <i class="fas fa-home"></i><p class="status">Home</p></a>
                    </div>
                    <div class="nav-tile" title="arena"><a href="{{url('/home')}}">
                        <i class="fas fa-chess-board"></i><p class="status">Arena</p></a></div>
                    @guest
                    <div class="nav-tile"><a href="{{url('/expedition')}}"><i class="fas fa-tree"></i></a></div>
                    @else                    
                    <div class="nav-tile" title="expedition"><a href="{{url('/expedition')}}"><span><i class="fas fa-tree"></i>
                        @if(Auth::user()->expeditions->first() !== NULL)
                            @if(Auth::user()->expeditions->first()->pivot->end_date < date("Y-m-d H:i:s") )
                                <p class="status status-red">Finished</p>
                            @else
                            <p class="status status-orange">In progress</p>
                            @endif
                        @else
                            <p class="status status-green">Start new</p>
                        @endif  
                    
                    </span></a>
                    </div>
                    @endguest

                    @guest
                    <div class="nav-tile"><a href="{{url('/message')}}"><i class="fas fa-envelope"></i>
                        <p class="status">(0)</p>
                    </a></div>
                    @else
                    <div class="nav-tile"><a href="{{url('/message')}}"><i class="fas fa-envelope"></i>
                        <p class="status">({{ Auth::user()->notifications->count() }})</p>
                    </a></div>
                    @endguest
                    <div class="nav-tile"><a href="{{url('/training')}}">
                        <i class="fas fa-graduation-cap"></i><p class="status">Training</p></a></div>
                    
                    <div class="nav-tile"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i><p class="status">Log out</p></a></div>

                </nav>
                <main class="col-md-9">@yield('content')</main>
            </div>
        </div>        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
