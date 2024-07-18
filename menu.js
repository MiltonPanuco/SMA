
document.addEventListener("DOMContentLoaded", function() {
    var menuPlaceholder = document.getElementById("menu-placeholder");
    fetch("menu.html")
        .then(response => response.text())
        .then(data => {
            menuPlaceholder.innerHTML = data;

            // Script para manejar los sub-submenús
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
        })
        .catch(error => console.error('Error cargando el menú:', error));
});
