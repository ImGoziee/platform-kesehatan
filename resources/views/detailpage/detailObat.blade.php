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

<body class="font-sans antialiased bg-[#E00852] overflow-x-hidden">
    {{-- header --}}
    <header class="panjang-maksimal">
        <x-partials.navbar />
    </header>
    <main class="text-white mt-[200px]">
        <div class="flex flex-col items-center text-center">
            <h1 class="font-semibold text-5xl mb-10">Lorem Ipsum Nama Obat</h1>
            <p class="max-w-[65rem] font-medium text-2xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo nam natus labore. Adipisci dolorum consequatur perferendis alias dolore non sunt ipsum harum distinctio. Aliquam voluptatum numquam, assumenda adipisci maiores veritatis ipsam perferendis necessitatibus? Hic dolor culpa quia porro? Ipsam aliquam corrupti sequi ab labore ad ducimus fuga consectetur delectus. Doloribus?</p>
        </div>
        <div class="panjang-maksimal container-withShadow bg-white text-black !mt-24 p-20 rounded-[35px]">
            <h1 class="font-semibold text-3xl mb-9">Lorem Ipsum Nama Penyakit</h1>
            <p class="max-w-[65rem] font-medium text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo nam natus labore. Adipisci dolorum consequatur perferendis alias dolore non sunt ipsum harum distinctio. Aliquam voluptatum numquam, assumenda adipisci maiores veritatis ipsam perferendis necessitatibus? Hic dolor culpa quia porro? Ipsam aliquam corrupti sequi ab labore ad ducimus fuga consectetur delectus. Doloribus?</p>
        </div>
        <div class="panjang-maksimal !mt-20">
            <div class="text-3xl font-semibold text-center rounded-[25px] w-[300px] py-3 bg-white text-black">Resep Obat</div>
            <div class="panjang-maksimal container-withShadow bg-white text-black !mt-6 p-20 rounded-[35px]">
                <h1 class="font-semibold text-3xl mb-9">Lorem Ipsum Nama Penyakit</h1>
                <p class="max-w-[65rem] font-medium text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo nam natus labore. Adipisci dolorum consequatur perferendis alias dolore non sunt ipsum harum distinctio. Aliquam voluptatum numquam, assumenda adipisci maiores veritatis ipsam perferendis necessitatibus? Hic dolor culpa quia porro? Ipsam aliquam corrupti sequi ab labore ad ducimus fuga consectetur delectus. Doloribus?</p>
            </div>
        </div>
        <div class="panjang-maksimal !mt-20 !mb-[150px]">
            <div class="mb-16 text-3xl font-semibold text-center rounded-[25px] w-[300px] py-3 bg-white text-black">Profil Ahli</div>
            <div class="flex gap-10">
                <div class="w-48 h-48 bg-gray-300 rounded-full"></div>
                <div class="bg-white min-w-[500px] py-4 px-10 overflow-hidden rounded-[35px] text-black">
                    <h1 class="font-semibold text-3xl">Name</h1>
                    <p class="font-medium text-lg mt-1">Profil singkat</p>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-[#E00852]">
        <x-partials.footer />
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Draggable.min.js"></script>
@vite(['resources/js/carousell.js'])
</html>