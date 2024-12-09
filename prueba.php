<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="css/sticky-ad.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="contacto.css">
    <link rel="stylesheet" href="css/loading.css">
    <link rel="stylesheet" href="complement.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body class="min-h-screen">

    <header class="sticky top-0 left-0 right-0 bg-black bg-opacity-90 z-40">
        <!-- Barra superior -->
        <div class="h-16 bg-black bg-opacity-90"></div>
        
        <div class="absolute top-2 right-2">
            <a href="index.html">
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

            <div class="text-center mb-12 mt-20">
                <img class="mx-auto h-32 w-auto mb-4" src="imagen/logo.jpg" alt="Logo de la Parroquia San Miguel">
                <h1 class="text-4xl font-bold text-white mb-2">Parróquia San Miguel, Xalisco</h1>
                <p class="text-xl text-white">Contacto e Información</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <section class="card p-8">
                    <h2 class="text-2xl font-semibold mb-6 text-gray-800 border-b pb-2">Información de Contacto</h2>
                    
                    <ul class="space-y-6">
                        <li class="flex items-center">
                            <div class="icon-circle bg-blue-500">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <a href="tel:+523112185228" target= "_blank">
                                    <p class="font-semibold text-gray-700">Número de Teléfono</p>
                                    <p class="text-gray-600 hover:text-blue-400 transition duration-300">+52 311 218 5228</p>
                                </a>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <div class="icon-circle bg-green-500">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <a href="https://maps.app.goo.gl/vxGT2aHTW1WCsxGF9" target="_blank">
                                    <p class="font-semibold text-gray-700">Dirección</p>
                                    <p class="text-gray-600 hover:text-blue-400 transition duration-300">Calle Niquel
                                        #46, Col. Morelos, Nayarit.</p>
                                </a>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <div class="icon-circle bg-red-500">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <a href="mailto:sanmiguelxalisco@gmail.com" target= "_blank"> 
                                    <p class="font-semibold text-gray-700">Correo Electrónico</p>
                                    <p class="text-gray-600 hover:text-blue-400 transition duration-3000">sanmiguelxalisco@gmail.com</p>
                                </a>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <div class="icon-circle bg-green-400">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div>
                                <a href="https://www.whatsapp.com/channel/0029VaAYyxiE50Uh2nlP2q2k" target="_blank">
                                    <p class="font-semibold text-gray-700">Canal de WhatsApp</p>
                                    <p class="text-gray-600 hover:text-blue-400 transition duration-300">Parroquia San
                                        Miguel, Xalisco.</p>
                                </a>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <div class="icon-circle bg-blue-600">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div>
                                <a href="https://www.facebook.com/SanMiguelLomasVerdes?mibextid=ZbWKwL" target="_blank">
                                    <p class="font-semibold text-gray-700">Página de Facebook</p>
                                    <p class="text-gray-600 hover:text-blue-400 transition duration-300">San Miguel
                                        Arcángel, Xalisco, Nay.</p>
                                </a>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <div class="icon-circle bg-green-400">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div>
                                <a href="https://wa.me/523112185228" target="_blank">
                                    <p class="font-semibold text-gray-700">Chat de WhatsApp</p>
                                    <p class="text-gray-600 hover:text-blue-400 transition duration-300">Parroquia San
                                        Miguel</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                    
                </section>

                <section class="card p-8">
                    <h2 class="text-2xl font-semibold mb-6 text-gray-800 border-b pb-2">Horarios Notaría Parroquial</h2>
                    <ul class="space-y-4">
                        <li class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-3 border-b">
                            <span class="font-semibold text-gray-700 mb-1 sm:mb-0">Lunes</span>
                            <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">Cerrado</span>
                        </li>
                        <li class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-3 border-b">
                            <span class="font-semibold text-gray-700 mb-1 sm:mb-0">Martes</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">04:00 pm - 07:00
                                pm</span>
                        </li>
                        <li class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-3 border-b">
                            <span class="font-semibold text-gray-700 mb-1 sm:mb-0">Miércoles</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">04:00 pm - 07:00
                                pm</span>
                        </li>
                        <li class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-3 border-b">
                            <span class="font-semibold text-gray-700 mb-1 sm:mb-0">Jueves</span>
                            <div class="flex flex-col items-end">
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm mb-1">10:00 am -
                                    01:00 pm</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">04:00 pm -
                                    07:00 pm</span>
                            </div>
                        </li>
                        <li class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-3 border-b">
                            <span class="font-semibold text-gray-700 mb-1 sm:mb-0">Viernes</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">04:00 pm - 07:00
                                pm</span>
                        </li>
                        <li class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-3 border-b">
                            <span class="font-semibold text-gray-700 mb-1 sm:mb-0">Sábado</span>
                            <div class="flex flex-col items-end">
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm mb-1">09:00 am -
                                    12:00 pm</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">04:00 pm -
                                    07:00 pm</span>
                            </div>
                        </li>
                        <li class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-3">
                            <span class="font-semibold text-gray-700 mb-1 sm:mb-0">Domingo</span>
                            <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">Cerrado</span>
                        </li>
                    </ul>
                </section>

                <br><br>
                
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
    
    <script src="js/sticky-ad.js"></script>
    <script src="menu.js"></script>
    <script src="footer.js"></script>
    <script src="autoscroll.js"></script>
    <script src="js/loading.js"></script>

</body>

</html>