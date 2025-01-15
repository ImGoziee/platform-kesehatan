<main class="panjang-maksimal">
    <div class=" relative flex justify-between items-center h-screen">
        <div id="slider-container" class=" w-full h-full">
            <div id="content-wrapper" class="flex h-full w-full items-center">
                <!-- First Slide -->
                <div id="content-slider" class="px-7 w-full h-full flex items-center min-w-full">
                    <div class="relative flex flex-col gap-16 w-full">
                        <div class="">
                            <h1 class="text-5xl font-semibold">Solusi Kesehatan Untuk Anda!</h1>
                            <p class="mt-4 text-xl max-w-[50rem]">Chat dokter, kunjungi rumah sakit, beli obat, cek lab
                                dan update informasi seputar kesehatan, semua bisa di Halodoc!</p>
                        </div>
                        <div class="flex gap-4">
                            @for ($i = 0; $i < 4; $i++)
                                <div class=" w-[155px] h-[155px] flex flex-col justify-center items-center gap-2"></div>
                            @endfor
                        </div>
                        <div class="absolute bottom-1/2 translate-y-2/3 -right-56">
                            <img class="2xl:w-[850px]" src="{{ asset('assets/img/main-chac.png') }}" alt="Icon">
                        </div>
                    </div>
                </div>

                <!-- Second Slide -->
                <div class="px-7 w-full h-full flex items-center min-w-full">
                    <div class="relative flex flex-col gap-16 w-full">
                        <div class="">
                            <h1 class="text-5xl font-semibold">Layanan Kesehatan Terpercaya</h1>
                            <p class="mt-4 text-xl max-w-[50rem]">Konsultasi dengan dokter spesialis terbaik, pesan obat
                                dengan mudah, dan dapatkan layanan kesehatan premium.</p>
                        </div>
                        <div class="flex gap-4">
                            @for ($i = 0; $i < 4; $i++)
                                <div class=" w-[155px] h-[155px] flex flex-col justify-center items-center gap-2"></div>
                            @endfor
                        </div>
                        <div class="absolute bottom-1/2 translate-y-2/3 -right-56">
                            <img class="2xl:w-[850px] grayscale" src="{{ asset('assets/img/main-chac.png') }}"
                                alt="Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex gap-4 absolute left-7 bottom-1/2 translate-y-[110%]">
            <div class="bg-white rounded-2xl w-[155px] h-[155px] flex flex-col justify-center items-center gap-2">
                <img class="mix-blend-multiply" width="80" src="{{ asset('assets/svg/jadwal-ft.svg') }}"
                    alt="Icon">
                <p class="text-[14px] font-medium">Jadwal Dokter</p>
            </div>
            <div class="bg-white rounded-2xl w-[155px] h-[155px] flex flex-col justify-center items-center gap-2">
                <img class="mix-blend-multiply" width="80" src="{{ asset('assets/svg/Obat-ft.svg') }}"
                    alt="Icon">
                <p class="text-[14px] font-medium">Toko Kesehatan</p>
            </div>
            <div class="bg-white rounded-2xl w-[155px] h-[155px] flex flex-col justify-center items-center gap-2">
                <img class="mix-blend-multiply" width="80" src="{{ asset('assets/svg/Homecare-ft.svg') }}"
                    alt="Icon">
                <p class="text-[14px] font-medium">Homecare</p>
            </div>
            <div class="bg-white rounded-2xl w-[155px] h-[155px] flex flex-col justify-center items-center gap-2">
                <img class="mix-blend-multiply" width="80" src="{{ asset('assets/svg/jadwal-ft.svg') }}"
                    alt="Icon">
                <p class="text-[14px] font-medium">Mewing</p>
            </div>
        </div>
        <div class="flex gap-4 absolute bottom-10 right-1/2 translate-x-1/2">
            @for ($i = 0; $i < 2; $i++)
                <div class="border-transparent bg-[#B12B32] border-[4px] text-white py-1.5 px-1.5 rounded-3xl">
                </div>
            @endfor
        </div>
    </div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const wrapper = document.getElementById('content-wrapper');
        const slides = wrapper.children;
        const dots = document.querySelectorAll('.flex.gap-4.absolute.bottom-10 > div');

        if (!wrapper || slides.length === 0) {
            console.error('Required elements not found');
            return;
        }

        let currentSlide = 0;
        let isAnimating = false;

        // Set initial states
        gsap.set(wrapper, {
            x: 0
        });
        gsap.set(slides[0], {
            opacity: 1
        });
        gsap.set(slides[1], {
            opacity: 0
        });

        function updateDots(index) {
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-[#B12B32]');
                    dot.classList.add('bg-white');
                    dot.classList.add('!border-[#B12B32]');
                } else {
                    dot.classList.remove('bg-white');
                    dot.classList.remove('!border-[#B12B32]');
                    dot.classList.add('bg-[#B12B32]');
                }
            });
        }

        function slideNext() {
            if (isAnimating) return;
            isAnimating = true;

            const nextSlide = currentSlide === 0 ? 1 : 0;
            const tl = gsap.timeline({
                onComplete: () => {
                    isAnimating = false;
                }
            });

            if (currentSlide === 0) {
                // Animating to second slide
                tl.to(slides[currentSlide], {
                        opacity: 0,
                        duration: 1,
                        // filter: 'blur(8px)',
                        scale: 0.9,
                        ease: "power2.inOut"
                    }, 0)
                    .to(wrapper, {
                        x: '-100%',
                        duration: 2,
                        ease: "power2.inOut"
                    }, 0)
                    .to(slides[nextSlide], {
                        opacity: 1,
                        duration: 1,
                        filter: 'blur(0px)',
                        scale: 1,
                        ease: "power2.inOut"
                    }, 1);
            } else {
                // Animating back to first slide
                tl.to(slides[currentSlide], {
                        opacity: 0,
                        duration: 1,
                        // filter: 'blur(8px)',
                        scale: 0.9,
                        ease: "power2.inOut"
                    }, 0)
                    .to(slides[nextSlide], {
                        opacity: 1,
                        duration: 1,
                        filter: 'blur(0px)',
                        scale: 1,
                        ease: "power2.inOut"
                    }, 0)
                    .to(wrapper, {
                        x: '0%',
                        duration: 2,
                        ease: "power2.inOut"
                    }, 0);
            }

            currentSlide = nextSlide;
            updateDots(currentSlide);
        }

        setInterval(slideNext, 4500);
    });
</script>
