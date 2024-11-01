const gruposData = [
    {
        id: 'alvernia',
        nombre: 'Grupo de Matrimonios Alvernia',
        descripcion: 'Somos una comunidad de parejas sacramentadas y familias comprometidas con su fe católica y el testimonio del Evangelio en sus vidas.',
        color: 'blue',
        showButton: true,
        imagenes: [
            'imagen/grupos-parroquiales/C-Albernia/1.jpg',
            'imagen/grupos-parroquiales/C-Albernia/2.jpg',
            'imagen/grupos-parroquiales/C-Albernia/3.jpg',
            'imagen/grupos-parroquiales/C-Albernia/4.jpg',
            'imagen/grupos-parroquiales/C-Albernia/5.jpg'
        ],
        modalInfo:
            `
            <div class="text-justify">
            <p>Somos un lugar de crecimiento, apoyo y bienestar. Nos reunimos en la Parroquia <a href="templo.html" class="hover:text-blue-400 transition duration-300">San Miguel Arcángel</a>.</p>
            <br>
            <ul>
                <li><strong>Comunidad:</strong> Lunes a las 20:00</li>
            </ul>
            <br>
            <p>Ven y participa en nuestras actividades y encuentros diseñados para fomentar la unión y el desarrollo personal. No te pierdas esta oportunidad de conectar con otros y enriquecer tu vida espiritual y emocional.</p>
            <br>
            <p><strong>¡Te esperamos con los brazos abiertos!</strong></p>
            </div>    
        `
    },
    {
        id: 'neocatecumenal',
        nombre: 'Camino Neocatecumenal',
        descripcion: 'El Camino Neocatecumenal es un itinerario de formación católica que busca la renovación espiritual de los fieles y el fortalecimiento de su fe.',
        color: 'purple',
        showButton: true,
        imagenes: [
            'imagen/grupos-parroquiales/CN/1.jpg',
            'imagen/grupos-parroquiales/CN/2.jpg',
            'imagen/grupos-parroquiales/CN/3.jpg',
            'imagen/grupos-parroquiales/CN/4.jpg',
            'imagen/grupos-parroquiales/CN/5.jpg',
            'imagen/grupos-parroquiales/CN/6.jpg',
            'imagen/grupos-parroquiales/CN/7.jpg'
        ],
        modalInfo:
            `
            <div class="text-justify">
            <p>Nuestra <strong>Comunidad Neocatecumenal</strong> se reúne en la Parroquia <a href="templo.html" class="hover:text-blue-400 transition duration-300">San Miguel Arcángel</a>. Durante nuestras reuniones seguimos el siguiente itinerario:</p>
            <br>
            <ul>
                <li><strong>Celebración de la Palabra:</strong> Miércoles a las 20:00</li>
                <li><strong>Eucaristía:</strong> Sábados a las 20:00</li>
                <li><strong>Convivencia:</strong> Un domingo al mes</li>
            </ul>
            <br>
            <p>Es un espacio para profundizar en la fe y vivir una experiencia cristiana comunitaria. Para más información, visita la Notaría Parroquial.</p>
            </div>    
        `
    },
    {
        id: 'animacion-biblica',
        nombre: 'Escuela de Animación Bíblica',
        descripcion: 'Ofrecemos un espacio de encuentro y aprendizaje para todas aquellas personas interesadas en profundizar en el estudio y la comprensión de la Biblia. A través de clases interactivas y dinámicas, exploramos las Escrituras Sagradas en su contexto histórico y cultural, así como su relevancia y aplicación en nuestra vida cotidiana.',
        color: 'red',
        showButton: true,
        imagenes: [
            'imagen/grupos-parroquiales/EDAB/1.jpg',
            'imagen/grupos-parroquiales/EDAB/2.jpg',
            'imagen/grupos-parroquiales/EDAB/3.jpg',
            'imagen/grupos-parroquiales/EDAB/4.jpg',
            'imagen/grupos-parroquiales/EDAB/6.jpg',
            'imagen/grupos-parroquiales/EDAB/7.jpg',
            'imagen/grupos-parroquiales/EDAB/8.jpg',
            'imagen/grupos-parroquiales/EDAB/9.jpg',
            'imagen/grupos-parroquiales/EDAB/10.jpg'
        ],
        modalInfo:
            `
            <div class="text-justify">
            <p>Te invitamos a participar en nuestros cursos. Se llevan a cabo en la Parroquia <a href="templo.html" class="hover:text-blue-400 transition duration-300">San Miguel Arcángel</a> y en la Capilla <a href="templo.html" class="hover:text-blue-400 transition duration-300">Inmaculada Concepción de María</a>:</p>
            <br>
            <ul>
                <li><strong>Parroquia San Miguel Arcángel:</strong> Lunes y Viernes, 04:30 PM - 06:30 PM</li>
                <li><strong>Capilla Inmaculada Concepción de María:</strong> Martes, 04:30 PM - 06:30 PM</li>
            </ul>
            <br>
            <p>¡Esperamos contar contigo para estudiar y reflexionar sobre la Palabra de Dios! Para más detalles y para inscribirte, <a href="contacto.html" class="hover:text-blue-400 transition duration-300"><strong>Contáctanos</strong></a>.</p>
            </div> 
        `
    },
    {
        id: 'renovacion',
        nombre: 'Renovación Carismática Católica En El Espíritu Santo',
        descripcion: 'La RCCES es un movimiento dentro de la Iglesia Católica que busca vivir y compartir la experiencia del poder transformador del Espíritu Santo. En nuestras reuniones semanales, buscamos profundizar en la relación personal con Dios a través de la oración, la alabanza y la enseñanza de la Palabra de Dios.',
        color: 'indigo',
        showButton: true,
        imagenes: [
            'imagen/grupos-parroquiales/RCCES/1.jpg',
            'imagen/grupos-parroquiales/RCCES/2.jpg',
            'imagen/grupos-parroquiales/RCCES/3.jpg'
        ],
        modalInfo:
            `
            <div class="text-justify">
            <p>Nos reunimos en la Parroquia <a href="templo.html" class="hover:text-blue-400 transition duration-300">San Miguel Arcángel</a> para vivir momentos de transformación y espiritualidad. Te invitamos a ser parte de esta experiencia única donde juntos buscamos el fortalecimiento de nuestra fe y el profundo encuentro con Dios.</p>
            <br>
            <ul>
                <li><strong>Momentos de Formación:</strong> Miércoles, 08:30 PM</li>
                <li><strong>Asambleas de Oración:</strong> Viernes, 08:00 PM</li>
            </ul>
            <br>
            <p>¡Ven y únete a esta experiencia de fe y renovación!</p>  
            </div> 
        `
    },
    {
        id: 'amigas-auxiliadoras',
        nombre: 'Amigas Auxiliadoras',
        descripcion: 'Somos un grupo de mujeres comprometidas con el servicio a la comunidad y la promoción de la fe católica. Inspiradas en la figura de la Virgen María, su misión es brindar apoyo y asistencia a quienes más lo necesitan, a través de diversas obras de caridad y actividades pastorales.',
        color: 'teal',
        showButton: false,
        imagenes: [
            'imagen/grupos-parroquiales/AAUX/1.jpg',
            'imagen/grupos-parroquiales/AAUX/2.jpg'
        ],
        modalInfo: ''
    },
    {
        id: 'ebenezer',
        nombre: 'Ebenezer',
        descripcion: 'Ebenezer es un grupo de adolescentes y jóvenes que brinda espacios para compartir momentos de encuentro con Dios y convivencia con los demás, a través de pilares fundamentales de formación, con el objetivo de ser piedra de ayuda en las distintas realidades que se nos presentan.',
        color: 'amber',
        showButton: true,
        imagenes: [
            'imagen/grupos-parroquiales/Ebenezer/1.jpg',
            'imagen/grupos-parroquiales/Ebenezer/2.jpg',
            'imagen/grupos-parroquiales/Ebenezer/3.jpg',
            'imagen/grupos-parroquiales/Ebenezer/4.jpg',
            'imagen/grupos-parroquiales/Ebenezer/5.jpg',
            'imagen/grupos-parroquiales/Ebenezer/6.jpg'
        ],
        modalInfo:
            `
            <div class="text-justify">
                <p>Te invitamos a unirte a nuestras asambleas en la Parroquia <a href="templo.html" class="hover:text-blue-400 transition duration-300">San Miguel Arcángel</a>, donde compartimos momentos de fe, amistad y crecimiento personal. Es una excelente oportunidad para conectarte con otros jóvenes que comparten tus mismos intereses y fortalecer tu relación con Dios.</p>
                <br>
                <ul>
                    <li><strong>Asamblea:</strong> Sábados, 05:00 PM</li>
                    <li><strong>Participación en el Coro:</strong> Sábados, 07:00 PM</li>
                </ul>
                <br>
                <p>¡Es una gran oportunidad para crecer en la fe y hacer nuevos amigos que te acerquen cada día más a Dios!</p>
                <br>
            </div>

            <div class="text-center hover:text-blue-400 transition duration-300">
            <p>
                <a href="https://www.facebook.com/profile.php?id=100064752877285" target="_blank">
                    <i class="fab fa-facebook"></i>
                    <p class="text-center"><strong>Ebenezer "Piedra de ayuda"</strong></p>
                </a>
            </p>
            </div>
        `
    },
    {
        id: 'mmc',
        nombre: 'Movimiento Misionero Católico',
        descripcion: 'Somos un grupo que responde al llamado a una nueva evangelización tanto en adultos como jóvenes. Llendo al encuentro de los más alejados, marginados e indiferentes, atrayendo a todos a vivir un encuentro profundo y amoroso con Jesús nuestro amigo.',
        color: 'blue',
        showButton: true,
        imagenes: [
            'imagen/grupos-parroquiales/MMCJ/1.jpg',
            'imagen/grupos-parroquiales/MMCJ/2.jpg',
            'imagen/grupos-parroquiales/MMCJ/3.jpg',
            'imagen/grupos-parroquiales/MMCJ/4.jpg',
            'imagen/grupos-parroquiales/MMCJ/5.jpg',
            'imagen/grupos-parroquiales/MMCJ/6.jpg'
        ],
        modalInfo:
            `
            <div class="text-justify">
                <p><strong>Para adultos</strong>: Nos reunimos todos los martes a las 8:00 PM en la Parroquia <a href="templo.html" class="hover:text-blue-400 transition duration-300">San Miguel Arcángel</a>. Este es un espacio dedicado a la oración, la reflexión y el servicio misionero. Ven y comparte con nosotros la alegría de vivir y fortalecer nuestra fe en comunidad.</p>
                <br>
                <p><strong>Para jóvenes</strong>: Si eres joven, te invitamos a unirte al Movimiento Misionero Católico Juvenil (MMCJ). Nos encontramos todos los sábados a las 4:00 PM en la Parroquia <a href="templo.html" class="hover:text-blue-400 transition duration-300">San Miguel Arcángel</a>. Este grupo está pensado especialmente para ti, donde podrás crecer en tu compromiso misionero y en tu camino de evangelización junto a otros jóvenes.</p>
                <br>
            </div>

            <div class="text-center hover:text-blue-400 transition duration-300">
                <p>
                    <a href="https://www.facebook.com/mmcjtepic" target="_blank">
                        <i class="fab fa-facebook"></i>
                        <p class="text-center"><strong>MMCJ TEPIC</strong></p>
                    </a>
                </p>
            </div>
        `
    },
    {
        id: 'epa',
        nombre: 'Encuentro Para Adolescentes',
        descripcion: 'Somos un grupo dedicado a proporcionar un espacio seguro y enriquecedor para adolescentes y jóvenes, nos dedicamos a brindar momentos de encuentro, reflexión y crecimiento espiritual. Esto a través de actividades dinámicas, charlas, momentos de oración y convivencia fraterna.',
        color: 'cyan',
        showButton: true,
        imagenes: [
            'imagen/grupos-parroquiales/EPA/1.jpg',
            'imagen/grupos-parroquiales/EPA/2.jpg',
            'imagen/grupos-parroquiales/EPA/3.jpg',
            'imagen/grupos-parroquiales/EPA/4.jpg',
            'imagen/grupos-parroquiales/EPA/5.jpg'
        ],
        modalInfo:
            `
            <div class="text-justify">
                <h2>¡Ven y descubre la comunidad que Dios tiene para ti!</h2>
                <p>Nos reunimos en el Templo <a href="templo.html" class="hover:text-blue-400 transition duration-300">Inmaculada Concepción de María</a>, donde te invitamos a ser parte de un grupo lleno de vida y espiritualidad. Este es un espacio para compartir, crecer y fortalecer tu fe en un ambiente acogedor y lleno de amor.</p>
                <br>
                <ul>
                    <li><strong>Grupo:</strong> Sábados, 04:00 PM</li>
                    <li><strong>Participación en el Coro:</strong></li>
                    <ul>
                        <li>Domingos (Ensayo): 05:30 PM</li>
                        <li>Domingos: 06:30 PM</li>
                    </ul>
                </ul>
                <br>
                <p>Será un honor contar con su presencia y compartir juntos este camino de fe.</p>
            </div>
            <br>
            <div class="text-center hover:text-blue-400 transition duration-300">
                <p>
                    <a href="https://www.facebook.com/EPAXalisco" target="_blank">
                        <i class="fab fa-facebook"></i>
                        <p class="text-center"><strong>EPA Xalisco</strong></p>
                    </a>
                </p>
            </div>
        `
    }
];

