<nav class="fixed z-50 lg:w-[80rem] 2xl:w-[98rem] top-7 container-withShadow">
    <div class="flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <div class="pr-12">
            <img width="50" src="{{ asset('assets/svg/logos.svg') }}" alt="Icon">
        </div>

        <!-- Menu -->
        <ul class="flex gap-10 font-semibold">
            <li><a href="/" class="hover:underline">Home</a></li>
            <li><a href="/artikel" class="hover:underline">Artikel</a></li>
        </ul>

        <!-- Login Button -->
        <a href="{{ route('login') }}" class="duration-300 bg-[#B12B32] hover:bg-white hover:text-[#B12B32] text-white font-semibold py-2 px-6 rounded-3xl">
            Login
        </a>
    </div>
</nav>
