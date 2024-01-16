<?php

namespace App\Http\Controllers;

use App\Models\EventItem;

class EventItemShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $event = EventItem::findOrFail($id);
        $like = $event->likes()->where('user_id', auth()->id())->first();
        $savedEvent = $event->savedEvents()->where('user_id', auth()->id())->first();
        $attending = $event->attendings()->where('user_id', auth()->id())->first();

        return view('eventsShow', compact('event', 'like', 'savedEvent', 'attending'));
    }
}