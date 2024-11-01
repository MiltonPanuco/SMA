const images = [
    'imagen/monaguillos/1.jpg',
    'imagen/monaguillos/2.jpg',
    'imagen/monaguillos/3.jpg',
    'imagen/monaguillos/4.jpg',
    'imagen/monaguillos/5.jpg'
];

let currentIndex = 0;
let sliderInterval; 
const slider = document.getElementById('imageSlider');
const dotsContainer = document.getElementById('sliderDots');
const prevButton = document.getElementById('prevButton');
const nextButton = document.getElementById('nextButton');

function createSlider() {
    images.forEach((src, index) => {
        const img = document.createElement('img');
        img.src = src;
        img.alt = `Monaguillos imagen ${index + 1}`;
        img.className = `absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-500 ${index === 0 ? 'opacity-100' : 'opacity-0'}`;
        slider.appendChild(img);

        const dot = document.createElement('button');
        dot.className = `w-3 h-3 rounded-full ${index === 0 ? 'bg-white' : 'bg-gray-400'}`;
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });
}

function updateSlider() {
    Array.from(slider.children).forEach((img, index) => {
        img.className = `absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-500 ${index === currentIndex ? 'opacity-100' : 'opacity-0'}`;
    });
    Array.from(dotsContainer.children).forEach((dot, index) => {
        dot.className = `w-3 h-3 rounded-full ${index === currentIndex ? 'bg-white' : 'bg-gray-400'}`;
    });
}

function goToSlide(index) {
    currentIndex = index;
    updateSlider();
    resetTimer(); 
}

function goToNext() {
    currentIndex = (currentIndex + 1) % images.length;
    updateSlider();
    resetTimer(); 
}

function goToPrev() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateSlider();
    resetTimer(); 
}

function startTimer() {
    sliderInterval = setInterval(goToNext, 5000);
}

function resetTimer() {
    clearInterval(sliderInterval);
    startTimer();
}

createSlider();

prevButton.addEventListener('click', goToPrev);
nextButton.addEventListener('click', goToNext);

startTimer();