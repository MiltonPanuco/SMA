<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Columbario</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="columbario.css">
    <link rel="stylesheet" href="loading.css">
    <link rel="stylesheet" href="complement.css">
    <link rel="stylesheet" href="sticky-ad.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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

    <div class="hero-background relative h-screen">
        <div class="overlay absolute inset-0"></div>

        <div class="relative z-10 h-full flex flex-col items-center justify-center text-center">
            <div class="px-4 text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-4 mt-20">Columbario <br> Inmaculada Concepción</h1>
                <p class="text-lg md:text-xl italic">Un lugar de paz y recuerdo para tus seres queridos</p>
            </div>
            <img src="imagen/columbario/cblanconegro.png" alt="Logo Columbario" class="w-1/2 lg:w-1/6 h-auto">
        </div>
    </div>

    <div class="hero-background2 relative">
        <div class="overlay absolute inset-0"></div>

        <div class="container relative m-auto py-12 px-4 sm:px-6 lg:px-8 max-w-7xl">

            <section id="sobre-nosotros" class="mb-20 bg-white bg-opacity-90 p-8 rounded-lg shadow-xl">
                <h2 class="text-3xl md:text-4xl font-semibold text-center mb-12 mt-4">Sobre Nosotros</h2>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="w-full md:w-1/2 mb-8 md:mb-0 slider-container">
                        <button class="slider-button slider-button-left" onclick="prevSlide()">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="slider-button slider-button-right" onclick="nextSlide()">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        <img src="imagen/columbario/5.jpg" alt="Columbario" class="rounded-lg shadow-lg w-full"
                            id="slider-image">
                        <video src="imagen/columbario/columbariovideo.mp4" controls
                            class="rounded-lg shadow-lg w-full hidden" id="slider-video">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12 text-justify">
                        <p class="text-lg mb-6">El columbario de la Inmaculada Concepción será un espacio sagrado y
                            sereno, diseñado para ofrecer un ambiente de paz y reflexión. Estará ubicado en un entorno
                            tranquilo y rodeado de naturaleza, destacándose por su arquitectura elegante y su atención
                            meticulosa a los detalles.</p>
                        <p class="text-lg mb-6">Al ingresar, los visitantes serán recibidos por una atmósfera de
                            solemnidad y calma, donde la luz suave y las delicadas decoraciones invitarán a la
                            contemplación.</p>
                        <p class="text-lg">"No os asombreís de esto, porque vendrá la hora cuando todos los que están en
                            los sepulcros oirán su voz; Y los que hicieron el bien saldrán a resurrección de vida, mas
                            los que hicieron el mal, a resurrección de condenación."<br><em>- Juan 5, 28-29</em></p>
                    </div>
                </div>
            </section>

            <section id="servicios" class="mb-20 bg-white bg-opacity-90 p-8 rounded-lg shadow-xl">
                <h2 class="text-3xl md:text-4xl font-semibold text-center mb-12 mt-4">Nuestros Servicios</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <i class="bi bi-flower1 service-icon"></i>
                        <h3 class="text-xl font-semibold mb-4">Lugar Digno</h3>
                        <p>Estará ubicado en un entorno sereno y tranquilo, con una arquitectura sobria y jardines
                            conmemorativos cuidadosamente diseñados para ofrecer un espacio de descanso digno y
                            respetuoso.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <i class="bi bi-heart service-icon"></i>
                        <h3 class="text-xl font-semibold mb-4">Atención Personalizada</h3>
                        <p>Ofreceremos asesoramiento individualizado y ceremonias religiosas para honrar la vida única
                            de cada ser querido, acompañando a las familias con empatía y apoyo emocional en cada paso
                            del proceso.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <i class="bi bi-building service-icon"></i>
                        <h3 class="text-xl font-semibold mb-4">Instalaciones Modernas</h3>
                        <p>Contaremos con tecnología innovadora, diseño ergonómico y un enfoque en la sostenibilidad
                            ambiental, asegurando un ambiente reconfortante y respetuoso con el medio ambiente para las
                            futuras generaciones.</p>
                    </div>
                </div>
            </section>

            <section id="contribuciones" class="bg-white bg-opacity-90 p-8 rounded-lg shadow-xl">

                <h2 class="text-3xl md:text-4xl font-semibold text-center mb-12 mt-4">Contribuciones</h2>

                <div class="max-w-3xl mx-auto">

                    <p class="text-lg mb-2 text-center italic text-gray-600">Elija el plan que mejor se adapte a sus necesidades</p>

                    <div id="contributionDetails" class="text-center bg-gray-100 p-8 rounded-lg shadow-md">
                        <p class="text-3xl font-bold mb-4">$1,150 MXN / mes</p>
                        <p class="text-xl text-gray-600">12 Aportaciones mensuales fijas</p>
                    </div>

                    <div class="mt-5">
                        <div class="flex flex-wrap justify-center gap-4">
                            <button
                                class="contribution-option px-8 py-4 bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 active text-lg font-medium transition-all duration-300"
                                data-months="12">12 Meses</button>
                            <button
                                class="contribution-option px-8 py-4 bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg font-medium transition-all duration-300"
                                data-months="24">24 Meses</button>
                            <button
                                class="contribution-option px-8 py-4 bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg font-medium transition-all duration-300"
                                data-months="36">36 Meses</button>
                        </div>
                    </div>

                    <p class="mt-6 text-sm text-gray-500 text-center max-w-2xl mx-auto mb-12">
                        Nota: La entrega del título de derecho de uso de la cripta para alojar las cenizas será hasta
                        que se hayan cumplido todas las aportaciones elegidas; posteriormente, se podrá escoger la
                        ubicación de la misma.
                    </p>

                    <div class="text-center">
                        <a href="https://wa.me/+5213112185228?text=Información%20sobre%20las%20criptas%20en%20Inmaculada%20Concepción%20de%20María"
                            id="whatsappButton" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center text-base">
                            <i class="fab fa-whatsapp mr-2 text-xl"></i>
                            <span>Más información</span>
                        </a>
                    </div>

                </div>
            </section>

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
    <script src="columbario.js"></script>
    <script src="autoscroll.js"></script>
    <script src="loading.js"></script>

</body>

</html>