@extends('layouts.adminLayout')

@section('content')
<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div>
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
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($clubs as $club)
                                                <tr>
                                                    <td>{{ $club->name }}</td>
                                                    <td>{{ $club->club_id }}</td>
                                                    <td>{{ $club->description }}</td>
                                                    <td><img src="{{ $club->image }}" alt="{{ $club->name }}" width="50"></td>
                                                    <td>{{ $club->created_at }}</td>
                                                    <td>
                                                        <form action="{{ route('admin.club.delete', $club->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" style="margin-right: 5px;">Delete</button>
                                                        </form>
                                                        <a href="{{ route('admin.club.edit', $club->id) }}" class="btn btn-primary" style="display: inline;">Edit</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <a href="{{ route('admin.club.add') }}" class="btn btn-success text" role="button">Add Club</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
