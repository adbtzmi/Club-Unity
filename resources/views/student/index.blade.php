@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="height: 40vh;">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>You are a Student.</h2>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($clubs as $club)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $club->image }}" class="card-img-top" alt="{{ $club->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $club->name }}</h5>
                                <p class="card-text">{{ $club->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
