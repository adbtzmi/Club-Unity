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
                                    <h5 class="title-left">Add Event</h5>
                                    <br>
                                    <div>
                                        <form method="POST" action="{{ route('admin.event.add') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="event_name" class="form-label">Event Name</label>
                                                <input type="text" class="form-control" id="event_name" name="event_name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="club" class="form-label">Club</label>
                                                <input type="text" class="form-control" id="club" name="club" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="date" class="form-label">Date</label>
                                                <input type="date" class="form-control" id="date" name="date" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="venue" class="form-label">Venue</label>
                                                <input type="text" class="form-control" id="venue" name="venue" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="participants" class="form-label">Participants</label>
                                                <input type="text" class="form-control" id="participants" name="participants" required>
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
