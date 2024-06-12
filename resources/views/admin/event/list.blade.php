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
                                    <h5 class="title-left">List of Events</h5>
                                    <br>
                                    <div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Event Name</th>
                                                    <th scope="col">Club</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Venue</th>
                                                    <th scope="col">Participants</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($events as $event)
                                                <tr>
                                                    <td>{{ $event->event_name }}</td>
                                                    <td>{{ $event->club }}</td>
                                                    <td>{{ $event->date }}</td>
                                                    <td>{{ $event->venue }}</td>
                                                    <td>{{ $event->participants }}</td>
                                                    <td>
                                                        <form action="{{ route('admin.event.delete', $event->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" style="margin-right: 5px;">Delete</button>
                                                        </form>
                                                        <a href="{{ route('admin.event.edit', $event->id) }}" class="btn btn-primary" style="display: inline;">Edit</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <a href="{{ route('admin.event.add') }}" class="btn btn-success text" role="button">Add Event</a>
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
