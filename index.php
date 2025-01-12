<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>San Miguel Arcángel</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="loading.css">
    <link rel="stylesheet" href="complement.css">
    <link rel="stylesheet" href="sticky-ad.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
    </style>

</head>

<body class="bg-gray-100">

    <header>
        <!-- Barra superior -->
        <div class="fixed top-0 left-0 right-0 h-16 bg-black bg-opacity-90 z-40"></div>

        <div class="fixed top-2 right-2 z-50">
            <a href="index.php">
                <img src="imagen/logo-blancoynegro.png" alt="Logo San Miguel Arcángel"
                    class="h-12 w-auto object-contain">
            </a>
        </div>

        <!-- Cargando -->
        <div id="loader-wrapper">
            <div id="loader" aria-label="Cargando"></div>
            <p id="loading-text" aria-live="polite"></p>
        </div>

        <!-- Menú hamburguesa -->
        <div id="menu-button" class="fixed top-5 left-4 z-50 cursor-pointer">
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Drawer del menú -->
        <div id="menu-drawer" class="fixed bg-black bg-opacity-90 text-white z-40 drawer">
            <nav class="flex flex-col h-full px-8 py-8">
                <ul id="menu-list" class="text-white w-full">
                    <!-- Cargado con JS -->
                </ul>
            </nav>
        </div>
    </header>

    <div class="swiper-container h-screen relative">
        <div class="swiper-wrapper">

            <div class="swiper-slide bg-cover bg-center" style="background-image: url('imagen/index/general.jpg');">
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-2 slide-text title">Diócesis de Tepic</h2>
                    <p class="text-base md:text-lg lg:text-xl slide-text"><em>Llevando el amor de Dios</em></p>
                </div>
            </div>
            <div class="swiper-slide bg-cover bg-center" style="background-image: url('imagen/index/psicologia.jpg');">
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-2 slide-text title">Psicología Cristiana
                    </h2>
                    <p class="text-base md:text-lg lg:text-xl slide-text"><em>Acompañamiento profesional desde la
                            fe</em></p>
                </div>
            </div>
            <div class="swiper-slide bg-cover bg-center" style="background-image: url('imagen/index/talleres.jpg');">
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-2 slide-text title">Talleres y Formación
                    </h2>
                    <p class="text-base md:text-lg lg:text-xl slide-text"><em>Creciendo juntos en la fe</em></p>
                </div>
            </div>
            <div class="swiper-slide bg-cover bg-center" style="background-image: url('imagen/index/monaguillos.jpg');">
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-2 slide-text title">Monaguillos</h2>
                    <p class="text-base md:text-lg lg:text-xl slide-text"><em>Sirviendo al Señor desde temprana
                            edad</em></p>
                </div>
            </div>
            
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>

    </div>

    <!-- Contenido adicional -->
    <div id="sizebanner">
        <?php include 'old-design.php'; ?>
    </div>

    <!-- Recomendaciones de aplicaciones -->
    <div id="app-recommendations-button"
        class="fixed bottom-4 left-4 z-30 bg-blue-600 text-white cursor-pointer transition duration-300 hover:bg-white hover:text-blue-600">
        <i class="fas fa-mobile-alt"></i>
    </div>
    <div id="app-recommendations" class="fixed bottom-16 left-4 z-30 bg-white p-4 rounded-lg shadow-lg hidden">
        <!-- Cargado con JS -->
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="index.js"></script>
    <script src="apps-recomendadas.js"></script>
    
    <script src="sticky-ad.js"></script>
    <script src="menu.js"></script>
    <script src="footer.js"></script>
    <script src="autoscroll.js"></script>
    <script src="loading.js"></script>

</body>

</html>
