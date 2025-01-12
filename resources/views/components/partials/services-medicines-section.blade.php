<div class="panjang-maksimal pt-[118px]">
    <div class="container-withShadow">
        <div class="flex flex-col gap-9 py-[65px] px-[94px]">
            <h1 class="text-[42px] font-semibold">Layanan Khusus</h1>
            <div class="flex w-full justify-between">
                @for ($i = 0; $i < 7; $i++)
                    <div class="flex-col">
                        <div class="bg-[#DDEDFD] text-white py-20 px-20 rounded-2xl"></div>
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
                        <div class="bg-[#DDEDFD] text-white py-20 px-20 rounded-2xl"></div>
                        <p class="font-medium text-center">Lorem</p>
                    </div>
                @endfor
            </div>
        </div>
        <div class="flex flex-col gap-9 py-[65px] px-[94px]">
            <h1 class="text-[42px] font-semibold">Penawaran Menarik</h1>
            <div class="relative w-full">
                <button id="prev"
                    class="absolute -left-0 -translate-x-1/2 top-1/2 -translate-y-1/2 bg-gray-600 w-10 h-10 rounded-full z-10 text-white">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button id="latest"
                    class="absolute -right-0 translate-x-1/2 top-1/2 -translate-y-1/2 bg-gray-600 w-10 h-10 rounded-full z-10 text-white">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
                <div class="overflow-x-hidden rounded-lg">
                    <div class="flex gap-3 w-full">
                        @for ($i = 1; $i < 30; $i++)
                            <div class="bg-[#D9D9D9] min-w-96 h-56 rounded-2xl flex justify-center items-center">Ads&nbsp;{{ $i }}</div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('.flex.gap-3');
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('latest');
        const slides = container.children;

        const slideWidth = 384 + 12;
        const autoplayInterval = 100;
        let currentPosition = 0;
        let autoplayTimer = null;
        let isHovered = false;

        const containerWidth = container.parentElement.offsetWidth;
        const slidesPerView = Math.floor(containerWidth / slideWidth);
        const maxScroll = (slides.length - slidesPerView) * slideWidth;

        function startAutoplay() {
            if (autoplayTimer === null && !isHovered) {
                autoplayTimer = setInterval(() => {
                    if (currentPosition >= maxScroll) {
                        currentPosition = 0;
                    } else {
                        currentPosition += slideWidth;
                    }
                    updateCarousel();
                }, autoplayInterval);
            }
        }

        function stopAutoplay() {
            if (autoplayTimer !== null) {
                clearInterval(autoplayTimer);
                autoplayTimer = null;
            }
        }

        function updateCarousel() {
            container.style.transform = `translateX(-${currentPosition}px)`;
            updateButtonStates();
        }

        function updateButtonStates() {
            prevBtn.disabled = currentPosition <= 0;
            nextBtn.disabled = currentPosition >= maxScroll;
            prevBtn.style.opacity = prevBtn.disabled ? '0.5' : '1';
            nextBtn.style.opacity = nextBtn.disabled ? '0.5' : '1';
        }

        nextBtn.addEventListener('click', function() {
            stopAutoplay();
            if (currentPosition < maxScroll) {
                const remainingDistance = maxScroll - currentPosition;
                const moveDistance = Math.min(slideWidth, remainingDistance);
                currentPosition += moveDistance;
                updateCarousel();
            }
        });

        prevBtn.addEventListener('click', function() {
            stopAutoplay();
            if (currentPosition > 0) {
                const moveDistance = Math.min(slideWidth, currentPosition);
                currentPosition -= moveDistance;
                updateCarousel();
            }
        });

        container.addEventListener('mouseenter', () => {
            isHovered = true;
            stopAutoplay();
        });

        container.addEventListener('mouseleave', () => {
            isHovered = false;
            startAutoplay();
        });

        prevBtn.addEventListener('mouseenter', stopAutoplay);
        prevBtn.addEventListener('mouseleave', startAutoplay);
        nextBtn.addEventListener('mouseenter', stopAutoplay);
        nextBtn.addEventListener('mouseleave', startAutoplay);

        let resizeTimeout;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(function() {
                const newContainerWidth = container.parentElement.offsetWidth;
                const newSlidesPerView = Math.floor(newContainerWidth / slideWidth);
                const newMaxScroll = (slides.length - newSlidesPerView) * slideWidth;

                if (currentPosition > newMaxScroll) {
                    currentPosition = newMaxScroll;
                    updateCarousel();
                }
            }, 200);
        });

        container.style.transition = 'transform 0.3s ease-in-out';
        updateButtonStates();
        startAutoplay();
    });
</script>
