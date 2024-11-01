function getLogoForCurrentPage() {
  const currentPage = window.location.pathname.split('/').pop();

  switch (currentPage) {
    case 'monaguillos.html':
      return 'logo-monaguillos.png';

    case 'psicologia.html':
      return 'logo-psicologia.png';

    case 'diocesis.html':
      return 'logo-diocesis.png';

    case 'columbario.html':
      return 'logo-columbario.png';

    default:
      return 'logo-sma.png';
  }
}

function generateFooterContent() {
  const logoFileName = getLogoForCurrentPage();

  return `
      <div class="container mx-auto px-4">
      <div class="flex flex-wrap justify-between items-start">
        <div class="w-full lg:w-1/3 mb-6 lg:mb-0 text-center lg:text-left">
          <h3 class="text-xl font-bold mb-2">Parroquia San Miguel Arcángel</h3>
          <p class="text-sm">Dirección: <a href="https://maps.app.goo.gl/q8xo1Ro7MdTaaziQ6" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 transition duration-300">C. Níquel #46, Colonia Morelos</a></p>
          <p class="text-sm">Teléfono: <a href="tel:+523112185228" class="hover:text-blue-400 transition duration-300">311 218 5228</a></p>
          <p class="text-sm">Email: <a href="mailto:sanmiguelxalisco@gmail.com" class="hover:text-blue-400 transition duration-300">sanmiguelxalisco@gmail.com</a></p>
        </div>
        <div class="w-full lg:w-1/3 mb-6 lg:mb-0 text-center">
          <h3 class="text-xl font-bold mb-2">Enlaces rápidos</h3>
          <ul class="text-sm">
            <li><a href="columbario.html" class="hover:text-blue-400 transition duration-300">Columbario</a></li>
            <li><a href="psicologia.html" class="hover:text-blue-400 transition duration-300">Psicología Cristiana</a></li>
            <li><a href="monaguillos.html" class="hover:text-blue-400 transition duration-300">Monaguillos</a></li>
            <li><a href="contacto.html" class="hover:text-blue-400 transition duration-300">Contacto</a></li>
          </ul>
        </div>
        <div class="w-full lg:w-1/3 text-center lg:text-right">
          <img src="imagen/logos-footer/${logoFileName}" alt="Logotipo cargado" class="mx-auto lg:ml-auto h-20 md:h-28 lg:h-36">
        </div>
      </div>
      <hr class="border-gray-700 my-6">
      <div class="flex flex-col lg:flex-row justify-between items-center">
        <p class="text-sm text-center lg:text-left">&copy; ${new Date().getFullYear()} SMA. Todos los derechos reservados.</p>
        <div class="mt-4 lg:mt-0 text-center lg:text-right">
          <a href="terminos-y-condiciones.html" class="text-sm hover:underline mr-4">Términos y Condiciones</a>
          <a href="aviso-de-privacidad.html" class="text-sm hover:underline">Aviso de Privacidad</a>
        </div>
      </div>
    </div>
    `;
}

document.addEventListener('DOMContentLoaded', () => {
  const footerElement = document.getElementById('dynamic-footer');
  if (footerElement) {
    footerElement.innerHTML = generateFooterContent();
  } else {
    console.error('Footer element not found');
  }
});