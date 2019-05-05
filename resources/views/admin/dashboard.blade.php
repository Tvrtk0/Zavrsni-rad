@extends('layouts.dashboard')

@section('title') Admin Dashboard @endsection

@section('content')
<br><br>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4 text-white bg-dark border-primary">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">
                                {{ \App\Post::all()->count() }}
                            </span>
                            <span class="font-weight-light">Posts</span>
                        </div>
                        <div class="h2 text-muted">
                            <i class="fas fa-comments"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 text-white bg-dark border-primary">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">
                                {{ \App\Comment::all()->count() }}
                            </span>
                            <span class="font-weight-light">Comments</span>
                        </div>
                        <div class="h2 text-muted">
                            <i class="fas fa-paperclip"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 text-white bg-dark border-primary">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">
                                {{ \App\User::all()->count() }}
                            </span>
                            <span class="font-weight-light">Users</span>
                        </div>
                        <div class="h2 text-muted">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row ">
            <div class="col-md-12">
                <div class="card text-white bg-dark border-primary">
                    <div class="card-header">
                        Posts by days
                    </div>

                    <div class="card-body p-10">
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{!! $chart->script() !!}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

@endsection