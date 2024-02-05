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
                <div class="text-xs py-1 px-3 rounded mb-4 ">
                 <span>{{$event->user_id}}</span>
                </div>
            </div>
            <!-- Main content of hero -->
            <div class="text-center sm:text-left mt-20">
                <div class="flex flex-col md:flex-row justify-center md:justify-start">
                    <div class="flex-1 mb-4">
                        <h1 class="text-4xl font-bold uppercase">{{ $event['title'] }}</h1>
                        <p class="text-xl font-bold mt-2">{{ $event['start_date'] }}</p>
                        <p class="text-sm">za 3 dny (52 h)</p>
                    </div>
                    <div class="flex flex-col justify-end items-center md:items-start">
                        <p class="text-2xl font-bold mb-2 md:mb-0">3,2 km (od CENTRUM)</p>
                        
                        <button @click="$dispatch('toggle-hero')" class="text-sm bg-white rounded-full text-black py-2 px-3 mt-2">DETAILY</button>
                    </div>
                    <div>
                        <input type="text" id="input_notefield">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>