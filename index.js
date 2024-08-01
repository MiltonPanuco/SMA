// PARAR Y REANUDAR SLIDER DE APPS RECOMENDADAS //

document.addEventListener('DOMContentLoaded', function () {
    var slider = document.querySelector('.slider-index');
    var slideTrack = document.querySelector('.slide-track');

    var isTouchDevice = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0);

    if (isTouchDevice) {
        // Detener animación al tocar el slider
        slider.addEventListener('touchstart', function () {
            slideTrack.style.animationPlayState = 'paused';
        });

        // Reanudar animación al quitar el toque del slider
        slider.addEventListener('touchend', function () {
            slideTrack.style.animationPlayState = 'running';
        });
    } else {
        // Para dispositivos que no son táctiles, se puede mantener el comportamiento anterior
        slider.addEventListener('mouseover', function () {
            slideTrack.style.animationPlayState = 'paused';
        });

        slider.addEventListener('mouseout', function () {
            slideTrack.style.animationPlayState = 'running';
        });
    }
});