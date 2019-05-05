<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/about.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <div class="container1">
        <nav class="navbar1">
            <ul>
                <li><a href="{{ url('/') }}">Blog</a></li>
                <li><a href="#home">Welcome</a></li>
                <li><a href="#about">Laravel</a></li>
                <li><a href="#about2">Frontend</a></li>
                <li><a href="#about3">Baza podataka</a></li>
            </ul>
        </nav>


        <section id="home">
            <div class="container"><br><br><br>
                <div class="container-fluid text-white">
                    <div class="row">
                        <div class="login d-flex align-items-center py-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 mx-auto">
                                        <h1 class="text-center">Welcome</h1>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                        Corporis a rem minima accusantium iure, ipsum tempora esse, 
                                        ex quasi suscipit quos optio dolore impedit 
                                        cupiditate aliquam ipsa, assumenda dicta sit?</p>
                                    </div>
                                </div>
                            </div>
                        </div>       
                    </div>
        </section>

        <section id="about">
            <h1>Laravel</h1>
            <div class="container-fluid">
                <div class="row justify-content-md-center">
                    <div class="col-8 mt-3">
                        <div class="card">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img style="max-width:600px;" src="{{URL::asset('/images/bootstrap-4.png')}}">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Laravel</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque eaque autem neque accusamus facilis officia.</p>                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about2">
            <div class="container"><br><br>
            <h1>Frontend</h1><br>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('/images/html5-css3.png')}}" alt=""></a>
                        <div class="card-body">
                        <h4 class="card-title">
                            <a>Html & Css</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('/images/bootstrap-4.png')}}" alt=""></a>
                        <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Bootstrap</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('/images/javascript.png')}}" alt=""></a>
                        <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Javascript</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                        </div>
                    </div>
                    </div>
</div>
        </section>

        <section id="about3">
            <h1>Baza Podataka</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, laborum officia? 
                Architecto pariatur in aspernatur veritatis!</p>
        </section>

    </div>    


</body>
</html>
