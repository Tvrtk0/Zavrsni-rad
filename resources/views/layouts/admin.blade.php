<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>

<body style="padding-top:100px;">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel Blog</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Author</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('home') }}">Profile</a>
                    <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        *Sidebar menu*
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="nav-title">&nbsp;&nbsp;User</li>
                        <li>
                            <a class="dropdown-item" href="{{ route('home') }}">
                                <i class="fas fa-comments"></i> Comments
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>


                        <li class="nav-title">&nbsp;&nbsp;Author</li>
                        <li>
                            <a class="dropdown-item" href="{{ route('home') }}">
                            <i class="fas fa-user-tie"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('home') }}">
                            <i class="fas fa-paperclip"></i> Posts
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('home') }}">
                                <i class="fas fa-comments"></i> Comments
                            </a>
                        </li>


                        <li class="nav-title">&nbsp;&nbsp;Admin</li>
                        <li>
                            <a class="dropdown-item" href="{{ route('home') }}">
                            <i class="fas fa-user-tie"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('home') }}">
                            <i class="fas fa-paperclip"></i> Posts
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('home') }}">
                                <i class="fas fa-comments"></i> Comments
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('home') }}">
                            <i class="fas fa-users"></i></i> Users
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

</body>
</html>