function createGrupoElement(grupo) {
    return `
    
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">

        <h2 class="text-2xl font-semibold p-4 bg-${grupo.color}-600 text-white text-center">${grupo.nombre}</h2>

        <div class="slider-container relative h-64 overflow-hidden">

            <div class="slider flex transition-transform duration-300 ease-in-out">
                ${grupo.imagenes.map(img => `<img src="${img}" alt="${grupo.nombre}" class="w-full h-64 object-cover flex-shrink-0">`).join('')}
            </div>
            
            <button class="slider-btn prev absolute top-1/2 left-2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full z-10">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            <button class="slider-btn next absolute top-1/2 right-2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full z-10">
                <i class="fas fa-chevron-right"></i>
            </button>

        </div>

    <div class="p-6">

        <p class="text-gray-700 mb-4 text-justify">${grupo.descripcion}</p>
        ${grupo.showButton ? `
        
        <div class="text-right">
            <button class="bg-${grupo.color}-500 hover:bg-${grupo.color}-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out" onclick="openModal('${grupo.id}')">
                Más Información
            </button>
            </div>
            ` : ''}
        </div>

    </div>
    `;
}

function createModalElement(grupo) {
    return `
    <div id="modal-${grupo.id}" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-white p-8 max-w-md mx-auto rounded-lg shadow-xl">

            <h3 class="text-2xl font-bold mb-4 text-center text-${grupo.color}-600">${grupo.nombre}</h3>
            <p class="text-gray-700 mb-6 text-justify">${grupo.modalInfo}</p>

            <div class="text-center">
                <button onclick="closeModal('${grupo.id}')" class="px-4 py-2 bg-${grupo.color}-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-${grupo.color}-600 focus:outline-none focus:ring-2 focus:ring-${grupo.color}-300 mt-5">
                    Cerrar
                </button>
            </div>

        </div>
    </div>
    `;
}

