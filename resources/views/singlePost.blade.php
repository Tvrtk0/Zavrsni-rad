@extends('layouts.master')

@section('content')
<div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                    {{ $post->title }}
            </div>

                <div class="links">
                    <h3>{{ $post->user->name }}</h3>
                    <h6 class="text-muted">{{ date_format($post->created_at, 'F d, Y') }}</h6><br><hr><br>
                    <h3>{!! nl2br($post->content) !!}</h3>
                </div>


        <div>
            
            <br><br><br>
            <hr>
            <h2>Comments</h2>
            <br>
            @foreach($post->comments as $comment)
            <p>{{ $comment->content }}</p>
            <p><small>by {{ $comment->user->name }}, on {{ date_format($comment->created_at, 'F d, Y') }}</small></p>
            @endforeach
        </div>
        </div>
 </div>


@endsection