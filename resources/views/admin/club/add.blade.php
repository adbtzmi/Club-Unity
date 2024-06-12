@extends('layouts.adminLayout')

@section('content')
<section id="add" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div>
                                <div class="title-box rounded">
                                    <h5 class="title-left">Add Club</h5>
                                    <br>
                                    <div>
                                        <form method="POST" action="{{ route('admin.club.add') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="club_id" class="form-label">Club ID</label>
                                                <input type="text" class="form-control" id="club_id" name="club_id" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control" id="description" name="description" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="text" class="form-control" id="image" name="image">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </form>
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
