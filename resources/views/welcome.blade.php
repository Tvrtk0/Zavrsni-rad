@extends('layouts.dashboard')

@section('content')
<br>
<div class="container">
    <nav class="navbar navbar-light bg-dark border border-primary rounded">
        <a href="#" class="navbar-brand text-white">Laravel Blog</a>
        
        <form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </nav><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-dark border-primary">
                    <div class="card-body">
                        <div class="h5">{{ Auth::user()->email }}</div>
                        <div class="h7 text-muted">Name: {{ Auth::user()->name }}</div>
                        <div class="h7">
                            Welcome to the home page {{ Auth::user()->name }}! Here you can make your own posts or read others posts. 
                        </div>
                    </div>
                </div><br>

                <div class="card text-white bg-dark border-primary">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark border-primary">
                            <div class="h6 text-muted">Number of users</div>
                            <div class="h5">{{ Auth::user()->count() }}</div>
                        </li>
                        <li class="list-group-item text-white bg-dark border-primary">
                            <div class="h6 text-muted">Posts Today</div>
                            <div class="h5"> - </div>
                        </li>
                        <li class="list-group-item text-white bg-dark border-primary">
                            <div class="h6 text-muted">Posts All Time</div>
                            <div class="h5"> - </div>
                        </li>
                        <li class="list-group-item text-white bg-dark border-primary">
                            <div class="h6 text-muted">Comments Today</div>
                            <div class="h5"> - </div>
                        </li>
                        <li class="list-group-item text-white bg-dark border-primary">
                            <div class="h6 text-muted">Comments All Time</div>
                            <div class="h5"> - </div>
                        </li>
                        
                    </ul>
                </div><br>
            </div>
            

            <div class="col-md-9">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('createPost') }}" method="POST">
                @csrf
                <div class="card text-white bg-dark border-primary">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-white bg-dark" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                                    a publication</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white bg-dark" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="normal-input">Title</label>
                                    <input name="title" class="form-control text-white bg-dark border-primary" 
                                        placeholder="Title"></input>
                                </div>
                                
                                <div class="form-group">
                                    <label class="sr-only" for="message">Pssost</label>
                                    <textarea name="content" class="form-control text-white bg-dark border-primary" 
                                        rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label text-white bg-dark border-primary" for="customFile">
                                            Upload image
                                        </label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <br><br>
                
                <!--Post-->
                @foreach($posts as $post)
                <div class="card text-white bg-dark border-primary">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">{{ $post->user->name }}</div>
                                    <div class="h7 text-muted">{{ $post->user->email }}</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Hide</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <a class="card-link" href="{{ route('post',$post->id) }}">
                            <h5 class="card-title">{{ $post->title }}</h5>
                        </a>

                        <p class="card-text">
                            {{ $post->content }}
                        </p>

                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{ date_format($post->created_at, 'F d, Y') }}</div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-comment"></i>
                            {{ $post->comments->count() }} | Comments
                        </a>
                    </div>
                </div><br>
                @endforeach
                <!-- Post /////-->

            </div>

            <!-- KARTICE
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <br>
                <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
            </div>-->
        </div>
    </div>
</div>
@endsection
