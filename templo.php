<!DOCTYPE html>
<html lang="es" class="overflow-x-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Templos</title>
    <link rel="icon" href="imagen/logo.jpg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="sticky-ad.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="templo.css">
    <link rel="stylesheet" href="loading.css">
    <link rel="stylesheet" href="complement.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</head>

<body class="bg-gray-100">

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
        <div class="max-w-6xl mx-auto ">

            <div class="text-center mb-12 mt-20">
                <i class="fas fa-church fa-3x mb-4 text-white"></i>
                <h1 class="text-4xl font-bold text-white mb-2">Templos</h1>
                <p class="text-xl text-white">¿Dónde nos ubicamos?</p>
            </div>

            <main class="container mx-auto px-4 py-8">
                <div class="swiper-container main-temple-swiper">
                    <div class="swiper-wrapper">

                        <!-- Parroquia San Miguel Arcángel -->
                        <div class="swiper-slide" id="sma">
                            <div class="bg-white bg-opacity-90 rounded-lg shadow-lg overflow-hidden">

                                <div class="relative">
                                    <div class="swiper-container nested-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/sma/1.jpg" alt="Parroquia San Miguel Arcángel 1"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/sma/2.jpg" alt="Parroquia San Miguel Arcángel 2"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/sma/3.jpg" alt="Parroquia San Miguel Arcángel 3"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="lg:flex">
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <h2 class="text-2xl md:text-3xl font-bold mb-2 md:mb-4 text-gray-800">Parróquia
                                            San Miguel Arcángel</h2>
                                        <p class="text-gray-700 mb-4 md:mb-6 text-sm md:text-base">La Parroquia San
                                            Miguel Arcángel es una comunidad cristiana católica, eregida recientemente
                                            el 26 de agosto 2023. Es un centro de reunión para la comunidad local,
                                            ofreciendo servicios religiosos, sacramentos y actividades pastorales.
                                            Además de su función espiritual, la parroquia tiene un papel activo en la
                                            comunidad, participando en obras sociales, eventos culturales y programas
                                            educativos.</p>
                                        <div class="flex justify-between items-center">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 text-sm md:text-base"
                                                onclick="mostrarInformacion('parroquiaSMA')">
                                                Horarios
                                            </button>
                                            <div class="flex items-center">
                                                <a href="https://maps.app.goo.gl/KXnMSBEcaNrGcPtZ7" target="_blank"
                                                    class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">
                                                    <span class="mr-2 text-sm text-gray-600">Ver ubicación</span> <i
                                                        class="fas fa-map-marker-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <div id="map-parroquia" class="w-full h-64 lg:h-full rounded-lg shadow"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Templo 1 -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-90 rounded-lg shadow-lg overflow-hidden">

                                <div class="relative">
                                    <div class="swiper-container nested-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/icdm/1.jpg" alt="Templo 1 Imagen 1"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/icdm/2.jpg" alt="Templo 1 Imagen 2"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/icdm/3.jpg" alt="Templo 1 Imagen 3"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="lg:flex">
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <h2 class="text-2xl md:text-3xl font-bold mb-2 md:mb-4 text-gray-800">Capilla
                                            Inmaculada Concepción de Maria</h2>
                                        <p class="text-gray-700 mb-4 md:mb-6 text-sm md:text-base">La capilla es una
                                            construcción temporal, ya que tenemos un proyecto de construccón que busca
                                            favorecer una mejor atención pastoral y sacramental. Las áreas verdes
                                            favorecen un encuentro con Cristo y además se cuenta con un <a
                                                href="columbario.html"
                                                class="hover:text-blue-400 transition duration-300">Columbario</a> para
                                            el resguardo de las cenizas de los difuntos. En esta capilla también se
                                            tiene la devoción a la Virgen del Favor, patrona de los motociclistas y a
                                            San José, esposo de la Virgen María.</p>
                                        <div class="flex justify-between items-center">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 text-sm md:text-base"
                                                onclick="mostrarInformacion('temploICDM')">
                                                Horarios
                                            </button>
                                            <div class="flex items-center">
                                                <a href="https://maps.app.goo.gl/WLqVdi28Ho4Bp4uHA" class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out" onclick="abrirMapa('temploICDM')">
                                                    <span class="mr-2 text-sm text-gray-600">Ver ubicación</span>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <div id="map1" class="w-full h-64 lg:h-full rounded-lg shadow"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Templo 2 -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-90 rounded-lg shadow-lg overflow-hidden">

                                <div class="relative">
                                    <div class="swiper-container nested-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/nsl/1.jpg" alt="Templo 2 Imagen 1"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/nsl/2.jpg" alt="Templo 2 Imagen 2"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/nsl/3.jpg" alt="Templo 2 Imagen 3"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="lg:flex">
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <h2 class="text-2xl md:text-3xl font-bold mb-2 md:mb-4 text-gray-800">Capilla
                                            Nuestra Señora de la Luz</h2>
                                        <p class="text-gray-700 mb-4 md:mb-6 text-sm md:text-base">Este templo se
                                            construyó sobre un cerrito que permite una hermosa vista, que aunque es
                                            pequeña se ha
                                            construido con gran esfuerzo para tener las celebraciónes litúrgicas. Es una
                                            comunidad aún en construcción pero con fieles llenos de fe que trabajan en
                                            unidad.</p>
                                        <div class="flex justify-between items-center">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 text-sm md:text-base"
                                                onclick="mostrarInformacion('temploNSL')">
                                                Horarios
                                            </button>
                                            <div class="flex items-center">
                                                <a href="https://maps.app.goo.gl/Ayw8gzssnnz9YBbh8" target="_blank"
                                                    class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">
                                                    <span class="mr-2 text-sm text-gray-600">Ver ubicación</span> <i
                                                        class="fas fa-map-marker-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <div id="map2" class="w-full h-64 lg:h-full rounded-lg shadow"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Templo 3 -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-90 rounded-lg shadow-lg overflow-hidden">

                                <div class="relative">
                                    <div class="swiper-container nested-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/sjd/1.jpg" alt="Templo 3 Imagen 1"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/sjd/2.jpg" alt="Templo 3 Imagen 2"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/sjd/3.jpg" alt="Templo 3 Imagen 3"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/sjd/4.jpg" alt="Templo 3 Imagen 4"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="lg:flex">
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <h2 class="text-2xl md:text-3xl font-bold mb-2 md:mb-4 text-gray-800">Capilla
                                            San Juan
                                            Diego
                                        </h2>
                                        <p class="text-gray-700 mb-4 md:mb-6 text-sm md:text-base">Es una comunidad
                                            localizada en la periferia de la ciudad de Tepic, la cual cuenta con un
                                            templo amplio que favorece la celebraciones litúrgicas, sigue en
                                            construcción
                                            gracias a la participación de las mismas familias y al trabajo en equipo.
                                        </p>
                                        <div class="flex justify-between items-center">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 text-sm md:text-base"
                                                onclick="mostrarInformacion('temploSJD')">
                                                Horarios
                                            </button>
                                            <div class="flex items-center">
                                                <a href="https://maps.app.goo.gl/rjfHgM97ezFw7rQZ9" target="_blank"
                                                    class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">
                                                    <span class="mr-2 text-sm text-gray-600">Ver ubicación</span> <i
                                                        class="fas fa-map-marker-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <div id="map3" class="w-full h-64 lg:h-full rounded-lg shadow"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Templo 4 -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-90 rounded-lg shadow-lg overflow-hidden">

                                <div class="relative">
                                    <div class="swiper-container nested-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/nsdg/1.jpg" alt="Templo 4 Imagen 1"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/nsdg/2.jpg" alt="Templo 4 Imagen 2"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/nsdg/3.jpg" alt="Templo 4 Imagen 3"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="lg:flex">
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <h2 class="text-2xl md:text-3xl font-bold mb-2 md:mb-4 text-gray-800">Capilla
                                            Nuestra
                                            Señora
                                            de Guadalupe</h2>
                                        <p class="text-gray-700 mb-4 md:mb-6 text-sm md:text-base">Es un templo dedicado
                                            a nuestra Madre Santísima de Guadalupe, con un bello diseño y acogedor,
                                            donde
                                            se celebran continuamente Eucaristías y sacramentos. En una ubicación de
                                            fácil
                                            acceso, con una comunidad de fieles pequeña pero con mucho amor a Dios.</p>
                                        <div class="flex justify-between items-center">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 text-sm md:text-base"
                                                onclick="mostrarInformacion('temploNSDG')">
                                                Horarios
                                            </button>
                                            <div class="flex items-center">
                                                <a href="https://maps.app.goo.gl/8vxZ4ihQtQpCTw8k9" target="_blank"
                                                    class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">
                                                    <span class="mr-2 text-sm text-gray-600">Ver ubicación</span> <i
                                                        class="fas fa-map-marker-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <div id="map4" class="w-full h-64 lg:h-full rounded-lg shadow"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Templo 5 -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-90 rounded-lg shadow-lg overflow-hidden">

                                <div class="relative">
                                    <div class="swiper-container nested-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/rdm/1.jpg" alt="Templo 5 Imagen 1"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/rdm/2.jpg" alt="Templo 5 Imagen 2"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/rdm/3.jpg" alt="Templo 5 Imagen 3"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="lg:flex">
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <h2 class="text-2xl md:text-3xl font-bold mb-2 md:mb-4 text-gray-800">Capilla
                                            Nuestra
                                            Señora
                                            de Guadalupe Reina de México</h2>
                                        <p class="text-gray-700 mb-4 md:mb-6 text-sm md:text-base">Este templo, aunque
                                            modesto en tamaño, irradia una atmósfera acogedora que invita a la comunidad
                                            a congregarse en su seno. Sus acabados están meticulosamente diseñados para
                                            brindar un ambiente cálido y acogedor, creando un espacio propicio para la
                                            reflexión y la comunión espiritual.</p>
                                        <div class="flex justify-between items-center">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 text-sm md:text-base"
                                                onclick="mostrarInformacion('temploRDM')">
                                                Horarios
                                            </button>
                                            <div class="flex items-center">
                                                <a href="https://maps.app.goo.gl/ZPexuy6i1hQinsUY8" target="_blank"
                                                    class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">
                                                    <span class="mr-2 text-sm text-gray-600">Ver ubicación</span> <i
                                                        class="fas fa-map-marker-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <div id="map5" class="w-full h-64 lg:h-full rounded-lg shadow"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Templo 6 -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-90 rounded-lg shadow-lg overflow-hidden">

                                <div class="relative">
                                    <div class="swiper-container nested-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/mdb/1.jpg" alt="Templo 6 Imagen 1"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/mdb/2.jpg" alt="Templo 6 Imagen 2"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="imagen/templo/mdb/3.jpg" alt="Templo 6 Imagen 3"
                                                    class="w-full h-48 md:h-64 lg:h-80 object-cover">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="lg:flex">
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <h2 class="text-2xl md:text-3xl font-bold mb-2 md:mb-4 text-gray-800">Misa de
                                            barrio: Sagrada Familia de Nazareth</h2>
                                        <p class="text-gray-800 mb-4 md:mb-6 text-sm md:text-base">El territorio
                                            parroquial es grande, por lo que las necesidades de acercarnos a los fieles
                                            también lo es, debido a esto fue necesario empezar a celebrar en diferentes
                                            lugares
                                            para congregar a los fieles y poder ofrecer la vivencia de los sacramentos y
                                            de
                                            la formación de la fe. Con gran entusiasmo las familias ayudan a hacer
                                            posible
                                            las misas bajo la sombra de unos árboles.</p>
                                        <div class="flex justify-between items-center">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 text-sm md:text-base"
                                                onclick="mostrarInformacion('temploMDB')">
                                                Horarios
                                            </button>
                                            <div class="flex items-center">
                                                <a href="https://maps.app.goo.gl/wL7tau6iLdyuqarEA" target="_blank"
                                                    class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">
                                                    <span class="mr-2 text-sm text-gray-600">Ver ubicación</span> <i
                                                        class="fas fa-map-marker-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/2 p-4 md:p-6">
                                        <div id="map6" class="w-full h-64 lg:h-full rounded-lg shadow"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div id="TempleBtns" class="fixed bottom-4 left-0 right-0 flex justify-center space-x-4 z-10">
                    <button id="prevTempleBtn"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        <i class="fas fa-church mr-2"></i>Anterior
                    </button>
                    <button id="nextTempleBtn"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Siguiente<i class="fas fa-church ml-2"></i>
                    </button>
                </div>

            </main>

            <div class="container mx-auto px-4 py-8 mt-8 bg-white bg-opacity-90 rounded-lg shadow-lg my-20">
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Sacerdotes Encargados</h2>
                <div class="space-y-8">
                    <div class="bg-gray-100 p-4 rounded-lg flex flex-col md:flex-row items-center">
                        <img src="imagen/templo/pbro/pbro.rafael.png" alt="Padre Rafael" class="w-26 h-29 mb-4 md:mb-0 md:mr-6">
                        <div class="text-center w-full">
                            <h3 class="text-xl font-semibold mb-2 text-gray-700"><strong class="text-gray-800">Párroco:</strong> Presbítero Rafael Alfonso Flores Mejía</h3>
                            <p class="text-gray-600 mb-2 text-justify"></p>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg flex flex-col md:flex-row-reverse items-center">
                        <img src="imagen/templo/pbro/pbro.alfonso.png" alt="Padre Alfonso" class="w-26 h-29 mb-4 md:mb-0 md:ml-6">
                        <div class="text-center w-full">
                            <h3 class="text-xl font-semibold mb-2 text-gray-700"><strong class="text-gray-800">Vicario:</strong> Presbítero Alfonso Herrera Maldonado</h3>
                            <p class="text-gray-600 mb-2 text-justify"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="infoModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full hidden">
                <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                    <div class="mt-3 text-center">
                        <h3 class="text-xl font-bold leading-6 text-gray-900" id="modalTitle"></h3>
                        <div class="mt-2 px-7 py-3">
                            <p class="text-sm text-black" id="modalContent"></p>
                        </div>
                        <div class="items-center px-4 py-3">
                            <button id="closeModal"
                                class="px-4 py-2 bg-blue-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
                                Cerrar
                            </button>
                        </div>
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
    <script src="autoscroll.js"></script>
    <script src="templo.js"></script>
    <script src="templo2.js"></script>
    <script src="loading.js"></script>

</body>

</html>