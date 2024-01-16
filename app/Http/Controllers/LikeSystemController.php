<?php

namespace App\Http\Controllers;

use App\Models\EventItem;

class LikeSystemController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $event = EventItem::findOrFail($id);
        $like = $event->likes()->where('user_id', auth()->id())->first();
        if (!is_null($like)) {
            $like->delete();
            return null;
        } else {
            $like = $event->likes()->create([
                'user_id' => auth()->id()
            ]);
            return $like;
        }
    }
}
