<?php

namespace App\Livewire;

use App\Models\EventItem;
use Livewire\Component;

class Hero extends Component
{

    public $event;
    protected $listeners = ['eventSelected' => 'onEventSelected'];

    public function onEventSelected($eventData)
{
    $this->event = $eventData;
}
    
    public function mount()
    {
        $this->event = EventItem::first(); // Initialize with the first event
    }
    
    
    public function render()
    {
        return view('livewire.hero', [
            'event' => $this->event 
        ]);
    }
}

