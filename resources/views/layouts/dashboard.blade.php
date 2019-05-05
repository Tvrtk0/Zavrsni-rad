<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Laravel Blog Dashboard')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>

<style>
    body { 
        padding-top: 60px; 
       /* background-image: url("{{ URL::to('/images/slika.jpeg') }}"); */
        height:auto;
        padding-bottom:80px;
        background-color: #03021F;
       /* background-repeat: no-repeat;
        background-size: cover;
        background-attachment:fixed;
       /* background-image: linear-gradient(#325955,#0F1D1B);!important
      /*  background-image: linear-gradient(#667eea, #764ba2 );
        background-image: linear-gradient( #485563, #29323c);*/
       
    }
    .bg-black {
        background-color: #262626 ;
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

    .navbar-brand>img {
        max-height: 33px;
        height: 100%;
        width: auto;
        margin: 0;
    }
</style>


<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fa fa-arrow-up"></i>
</button>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-black" >
        <div class="container">
            
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo" src="{{URL::asset('/images/logo2.png')}}"> Blog
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link cool-link" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cool-link" href="{{ route('about') }}">About</a>
                    </li>

                    <!-- Author -->
                    @if(Auth::user()->author == true)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Author
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-title">&nbsp;&nbsp;Author</li>
                            <li>
                                <a class="dropdown-item cool-link" href="{{ route('authorDashboard') }}">
                                    <i class="fas fa-user-tie"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item cool-link" href="{{ route('authorPosts') }}">
                                    <i class="fas fa-paperclip"></i> Posts
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item cool-link" href="{{ route('authorComments') }}">
                                    <i class="fas fa-comments"></i> Comments
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @if(Auth::user()->admin == true)
                    <!-- Admin -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-title">&nbsp;&nbsp;Admin</li>
                            <li>
                                <a class="dropdown-item cool-link" href="{{ route('adminDashboard') }}">
                                    <i class="fas fa-user-tie"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item cool-link" href="{{ route('adminPosts') }}">
                                    <i class="fas fa-paperclip"></i> Posts
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item cool-link" href="{{ route('adminComments') }}">
                                    <i class="fas fa-comments"></i> Comments
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item cool-link" href="{{ route('adminUsers') }}">
                                    <i class="fas fa-users"></i></i> Users
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    <!-- User -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-title">&nbsp;&nbsp;User</li>
                            <li>
                                <a class="dropdown-item cool-link" href="{{ route('userDashboard') }}">
                                    <i class="fas fa-user-tie"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item cool-link" href="{{ route('userComments') }}">
                                    <i class="fas fa-comments"></i> Comments
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item cool-link" href="{{ route('userProfile') }}">
                                    <i class="fas fa-cog"></i> Account Settings
                                </a>
                            </li>
                            <li>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">@csrf</form>
                                <a class="dropdown-item cool-link" href="#" onclick="document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


  @yield('content')

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>