<?php

namespace App\Http\Controllers;

use App\Models\EventItem;

class LikedEventItemController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $events = EventItem::with('likes')->whereHas('likes', function ($q) {
            $q->where('user_id', auth()->id());
        })->get();

        return view('events.likedEvents', compact('events'));
    }
}