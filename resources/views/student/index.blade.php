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
            <div class="title-box rounded" style="margin-top: 20px;">
                <h5 class="title-left">List of Clubs</h5>
                <br>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Club Name</th>
                                <th scope="col">Club ID</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date Created</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
