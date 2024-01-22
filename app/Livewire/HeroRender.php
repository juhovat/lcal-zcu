<?php

namespace App\Livewire;

use App\Models\EventItem;
use Livewire\Component;

class HeroRender extends Component
{
    public $event;
    public function mount()
    {
        
        $this->event = EventItem::first(); 

        
    }
    
    public function render()
    {
        return view('livewire.hero-render', [
            'event' => $this->event 
        ]);
    }
}
