<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ministros Extraordinarios</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="sticky-ad.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="ministros-extraordinarios.css">
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

        <main class="container mx-auto px-4 py-12">

            <div class="text-center mb-12 mt-2 font">
                <i class="fas fa-hand-holding-heart fa-5x mb-4 text-white"></i>
                <h1 class="text-4xl font-bold text-white mb-2">Ministros Extraordinarios de la Sagrada Comunión</h1>
                <p class="text-xl text-white">Alimentamos el alma y extendemos el amor de Cristo</p>
            </div>

            <section class="bg-white rounded-lg shadow-lg p-8 mb-12">
                
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2">
                        
                    <h2 class="text-3xl font-semibold mb-6 text-gray-800 text-center">¿Qué son los Ministros Extraordinarios?</h2>
                        <p class="text-gray-700 mb-4 text-lg text-justify">
                            Los Ministros Extraordinarios son un grupo de laicos formados e instituidos por el obispo para prestar un servicio exclusivo en su territorio parroquial, enfocándose principalmente en la atención de los enfermos.
                        </p>
                        <p class="text-gray-700 mb-4 text-lg text-justify">
                            Su misión es llevar la Sagrada Comunión a aquellos que no pueden asistir a la iglesia debido a enfermedad o incapacidad, brindando consuelo espiritual y manteniendo la conexión de estos fieles con la comunidad parroquial.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="imagen/ministros-extraordinarios/rosario.jpg" alt="Sacerdote" class="w-full rounded-lg shadow-md">
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-lg shadow-lg p-8 mb-12 max-w-6xl mx-auto">
                <div class="flex flex-col lg:flex-row gap-8 mb-8">
                    <div class="lg:order-2 lg:w-1/2">
                        <h2 class="text-3xl font-semibold mb-6 text-gray-800 text-center">Proceso de Atención</h2>
                        <h3 class="text-2xl font-semibold mb-4 text-blue-700 text-center">Para confesión y comunión:</h3>
                        <ol class="list-decimal list-inside text-gray-700 space-y-4 text-justify">
                            <li class="text-lg">El sacerdote acudirá al domicilio para confesar al enfermo. Este paso es esencial para la preparación espiritual del fiel.</li>
                            <li class="text-lg">Posteriormente, se asignará a un ministro extraordinario de la sagrada comunión para llevar periódicamente el viático (la Sagrada Comunión) al enfermo.</li>
                        </ol>
                    </div>
                    <div class="lg:order-1 lg:w-1/2">
                        <img src="imagen/ministros-extraordinarios/enfermo.jpg" alt="Enfermo" class="w-full h-auto rounded-lg shadow-md">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-8">
                    <div class="lg:w-1/2 bg-blue-100 border-l-4 border-blue-400 text-blue-700 p-4">
                        <h4 class="font-bold mb-2">Preparación para la confesión:</h4>
                        <p class="text-justify">Si ha pasado mucho tiempo desde tu última confesión, puedes solicitar una hoja de examen de conciencia (o puedes descargarla haciendo click aquí). Esta herramienta te ayudará a reflexionar y prepararte mejor para el sacramento de la reconciliación.</p>
                    </div>
                    <div class="lg:w-1/2 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4">
                        <p class="font-bold mb-2">Nota importante:</p>
                        <p class="text-justify">El enfermo o su familia deben dar su consentimiento explícito para recibir esta atención. Respetamos la voluntad y privacidad de cada persona.</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-lg shadow-lg p-8 mb-12 max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h2 class="text-3xl font-semibold mb-6 text-gray-800 text-center">Preparación para la Sagrada Comunión</h2>
                        <h3 class="text-2xl font-semibold mb-4 text-blue-700 text-center">En casa:</h3>
                        <ol class="list-decimal list-inside text-gray-700 space-y-4 text-justify">
                            <li class="text-lg">Preparar un pequeño altar con una imagen religiosa (por ejemplo, un crucifijo o una imagen de la Virgen María).</li>
                                <li class="text-lg">Colocar un cirio o vela (Esto solo si no hay tanque de oxígeno en la habitación por razones de seguridad).</li>
                                <li class="text-lg">Disponer un pequeño mantel blanco limpio donde se colocará el Santísimo Sacramento.</li>
                        </ol>
                    </div>
                    <div>
                        <img src="imagen/ministros-extraordinarios/altar.jpg" alt="Altar" class="w-full h-auto rounded-lg shadow-md">
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-purple-100 border-l-4 border-purple-500 text-purple-700 p-4">
                        <p class="font-bold mb-2">Consejo:</p>
                        <p class="text-justify">Crear un ambiente de recogimiento y oración ayudará al enfermo a recibir la Sagrada Comunión con mayor devoción.</p>
                    </div>
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4">
                        <h4 class="font-bold mb-2">Disposición espiritual:</h4>
                        <p class="text-justify">Además de la preparación física del espacio, es importante que el enfermo y los familiares presentes se preparen espiritualmente. Pueden rezar juntos antes de la llegada del ministro extraordinario, reflexionando sobre la importancia de recibir a Cristo en la Eucaristía.</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-3xl font-semibold mb-6 text-gray-800 text-center">Nuestro Coordinador</h2>
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/3">
                        <img src="imagen/ministros-extraordinarios/silueta.jpg" alt="Foto de Rogelio" class="w-full h-auto rounded-full shadow-lg">
                    </div>
                    <div class="md:w-2/3">
                        <h3 class="text-2xl font-semibold mb-4 text-blue-700">Rogelio Hernández García</h3>
                        <p class="text-gray-700 mb-4 text-lg text-justify">
                            Rogelio es nuestro dedicado coordinador de los Ministros Extraordinarios de la Sagrada Comunión. Con años de experiencia en el ministerio, Rogelio guía y organiza a nuestro equipo de ministros para asegurar que todos los enfermos y confinados en casa de nuestra parroquia reciban la atención espiritual que necesitan.
                        </p>
                        <p class="text-gray-700 mb-4 text-lg text-justify">
                            Su compromiso y compasión son fundamentales para el éxito de este importante ministerio en nuestra comunidad parroquial.
                        </p>
                    </div>
                </div>
            </section>

        </main>

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
    <script src="loading.js"></script>

</body>

</html>