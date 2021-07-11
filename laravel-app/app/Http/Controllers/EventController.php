<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('user')
            ->withCount('goingParticipants', 'notGoingParticipants')
            ->get();
        return view('event.index', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10|max:150',
            'description' => 'required',
            'date' => 'required|date'
        ]);

        // user_id -> Logged in user id
        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('event.index')->with(['message' => 'Event Created']);
    }

    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        if ($event->user_id == auth()->id()){
            $event->update([
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
            ]);

            return redirect()->route('event.index')->with(['message' => 'Event Updated']);
        } else {
            abort(403);
        }
    }

    public function delete(Event $event)
    {
        if ($event->user_id == auth()->id()) {
            $event->delete();
            return redirect()->route('event.index')->with(['message' => 'Event Deleted']);
        } else {
            abort(403);
        }
    }

    // Migration
    // Participants -> model
// Controller
}
