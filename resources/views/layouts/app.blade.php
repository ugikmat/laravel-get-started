<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer" id="page-top">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    Welcome
                </a>
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                </button>                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
                {{-- SideBar --}}
                @auth
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                            <a class="nav-link" href="index.html">
                                <i class="fa fa-fw fa-dashboard"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                            <a class="nav-link" href="charts.html">
                                <i class="fa fa-fw fa-area-chart"></i>
                                <span class="nav-link-text">Charts</span>
                            </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                            <a class="nav-link" href="tables.html">
                                <i class="fa fa-fw fa-table"></i>
                                <span class="nav-link-text">Tables</span>
                            </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                <i class="fa fa-fw fa-wrench"></i>
                                <span class="nav-link-text">Components</span>
                            </a>
                            <ul class="sidenav-second-level collapse" id="collapseComponents">
                                <li>
                                <a href="navbar.html">Navbar</a>
                                </li>
                                <li>
                                <a href="cards.html">Cards</a>
                                </li>
                            </ul>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                                <i class="fa fa-fw fa-file"></i>
                                <span class="nav-link-text">Example Pages</span>
                            </a>
                            <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                                <li>
                                <a href="login.html">Login Page</a>
                                </li>
                                <li>
                                <a href="register.html">Registration Page</a>
                                </li>
                                <li>
                                <a href="forgot-password.html">Forgot Password Page</a>
                                </li>
                                <li>
                                <a href="blank.html">Blank Page</a>
                                </li>
                            </ul>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                                <i class="fa fa-fw fa-sitemap"></i>
                                <span class="nav-link-text">Menu Levels</span>
                            </a>
                            <ul class="sidenav-second-level collapse" id="collapseMulti">
                                <li>
                                <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                                <ul class="sidenav-third-level collapse" id="collapseMulti2">
                                    <li>
                                    <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                    <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                    <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                </li>
                            </ul>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                            <a class="nav-link" href="#">
                                <i class="fa fa-fw fa-link"></i>
                                <span class="nav-link-text">Link</span>
                            </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav sidenav-toggler">
                            <li class="nav-item">
                                <a class="nav-link text-center" id="sidenavToggler">
                                    <i class="fa fa-fw fa-angle-left"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
{{-- <body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body> --}}
</html>
