<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monaguillos</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="sticky-ad.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="monaguillos.css">
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

    <div class="overlay min-h-screen py-12 px-4 sm:px-6 lg:px-8 font">
        <div class="max-w-6xl mx-auto">

            <div class="text-center mb-12 mt-20 font">
                <i class="fas fa-child fa-5x mb-4 text-white"></i>
                <h1 class="text-4xl font-bold text-white mb-2">Monaguillos</h1>
                <p class="text-xl text-white">Buscar y perseguir la paz</p>
            </div>

            <div class="bg-white bg-opacity-90 p-8 rounded-lg shadow-2xl">

                <!-- Slider de imagenes -->
                <div class="relative w-full h-[400px] mb-8">
                    
                    <div id="imageSlider" class="w-full h-full overflow-hidden rounded-lg">
                        <!-- Cargado con JS -->
                    </div>
                    
                    <div id="sliderDots" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                        <!-- Cargado con JS -->
                    </div>

                    <button id="prevButton"
                        class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 p-2 rounded-full">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="nextButton"
                        class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 p-2 rounded-full">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div class="space-y-8">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md border-l-4 border-blue-500">
                            <h2 class="text-2xl font-semibold mb-4 text-gray-800"><i
                                    class="fas fa-church mr-2 text-blue-500"></i>Servicio del Altar</h2>
                            <p class="text-gray-700">Como monaguillo, tendrás el privilegio de servir en el altar
                                durante las eucaristías, ayudando al sacerdote en las tareas litúrgicas esenciales.
                                Serás una parte importante de la ceremonia, contribuyendo al buen desarrollo de la misa
                                y creando un ambiente de reverencia. Este servicio te permitirá profundizar en tu fe,
                                fortalecer tu vida espiritual y adquirir valores como la humildad, el compromiso y la
                                colaboración.</p>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg shadow-md border-l-4 border-green-500">
                            <h2 class="text-2xl font-semibold mb-4 text-gray-800"><i
                                    class="fas fa-calendar-alt mr-2 text-green-500"></i>Clases y Formación</h2>
                            <p class="text-gray-700">Ofrecemos clases de formación todos los viernes de 04:30 PM a 06:00
                                PM, donde aprenderás sobre la liturgia y tu papel como monaguillo.</p>
                            <p class="text-gray-700 mt-4">Puedes ser parte del equipo de Fútbol o de Balet Folclórico,
                                nos reunimos todos los lunes y miercoles de 04:00 PM a 05:30 PM.</p>
                        </div>
                    </div>

                    <div class="space-y-8">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md border-l-4 border-yellow-500">
                            <h2 class="text-2xl font-semibold mb-4 text-gray-800"><i
                                    class="fas fa-star mr-2 text-yellow-500"></i>Requisitos</h2>
                            <ul class="list-disc list-inside text-gray-700 space-y-2">
                                <li>Tener buenas calificaciones en la escuela y mejorar en la medida de lo posible</li>
                                <li>Mostrar un comportamiento respetuoso y responsable</li>
                                <li>Compromiso para asistir regularmente a las misas y clases de formación</li>
                                <li>Deseo sincero de servir a Dios y a la comunidad</li>
                                <li>Tener de 5 años en adelante</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg shadow-md border-l-4 border-purple-500">
                            <h2 class="text-2xl font-semibold mb-4 text-gray-800"><i
                                    class="fas fa-hands-helping mr-2 text-purple-500"></i>Beneficios</h2>
                            <ul class="list-disc list-inside text-gray-700 space-y-2">
                                <li>Profundizar tu fe y conocimiento de la liturgia</li>
                                <li>Desarrollar habilidades de liderazgo y trabajo en equipo</li>
                                <li>Formar parte de una comunidad de jóvenes comprometidos</li>
                                <li>Formar parte de actividades recreativas (fútbol / balet)</li>
                                <li>Oportunidades de crecimiento personal y espiritual</li>
                                <li>Servir a tu parroquia de una manera significativa</li>
                                <li>Apoyo psicológico grupal</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="contacto.php" class="inline-block bg-blue-500 text-white text-base font-semibold px-6 py-3 rounded-full hover:bg-blue-800 transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                            <i class="fas fa-envelope mr-2"></i>Contáctanos
                        </a>
                        <a href="https://wa.me/523112185228?text=Información sobre grupo de monaguillos." class="inline-block bg-green-500 text-white text-base font-semibold px-6 py-3 rounded-full hover:bg-green-800 transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                            <i class="fab fa-whatsapp mr-2"></i>Escríbenos
                        </a>
                    </div>
                </div>
                
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
    <script src="monaguillos.js"></script>
    <script src="footer.js"></script>
    <script src="autoscroll.js"></script>
    <script src="loading.js"></script>

</body>

</html>