<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('O projektu (Full Credits)') }}
            </h2>
            <div> 
                <a href="https://github.com/CendaCZ/lcal-zcu" class="dark:text-white hover:text-slate-200">Github</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Závislosti
                            </th>
                        </tr>
                    </thead>
                    <tbody class="credits-content">
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><td style="padding:12px">
                        "@tailwindcss/forms": "^0.5.2",<br>
        "@tailwindcss/typography": "^0.5.0",<br>
        "autoprefixer": "^10.4.7",<br>
        "axios": "^1.6.1",<br>
        "laravel-vite-plugin": "^0.8.0",<br>
        "postcss": "^8.4.14",<br>
        "tailwindcss": "^3.1.0",<br>
        "vite": "^4.0.0"
                        </td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
