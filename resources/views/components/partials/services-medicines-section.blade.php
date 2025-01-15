<div class="panjang-maksimal pt-[118px]">
    <div class="container-withShadow">
        <div class="flex flex-col gap-9 py-[65px] px-[94px]">
            <h1 class="text-[42px] font-semibold">Layanan Khusus</h1>
            <div class="flex w-full justify-between">
                @for ($i = 0; $i < 7; $i++)
                    <div class="flex-col">
                        <div class="bg-[#DDEDFD] h-[85px] w-[85px] rounded-2xl"></div>
                        <p class="font-medium text-center">Lorem</p>
                    </div>
                @endfor
            </div>
        </div>
        <div class="flex flex-col gap-9 py-[65px] px-[94px]">
            <h1 class="text-[42px] font-semibold">Obat - Obatan</h1>
            <div class="flex w-full justify-between">
                @for ($i = 0; $i < 7; $i++)
                    <div class="flex-col">
                        <div class="bg-[#DDEDFD] h-[85px] w-[85px] rounded-2xl"></div>
                        <p class="font-medium text-center">Lorem</p>
                    </div>
                @endfor
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
                                class="bg-[#D9D9D9] min-w-[450px] h-56 rounded-2xl flex justify-center items-center overflow-hidden">
                                {{-- <img class="h-full" width="" src="{{ asset('assets/img/image.png') }}" alt="Icon"> --}}
                                asd
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
