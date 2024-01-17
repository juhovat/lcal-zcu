<!-- components/navbar.blade.php -->
<div class="bg-white shadow">
    <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            {{-- potom na /dashboard --}}
            <a href="/" class="text-xl font-semibold text-gray-700">
                <img src="{{ asset('imgs/zcuLogo.png') }}" alt="Logo" class="h-20">
            </a>
        </div>

        <!-- Middle section for search icon and nav links -->
        <div class="flex items-center space-x-4">

            <!-- Search Icon -->
            <!-- Visible on all screen sizes -->
            <button aria-label="Search" class="p-2 rounded-full hover:bg-gray-100 focus:outline-none focus:ring">
                {{-- <x-mdi-magnify />  (composer require postare/blade-mdi) = to use icon --}}
                lupa
            </button>

            <!-- Hamburger Menu Icon for Mobile -->
            <div class="md:hidden">
                <button aria-label="Open Menu" class="text-blue-800 focus:outline-none focus:ring">
                    {{-- <x-radix-hamburger-menu /> --}}
                    hamburger
                </button>
            </div>
            
            
            
            <!-- Menu Links for Desktop -->
            <!-- Hidden on small screens, visible on medium screens and up -->
            
            <div class="hidden md:flex items-center space-x-1">
                {{-- uvod = akce --}}
                <a href="/uvod" class="py-2 px-4 text-gray-700 hover:text-white hover:bg-blue-800">
                    AKCE</a>
                    {{-- rn / potom /dashboard --}}
                    <a href="/" class="py-2 px-4 text-gray-700 hover:text-white hover:bg-blue-800">DOMŮ</a>
                    </div>
                    </div>
                        <!-- Language Icons - These can be included inside the middle section if needed -->
    {{-- <button aria-label="Czech Language" class="p-2 rounded-full hover:bg-gray-100 focus:outline-none focus:ring">
        <!-- Czech Flag Icon -->
    </button>
    <button aria-label="English Language" class="p-2 rounded-full hover:bg-gray-100 focus:outline-none focus:ring">
        <!-- UK Flag Icon -->
    </button> --}}
</nav>
</div>
