const appRecommendationsContent = `
    <h3 class="text-lg font-semibold mb-2 text-gray-800">Aplicaciones recomendadas</h3>
    <ul>
        <li class="mb-2">
            <a href="https://hallow.com/" target="_blank" class="text-blue-600 hover:underline flex items-center">
                <img src="imagen/index/hallow.png" alt="Logo Hallow" class="w-6 h-6 mr-2"> Hallow
            </a>
            <div>
                <a href="https://apps.apple.com/es/app/hallow-oración-católica/id1405323394" target="_blank"
                    class="text-sm text-gray-600 hover:underline">iOS</a> |
                <a href="https://play.google.com/store/apps/details?id=app.hallow.android&hl=es_MX" target="_blank"
                    class="text-sm text-gray-600 hover:underline">Android</a>
            </div>
        </li>
        <li class="mb-2">
            <a href="https://horariosdemisa.com" target="_blank" class="text-blue-600 hover:underline flex items-center">
                <img src="imagen/index/horariosdemisa.png" alt="Logo Mass Times" class="w-6 h-6 mr-2"> Horarios de misa
            </a>
            <div>
                <a href="https://apps.apple.com/us/app/catholic-mass-times/id789923520" target="_blank"
                    class="text-sm text-gray-600 hover:underline">iOS</a> |
                <a href="https://play.google.com/store/apps/details?id=com.itsharedservices.hdsmyc.app" target="_blank"
                    class="text-sm text-gray-600 hover:underline">Android</a>
            </div>
        </li>
        <li>
            <a href="https://www.bible.com/" target="_blank" class="text-blue-600 hover:underline flex items-center">
                <img src="imagen/index/labiblia.png" alt="Logo Bible" class="w-6 h-6 mr-2"> La Biblia
            </a>
            <div>
                <a href="https://apps.apple.com/us/app/bible/id282935706?_branch_match_id=1365155071858467314&utm_source=Bible.com&utm_campaign=Quick+Link+-+App+Page+-+iOS&utm_medium=quick-link&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXTywo0EvKTMpJ1UvOzwXxdDPzi%2B3rilLTUouKMvPS45OK8suLU4ts%2FQtSixIBaE9UkjYAAAA%3D" target="_blank"
                    class="text-sm text-gray-600 hover:underline">iOS</a> |
                <a href="https://play.google.com/store/apps/details?id=com.sirma.mobile.bible.android&_branch_match_id=1365155071858467314&utm_source=Bible.com&utm_campaign=Quick%20Link%20-%20App%20Page%20-%20Android&utm_medium=quick-link&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXTywo0EvKTMpJ1UvOzwXxdBPzUoryM1Ps64pS01KLijLz0uOTivLLi1OLbP0LUosSAaHVUzg6AAAA" target="_blank"
                    class="text-sm text-gray-600 hover:underline">Android</a>
            </div>
        </li>
        <li>
            <a href="mantenimiento.php" target="_blank" class="text-blue-600 hover:underline flex items-center">
                <img src="imagen/logo.jpg" alt="Logo Bible" class="w-6 h-6 mr-2 mt-2"> Aplicación SMA
            </a>
            <div>
                <a href="#"
                    class="text-sm text-gray-600 hover:underline">iOS</a> |
                <a href="#"
                    class="text-sm text-gray-600 hover:underline">Android</a>
            </div>
        </li>
    </ul>
`;

document.getElementById('app-recommendations').innerHTML = appRecommendationsContent;



const appRecommendationsButton = document.getElementById('app-recommendations-button');
const appRecommendations = document.getElementById('app-recommendations');

appRecommendationsButton.addEventListener('click', () => {
    appRecommendations.classList.toggle('hidden');
});

let lastScrollTop = 0;
window.addEventListener('scroll', () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop || scrollTop < lastScrollTop) {
        appRecommendations.classList.add('hidden');
    }
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
}, false);

document.addEventListener('click', (event) => {
    if (!appRecommendationsButton.contains(event.target) && !appRecommendations.contains(event.target)) {
        appRecommendations.classList.add('hidden');
    }
});