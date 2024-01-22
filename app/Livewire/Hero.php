<?php

namespace App\Livewire;

use App\Models\EventItem;
use Livewire\Component;

class Hero extends Component
{
    public $event;
    public $eventId;
    public function mount($eventId = null)
    {
        /* $this->eventId = $eventId;
        if (!is_null($this->eventId)) {
            $this->event = EventItem::find($this->eventId);
        } */
        
        //just first
        $this->event = EventItem::first(); 

        //all
        /* $this->event = EventItem::all(); */
    }
    
    
    public function render()
    {
        return view('livewire.hero', [
            'event' => $this->event 
        ]);
    }
}

