
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
    
    // ---------------  SUB-SUBMENU -------------- //
      
    var dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');

    dropdownSubmenus.forEach(function(dropdownSubmenu) {
        var dropdownToggle = dropdownSubmenu.querySelector('.dropdown-toggle');

        dropdownToggle.addEventListener('click', function(event) {
            event.stopPropagation();
            
            dropdownSubmenus.forEach(function(submenu) {
                var menu = submenu.querySelector('.dropdown-menu');
                if (menu !== event.target.nextElementSibling) {
                    menu.classList.remove('show');
                }
            });

            dropdownSubmenu.querySelector('.dropdown-menu').classList.toggle('show');
        });
    });

    document.addEventListener('click', function(event) {
        dropdownSubmenus.forEach(function(dropdownSubmenu) {
            if (!dropdownSubmenu.contains(event.target)) {
                dropdownSubmenu.querySelector('.dropdown-menu').classList.remove('show');
            }
        });
    });

    // ---------------- HIDDEN - SHOW ---------------- //

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
    