<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        return view('admin.club.list', compact('clubs'));
    }

    public function add()
{
    return view('admin.club.add');
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'club_id' => 'required|string|max:255|unique:clubs',
            'description' => 'required|string',
            'image' => 'nullable|string',
        ]);

        Club::create($validated);

        return redirect()->route('admin.club.list')->with('success', 'Club added successfully.');
    }

    public function edit(Club $club)
    {
        return view('admin.club.edit', compact('club'));
    }

    public function update(Request $request, Club $club)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'club_id' => 'required|string|max:255|unique:clubs,club_id,' . $club->id,
            'description' => 'required|string',
            'image' => 'nullable|string',
        ]);

        $club->update($validated);

        return redirect()->route('admin.club.list')->with('success', 'Club updated successfully.');
    }

    public function destroy(Club $club)
    {
        $club->delete();
        return redirect()->route('admin.club.list')->with('success', 'Club deleted successfully.');
    }
}
