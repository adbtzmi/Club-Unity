<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.event.list', compact('events'));
    }

    public function add()
{
    return view('admin.event.add');
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'club' => 'required|string|max:255',
            'date' => 'required|date',
            'venue' => 'required|string|max:255',
            'participants' => 'required|string',
        ]);

        Event::create($validated);

        return redirect()->route('admin.event.list')->with('success', 'Event added successfully.');
    }

    public function edit(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'club' => 'required|string|max:255',
            'date' => 'required|date',
            'venue' => 'required|string|max:255',
            'participants' => 'required|string',
        ]);

        $event->update($validated);

        return redirect()->route('admin.event.list')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.event.list')->with('success', 'Event deleted successfully.');
    }
}
