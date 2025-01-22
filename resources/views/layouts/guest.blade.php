<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased overflow-hidden">
        <div class="h-screen bg-[#E00852] w-full flex items-center">
            <div class="w-full h-[764px] p-8 flex gap-[222px] sm:justify-center">
                <div class="relative w-[500px] max-lg:hidden">
                    <div class="absolute -bottom-8 flex items-end max-lg:hidden">
                        <img class="w-[500px]" src="{{ asset('assets/img/auth-page-img.png') }}" alt="">
                    </div>
                </div>
                <div class="relative w-full h-full sm:max-w-xl px-16 py-4 bg-white shadow-md sm:rounded-[35px] sm:rounded-tl-none flex flex-col justify-center items-center">
                    <div class="absolute top-0 -left-0 flex gap-1 rotate-90 origin-top-left">
                        <a href="{{ route('register') }}" class="{{ Route::currentRouteName() === 'login' ? 'bg-[#D2D2D2] text-white' : 'bg-white text-black' }} cursor-pointer w-[165px] h-[42px] shadow-sm text-xl rounded-t-[35px] rotate-180 font-bold flex items-center justify-center">Sign Up</a>
                        <a href="{{ route('login') }}" class="{{ Route::currentRouteName() === 'register' ? 'bg-[#D2D2D2] text-white' : 'bg-white text-black' }} cursor-pointer w-[165px] h-[42px] shadow-sm text-xl rounded-t-[35px] rotate-180 font-bold flex items-center justify-center">Sign In</a>
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
