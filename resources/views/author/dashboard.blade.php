@extends('layouts.dashboard')

@section('title') Author Dashboard @endsection

@section('content')
<br><br>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card p-4 text-white bg-dark border-primary">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">
                                {{ Auth::user()->postsToday->count() }}
                            </span>
                            <span class="font-weight-light">Posts today</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-4 text-white bg-dark border-primary">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">
                                {{ Auth::user()->posts->count() }}
                            </span>
                            <span class="font-weight-light">Posts all time</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-4 text-white bg-dark border-primary">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">
                                {{ $todayComments }}
                            </span>
                            <span class="font-weight-light">Comments today</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-4 text-white bg-dark border-primary">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">
                                {{ $allComments->count() }}
                            </span>
                            <span class="font-weight-light">Comments all time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>



        <div class="row ">
            <div class="col-md-12">
                <div class="card text-white bg-dark border-primary">
                    <div class="card-header">
                        Posts by day
                    </div>

                    <div class="card-body p-0">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection