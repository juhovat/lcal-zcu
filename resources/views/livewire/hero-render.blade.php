
<div class="relative text-white bg-cover bg-center" style="background-image: url('{{ asset('imgs/vetev.jpg') }}'); hero-render">
    <div class="bg-black bg-opacity-60 p-6">
        <div class="flex justify-between items-center mb-4 md:h-screen">
            <div class="flex items-center">
                <span class="text-xl text-black bg-white px-3 py-1 mr-2 rounded">{{$event->start_date}}</span>
                <h2 class="text-3xl text-center font-bold">{{$event->title}}</h2>
            </div>
            
            <button @click="$dispatch('toggle-hero')" class="bg-white text-black px-3 py-1 rounded-full">ZPĚT</button>
        </div>
        <div class="flex mb-4 justify-center">
            <button class="bg-white text-black rounded px-3 py-1 mr-2">GALERIE</button>
            <button class="bg-white text-black rounded px-3 py-1 mr-2">WEB</button>
            <button class="bg-white text-black rounded px-3 py-1">FB</button>
        </div>
        <p class="mb-4">
            {{$event->description}}
        </p>
    </div>
</div>

