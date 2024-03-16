<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
<div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center">
    @if (Route::has('login'))
        <livewire:welcome.navigation />
        @endif
      
<div class=" p-6 max-w-full lg:p-8 items-center flex justify-center space-4 flex-col">
   <x-application-logo class="w-24 h-24 fill-current text-primary" />
   <x-button primary xl href="{{ route('register') }}">Go to Start</x-button>
</div>
</div>
    </body>
</html>
