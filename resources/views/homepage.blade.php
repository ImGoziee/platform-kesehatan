<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style></style>
    @endif
</head>

<body class="font-sans antialiased bg-[#DDEDFD] overflow-x-hidden">
    {{-- header --}}
    <header class="panjang-maksimal">
        <x-partials.navbar />
    </header>
    {{-- hero section --}}
    <section class="relative -z-30">
        <x-partials.hero />
    </section>
    {{-- services & medicines section --}}
    <section class="bg-[#E00852] rounded-t-[35px]">
        <x-partials.services-medicines-section :medicines="$medicines"/>
        <!-- @include('components.partials.services-medicines-section', ['medicines' => $medicines]) -->
        <x-partials.article-section />
    </section>
    {{-- footer --}}
    <footer class="bg-[#E00852]">
        <x-partials.footer />
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Draggable.min.js"></script>
@vite(['resources/js/carousell.js'])
</html>
