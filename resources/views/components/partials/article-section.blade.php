<div class="panjang-maksimal py-[67px]">
    <div class="container-withShadow">
        <div class="flex flex-col gap-9 py-[65px] px-[94px]">
            <h1 class="text-[42px] font-semibold">Baca Artikel Berikut</h1>
            <div class="relative w-full">
                <button id="prev-2"
                    class="absolute -left-0 -translate-x-1/2 top-1/2 -translate-y-1/2 bg-gray-600 w-10 h-10 rounded-full z-10 text-white">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button id="latest-2"
                    class="absolute -right-0 translate-x-1/2 top-1/2 -translate-y-1/2 bg-gray-600 w-10 h-10 rounded-full z-10 text-white">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
                <div class="overflow-x-hidden py-2 px-1 rounded-3xl">
                    <div id="carousell-2" class="flex gap-3 w-full">
                        @for ($i = 1; $i < 30; $i++)
                            <div class="bg-[#D9D9D9] min-w-[450px] h-[420px] rounded-2xl flex flex-col justify-center items-center overflow-hidden shadow-sm">
                                <div class="w-full h-[270px] flex justify-center items-center">image</div>
                                <div class="w-full h-[150px] bg-white flex flex-col gap-4 py-[25px] px-[29px]">
                                    <h1 class="text-[22px] font-semibold leading-6">Lorem, ipsum dolor.</h1>
                                    <div
                                        class="bg-[#E00852] text-white h-[26px] w-[134.5px] rounded-[25px] flex justify-center items-center">
                                        Lorem, ipsum.</div>
                                    <p class="font-medium">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-9 py-[65px] px-[94px]">
            <h1 class="text-[42px] font-semibold">Obat Herbal</h1>
            <div class="grid grid-cols-6 gap-[15px]">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-span-2 bg-[#D9D9D9] h-[90px] w-full rounded-[25px] py-2.5 px-7 flex gap-[45px] items-center mb-[30px]">
                        {!! $i !== 5 ? '<div class="w-[70px] h-[70px] bg-[#E00852] rounded-[25px]"></div>' : '' !!}
                        <div class="{{ $i === 5 ? 'flex justify-center w-full' : '' }}">
                            <h1 class="text-[22px] font-semibold">{{ $i === 5 ? 'Lihat Semua' : 'Lorem, ipsum.' }}</h1>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>