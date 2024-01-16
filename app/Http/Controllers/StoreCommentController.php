<?php

namespace App\Http\Controllers;

use App\Models\EventItem;
use Illuminate\Http\Request;

class StoreCommentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $event = EventItem::findOrFail($id);
        $event->comments()->create([
            'content' => $request->content,
            'user_id' => auth()->id()
        ]);

        return back();
    }
}