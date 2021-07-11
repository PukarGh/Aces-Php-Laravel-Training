<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function respond(Request $request, $event)
    {
        $request->validate([
            'response' => 'required|in:0,1',
        ]);

        $entry = Participant::where('user_id', auth()->id())
            ->where('event_id', $event)
            ->first();

        if (!$entry) {
            Participant::create([
                'user_id' => auth()->id(),
                'event_id' => $event,
                'going' => $request->response,
            ]);

            return redirect()->route('event.index')->with(['message' => 'Responded to the event!']);
        } else {
            return redirect()->route('event.index')->with(['message' => 'You have already responded']);
        }
    }
}
