@extends('layouts.dashboard')

@section('title') User Comments @endsection

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
                                <th>Content</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach(Auth::user()->comments as $comment )
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('post', $comment->id) }}">
                                            {{ $comment->post->title }}
                                        </a>
                                    </td>
                                    <td>{{ $comment->content }}</td>
                                    <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</td>
                                    <td>
                                        <form id="deleteComment-{ {$comment->id }}" action="{{ route('deleteComment', $comment->id) }}" method="POST">
                                            @csrf
                                        </form>
                                        <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteComment-{ {$comment->id }}').submit()">
                                            X
                                        </button>
                                    </td>
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