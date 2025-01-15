class CarouselSlider {
    constructor(config) {
        this.container = config.container;
        this.prevBtn = config.prevBtn;
        this.nextBtn = config.nextBtn;
        this.slides = this.container.children;
        
        this.slideWidth = config.slideWidth || 462; // 450px + 12px gap
        this.animationDuration = config.animationDuration || 0.5;
        
        this.currentPosition = 0;
        this.isAnimating = false;
        
        this.containerWidth = this.container.parentElement.offsetWidth;
        this.slidesPerView = Math.floor(this.containerWidth / this.slideWidth);
        this.maxScroll = (this.slides.length - this.slidesPerView) * this.slideWidth;
        
        this.container.style.transition = 'none';
        
        this.initialize();
    }
    
    animateCarousel(position) {
        if (this.isAnimating) return;
        this.isAnimating = true;
        
        gsap.to(this.container, {
            x: -position,
            duration: this.animationDuration,
            ease: "power2.out",
            onComplete: () => {
                this.isAnimating = false;
            }
        });
    }
    
    updateButtonStates() {
        this.prevBtn.disabled = this.currentPosition <= 0;
        this.nextBtn.disabled = this.currentPosition >= this.maxScroll;
        this.prevBtn.style.opacity = this.prevBtn.disabled ? '0.5' : '1';
        this.nextBtn.style.opacity = this.nextBtn.disabled ? '0.5' : '1';
    }
    
    initializeDraggable() {
        const self = this;
        return Draggable.create(this.container, {
            type: "x",
            inertia: true,
            bounds: {
                minX: -this.maxScroll,
                maxX: 0
            },
            edgeResistance: 0.65,
            dragResistance: 0.45,
            onDragStart: () => {
                this.isAnimating = true;
            },
            onDragEnd: function() {
                self.isAnimating = false;
                const currentX = this.endX;
                const targetPosition = Math.round(-currentX / self.slideWidth) * self.slideWidth;
                self.currentPosition = Math.min(Math.max(targetPosition, 0), self.maxScroll);
                
                self.animateCarousel(self.currentPosition);
                self.updateButtonStates();
            }
        })[0];
    }
    
    handleResize() {
        const newContainerWidth = this.container.parentElement.offsetWidth;
        const newSlidesPerView = Math.floor(newContainerWidth / this.slideWidth);
        const newMaxScroll = (this.slides.length - newSlidesPerView) * this.slideWidth;
        
        this.draggable.applyBounds({
            minX: -newMaxScroll,
            maxX: 0
        });
        
        if (this.currentPosition > newMaxScroll) {
            this.currentPosition = newMaxScroll;
            this.animateCarousel(this.currentPosition);
        }
        this.updateButtonStates();
    }
    
    initialize() {
        this.draggable = this.initializeDraggable();
        
        this.nextBtn.addEventListener('click', () => {
            if (this.isAnimating) return;
            
            if (this.currentPosition < this.maxScroll) {
                const remainingDistance = this.maxScroll - this.currentPosition;
                const moveDistance = Math.min(this.slideWidth, remainingDistance);
                this.currentPosition += moveDistance;
                this.animateCarousel(this.currentPosition);
                this.updateButtonStates();
            }
        });
        
        this.prevBtn.addEventListener('click', () => {
            if (this.isAnimating) return;
            
            if (this.currentPosition > 0) {
                const moveDistance = Math.min(this.slideWidth, this.currentPosition);
                this.currentPosition -= moveDistance;
                this.animateCarousel(this.currentPosition);
                this.updateButtonStates();
            }
        });
        
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => this.handleResize(), 200);
        });
        
        this.updateButtonStates();
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const carousel1 = new CarouselSlider({
        container: document.getElementById('carousell-1'),
        prevBtn: document.getElementById('prev-1'),
        nextBtn: document.getElementById('latest-1'),
    });
    
    const carousel2 = new CarouselSlider({
        container: document.getElementById('carousell-2'),
        prevBtn: document.getElementById('prev-2'),
        nextBtn: document.getElementById('latest-2')
    });
});