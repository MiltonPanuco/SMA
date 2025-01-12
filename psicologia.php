<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Psicología</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="sticky-ad.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="psicologia.css">
    <link rel="stylesheet" href="loading.css">
    <link rel="stylesheet" href="complement.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>

    <header class="sticky top-0 left-0 right-0 bg-black bg-opacity-90 z-40">
        <!-- Barra superior -->
        <div class="h-16 bg-black bg-opacity-90"></div>
        
        <div class="absolute top-2 right-2">
            <a href="index.php">
                <img src="imagen/logo-blancoynegro.png" alt="Logo San Miguel Arcángel" class="h-12 w-auto object-contain">
            </a>
        </div>

        <!-- Cargando -->
        <div id="loader-wrapper">
            <div id="loader" aria-label="Cargando"></div>
            <p id="loading-text" aria-live="polite"></p>
        </div>

        <!-- Menú hamburguesa -->
        <div id="menu-button" class="absolute top-5 left-4 cursor-pointer">
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Drawer del menú -->
        <div id="menu-drawer" class="drawer bg-black bg-opacity-90 text-white z-40">
            <nav class="flex flex-col h-full px-8 py-8">
                <ul id="menu-list" class="text-white w-full">
                    <!-- Cargado con JS -->
                </ul>
            </nav>
        </div>
    </header>

    <div class="overlay min-h-screen py-12 px-4 sm:px-6 lg:px-8 font-sans">
        <div class="max-w-6xl mx-auto">

            <div class="text-center mb-5 mt-20 font">
                <i class="fas fa-brain fa-5x mb-4 text-white"></i>
                <h1 class="text-3xl font-semibold text-white mb-2">Psicología Cristiana</h1>
                <p class="text-xl text-white">Expertos para ayudarte a mejorar tu salud mental de la mano de Dios.</p>
            </div>

            <div class="text-center mb-12 text-gray-100 text-lg italic">
                Si requieres de una cita psicológica, 
                <a href="https://wa.me/523112185228?text=Información%20para%20agendar%20una%20cita%20psicológica" target="_blank" class=" hover:text-blue-400 transition duration-300 ease-in-out underline">
                    haz clic aquí
                </a>
                <br>
                (Si llevas un proceso particular con alguno de los psicólogos puedes agendar directamente en el perfil del psicólogo)
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-16" id="psychologists-container">
                <!-- Cargado con JS -->
            </div>

            <div class="bg-white bg-opacity-90 rounded-lg p-6 sm:p-8 mb-16 shadow-lg">
                
                <h2 class="text-3xl sm:text-4xl font-bold mb-8 text-center text-gray-800">La Importancia de la Salud Mental</h2>
                
                <div class="grid md:grid-cols-2 gap-8 sm:gap-12">
                    <div class="bg-blue-50 p-6 rounded-lg shadow">
                        <h3 class="text-xl sm:text-2xl font-semibold mb-4 text-blue-800">¿Por qué es importante la
                            psicología?</h3>
                        <p class="mb-4 text-gray-700 leading-relaxed">La psicología juega un papel crucial en nuestra
                            vida diaria, ayudándonos a entender nuestros pensamientos, emociones y comportamientos. A
                            través de la terapia y el autoconocimiento, podemos mejorar nuestra calidad de vida,
                            relaciones interpersonales y bienestar general.</p>
                        <p class="text-gray-700 leading-relaxed">En nuestra parroquia, creemos que el cuidado de la
                            salud mental es tan importante como el cuidado del alma. Nuestros psicólogos están
                            comprometidos a brindar apoyo profesional con un enfoque que respeta e integra la fe
                            católica.</p>
                    </div>
                    <div class="bg-green-50 p-6 rounded-lg shadow">
                        <h3 class="text-xl sm:text-2xl font-semibold mb-4 text-green-800">Beneficios de la terapia
                            psicológica</h3>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Mejora la autoestima y la confianza en uno mismo</li>
                            <li>Ayuda a manejar el estrés y la ansiedad</li>
                            <li>Fortalece las relaciones personales y familiares</li>
                            <li>Proporciona herramientas para la resolución de conflictos</li>
                            <li>Fomenta el crecimiento personal y espiritual</li>
                            <li>Ayuda a superar traumas y experiencias difíciles</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="bg-white bg-opacity-90 rounded-lg p-6 sm:p-8 mb-16 shadow-lg">
                
                <h3 class="text-2xl sm:text-3xl font-semibold mb-6 text-center text-gray-800">Contáctanos</h3>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <p class="text-gray-800 mb-4">Estamos aquí para apoyarte en tu camino hacia el bienestar
                            emocional y espiritual. No dudes en contactarnos para más información o para agendar una
                            cita.</p>
                        <p class="text-gray-800">Nuestro equipo de profesionales está comprometido a brindarte el mejor
                            servicio y apoyo en tu proceso de crecimiento personal. Ya sea que necesites terapia
                            individual, de pareja o familiar, estamos aquí para escucharte y ayudarte.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3 text-gray-800 hover:text-blue-400 transition duration-300">
                            <a href="tel:+523112185228" target= "_blank"><i class="fas fa-phone text-blue-500 text-xl"></i> &nbsp; +52 (311) 218-5228</a>
                        </div>
                        <div class="flex items-center space-x-3 text-gray-800 hover:text-blue-400 transition duration-300">
                            <a href="mailto:sanmiguelxalisco@gmail.com" target= "_blank"><i class="fas fa-envelope text-blue-500 text-xl"></i> &nbsp; sanmiguelxalisco@gmail.com</a>
                        </div>
                        <div class="flex items-center space-x-3 text-gray-800 hover:text-blue-400 transition duration-300">
                            
                            <a href="https://maps.app.goo.gl/q8xo1Ro7MdTaaziQ6" target= "_blank"><i class="fas fa-map-marker-alt text-blue-500 text-xl"></i> &nbsp; C. Níquel #46, Colonia Morelos</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-center">
                    <a href="https://wa.me/523112185228?text=Información para agendar una cita psicológica." target="_blank"
                        class="bg-green-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-600 transition duration-300 inline-flex items-center">
                        <i class="fab fa-whatsapp mr-2 text-xl"></i>
                        Escríbenos
                    </a>
                </div>
                
            </div>

        </div>

        <div id="aboutme-modal" class="modal">
            <div class="modal-content">
                <button onclick="closeModal('aboutme-modal')" class="modal-close">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="modal-image-container content-center">
                    <img id="aboutme-modal-image" src="" alt="" class="modal-image">
                </div>

                <div class="modal-info">
                    <h3 id="aboutme-modal-name" class="text-3xl font-bold text-gray-800 mb-2"></h3>
                    <p id="aboutme-modal-cedula" class="text-lg text-gray-800 font-semibold mb-4"></p>
                    <div class="space-y-4">
                        <p id="aboutme-modal-specialty" class="text-lg text-gray-600"></p>
                        <p id="aboutme-modal-description" class="text-lg text-gray-600 text-justify"></p>
                    </div>
                </div>

                <a id="aboutme-modal-whatsapp" href="" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 transition duration-300 flex items-center">
                    <i class="fab fa-whatsapp text-white text-lg mr-2"></i>
                    Agendar cita
                </a>
            </div>
        </div>

        <div id="details-modal" class="modal">
            <div class="modal-content detalles">
                <button onclick="closeModal('details-modal')" class="modal-close">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <h3 id="details-modal-name" class="text-2xl sm:text-3xl font-bold mb-4"></h3>

                <div id="details-modal-diplomas" class="mb-4">
                    <ul class="list-disc list-inside"></ul>
                </div>
                
                <a id="details-modal-whatsapp" href="" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 transition duration-300 flex items-center">
                    <i class="fab fa-whatsapp text-white text-lg mr-2"></i>
                    Agendar cita
                </a>
            </div>
        </div>

    </div>

    <!-- Anuncio pegajoso -->
    <div id="popup-ad" class="hidden">
        <div class="ad-content">
            <img id="ad-image" src="" alt="">
            <div class="ad-text">
                <h3 id="ad-title"></h3>
                <p id="ad-content"></p>
            </div>
            <div id="advent-candles" class="advent-candles hidden">
                <div class="candle purple" aria-label="Vela de Adviento 1"></div>
                <div class="candle purple" aria-label="Vela de Adviento 2"></div>
                <div class="candle pink" aria-label="Vela de Adviento 3"></div>
                <div class="candle purple" aria-label="Vela de Adviento 4"></div>
            </div>
            <button id="close-ad">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>

    <!-- Botón automático -->
    <button id="scrollToTop" class="transition duration-300 ease-in-out">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Footer -->
    <footer id="dynamic-footer" class="bg-gray-800 text-white py-8">
        <!-- Cargado con JS -->
    </footer>

    <script src="sticky-ad.js"></script>
    <script src="menu.js"></script>
    <script src="footer.js"></script>
    <script src="autoscroll.js"></script>
    <script src="psicologia.js"></script>
    <script src="loading.js"></script>

</body>

</html>