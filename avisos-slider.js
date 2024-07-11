    
    document.addEventListener("DOMContentLoaded", function() {
        var avisosSliderPlaceholder = document.getElementById("avisos-slider-placeholder");

        function loadAvisosSlider() {
            fetch("avisos-slider.html")
                .then(response => response.text())
                .then(data => {
                    avisosSliderPlaceholder.innerHTML = data;

                    var avisosSlider = new bootstrap.Carousel(document.getElementById('avisosSlider'), {
                        interval: 6000 // Cambiar cada 6 segundos
                    });
                })
                .catch(error => console.error('Error cargando el slider de avisos:', error));
        }

        loadAvisosSlider();
    });
