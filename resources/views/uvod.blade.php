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
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2" style="height: 95vh;"> 
                <x-hero />
            </div>
            <div class="w-full md:w-1/2">
                <x-iconBar />
                <x-eventList />
            </div>
        </div>
    </body>
</html>
</x-app-layout>
