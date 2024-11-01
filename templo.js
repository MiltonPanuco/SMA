document.addEventListener('DOMContentLoaded', function() {
    const prevTempleBtn = document.getElementById('prevTempleBtn');
    const nextTempleBtn = document.getElementById('nextTempleBtn');

    const mainTempleSwiper = new Swiper('.main-temple-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: false, 
    });

    function updateButtonStates() {
        prevTempleBtn.disabled = mainTempleSwiper.isBeginning;
        nextTempleBtn.disabled = mainTempleSwiper.isEnd;
    }

    prevTempleBtn.addEventListener('click', function() {
        mainTempleSwiper.slidePrev();
    });

    nextTempleBtn.addEventListener('click', function() {
        mainTempleSwiper.slideNext();
    });

    mainTempleSwiper.on('slideChange', updateButtonStates);

    updateButtonStates();

    const nestedSwipers = document.querySelectorAll('.nested-swiper');
    nestedSwipers.forEach((swiperElement, index) => {
        const nestedSwiper = new Swiper(swiperElement, {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: swiperElement.querySelector('.swiper-button-next'),
                prevEl: swiperElement.querySelector('.swiper-button-prev'),
            },
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const templeBtns = document.getElementById('TempleBtns');
    const priestsSection = document.querySelector('.container.mx-auto.px-4.py-8.mt-8.bg-white.bg-opacity-90');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && entry.intersectionRatio > 0.2) {
                templeBtns.classList.add('fade-out-hidden', 'pointer-events-none');
                templeBtns.classList.remove('fade-in-visible');
            } else {
                templeBtns.classList.remove('fade-out-hidden', 'pointer-events-none');
                templeBtns.classList.add('fade-in-visible');
            }
        });
    }, { threshold: [0, 0.2] });

    observer.observe(priestsSection);
});

