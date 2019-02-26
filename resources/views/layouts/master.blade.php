 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel Blog')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    </head>

<style>
    body { 
        padding-top: 60px; 
       /* background-image: url("{{ URL::to('/images/slika.jpeg') }}"); */
        height:auto;
        background-color: #03021F;
        padding-bottom:100px;
       /* background-repeat: no-repeat;
        background-size: cover;
        background-attachment:fixed;
       /* background-image: linear-gradient(#325955,#0F1D1B);!important
      /*  background-image: linear-gradient(#667eea, #764ba2 );
      background-image: linear-gradient( #485563, #29323c);*/
    }
    .bg-black {
        background-color: #202020 ;
        color: red !important;
    }

    .navbar li a {
        color: black;
    }

    .dropdown:hover>.dropdown-menu {
        display: block;
    }
    .dropdown>.dropdown-toggle:active {
        pointer-events: none;
    }
</style>    

<body>
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-black">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">BLOG</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-items">
                    <a class="nav-link cool-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cool-link" href="{{ route('about') }}">About</a>
                </li>

                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link cool-link" href="{{ route('home') }}">Dashboard</a>
                    </li>
                    
                    <li class="nav-item">
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">@csrf</form>
                        <a class="nav-link cool-link" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
                    </li>

                    @else
                    <li class="nav-item">
                        <a class="nav-link cool-link" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link cool-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    </div>
</body>
</html>