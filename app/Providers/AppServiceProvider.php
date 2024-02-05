<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Component;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Component::macro('emitToHero', function ($eventId) {
            $event = \App\Models\EventItem::find($eventId);
            if ($event) {
                /** @var Component $this */
                $this->emit('eventSelected', $event->toArray());
            }
        });
    }
}
