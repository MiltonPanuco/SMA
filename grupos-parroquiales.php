<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Grupos Parroquiales</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="sticky-ad.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="grupos-parroquiales.css">
    <link rel="stylesheet" href="loading.css">
    <link rel="stylesheet" href="complement.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap">
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

    <div id="app" class="overlay min-h-screen py-12 px-4 sm:px-6 lg:px-8 font">
        <div class="max-w-6xl mx-auto">

            <div class="text-center mb-12 mt-20 font">
                <i class="fas fa-praying-hands fa-5x mb-4 text-white"></i>
                <h1 class="text-4xl font-bold text-white mb-2">Grupos Parroquiales</h1>
                <p class="text-xl text-white">Descubre nuestros grupos parroquiales y únete a nuestra comunidad de fe,
                    servicio y fraternidad.</p>
                </div>

            <div id="grupos-container" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Cargado con JS -->
            </div>

        </div>
    </div>

    <!-- Modales -->
    <div id="modal-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden z-40"></div>

    <div id="modal-container">
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

    <script src="sticky-ad.js"></script>
    <script src="menu.js"></script>
    <script src="footer.js"></script>
    <script src="grupos-parroquiales.js"></script>
    <script src="autoscroll.js"></script>
    <script src="loading.js"></script>

</body>

</html>