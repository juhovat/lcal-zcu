<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Akce</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<x-app-layout>
<body class="antialiased">
    <x-navbar />
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="md:flex md:space-x-4">
            <!-- Hero section - takes full width on mobile, half on md screens -->
            <div class="md:w-1/2">
                <x-hero />
                {{-- <x-heroRender /> --}}
            </div>
            <!-- Right column for icon bar and event list - takes full width on mobile, half on md screens -->
            <div class="md:w-1/2">
                <x-iconBar />
                <x-eventList />
            </div>
        </div>
    </div>
</body>

</html>
</x-app-layout>
