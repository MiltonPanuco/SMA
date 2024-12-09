<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Sitio en Mantenimiento</title>
    <link rel="icon" href="imagen/smalogo.jpg" type="image/x-icon">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        @keyframes walkingAnimation {
            0% {
                right: -800px;
            }

            100% {
                right: calc(100vw + 200px);
            }
        }

        .walking-gif {
            animation: walkingAnimation 13s linear infinite;
        }

        html,
        body {
            overflow-x: hidden;
            overflow-y: hidden;
            overflow: hidden;
        }
    </style>

</head>

<body class="bg-gray-100 font-sans text-center p-12 m-0 flex items-center justify-center h-screen relative">
    
    <div class="max-w-2xl w-full mx-auto p-8 rounded-lg shadow-lg bg-white relative">
        <div class="text-6xl mb-5">&#x1F6A7;</div>
        <h1 class="text-3xl md:text-4xl font-bold text-blue-500 mb-4">¡Sitio en Mantenimiento!</h1>
        <p class="text-blue-500 mb-6">Estamos trabajando para mejorar tu experiencia</p>
        <img class="walking-gif absolute -bottom-56 right-0 w-48" src="imagen/matenimiento/trabajo.gif" alt="Walking GIF">
        <a href="index.php" class="inline-block mt-6 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition duration-300">Regresar</a>
    </div>

    <button id="scrollToTop" class="fixed bottom-4 right-4 bg-blue-500 text-white p-2 rounded-full hidden hover:bg-blue-600 transition duration-300" onclick="scrollToTop()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        window.addEventListener('scroll', function () {
            var scrollToTopButton = document.getElementById('scrollToTop');
            if (window.pageYOffset > 100) {
                scrollToTopButton.classList.remove('hidden');
            } else {
                scrollToTopButton.classList.add('hidden');
            }
        });
    </script>
</body>

</html>