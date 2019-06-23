@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-info text-white text-center">
                    <h6>PUBLISHED POST</h6>
                </div>
                <div class="card-body text-center">
                    <h2 class="text-center">{{ $posts_count }}</h2>
                </div>
            </div>
         </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-warning text-white text-center">
                    <h6>TRASHED POST</h6>
                </div>
                <div class="card-body text-center">
                    <h2 class="text-center">{{ $trashed_count }}</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-secondary text-white text-center">
                    <h6>USERS</h6>
                </div>
                <div class="card-body text-center">
                    <h2 class="text-center">{{ $users_count }}</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                     <h6>CATEGORIES</h6>
                </div>
                <div class="card-body text-center">
                    <h2 class="text-center">{{ $categories_count }}</h2>
                </div>
            </div>
        </div>
    </div>


@endsection
