document.addEventListener('DOMContentLoaded', function() {
    const loadingTexts = [
        "Preparando la palabra",
        "Encendiendo velitas",
        "Afinando el coro",
        "Cargando Bendiciones",
        "Organizando la liturgia"
    ];
    const loadingElement = document.getElementById('loading-text');
    let currentIndex = 0;

    function updateLoadingText() {
        loadingElement.textContent = loadingTexts[currentIndex];
        currentIndex = (currentIndex + 1) % loadingTexts.length;
    }

    function finishLoading() {
        document.body.classList.add('loaded');
        clearInterval(textInterval);
    }

    updateLoadingText();
    const textInterval = setInterval(updateLoadingText, 3000);
    setTimeout(finishLoading, 10);
});