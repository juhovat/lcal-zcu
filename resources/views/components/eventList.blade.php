<div class="overflow-x-auto bg-white  shadow overflow-y-auto relative">
    <div class="text-center p-4">
        <button class="bg-blue-800 rounded-md text-white py-2 px-4 mx-2">Všechny akce</button>
        <button class="bg-black rounded-md text-white py-2 px-4 mx-2">Vaše akce</button>
        <button class="bg-red-500 text-white rounded-full p-2 mx-2">
            <!-- composer require blade-ui-kit/blade-heroicons -->
            {{-- <x-heroicon-s-heart /> --}}
            ♥
        </button>
    </div>
    @for ($i = 0; $i < 5; $i++)
    <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
        <tbody class="text-center">
            <tr >
                <td class="p-2 border-b border-gray-200">Datum</td>
                <td class="p-2 border-b border-gray-200">Čas</td>
                <td class="p-2 border-b border-gray-200">Název</td>
                <td class="p-2 border-b border-gray-200">Lorem</td>
                <td class="p-2 border-b border-gray-200">
                    <button>
                        <!-- composer require codeat3/blade-eos-icons -->
                        {{-- <x-eos-message /> --}}
                        msg
                    </button>
                </td>
                <td class="p-2 border-b border-gray-200 bg-blue-800 text-white" >
                    <button>…</button>
                </td>
                
            </tr>
            <tr>
                <td class="p-2 border-b border-gray-200 text-gray-400">Lorem</td>
                <td class="p-2 border-b border-gray-200 text-gray-400">Lorem</td>
                <td class="p-2 border-b border-gray-200 text-gray-400">Místo</td>
                <td class="p-2 border-b border-gray-200 text-gray-400">
                    <button class="uppercase bg-black text-white rounded-xl p-2">Sdílet</button>
                </td>
                <td class="p-2 border-b border-gray-200 text-gray-400">
                    <button>
                        {{-- <x-heroicon-o-heart /> --}}
                        ♥
                    </button>
                </td>
                <td class="p-2 border-b border-gray-200 bg-blue-800 text-white">
                    <button>
                        {{-- composer require codeat3/blade-eos-icons --}}
                        {{-- <x-eos-content-copy /> --}}
                        ◘
                    </button>
                </td>
                
            </tr>
        </tbody>
    </table>
    @endfor
</div>