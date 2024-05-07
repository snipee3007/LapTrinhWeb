<div id="default-carousel" class="relative w-full h-full hidden md:block" data-carousel="slide">
    <div class="relative overflow-hidden rounded-lg h-[675px]">
        <div class="absolute top-0 duration-700 ease-in-out h-1/2" data-carousel-item>
            <img src="images/banner1.jpg" class="w-full rounded-lg" alt="Banner1">
        </div>
        <div class="absolute top-0 duration-700 ease-in-out h-1/2" data-carousel-item>
            <img src="images/banner2.png" class="w-full rounded-lg" alt="Banner2">
        </div>
        <div class="absolute top-0 duration-700 ease-in-out h-1/2" data-carousel-item>
            <img src="images/banner3.jpg" class="w-full rounded-lg" alt="Banner3">
        </div>
    </div>
</div>

<style>
@keyframes slideIn {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(0);
    }
}

@keyframes slideOut {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

[data-carousel-item] {
    animation-duration: 0.7s;
    animation-fill-mode: both;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    var currentSlide = 0;
    var slides = $('[data-carousel-item]');
    var slideCount = slides.length;

    function nextSlide() {
        $(slides[currentSlide]).css('animation-name', 'slideOut');
        currentSlide = (currentSlide + 1) % slideCount;
        $(slides[currentSlide]).css('animation-name', 'slideIn');
    }

    setInterval(nextSlide, 3000);
});
</script>