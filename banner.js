document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.banner-slide');
    const logo = document.getElementById('logo');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    let currentSlide = 0;
    let autoSlideInterval;

    function goToSlide(n) {
        slides[currentSlide].classList.remove('active');
        if (logo) logo.classList.remove('active');
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        updateLogo();
        resetAutoSlideTimer();
    }

    function nextSlide() {
        goToSlide(currentSlide + 1);
    }

    function prevSlide() {
        goToSlide(currentSlide - 1);
    }

    function updateLogo() {
        if (!logo) return;

        const logoLink = document.getElementById('logo-link');
        logo.classList.remove('active');

        setTimeout(() => {
            switch (currentSlide) {
                case 0:
                    logo.src = "imagen/logos-footer/logo-psicologia.png";
                    logo.style.display = "block";
                    logoLink.href = "psicologia.php";
                    break;

                case 1:
                    logo.src = "imagen/logos-footer/logo-columbario.png";
                    logo.style.display = "block";
                    logoLink.href = "columbario.php";
                    break;
                    
                case 2:
                    logo.src = "imagen/logos-footer/logo-monaguillos.png";
                    logo.style.display = "block";
                    logoLink.href = "monaguillos.php";
                    break;
                
                default:
                    logo.src = "none";
                    logo.style.display = "none";
                    logoLink.href = "#";
            }

            if (logo.style.display !== "none") {
                setTimeout(() => {
                    logo.classList.add('active');
                }, 50);
            }
        }, 300);
    }

    function resetAutoSlideTimer() {
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(nextSlide, 5000);
    }

    function updateAdventCandles() {
        const now = new Date();
        const year = now.getFullYear();
        const adventStart = new Date(year, 10, 10); 
        const adventEnd = new Date(year, 11, 24); 

        if (now < adventStart || now > adventEnd) {
            return;
        }

        const weeksPassed = Math.floor((now.getTime() - adventStart.getTime()) / (7 * 24 * 60 * 60 * 1000));
        const litCandles = Math.min(weeksPassed + 1, 4);

        const candles = document.querySelectorAll('.advent-candles .candle');
        candles.forEach((candle, index) => {
            if (index < litCandles) {
                candle.classList.add('lit');
            } else {
                candle.classList.remove('lit');
            }
        });
    }

    goToSlide(0);
    updateAdventCandles();

    prevButton.addEventListener('click', prevSlide);
    nextButton.addEventListener('click', nextSlide);

    lucide.createIcons();
});