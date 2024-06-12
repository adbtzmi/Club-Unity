@extends('layouts.app')

@section('content')
<style>
    html, body {
        height: 100%;
        margin: 0;
    }
    .full-background {
        background-image: url('https://news.iium.edu.my/wp-content/uploads/2019/11/96b17d2a3c3713703df33d8785f92d4f15669639031.jpg');
        background-size: cover;
        background-position: center;
        height: calc(100vh - 56px);
        margin: 0;
        padding: 0;
    }
</style>

<div class="full-background">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Your content goes here -->
        </div>
    </div>
</div>
@endsection
