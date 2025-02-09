<div class="panjang-maksimal pt-[118px]">
    <div class="container-withShadow">
        <div class="flex flex-col gap-9 py-[65px] px-[94px]">
            <h1 class="text-[42px] font-semibold">Obat - Obatan</h1>
            <div class="flex w-full justify-between">
                <button onclick="window.location='obat7';" class="group flex-col">
                    <div 
                        class="group-hover:bg-gray-300 shadow-md border border-gray-300 bg-[#DDEDFD] h-[85px] w-[85px] rounded-2xl"
                        style="background-image: url('{{ asset('assets/img/obat_herbal.jpeg') }}'); background-size: cover; background-position: center;">
                    </div>
                    <p class="font-medium text-center">obat herbal</p>
                </button>
                <button onclick="window.location='obat7';" class="group flex-col">
                    <div 
                        class="group-hover:bg-gray-300 shadow-md border border-gray-300 bg-[#DDEDFD] h-[85px] w-[85px] rounded-2xl"
                        style="background-image: url('{{ asset('assets/img/obat_obatan.png') }}'); background-size: cover; background-position: center;">
                    </div>
                    <p class="font-medium text-center">obat herbal</p>
                </button>
                <button onclick="window.location='obat7';" class="group flex-col">
                    <div 
                        class="group-hover:bg-gray-300 shadow-md border border-gray-300 bg-[#DDEDFD] h-[85px] w-[85px] rounded-2xl"
                        style="background-image: url('{{ asset('assets/img/obat_obatan.png') }}'); background-size: cover; background-position: center;">
                    </div>
                    <p class="font-medium text-center">obat herbal</p>
                </button>
                <button onclick="window.location='obat7';" class="group flex-col">
                    <div 
                        class="group-hover:bg-gray-300 shadow-md border border-gray-300 bg-[#DDEDFD] h-[85px] w-[85px] rounded-2xl"
                        style="background-image: url('{{ asset('assets/img/obat_obatan.png') }}'); background-size: cover; background-position: center;">
                    </div>
                    <p class="font-medium text-center">obat herbal</p>
                </button>
                <button onclick="window.location='obat7';" class="group flex-col">
                    <div 
                        class="group-hover:bg-gray-300 shadow-md border border-gray-300 bg-[#DDEDFD] h-[85px] w-[85px] rounded-2xl"
                        style="background-image: url('{{ asset('assets/img/obat_obatan.png') }}'); background-size: cover; background-position: center;">
                    </div>
                    <p class="font-medium text-center">obat herbal</p>
                </button>
                <button onclick="window.location='obat7';" class="group flex-col">
                    <div 
                        class="group-hover:bg-gray-300 shadow-md border border-gray-300 bg-[#DDEDFD] h-[85px] w-[85px] rounded-2xl"
                        style="background-image: url('{{ asset('assets/img/obat_obatan.png') }}'); background-size: cover; background-position: center;">
                    </div>
                    <p class="font-medium text-center">obat herbal</p>
                </button>
                <button onclick="window.location='obat7';" class="group flex-col">
                    <div 
                        class="group-hover:bg-gray-300 shadow-md border border-gray-300 bg-[#DDEDFD] h-[85px] w-[85px] rounded-2xl"
                        style="background-image: url('{{ asset('assets/img/obat_obatan.png') }}'); background-size: cover; background-position: center;">
                    </div>
                    <p class="font-medium text-center">obat herbal</p>
                </button>
            </div>
        </div>
        {{-- daftar penyakit --}}
        <div class="flex flex-col gap-9 py-[45px] px-[94px]">
            <h1 class="text-[42px] font-semibold">Daftar Penyakit</h1>
            <div class="grid grid-cols-6 gap-[15px]">
                @foreach ($penyakit as $i)
                    <button onclick="window.location='penyakit/{{ $i['id'] }}';" class="col-span-2 shadow-md duration-200 bg-[#f2f2f2] hover:bg-[#D9D9D9] h-[90px] w-full rounded-[25px] py-2.5 px-7 flex gap-[45px] items-center mb-[30px]">
                        <div class="w-[70px] h-[70px] bg-[#E00852] rounded-[25px] flex justify-center items-center overflow-hidden">
                            <img class="h-full" src="{{ asset('storage/' . $i['ilustrasi_penyakit']) }}" alt="image">
                        </div>
                        <div>
                            <h1 class="text-[22px] font-semibold">{{ $i['nama_penyakit'] }}</h1>
                        </div>
                    </button>
                @endforeach
                {{-- Tombol Lihat Semua --}}
                <button onclick="window.location='penyakit';" class="col-span-2 shadow-md duration-200 bg-gray-300 hover:bg-[#D9D9D9] h-[90px] w-full rounded-[25px] py-2.5 px-7 flex justify-center items-center mb-[30px]">
                    <h1 class="text-[22px] font-semibold">Lihat Semua</h1>
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-9 py-[65px] px-[94px]">
            <h1 class="text-[42px] font-semibold">Penawaran Menarik</h1>
            <div class="relative w-full">
                <button id="prev-1"
                    class="absolute -left-0 -translate-x-1/2 top-1/2 -translate-y-1/2 bg-gray-600 w-10 h-10 rounded-full z-10 text-white">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button id="latest-1"
                    class="absolute -right-0 translate-x-1/2 top-1/2 -translate-y-1/2 bg-gray-600 w-10 h-10 rounded-full z-10 text-white">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
                <div class="overflow-x-hidden rounded-lg">
                    <div id="carousell-1" class="flex gap-3 w-full">
                        @for ($i = 1; $i < 30; $i++)
                            <div
                                class="bg-[#D9D9D9] border border-gray-300 min-w-[450px] h-56 rounded-2xl flex justify-center items-center overflow-hidden cursor-pointer">
                                <img class="h-full w-full object-fill" src="{{ asset('assets/img/image-ads.png') }}" alt="Icon">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
