const albums = [
    {
        title: "Corpus Christi",
        date: "30 de Mayo, 2024",
        cover: "imagen/galeria/Corpus-Christi-2024/1.jpg",
        images: [
            "imagen/galeria/Corpus-Christi-2024/1.jpg",
            "imagen/galeria/Corpus-Christi-2024/2.jpg",
            "imagen/galeria/Corpus-Christi-2024/3.jpg",
            "imagen/galeria/Corpus-Christi-2024/4.jpg",
            "imagen/galeria/Corpus-Christi-2024/5.jpg",
            "imagen/galeria/Corpus-Christi-2024/6.jpg",
            "imagen/galeria/Corpus-Christi-2024/7.jpg"
        ]
    },
    {
        title: "1ᴱᴿ Aniversario Parroquial",
        date: "29 de Septiembre, 2024",
        cover: "imagen/galeria/Aniversario-Parroquial-2024/1.jpg",
        images: [
            "imagen/galeria/Aniversario-Parroquial-2024/1.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/2.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/3.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/4.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/5.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/6.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/7.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/8.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/9.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/10.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/11.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/12.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/13.jpg",
            "imagen/galeria/Aniversario-Parroquial-2024/14.jpg"
        ]
    },
    {
        title: "Fiesta en Honor a la Sagrada Familia",
        date: "11 de Noviembre, 2024",
        cover: "imagen/galeria/Fiesta-Sagrada-Familia/1.jpg",
        images: [
            "imagen/galeria/Fiesta-Sagrada-Familia/1.jpg",
            "imagen/galeria/Fiesta-Sagrada-Familia/2.jpg",
            "imagen/galeria/Fiesta-Sagrada-Familia/3.jpg",
            "imagen/galeria/Fiesta-Sagrada-Familia/4.jpg"
        ]
    }
];

const gallery = document.getElementById('gallery');
const modal = document.getElementById('modal');
const modalImage = document.getElementById('modalImage');
const closeModal = document.getElementById('closeModal');
const prevImage = document.getElementById('prevImage');
const nextImage = document.getElementById('nextImage');

let currentAlbum;
let currentImageIndex;

function createAlbumElement(album) {
    const albumElement = document.createElement('div');
    albumElement.className = 'bg-white rounded-lg shadow-md overflow-hidden cursor-pointer transform transition-transform duration-300 hover:scale-105';
    albumElement.innerHTML = `
        <img src="${album.cover}" alt="${album.title}" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="font-bold text-lg mb-2">${album.title}</h3>
            <p class="text-gray-600">${album.date}</p>
        </div>
    `;
    albumElement.addEventListener('click', () => openModal(album));
    return albumElement;
}

function openModal(album) {
    currentAlbum = album;
    currentImageIndex = 0;
    updateModalContent();
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function updateModalContent() {
    modalImage.src = currentAlbum.images[currentImageIndex];
    modalImage.alt = `${currentAlbum.title} - Imagen ${currentImageIndex + 1}`;
}

function closeModalHandler() {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
}

function prevImageHandler() {
    currentImageIndex = (currentImageIndex - 1 + currentAlbum.images.length) % currentAlbum.images.length;
    updateModalContent();
}

function nextImageHandler() {
    currentImageIndex = (currentImageIndex + 1) % currentAlbum.images.length;
    updateModalContent();
}

closeModal.addEventListener('click', closeModalHandler);
prevImage.addEventListener('click', prevImageHandler);
nextImage.addEventListener('click', nextImageHandler);

modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        closeModalHandler();
    }
});

albums.forEach(album => {
    gallery.appendChild(createAlbumElement(album));
});