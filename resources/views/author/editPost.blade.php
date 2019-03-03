@extends('layouts.dashboard')

@section('title') Editing {{ $post->title }} @endsection

@section('content')
<br><br><br><br>
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
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
                <form action="{{ route('postEditPost', $post->id) }}" method="POST">
                @csrf
                <div class="card text-white bg-dark border-primary">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-white bg-dark" id="posts-tab" data-toggle="tab" 
                                href="#posts" role="tab" aria-controls="posts" aria-selected="true">
                                    Editing post {{ $post->title }}
                                </a>
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
                                    <input name="title" value="{{ $post->title }}" class="form-control text-white bg-dark border-primary" 
                                        placeholder="Title">
                                </div>
                                
                                <div class="form-group">
                                    <label class="sr-only" for="message">Pssost</label>
                                    <textarea name="content" class="form-control text-white bg-dark border-primary" 
                                        rows="9" placeholder="What are you thinking?">{{ $post->content }}</textarea>
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
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            <br><br>
            </div>
        </div>
    </div>
</div>
@endsection