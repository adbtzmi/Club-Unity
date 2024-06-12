@extends('layouts.adminLayout')

@section('content')
<section id="edit" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div>
                                <div class="title-box rounded">
                                    <h5 class="title-left">Edit Event</h5>
                                    <br>
                                    <div>
                                        <form method="POST" action="{{ route('admin.event.update', $event->id) }}">
                                            @csrf
                                            @method('POST')
                                            <div class="mb-3">
                                                <label for="event_name" class="form-label">Event Name</label>
                                                <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $event->event_name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="club" class="form-label">Club</label>
                                                <input type="text" class="form-control" id="club" name="club" value="{{ $event->club }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="date" class="form-label">Date</label>
                                                <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="venue" class="form-label">Venue</label>
                                                <input type="text" class="form-control" id="venue" name="venue" value="{{ $event->venue }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="participants" class="form-label">Participants</label>
                                                <input type="text" class="form-control" id="participants" name="participants" value="{{ $event->participants }}" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
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