function renderGrupos() {
    const gruposContainer = document.getElementById('grupos-container');
    const modalContainer = document.getElementById('modal-container');

    gruposData.forEach(grupo => {
        gruposContainer.innerHTML += createGrupoElement(grupo);
        modalContainer.innerHTML += createModalElement(grupo);
    });

    initializeSliders();
}

function initializeSliders() {
    const sliders = document.querySelectorAll('.slider-container');

    sliders.forEach(slider => {
        const slides = slider.querySelector('.slider');
        const prevBtn = slider.querySelector('.prev');
        const nextBtn = slider.querySelector('.next');
        let slideIndex = 0;

        function showSlide(index) {
            slides.style.transform = `translateX(-${index * 100}%)`;
        }

        prevBtn.addEventListener('click', () => {
            slideIndex = (slideIndex - 1 + slides.children.length) % slides.children.length;
            showSlide(slideIndex);
        });

        nextBtn.addEventListener('click', () => {
            slideIndex = (slideIndex + 1) % slides.children.length;
            showSlide(slideIndex);
        });
    });
}

function openModal(id) {
    document.getElementById('modal-overlay').classList.remove('hidden');
    document.getElementById(`modal-${id}`).classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal(id) {
    document.getElementById('modal-overlay').classList.add('hidden');
    document.getElementById(`modal-${id}`).classList.add('hidden');
    document.body.style.overflow = 'auto';
}

document.getElementById('modal-overlay').addEventListener('click', function () {
    const modals = document.querySelectorAll('[id^="modal-"]');
    modals.forEach(modal => {
        if (!modal.classList.contains('hidden')) {
            closeModal(modal.id.replace('modal-', ''));
        }
    });
});

window.addEventListener('click', function (event) {
    const modals = document.querySelectorAll('[id^="modal-"]');
    modals.forEach(modal => {
        if (event.target === modal) {
            closeModal(modal.id.replace('modal-', ''));
        }
    });
});

document.addEventListener('DOMContentLoaded', renderGrupos);