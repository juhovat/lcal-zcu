<div class="relative bg-cover bg-center text-white" style="background-image: url('{{ asset('imgs/vetev.jpg') }}'); hero">
    <div class="bg-black bg-opacity-40">
        <div class="container mx-auto px-4 py-10 md:h-screen">
            <!-- Top section with badges and license -->
            <div class="flex justify-between items-center flex-wrap">
                <div class="flex items-center space-x-2 mb-4">
                    <span class="bg-gray-800 bg-opacity-70 py-1 px-3 rounded text-xs uppercase">Zve vás</span>
                    <span class="bg-blue-600 py-1 px-3 rounded text-xs uppercase">Tomáš Jedno</span>
                    <span class="bg-gray-800 bg-opacity-70 py-1 px-3 rounded text-xs uppercase">Pořadatel: </span>
                    <span class="bg-lime-400 bg-opacity-70 py-1 px-3 rounded text-xs uppercase">ZČU FPE </span>
                </div>
                <div class="text-xs py-1 px-3 rounded mb-4">
                    <span>{{$event->user_id}}</span>
                </div>
            </div>
            <!-- Main content of hero -->
            <div class="text-center sm:text-left">
                <div class="flex justify-center sm:justify-start flex-wrap">
                    <div class="mb-4">
                        <h1 class="text-2xl font-bold uppercase">{{ $event->title }}</h1>
                        <p class="text-2xl font-bold mt-2">{{ $event->start_date }}</p>
                        <p class="text-sm">za 3 dny (52 h)</p>
                    </div>
                    <div class="mb-4 sm:ml-4">
                        <p class="text-2xl font-bold ">3,2 km (od CENTRUM)</p>
                        {{-- make button actually switch to hero-render --}}
                        <button @click="$dispatch('toggle-hero')" class="text-sm bg-white rounded-full text-black p-2 px-3 mt-2">DETAILY</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>