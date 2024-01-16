<?php

namespace App\Http\Controllers;

use App\Models\EventItem;

class EventIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $events = EventItem::with('country', 'tags')->orderBy('created_at', 'desc')->paginate(12);
        return view('eventIndex', compact('events'));
    }
}