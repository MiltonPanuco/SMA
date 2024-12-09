const ads = [
    {
        title: "Psicología Cristiana",
        content: "Brindamos acompañamiento profesional desde la fe",
        image: "imagen/banner/aviso-psicologia.jpg",
        link: "psicologia.php"
    },
    {
        title: "Columbario Inmaculada Concepción",
        content: "Un lugar de descanso para tus seres queridos",
        image: "imagen/banner/aviso-columbario.jpg",
        link: "columbario.php"
    },
    {
        title: "Monaguillos",
        content: "Sirviendo a Dios desde temprana edad",
        image: "imagen/banner/aviso-monaguillos.jpg",
        link: "monaguillos.php"
    },
    {
        title: "Tiempo de Adviento",
        content: "Preparándonos en comunidad para la llegada de Cristo",
        image: "imagen/banner/aviso-adviento.jpg",
        link: "index.php",
        isAdvent: true,
        candles: [
            { color: "purple", lit: false },
            { color: "purple", lit: false },
            { color: "pink", lit: false },
            { color: "purple", lit: false }
        ]
    }
];

let availableAds = [...ads];
let adTimeout;
const adContainer = document.getElementById('popup-ad');
const adTitle = document.getElementById('ad-title');
const adContent = document.getElementById('ad-content');
const adImage = document.getElementById('ad-image');
const closeButton = document.getElementById('close-ad');
const adventCandles = document.getElementById('advent-candles');

function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

function getRandomPosition() {
    const windowWidth = window.innerWidth;
    const windowHeight = window.innerHeight;
    const adWidth = adContainer.offsetWidth;
    const adHeight = adContainer.offsetHeight;

    let maxX = windowWidth - adWidth;
    let maxY = windowHeight - adHeight;

    if (windowWidth <= 640) {
        return { x: '50%', y: '50%' };
    }

    maxX = Math.max(0, maxX);
    maxY = Math.max(0, maxY);

    const randomX = Math.floor(Math.random() * maxX);
    const randomY = Math.floor(Math.random() * maxY);

    return { x: randomX, y: randomY };
}

function updateAdventCandles() {
    const now = new Date();
    const adventStart = new Date(now.getFullYear(), 10, 27); // Nov 27
    const daysSinceAdventStart = Math.floor((now - adventStart) / (1000 * 60 * 60 * 24));
    const sundaysSinceAdventStart = Math.floor(daysSinceAdventStart / 7);

    const adventAd = ads.find(ad => ad.isAdvent);
    if (adventAd) {
        for (let i = 0; i <= sundaysSinceAdventStart && i < 4; i++) {
            adventAd.candles[i].lit = true;
        }
    }
}

function showAd() {
    if (availableAds.length === 0) {
        availableAds = [...ads];
        shuffleArray(availableAds);
    }

    const ad = availableAds.pop();
    adTitle.textContent = ad.title;
    adContent.textContent = ad.content;
    adImage.src = ad.image;
    adImage.alt = `Imagen de fondo para ${ad.title}`;
    adContainer.onclick = function(event) {
        if (event.target !== closeButton && !closeButton.contains(event.target)) {
            window.open(ad.link, '_blank');
        }
    };

    if (ad.isAdvent) {
        updateAdventCandles();
        adventCandles.classList.remove('hidden');
        ad.candles.forEach((candle, index) => {
            const candleElement = adventCandles.children[index];
            candleElement.classList.toggle('lit', candle.lit);
        });
    } else {
        adventCandles.classList.add('hidden');
    }

    adContainer.classList.remove('hidden');
    
    setTimeout(() => {
        const { x, y } = getRandomPosition();
        if (window.innerWidth <= 640) {
            adContainer.style.left = x;
            adContainer.style.top = y;
            adContainer.style.transform = 'translate(-50%, -50%)';
        } else {
            adContainer.style.left = `${x}px`;
            adContainer.style.top = `${y}px`;
            adContainer.style.transform = 'none';
        }
        adContainer.classList.add('fade-in');
    }, 0);
}

function hideAd() {
    adContainer.classList.remove('fade-in');
    adContainer.classList.add('fade-out');
    setTimeout(() => {
        adContainer.classList.add('hidden');
        adContainer.classList.remove('fade-out');
    }, 300);
}

function rotateAd() {
    hideAd();
    setTimeout(() => {
        showAd();
    }, 300);
}

function startAdRotation() {
    shuffleArray(availableAds);
    showAd();
    scheduleNextAd();
}

function scheduleNextAd() {
    clearTimeout(adTimeout);
    adTimeout = setTimeout(rotateAd, 240000); // 4 minutos
}

function resetAdRotation() {
    clearTimeout(adTimeout);
    adTimeout = setTimeout(startAdRotation, 240000); // Reiniciar rotación después de 4 minutos
}

closeButton.addEventListener('click', (e) => {
    e.stopPropagation();
    hideAd();
    resetAdRotation();
});

adContainer.addEventListener('click', (e) => {
    e.stopPropagation();
});

window.addEventListener('load', () => {
    setTimeout(startAdRotation, 300); // Mostrar el primer anuncio después de 30 segundos
});

window.addEventListener('resize', () => {
    if (!adContainer.classList.contains('hidden')) {
        const { x, y } = getRandomPosition();
        if (window.innerWidth <= 640) {
            adContainer.style.left = x;
            adContainer.style.top = y;
            adContainer.style.transform = 'translate(-50%, -50%)';
        } else {
            adContainer.style.left = `${x}px`;
            adContainer.style.top = `${y}px`;
            adContainer.style.transform = 'none';
        }
    }
});

function preloadImages() {
    ads.forEach(ad => {
        const img = new Image();
        img.src = ad.image;
    });
}

window.addEventListener('load', preloadImages);

