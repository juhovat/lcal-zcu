{{-- <img src="{{ Storage::url($event->image) }}" alt="Obrázek akce"> --}}
<img src="{{ route('events.displayImage', $event) }}" alt="Obrázek akce">
