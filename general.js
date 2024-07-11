<<<<<<< HEAD

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

    window.onscroll = function() {
        scrollFunction();
    };
    
    function scrollFunction() {
        const scrollToTopButton = document.getElementById("scrollToTop");
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            scrollToTopButton.classList.add('show');
            scrollToTopButton.classList.remove('hide');
        } else {
            scrollToTopButton.classList.add('hide');
            scrollToTopButton.classList.remove('show');
        }
    }
    
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    
    // ---------------- HIDDEN - SHOW IMAGENES ---------------- //

    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add("show");
            } else {
              entry.target.classList.remove("show");
            }
          });
        }, { rootMargin: "-50px 0px" }); // Cambia el umbral de visibilidad aquí
  
        document.querySelectorAll(".hidden").forEach(hiddenElement => {
          observer.observe(hiddenElement);
        });
      }); 


=======

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

    window.onscroll = function() {
        scrollFunction();
    };
    
    function scrollFunction() {
        const scrollToTopButton = document.getElementById("scrollToTop");
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            scrollToTopButton.classList.add('show');
            scrollToTopButton.classList.remove('hide');
        } else {
            scrollToTopButton.classList.add('hide');
            scrollToTopButton.classList.remove('show');
        }
    }
    
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    
    // ---------------- HIDDEN - SHOW IMAGENES ---------------- //

    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add("show");
            } else {
              entry.target.classList.remove("show");
            }
          });
        }, { rootMargin: "-50px 0px" }); // Cambia el umbral de visibilidad aquí
  
        document.querySelectorAll(".hidden").forEach(hiddenElement => {
          observer.observe(hiddenElement);
        });
      }); 


>>>>>>> origin/main
      