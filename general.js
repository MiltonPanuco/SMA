
    // -------------- CARGANDO ----------- //

    document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        document.querySelector(".loader-wrapper").style.display = "none";
    }, 500); // Milisegunditos

    // -------------- RECARGAR PAGINA ----------- //

    scrollToTopOnReload();

    function scrollToTopOnReload() {
        // Verifica si la página se recarga
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }

        // Desplaza al principio
        window.scrollTo(0, 0);
    }

  })

    // -------------- SCROLL PAGINA ----------- //

    // Función para mostrar o esconder el icono de scroll según la posición del usuario en la página
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            document.getElementById("scrollToTop").style.display = "block";
        } else {
            document.getElementById("scrollToTop").style.display = "none";
        }
    }

    // Función para hacer scroll hasta arriba de la página
    function scrollToTop() {
        document.body.scrollTop = 0; // Para Safari
        document.documentElement.scrollTop = 0; // Para otros navegadores
    }
      