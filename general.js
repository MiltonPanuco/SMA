
    // -------------- CARGANDO ----------- //

    document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        document.querySelector(".loader-wrapper").style.display = "none";
    }, 100); // Milisegunditos

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
