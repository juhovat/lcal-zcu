<?php

namespace App\Http\Controllers;

use App\Models\EventItem;

class AttendingEventItemController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $events = EventItem::with('attendings')->whereHas('attendings', function ($q) {
            $q->where('user_id', auth()->id());
        })->get();

        return view('events.attendingEvents', compact('events'));
    }
}