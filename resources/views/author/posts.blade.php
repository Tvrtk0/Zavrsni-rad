@extends('layouts.dashboard')

@section('title') Author Posts @endsection

@section('content')

    <div class="content">
        <div class="container">
            <br>
            <div class="card text-white bg-dark border-primary">
                <div class="card-header">
                    Author Posts
                </div>

                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Comments</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach(Auth::user()->posts as $post )
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('post', $post->id) }}">
                                            {{ $post->title }}
                                        </a>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                                    <td>{{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</td>
                                    <td>{{ $post->comments->count() }}</td>
                                    <td class="row">
                                        <a class="btn btn-warning col-md-6" href="{{ route('postEdit', $post->id ) }}">
                                            Edit
                                        </a>
                                        <form method="POST" id="deletePost-{{ $post->id }}" action="{{ route('deletePost', $post->id) }}">@csrf</form>
                                        <a class="btn btn-danger col-md-6"
                                            onclick="document.getElementById('deletePost-{{ $post->id }}').submit()">
                                            Delete
                                        </a>
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