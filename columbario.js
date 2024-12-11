const slides = [
    { type: 'image', src: 'imagen/columbario/fondo1.jpg' },
    { type: 'video', src: 'imagen/columbario/columbariovideo.mp4' },
    { type: 'image', src: 'imagen/columbario/fondo2.jpg' },
    { type: 'image', src: 'imagen/columbario/3.jpg' },
    { type: 'image', src: 'imagen/columbario/4.jpg' },
    { type: 'image', src: 'imagen/columbario/5.jpg' },
];
let currentSlide = 0;

function showSlide(index) {
    const sliderImage = document.getElementById('slider-image');
    const sliderVideo = document.getElementById('slider-video');
    const slide = slides[index];

    if (slide.type === 'image') {
        sliderImage.src = slide.src;
        sliderImage.classList.remove('hidden');
        sliderVideo.classList.add('hidden');
    } else {
        sliderVideo.src = slide.src;
        sliderVideo.classList.remove('hidden');
        sliderImage.classList.add('hidden');
    }
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

const contributionOptions = document.querySelectorAll('.contribution-option');
const contributionDetails = document.getElementById('contributionDetails');
const whatsappButton = document.getElementById('whatsappButton');

contributionOptions.forEach(option => {
    option.addEventListener('click', function() {
        contributionOptions.forEach(btn => {
            btn.classList.remove('active');
            btn.style.pointerEvents = 'auto';
        });
        this.classList.add('active');
        this.style.pointerEvents = 'none'; 
        
        const months = parseInt(this.getAttribute('data-months'));
        let monthlyAmount;
        
        switch(months) {
            case 12:
                monthlyAmount = 1250;
                break;
            case 24:
                monthlyAmount = 700;
                break;
            case 36:
                monthlyAmount = 500;
                break;
        }

        contributionDetails.innerHTML = `
            <p class="text-3xl font-bold mb-4">$${monthlyAmount} MXN / mes</p>
            <p class="text-xl text-gray-600">${months} Aportaciones mensuales fijas</p>
        `;

        whatsappButton.classList.add('show');
    });
});