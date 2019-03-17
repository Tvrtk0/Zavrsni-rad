@extends('layouts.dashboard')

@section('title') Author Comments @endsection

@section('content')

    <div class="content">
        <div class="container">
            <br>
            <div class="card text-white bg-dark border-primary">
                <div class="card-header">
                    Comments Table
                </div>

                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Post</th>
                                <th>Comments</th>
                                <th>Created at</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach(Auth::user()->comments as $comment )
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('post', $comment->post_id) }}">
                                            {{ $comment->post->title }}
                                        </a>
                                    </td>
                                    <td>{{ $comment->content }}</td>
                                    <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection