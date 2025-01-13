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
                            <div
                                class="bg-[#D9D9D9] min-w-[410px] h-56 rounded-2xl flex justify-center items-center overflow-hidden">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Draggable.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('.flex.gap-3');
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('latest');
        const slides = container.children;

        // Configuration
        const slideWidth = 384 + 12; // 384px (min-w-96) + 12px (gap-3)
        const animationDuration = 0.5;

        let currentPosition = 0;
        let isAnimating = false;

        // Calculate viewport limitations
        const containerWidth = container.parentElement.offsetWidth;
        const slidesPerView = Math.floor(containerWidth / slideWidth);
        const maxScroll = (slides.length - slidesPerView) * slideWidth;

        // Remove default transition
        container.style.transition = 'none';

        function animateCarousel(position) {
            if (isAnimating) return;
            isAnimating = true;

            gsap.to(container, {
                x: -position,
                duration: animationDuration,
                ease: "power2.out",
                onComplete: () => {
                    isAnimating = false;
                }
            });
        }

        function updateButtonStates() {
            prevBtn.disabled = currentPosition <= 0;
            nextBtn.disabled = currentPosition >= maxScroll;
            prevBtn.style.opacity = prevBtn.disabled ? '0.5' : '1';
            nextBtn.style.opacity = nextBtn.disabled ? '0.5' : '1';
        }

        // Initialize draggable
        const draggable = Draggable.create(container, {
            type: "x",
            inertia: true,
            bounds: {
                minX: -maxScroll,
                maxX: 0
            },
            edgeResistance: 0.65,
            dragResistance: 0.45,
            onDragStart: function() {
                isAnimating = true;
            },
            onDragEnd: function() {
                isAnimating = false;
                // Snap to nearest slide
                const currentX = this.endX;
                const targetPosition = Math.round(-currentX / slideWidth) * slideWidth;
                currentPosition = Math.min(Math.max(targetPosition, 0), maxScroll);

                animateCarousel(currentPosition);
                updateButtonStates();
            }
        })[0];

        // Handle next button click
        nextBtn.addEventListener('click', function() {
            if (isAnimating) return;

            if (currentPosition < maxScroll) {
                const remainingDistance = maxScroll - currentPosition;
                const moveDistance = Math.min(slideWidth, remainingDistance);
                currentPosition += moveDistance;
                animateCarousel(currentPosition);
                updateButtonStates();
            }
        });

        // Handle previous button click
        prevBtn.addEventListener('click', function() {
            if (isAnimating) return;

            if (currentPosition > 0) {
                const moveDistance = Math.min(slideWidth, currentPosition);
                currentPosition -= moveDistance;
                animateCarousel(currentPosition);
                updateButtonStates();
            }
        });

        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(function() {
                const newContainerWidth = container.parentElement.offsetWidth;
                const newSlidesPerView = Math.floor(newContainerWidth / slideWidth);
                const newMaxScroll = (slides.length - newSlidesPerView) * slideWidth;

                // Update draggable bounds
                draggable.applyBounds({
                    minX: -newMaxScroll,
                    maxX: 0
                });

                if (currentPosition > newMaxScroll) {
                    currentPosition = newMaxScroll;
                    animateCarousel(currentPosition);
                }
                updateButtonStates();
            }, 200);
        });

        // Initial setup
        updateButtonStates();
    });
</script>
