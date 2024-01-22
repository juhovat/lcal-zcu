<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<div class="overflow-x-auto border-solid border-black  shadow overflow-y-auto relative">
    <div class="text-center p-4">
        <button wire:click="showAllEvents" class="bg-blue-800 rounded-md text-white py-2 px-4 mx-2 hover:bg-white hover:text-black ">Všechny akce</button>
        {{-- temporary fixed user id --}}
        <button wire:click="showMyEvents(1)" class="bg-black rounded-md text-white py-2 px-4 mx-2   hover:bg-white hover:text-black">Vaše akce</button>
        <button class="bg-red-500 text-white rounded-full p-2 mx-2">
            <a href="/liked-events"><i class="fas fa-heart"></i></a>
            
        </button>
    </div>
    {{-- @for ($i = 0; $i < 5; $i++) --}}
    <table class="border-collapse table-auto w-full whitespace-no-wrap table-striped relative ">
        <tbody class="text-center">
            @foreach ($events as $event)
            <tr  wire:click="selectEvent({{ $event->id }})">
                <td class="p-2 border-b border-gray-200">Datum</td>
                <td class="p-2 border-b border-gray-200">Čas</td>
                <td class="p-2 border-b border-gray-200">Název</td>
                <td class="p-2 border-b border-gray-200">Lorem</td>
                <td class="p-2 border-b border-gray-200">
                    <button>
                        <!-- composer require codeat3/blade-eos-icons -->
                        {{-- <x-eos-message /> --}}
                        <i class="fas fa-comment-dots"></i>
                    </button>
                </td>
                <td class="p-2 border-b border-gray-200 bg-blue-800 text-white" >
                    <button><i class="fas fa-ellipsis-h"></i></button>
                </td>
                
            </tr>
            <tr>
                <td class="p-2 border-b border-gray-200 text-gray-400"> {{$event->start_date}} </td>
                <td class="p-2 border-b border-gray-200 text-gray-400"> {{$event->start_time}} </td>
                <td class="p-2 border-b border-gray-200 text-gray-400"> {{$event->address}} </td>
                <td class="p-2 border-b border-gray-200 text-gray-400">
                    <button wire:click="selectEvent({{ $event->id }})" class="bg-blue-800 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
                        ZOBRAZIT
                    </button>
                </td>
                <td class="p-2 border-b border-gray-200 text-gray-400">
                    

                    <form method="POST" action="{{ url('/events-like/' . $event->id) }}">
                        @csrf
                        <button type="submit">
                            {{-- <x-heroicon-o-heart /> --}}
                            <i class="fas fa-heart"></i>
                        </button>
                    </form>
                </td>
                <td class="p-2 border-b border-gray-200 bg-blue-800 text-white">
                    <button>
                        {{-- composer require codeat3/blade-eos-icons --}}
                        {{-- <x-eos-content-copy /> --}}
                        <i class="fas fa-copy"></i>
                    </button>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @endfor --}}
</div>
