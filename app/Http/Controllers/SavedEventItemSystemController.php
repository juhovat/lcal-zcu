<?php

namespace App\Http\Controllers;

use App\Models\EventItem;

class SavedEventItemSystemController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $event = EventItem::findOrFail($id);
        $savedEvent = $event->savedEvents()->where('user_id', auth()->id())->first();
        if (!is_null($savedEvent)) {
            $savedEvent->delete();
            return null;
        } else {
            $savedEvent = $event->savedEvents()->create([
                'user_id' => auth()->id()
            ]);
            return $savedEvent;
        }
    }
}
