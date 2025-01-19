    @php
        $menus = [
            ['name' => 'Dashboard', 'url' => 'dashboard'],
            ['name' => 'User', 'url' => 'users'],
            ['name' => 'Obat', 'url' => 'obat'],
            ['name' => 'Artikel', 'url' => 'artikel'],
            ['name' => 'Penyakit', 'url' => 'penyakit'],
            ['name' => 'Ahli', 'url' => 'ahli'],
        ];
    @endphp
    <nav class="relative h-full">
        <div class="font-bold text-4xl text-center border-b-2 border-dashed border-black p-4 bg-red-600 text-yellow-500">
            Halosus</div>
        <div class="p-4">
            <ul class="flex flex-col gap-4 list-decimal">
                @foreach ($menus as $menu)
                    <li>
                        <a href="{{ $menu['url'] }}"
                            class="inline-flex w-full p-2 border-2 hover:border-black hover:border-dotted">
                            {{ $menu['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="absolute bottom-0 left-0 w-full p-4 flex justify-center">
            <button class="relative bg-red-700 rounded-r-full p-3 w-full text-white">
                <div class="absolute w-1 h-full bg-white right-10 top-0"></div>
                <div class="absolute w-1 h-full bg-white right-0 top-0 rotate-90"></div>
                Logout
            </button>
        </div>
    </nav>