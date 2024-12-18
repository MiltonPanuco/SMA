<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Informes</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="sticky-ad.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="informes.css">
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

    <div class="overlay min-h-screen py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br bg-opacity-80">
        <div class="max-w-6xl mx-auto">

            <div class="text-center mb-12 mt-20 font">
                <i class="fas fa-cross fa-5x mb-4 text-white"></i>
                <h1 class="text-4xl font-bold text-white mb-2">Catequesis</h1>
                <p class="text-xl text-white">Conocer mas a Dios...</p>
            </div>

            <!-- Sección Adultos -->
            <section id="adultos" class="mb-16 bg-white rounded-lg shadow-xl overflow-hidden border-l-4 border-blue-600">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 flex-shrink-0">
                        <img class="h-full w-full object-cover" src="imagen/informes/adultos.jpg" alt="Catequesis para Adultos">
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Catequesis Catecumenos (Adultos)</h2>
                        <ul class="space-y-2 text-gray-600 mb-4">
                            <li><i class="fas fa-clock mr-2 text-blue-600"></i>Viernes 07:00 pm - 09:00pm; Domingo 09:00 am - 11:00 am.</li>
                            <li><i class="fas fa-calendar-alt mr-2 text-blue-600"></i>Duración: De 6 meses a un año.</li>
                            <li><i class="fas fa-users mr-2 text-blue-600"></i>Edad: +15 Años.</li>
                            <li><i class="fas fa-book mr-2 text-blue-600"></i>Temas: Doctrina de la Iglesia, Biblia, Moral Cristiana.</li>
                            <li><i class="fas fa-chalkboard-teacher mr-2 text-blue-600"></i>Metodología: Clases interactivas, debates, reflexiones grupales y más.</li>
                        </ul>
                        <div class="flex justify-end">
                            <button id="openModalAdultos" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Documentos Requeridos
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal para Adultos -->
            <div id="documentModalAdultos"
                class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden overflow-y-auto h-full w-full flex items-center justify-center z-50">
                <div class="relative p-5 border w-96 shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Documentos Requeridos para Adultos</h3>
                        <div class="mt-2 px-7 py-3">
                            <ul class="text-sm text-gray-500 list-disc text-left">
                                <li>Acta de nacimiento (copia)</li>
                                <br>
                                <li class="italic font-semibold">Dependiendo del sacramento que recibirá:</li>
                                <li>Acta de bautizo (copia)</li>
                                <li>Acta de comunión (copia)</li>
                            </ul>
                        </div>
                        <p class="mt-4 text-sm text-gray-600 italic text-center">Nota: Para registrarse, por favor acuda
                            a la notaría parroquial con los documentos requeridos.</p>
                        <div class="items-center px-4 py-3">
                            <button id="closeModalAdultos"
                                class="px-4 py-2 bg-blue-600 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
                                Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección Niños -->
            <section id="ninos" class="mb-16 bg-white rounded-lg shadow-xl overflow-hidden border-l-4 border-green-600">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 flex-shrink-0">
                        <img class="h-full w-full object-cover" src="imagen/informes/niños.jpg" alt="Catequesis para Niños">
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Catequesis Escolarizada Dominical (Niños)</h2>
                        <ul class="space-y-2 text-gray-600 mb-4">
                            <li><i class="fas fa-clock mr-2 text-green-600"></i>Jueves 4:30 pm - 6:30 pm; Sábado 09:00 am - 10:30 am; Sábado 11:00 am - 12:30 pm.</li>
                            <li><i class="fas fa-users mr-2 text-green-600"></i>Grupos: Primera Comunión, Confirmación, Grupos especiales para niños que no han realizado algun sacramento.</li>
                            <li><i class="fas fa-child mr-2 text-green-600"></i>Edades: +7 Años.</li>
                            <li><i class="fas fa-puzzle-piece mr-2 text-green-600"></i>Actividades: Juegos educativos, manualidades, cantos religiosos y más.</li>
                            <li><i class="fas fa-book-open mr-2 text-green-600"></i>Material: Libro de catequesis adaptados por edades.</li>
                        </ul>
                        <div class="flex justify-end">
                            <button id="openModal" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Documentos Requeridos
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal Niños -->
            <div id="documentModalNinos"
                class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden overflow-y-auto h-full w-full flex items-center justify-center z-50">
                <div class="relative p-5 border w-96 shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Documentos Requeridos</h3>
                        <div class="mt-2 px-7 py-3">
                            <ul class="text-sm text-gray-700 list-disc text-left">
                                <li>Acta de nacimiento (copia)</li>
                                <br>
                                <li class="italic font-semibold">Dependiendo del grupo al que entran:</li>
                                <li>Acta de bautizo (copia)</li>
                                <li>Acta de comunión (copia)</li>
                            </ul>
                        </div>
                        <p class="mt-4 text-sm text-gray-500 italic text-center">Nota: Para registrarse, por favor acuda
                            a la notaría parroquial con los documentos requeridos.</p>
                        <div class="items-center px-4 py-3">
                            <button id="closeModal" class="px-4 py-2 bg-green-600 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300">
                                Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white bg-opacity-90 rounded-lg p-6 sm:p-8 mb-16 shadow-lg">
                
                <div class="text-center">
                    <h3 class="text-2xl sm:text-3xl font-semibold text-gray-800">Contáctanos</h3>
                
                    <a href="https://forms.gle/wavFWZzTsngBP2YQ7" target="_blank" class="mb-6 inline-flex text-blue-600 hover:underline hover:text-blue-800 transition-colors text-center">
                        ¿Te gustaría ser maestro/a de catecismo? ¡Regístrate aquí!
                    </a>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <p class="text-gray-800 mb-4">¡Te invitamos a formar parte de nuestra catequesis para niños y adultos! Un espacio para crecer en la fe, conocer más a Jesús y vivir en comunidad. No importa tu edad, siempre hay una oportunidad para aprender y fortalecer tu camino espiritual. ¡Inscríbete y acompáñanos en esta hermosa experiencia de encuentro con Dios!</p>
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

                <div class="mt-12 text-center">
                    <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="contacto.php" class="inline-block bg-blue-500 text-white text-base font-semibold px-6 py-3 rounded-full hover:bg-blue-800 transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                            <i class="fas fa-envelope mr-2"></i>Contáctanos
                        </a>
                        <a href="https://wa.me/523112185228?text=Información sobre grupos de catequesis." class="inline-block bg-green-500 text-white text-base font-semibold px-6 py-3 rounded-full hover:bg-green-800 transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
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
    <script src="footer.js"></script>
    <script src="informes.js"></script>
    <script src="autoscroll.js"></script>
    <script src="loading.js"></script>

</body>

</html>