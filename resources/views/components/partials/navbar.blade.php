<nav class="!fixed !z-50 lg:!w-[80rem] 2xl:!w-[80rem] !top-7 container-withShadow">
    <div class="!flex !justify-between !items-center !py-4 !px-6">
        <!-- Logo -->
        <div class="!pr-12">
            <img width="50" src="{{ asset('assets/svg/logos.svg') }}" alt="Icon">
        </div>

        <!-- Menu -->
        <ul class="!flex !gap-10 !font-semibold">
            <li><a href="/" class="hover:!underline">Home</a></li>
            <li><a href="/artikel" class="hover:!underline">Artikel</a></li>
        </ul>

        <!-- Login Button -->
        @if (Auth::check() && Auth::user()->username)
            <div x-data="{ open: false }" @click="open = !open" @click.away="open = false" class="!cursor-pointer !relative !flex !w-28 !items-center !text-gray-800">
                <i class="fa-regular fa-user !text-xl !mr-4"></i>
                <span class="!text-md !font-medium !capitalize">{{ Auth::user()->username }}</span>
                <div class="!relative !w-8 !h-10">
                    <i class="fa-solid fa-sort-down !absolute !top-1/2 !right-0 -translate-y-[75%]"></i>
                </div>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button id="logout-btn" href="{{ route('logout') }}" x-show="open" class="!absolute !w-28 !right-0 !-bottom-12 !rounded-lg !bg-red-700 hover:!bg-red-800 !border !border-red-600 !py-2 !px-4 !text-white !shadow-md">
                        <i class="fa-solid fa-power-off !mr-1"></i>
                        Logout
                    </button>
                </form>
            </div>
        @else
            <a href="{{ route('login') }}"
                class="!duration-300 !bg-[#B12B32] hover:!bg-white hover:!text-[#B12B32] !text-white !font-semibold !py-2 !px-6 !rounded-3xl">
                Login
            </a>
        @endif
    </div>
</nav>
