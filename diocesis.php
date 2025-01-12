<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nuestra Diócesis</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="sticky-ad.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="diocesis.css">
    <link rel="stylesheet" href="loading.css">
    <link rel="stylesheet" href="complement.css">
</head>

<body class="font-sans text-gray-800">

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

            <div class="text-center mb-12 mt-20">
                <img class="mx-auto h-32 w-auto mb-4" src="imagen/diocesis/diocesis.png" alt="Imagen Diocesis" style="filter: invert(1);">
                <h1 class="text-4xl font-bold text-white mb-2">Diócesis de Tepic</h1>
                <p class="text-xl text-white">Conoce Más...</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Nuestra Diócesis -->
                <div class="bg-white bg-opacity-90 rounded-xl shadow-2xl overflow-hidden">
                    <div class="p-8">
                        <h2 class="text-3xl font-semibold mb-6 text-gray-800 text-center">Nuestra Diócesis</h2>
                        <div class="flex flex-col gap-6">
                            <img src="imagen/diocesis/logodiocesis.jpg" alt="Catedral de Tepic"
                                class="w-48 h-48 rounded-full shadow-lg border-4 border-blue-200 mx-auto">
                            <p class="text-lg leading-relaxed text-justify">
                                La Diócesis de Tepic es una jurisdicción eclesiástica católica que comprende una gran
                                extensión del estado de Nayarit y una pequeña fracción del estado de Jalisco, México. Su
                                historia se remonta al siglo XIX, cuando fue erigida como vicaría apostólica en 1881,
                                desmembrada de la Arquidiócesis de Guadalajara. Más tarde, en 1891, fue elevada al rango
                                de diócesis. Su sede episcopal se ubica en la ciudad de Tepic, Nayarit. A lo largo de su
                                historia, la diócesis ha jugado un papel crucial en la vida religiosa, social y cultural
                                de la región, promoviendo valores católicos y contribuyendo al desarrollo de la
                                comunidad. Los obispos que han dirigido la Diócesis de Tepic a lo largo de los años han
                                enfrentado diversos desafíos, desde cuestiones pastorales hasta asuntos sociales y
                                políticos. Han trabajado para fortalecer la fe católica entre los fieles, así como para
                                abordar las necesidades de los más vulnerables en la sociedad. Hoy en día, la Diócesis
                                de Tepic continúa desempeñando un papel activo en la vida espiritual y social de la
                                región, brindando apoyo espiritual, educativo y de desarrollo a través de sus
                                parroquias, instituciones educativas y proyectos pastorales. Su legado histórico y su
                                compromiso con la fe y el servicio siguen siendo fundamentales para la comunidad
                                católica en la instauración de la Civilización de Amor.
                            </p>
                            <a href="https://diocesisdetepic.mx" target="_blank"
                                class="text-blue-600 hover:underline text-lg font-medium inline-flex items-center justify-center w-full">
                                Leer más sobre nuestra historia
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Nuestro Obispo -->
                <div class="bg-white bg-opacity-90 rounded-xl shadow-2xl overflow-hidden">
                    <div class="p-8">
                        <h2 class="text-3xl font-semibold mb-6 text-gray-800 text-center">Nuestro Obispo</h2>
                        <div class="flex flex-col gap-6">
                            <img src="imagen/diocesis/obispo.jpg" alt="Obispo Luis Artemio Flores Calzada"
                                class="w-48 h-48 rounded-full shadow-lg border-4 border-blue-200 mx-auto">
                            <h3 class="text-xl font-semibold mb-2 text-blue-600 text-center">Obispo Luis Artemio Flores
                                Calzada</h3>
                            <p class="text-lg leading-relaxed mb-4 text-justify">
                                Monseñor Luis Artemio nació el 28 de abril de 1949 en San Antonio Tultitlán, Estado de
                                México. Ingresó al Seminario Conciliar de Texcoco en 1961 y continuó sus estudios en
                                Durango hasta 1973, recibió el diaconado en 1973 y luego el presbiterado en 1974.
                                Durante su ministerio, ocupó varios roles pastorales y académicos, incluyendo la
                                enseñanza de Filosofía y el desempeño como párroco en distintas localidades. Obtuvo una
                                licenciatura en Teología Dogmática en la Pontificia Universidad Gregoriana y un diploma
                                en Sagrada Escritura en Jerusalén. También se formó en Filosofía y Derecho Canónico en
                                instituciones mexicanas y romanas. De regreso a México, ocupó diversos cargos
                                diocesanos, incluyendo el de Vicario General en la Diócesis de Texcoco. Cuando la sede
                                episcopal de Texcoco quedó vacante, fue nombrado Administrador Diocesano.
                                Posteriormente, bajo el liderazgo de Monseñor Carlos Aguiar Retes, volvió a ser Vicario
                                General y más tarde Rector del Seminario Diocesano. En el año 2003, fue designado como
                                el primer Obispo de la Diócesis de Valle de Chalco, siendo consagrado ese mismo año. Fue
                                nombrado como VIII Obispo de la Diócesis de Tepic, tomando posesión el 30 de marzo del
                                2012.
                            </p>
                            <a href="https://diocesisdetepic.mx/obispos/mons-luis-artemio-flores-calzada/"
                                target="_blank"
                                class="text-blue-600 hover:underline text-lg font-medium inline-flex items-center justify-center w-full">
                                Conocer más sobre nuestro obispo
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Información de Contacto -->
            <div class="bg-white bg-opacity-90 rounded-xl shadow-2xl overflow-hidden mt-20">
                <div class="p-8">
                    <h2 class="text-3xl font-semibold mb-12 text-gray-800 text-center">Información de Contacto</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="flex flex-col items-center">
                            <i class="fab fa-facebook-square text-4xl text-blue-600 mb-4"></i>
                            <a href="https://www.facebook.com/DiocesisTepic" target="_blank"
                                class="hover:text-blue-500 transition duration-300">Diócesis de Tepic</a>
                        </div>
                        <div class="flex flex-col items-center">
                            <i class="fas fa-phone-alt text-4xl text-green-600 mb-4 "></i>
                            <a href="https://maps.app.goo.gl/ddA6oDjVXB8P7bJR7" target="_blank"
                                class="hover:text-blue-500 transition duration-300">+52 (311) 214-4645</a>
                        </div>
                        <div class="flex flex-col items-center">
                            <i class="fas fa-globe text-4xl text-purple-600 mb-4"></i>
                            <a href="https://diocesisdetepic.mx" target="_blank"
                                class="hover:text-blue-500 transition duration-300">diocesisdetepic.mx</a>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>

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