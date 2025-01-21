<aside x-data="{ open: true }" :class="open ? 'w-64' : 'w-20'"
    class="relative min-h-screen bg-white transition-all duration-300 ease-in-out rounded-r-xl">
    @php
        $menus = [
            [
                'name' => 'Dashboard',
                'url' => 'dashboard',
                'route' => 'admin.dashboard',
                'icon' =>
                    'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
            ],
            [
                'name' => 'User',
                'url' => 'users',
                'route' => '/admin/users',
                'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
            ],
            [
                'name' => 'Obat',
                'url' => 'obat',
                'route' => '/admin/obat',
                'icon' =>
                    'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
            ],
            [
                'name' => 'Artikel',
                'url' => 'artikel',
                'route' => '/admin/artikel',
                'icon' =>
                    'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
            ],
            [
                'name' => 'Penyakit',
                'url' => 'penyakit',
                'route' => '/admin/penyakit',
                'icon' =>
                    'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
            ],
            [
                'name' => 'Ahli',
                'url' => 'ahli',
                'route' => '/admin/ahli',
                'icon' =>
                    'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
            ],
        ];
    @endphp

    <!-- Toggle Button -->
    <button @click="open = !open"
        class="absolute -right-3 top-5 z-50 bg-[#E00852] text-white rounded-full p-1 w-6 h-6 flex items-center justify-center">
        <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 transition-transform duration-300" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <!-- Logo -->
    <div class="flex items-center justify-center h-16 shadow-sm">
        <h1 class="text-[#E00852] flex font-bold items-center gap-2">
            <div class="">
                <img width="40" src="{{ asset('assets/svg/logos.svg') }}" alt="Icon">
            </div>
            <span x-show="open" class="text-2xl">Halosus</span>
        </h1>
    </div>

    <!-- Menu Items -->
    <nav class="mt-4 px-3">
        <ul class="space-y-2">
            @foreach ($menus as $menu)
                <li>
                    <a href="{{ $menu['url'] }}"
                        class="flex items-center px-4 py-3 text-gray-400 rounded-lg hover:bg-[#E00852] hover:text-white duration-200 {{ request()->routeIs($menu['route']) ? 'bg-[#E00852] text-white' : '' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="{{ $menu['icon'] }}" />
                        </svg>
                        <span x-show="open" class="ml-3">{{ $menu['name'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>

    <!-- Footer -->
    <div class="absolute bottom-0 left-0 w-full">
        <div class="p-4">
            <div class="flex items-center space-x-3">
                <!-- Profile Circle with Initials -->
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center">
                        <span class="text-white text-sm font-medium">
                            {{ substr(auth()->user()->username, 0, 2) }}
                        </span>
                    </div>
                </div>
                
                <!-- User Info - Only shown when sidebar is expanded -->
                <div x-show="open" class="flex-1 min-w-0">
                    <div class="font-semibold truncate capitalize">
                        {{ auth()->user()->username }}
                    </div>
                    <div class="text-xs text-gray-400 truncate">
                        {{ auth()->user()->email }}
                    </div>
                </div>
    
                <!-- Logout Button - Hidden by default, shown on hover/click -->
                <div x-show="open" x-data="{ showLogout: false }" class="flex-shrink-0">
                    <button @click="showLogout = !showLogout" 
                            class="text-gray-600 hover:text-gray-400 px-3 transition-colors duration-200"
                    >
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                    
                    <!-- Logout Dropdown -->
                    <div x-show="showLogout" 
                         @click.away="showLogout = false"
                         class="absolute bottom-full mb-2 right-4  rounded-lg overflow-hidden shadow-lg bg-red-500">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" 
                                    class=" w-full px-4 py-3 text-sm text-gray-100 duration-200 font-medium hover:bg-red-700 text-left">
                                    <i class="fa-solid fa-power-off mr-1"></i>
                                    Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
