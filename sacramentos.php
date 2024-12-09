<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sacramentos</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="sticky-ad.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="sacramentos.css">
    <link rel="stylesheet" href="loading.css">
    <link rel="stylesheet" href="sacramentos.css">
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

    <div class="overlay min-h-screen py-12 px-4 sm:px-6 lg:px-8 font">
        <div class="max-w-7xl mx-auto">

            <div class="text-center mb-12 mt-20">
                <img class="mx-auto h-32 w-auto mb-4 text-white" src="imagen/sacramentos/imagen.png"
                    alt="Logo de la Parroquia San Miguel" style="filter: invert(1);">
                <h1 class="text-4xl font-bold text-white mb-2 ">Sacramentos</h1>
                <p class="text-xl text-white">La Gracia Divina</p>
            </div>

            <div id="sacramentos-container">
                <!-- Cargado con JS -->
            </div>

            <div class="bg-white bg-opacity-90 rounded-xl shadow-2xl overflow-hidden mt-20">
                <div class="p-8">
                    <h2 class="text-3xl font-semibold mb-12 text-gray-800 text-center">Información de Contacto</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="flex flex-col items-center">
                            <i class="fab fa-facebook-square text-4xl text-blue-600 mb-4"></i>
                            <a href="https://www.facebook.com/SanMiguelLomasVerdes" target="_blank"
                                class="hover:text-blue-500 transition duration-300">San Miguel Arcángel, Xalisco, Nay. </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <i class="fab fa-whatsapp text-4xl text-green-600 mb-4 "></i>
                            <a href="https://wa.me/523112185228?text=Información sobre los sacramentos." target="_blank"
                                class="hover:text-blue-500 transition duration-300">+52 (311) 218-5228</a>
                        </div>
                        <div class="flex flex-col items-center">
                            <i class="fas fa-globe text-4xl text-purple-600 mb-4"></i>
                            <a href="contacto.php" target="_blank"
                                class="hover:text-blue-500 transition duration-300">San Miguel Arcángel</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <template id="modal-template">
        <div class="modal fixed inset-0 bg-gray-900 bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white p-8 rounded-xl shadow-2xl max-w-2xl w-full m-4 relative">
                <button class="close-modal absolute top-4 right-4 text-gray-600 hover:text-red-800 transition duration-300 ease-in-out">
                    <i class="fas fa-times text-2xl"></i>
                </button>
                <h2 class="text-3xl font-bold mb-6 text-gray-800 text-center"></h2>
                <div class="modal-content space-y-6">
                    <!-- Cargado con JS -->
                </div>
            </div>
        </div>
    </template>

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
    <script src="sacramentos.js"></script>
    <script src="autoscroll.js"></script>
    <script src="loading.js"></script>

</body>

</html>