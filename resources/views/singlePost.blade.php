@extends('layouts.master')

@section('content')
<br><br>
<div class="container">
    <div class="content">    
        <div class="card text-white bg-dark border-primary"> 
            <div class="title m-b-md card-header">
                <h1>{{ $post->title }}</h1>
            
                <h5>by {{ $post->user->name }}</h3>
                <h6 class="text-muted">{{ date_format($post->created_at, 'F d, Y') }}</h6><hr>
                <h5>{!! nl2br($post->content) !!}</h5>
            </div>
            <div class="card-footer">
                <h6 class="text-muted">
                    <i class="fa fa-comment"></i>
                    Comments | {{ $post->comments->count() }} 
                </h6>
            </div>
        </div>
        <div>

    <br><br>
    <div class="bg-dark rounded">
        <nav class="navbar navbar-light bg-dark border border-primary rounded" style="margin-bottom:10px;">
            <a class="navbar-brand text-white">Comments</a>
        </nav>

        <br>
        @if(Auth::check())
            <form action="{{ route('newComment') }}" method="POST">
                @csrf
                <div class="form-group col-md-auto">
                    <textarea class="form-control text-white bg-dark border-dark" placeholder="Comment..." name="comment"
                        id="" cols="30" rows="4"></textarea>
                </div>
                <div class="form-group float-left position-absolute" style="margin-left:15px;">
                    <button class="btn btn-primary" type="submit">Make Comment</button>
                    <input type="hidden" name="post" value="{{ $post->id }}">
                </div><br><br>
            </form>
        @endif
        <br>

            @foreach($comments as $comment)
            <div class="card text-white bg-dark border-primary" style="margin-bottom:10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0" style="float:left;">{{ $comment->user->name }}</div><br>
                                    <div class="h7 text-muted">
                                        <i class="fa fa-clock-o"></i>
                                        on {{ date_format($comment->created_at, 'F d, Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="text-align:left">
                            {{ $comment->content }}
                        </p>
                    </div>
                </div>
            @endforeach
            {{ $comments->links() }}
        </div>
    </div>
    </div>
</div>

@endsection