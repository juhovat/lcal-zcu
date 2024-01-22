<?php

namespace App\Livewire;

use App\Models\EventItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class EventList extends Component
{
    public $events;
    public $showOnlyMyEvents = false;

    public function mount()
    {
        $this->events = EventItem::all();
    }

    public function showMyEvents($userId)
{
    $this->showOnlyMyEvents = true;
    // $this->events = EventItem::where('user_id', $userId)->get();
    $this->events = EventItem::where('user_id', 1)->get();
}

    public function showAllEvents()
    {
        $this->showOnlyMyEvents = false;
        $this->events = EventItem::all();
    }

    public function render()
    {
        return view('livewire.event-list');
    }
}
