const menuContent = `
    <li class="mb-4"><a href="index.html" class="menu-item menu-level-0 hover:text-blue-300 transition duration-300">Inicio</a></li>
    <li class="mb-4"><a href="templo.html" class="menu-item menu-level-0 hover:text-blue-300 transition duration-300">Templos</a></li>
    <li class="mb-4"><a href="diocesis.html" class="menu-item menu-level-0 hover:text-blue-300 transition duration-300">Nuestra Diócesis</a></li>
    <li class="mb-2">
        <a href="#organizacion" class="menu-item menu-level-0 hover:text-blue-300 transition duration-300">Organización Pastoral</a>
        <ul class="submenu mt-2">
            <li class="mb-2">
                <a href="#liturgica" class="menu-item menu-level-1 hover:text-blue-400 transition duration-300">Pastoral litúrgica</a>
                <ul class="submenu mt-1">
                    <li><a href="sacramentos.html" class="menu-item menu-level-2 hover:text-blue-500 transition duration-300 v">Sacramentos</a></li>
                    <li><a href="monaguillos.html" class="menu-item menu-level-2 hover:text-blue-500 transition duration-300 block break-words">Monaguillos</a></li>
                    <li><a href="mantenimiento.html" class="menu-item menu-level-2 hover:text-blue-500 transition duration-300 block break-words">Equipo de liturgia</a></li>
                    <li><a href="mantenimiento.html" class="menu-item menu-level-2 hover:text-blue-500 transition duration-300 block break-words">Ministros extraordinarios</a></li>
                    <li><a href="mantenimiento.html" class="menu-item menu-level-2 hover:text-blue-500 transition duration-300 block break-words">Adoración nocturna</a></li>
                    <li><a href="mantenimiento.html" class="menu-item menu-level-2 hover:text-blue-500 transition duration-300 block break-words">Adoración al Santísimo Sacramento (Jueves)</a></li>
                </ul>
            </li>
            <li class="mb-2">
                <a href="#social" class="menu-item menu-level-1 hover:text-blue-400 transition duration-300">Pastoral social</a>
                <ul class="submenu mt-1">
                    <li><a href="mantenimiento.html" class="menu-item menu-level-2 hover:text-blue-500 transition duration-300 block break-words">Pastoral de la salud</a></li>
                    <li><a href="psicologia.html" class="menu-item menu-level-2 hover:text-blue-500 transition duration-300 block break-words">Psicología cristiana</a></li>
                    <li><a href="mantenimiento.html" class="menu-item menu-level-2 hover:text-blue-500 transition duration-300 block break-words">Talleres</a></li>
                </ul>
            </li>
            <li>
                <a href="#profetica" class="menu-item menu-level-1 hover:text-blue-400 transition duration-300">Pastoral profética</a>
                <ul class="submenu mt-1">
                    <li><a href="grupos-parroquiales.html" class="menu-item menu-level-2 hover:text-blue-500 transition duration-300 block break-words">Grupos parroquiales</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="mb-4"><a href="columbario.html" class="menu-item menu-level-0 hover:text-blue-300 transition duration-300">Columbario</a></li>
    <li class="mb-4"><a href="galeria.html" class="menu-item menu-level-0 hover:text-blue-300 transition duration-300">Galería</a></li>
    <li class="mb-4"><a href="contacto.html" class="menu-item menu-level-0 hover:text-blue-300 transition duration-300">Contacto</a></li>
    <li class="mb-4">
        <a href="#catequesis" class="menu-item menu-level-0 hover:text-blue-300 transition duration-300">Catequesis</a>
        <ul class="submenu mt-2">
            <li><a href="https://catequesis.sanmiguelxalisco.com" class="menu-item menu-level-1 hover:text-blue-400 transition duration-300 block break-words">Registro</a></li>
            <li><a href="informes.html" class="menu-item menu-level-1 hover:text-blue-400 transition duration-300 block break-words">Informes</a></li>
        </ul>
    </li>
`;

document.getElementById('menu-list').innerHTML = menuContent;

const menuButton = document.getElementById('menu-button');
const menuDrawer = document.getElementById('menu-drawer');
const menuIcon = document.querySelector('.menu-icon');
const menuList = document.getElementById('menu-list');

function closeDrawer() {
    menuDrawer.classList.remove('open');
    menuIcon.classList.remove('open');
    resetSubmenus();
}

function resetSubmenus() {
    const allSubmenus = menuList.querySelectorAll('.submenu');
    allSubmenus.forEach(submenu => {
        submenu.classList.remove('active');
    });
}

menuButton.addEventListener('click', () => {
    if (!menuDrawer.classList.contains('open')) {
        resetSubmenus();
    }
    menuDrawer.classList.toggle('open');
    menuIcon.classList.toggle('open');
});

menuList.addEventListener('click', (e) => {
    const target = e.target;
    if (target.classList.contains('menu-level-0') || target.classList.contains('menu-level-1')) {
        const submenu = target.nextElementSibling;
        if (submenu && submenu.classList.contains('submenu')) {
            e.preventDefault(); 
            if (target.classList.contains('menu-level-0')) {
                const allLevel0Submenus = menuList.querySelectorAll('.menu-level-0 + .submenu');
                allLevel0Submenus.forEach(menu => {
                    if (menu !== submenu) {
                        menu.classList.remove('active');
                    }
                });
            } else if (target.classList.contains('menu-level-1')) {
                const allLevel1Submenus = menuList.querySelectorAll('.menu-level-1 + .submenu');
                allLevel1Submenus.forEach(menu => {
                    if (menu !== submenu) {
                        menu.classList.remove('active');
                    }
                });
            }
            submenu.classList.toggle('active');
        }
    }
});

let lastScrollTop1 = 0;
window.addEventListener('scroll', () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop1) {
        closeDrawer();
    }
}, false);

let lastScrollBottom = 0;
window.addEventListener('scroll', () => {
    let scrollBottom = window.pageYOffset || document.documentElement.scrollBottom;
    if (scrollBottom > lastScrollBottom) {
        closeDrawer();
    }
}, false);

document.addEventListener('click', (e) => {
    if (!menuDrawer.contains(e.target) && !menuButton.contains(e.target)) {
        closeDrawer();
    }
});