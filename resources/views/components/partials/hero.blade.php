<main class="panjang-maksimal">
    <div class="relative flex justify-between items-center px-7 h-[900px]">
        <div class="flex flex-col gap-16">
            <div class="">
                <h1 class="text-5xl font-semibold">Solusi Kesehatan Untuk Anda!</h1>
                <p class="mt-4 text-xl max-w-[50rem]">Chat dokter, kunjungi rumah sakit, beli obat, cek lab dan update informasi seputar kesehatan, semua bisa di Halodoc!</p>
            </div>
            <div class="flex gap-4">
                <div class="bg-white rounded-2xl w-[155px] h-[155px] flex flex-col justify-center items-center gap-2">
                    <img class="mix-blend-multiply" width="80" src="{{ asset('assets/svg/jadwal-ft.svg') }}" alt="Icon">
                    <p class="text-[14px] font-medium">Jadwal Dokter</p>
                </div>
                <div class="bg-white rounded-2xl w-[155px] h-[155px] flex flex-col justify-center items-center gap-2">
                    <img class="mix-blend-multiply" width="80" src="{{ asset('assets/svg/Obat-ft.svg') }}" alt="Icon">
                    <p class="text-[14px] font-medium">Toko Kesehatan</p>
                </div>
                <div class="bg-white rounded-2xl w-[155px] h-[155px] flex flex-col justify-center items-center gap-2">
                    <img class="mix-blend-multiply" width="80" src="{{ asset('assets/svg/Homecare-ft.svg') }}" alt="Icon">
                    <p class="text-[14px] font-medium">Homecare</p>
                </div>
                <div class="bg-white rounded-2xl w-[155px] h-[155px] flex flex-col justify-center items-center gap-2">
                    <img class="mix-blend-multiply" width="80" src="{{ asset('assets/svg/jadwal-ft.svg') }}" alt="Icon">
                    <p class="text-[14px] font-medium">Mewing</p>
                </div>
            </div>
        </div>
        <div class="absolute -z-10 -bottom-20 -right-56">
            <img class="" width="850" src="{{ asset('assets/img/main-chac.png') }}" alt="Icon">
        </div>
        <div class="flex gap-4 absolute bottom-10 right-1/2 translate-x-1/2">
            @for ($i = 0; $i < 4; $i++)
                <div class="{{ $i == 0 ? 'bg-white border-[#B12B32]' : 'bg-[#B12B32] border-transparent' }} border-[4px] text-white py-1.5 px-1.5 rounded-3xl"></div>
            @endfor
        </div>
    </div>
</main>