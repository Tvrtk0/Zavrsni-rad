@extends('layouts.dashboard')

@section('title') Editing {{ $user->name }} @endsection

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
                <form action="{{ route('adminEditUserPost', $user->id) }}" method="POST">
                @csrf
                <div class="card text-white bg-dark border-primary">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-white bg-dark" id="posts-tab" data-toggle="tab" 
                                href="#posts" role="tab" aria-controls="posts" aria-selected="true">
                                    Editing user {{ $user->name }}
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
                                    <label class="sr-only" for="normal-input">Name</label>
                                    <input name="name" value="{{ $user->name }}" class="form-control text-white bg-dark border-primary">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="normal-input">email</label>
                                    <input name="email" type="email" value="{{ $user->email }}" class="form-control text-white bg-dark border-primary">
                                </div>
                                <div class="form-group form-check">
                                    <label for="normal-input">Premissions</label><br>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="author" 
                                            value=1 {{ $user->author == true ? 'checked' : '' }}>
                                        <label class="form-check-label" for="normal-input">Author</label>
                                        <br>
                                        <input type="checkbox" class="form-check-input" name="admin" 
                                            value=1 {{ $user->admin == true ? 'checked' : '' }}>
                                        <label class="form-check-label" for="normal-input">Admin</label>
                                    </div>
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
                                <button type="submit" class="btn btn-primary">Update user</button>
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