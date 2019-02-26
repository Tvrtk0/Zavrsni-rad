@extends('layouts.dashboard')

@section('title') User Dashboard @endsection

@section('content')
<br><br>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card p-4 text-white bg-dark border-primary">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">
                                {{ Auth::user()->comments->count() }}
                            </span>
                            <span class="font-weight-light">Comments</span>
                        </div>

                        <div class="h2 text-muted">
                            <i class="fas fa-comments"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 text-white bg-dark border-primary">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">
                                {{ Auth::user()->comments->unique('post_id')->count() }}
                            </span>
                            <span class="font-weight-light">Commented posts</span>
                        </div>

                        <div class="h2 text-muted">
                            <i class="fas fa-paperclip"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row ">
            <div class="col-md-12">
                <div class="card text-white bg-dark border-primary">
                    <div class="card-header">
                        Comments by days
                    </div>

                    <div class="card-body p-0 text-white bg-dark border-primary">
                        <div class="p-4">
                            <canvas id="line-chart" width="100%" height="120"></canvas>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection