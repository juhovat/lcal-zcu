<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<div class=" shadow">
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
            <button aria-label="Search" class=" p-2 rounded-full hover:text-white hover:bg-blue-800 focus:outline-none focus:ring">
                {{-- <x-mdi-magnify />  (composer require postare/blade-mdi) = to use icon --}}
                <i class="fas fa-search"></i>
            </button>

            <!-- Hamburger Menu Icon for Mobile -->
            <div class="md:hidden">
                <button aria-label="Open Menu" class=" focus:outline-none focus:ring">
                    {{-- <x-radix-hamburger-menu /> --}}
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            
            
            <!-- Menu Links for Desktop -->
            <!-- Hidden on small screens, visible on medium screens and up -->
            
            <div class="hidden md:flex items-center space-x-1">
                {{-- uvod = akce --}}
                <a href="{{ route('events.create') }}" class="py-2 px-4  hover:text-white hover:bg-blue-800 rounded " >
                    Nová akce</a>
            </div>
        </div>
        
</div>
