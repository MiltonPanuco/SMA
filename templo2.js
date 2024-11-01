document.addEventListener('DOMContentLoaded', function () {
    
    const maps = [
        { id: 'map-parroquia', lat: 21.451267586126622, lng: -104.9055825899271, name: 'Parroquia San Miguel Arcángel' },
        { id: 'map1', lat: 21.461363999333575, lng: -104.89835249245886, name: 'Inmaculada Concepción de María' },
        { id: 'map2', lat: 21.463371294019506, lng: -104.89198972410149, name: 'Nuestra Señora de la Luz' },
        { id: 'map3', lat: 21.47238178214613, lng: -104.89364150747643, name: 'San Juan Diego' },
        { id: 'map4', lat: 21.455806198743847, lng: -104.89713821845478, name: 'Nuestra Señora de Guadalupe' },
        { id: 'map5', lat: 21.464947734694423, lng: -104.90780586539476, name: 'Nuestra Señora de Guadalupe Reina De México' },
        { id: 'map6', lat: 21.45884623031267, lng: -104.90413172733453, name: 'Misa de Barrio Sagrada Familia de Nazareth' }
    ];

    maps.forEach((mapInfo) => {
        const map = L.map(mapInfo.id, {
            dragging: false,
            touchZoom: false,
            scrollWheelZoom: false,
            doubleClickZoom: false,
            boxZoom: false,
            tap: false,
            keyboard: false,
            zoomControl: false
        }).setView([mapInfo.lat, mapInfo.lng], 17);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        L.marker([mapInfo.lat, mapInfo.lng]).addTo(map)
            .bindPopup(mapInfo.name)
            .openPopup();
    });

    const modal = document.getElementById('infoModal');
    const closeModal = document.getElementById('closeModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalContent = document.getElementById('modalContent');

    closeModal.onclick = function () {
        modal.classList.add('hidden');
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.classList.add('hidden');
        }
    }

});

function mostrarInformacion(templo) {
    const modal = document.getElementById('infoModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalContent = document.getElementById('modalContent');

    let title = '';
    let content = '';

    switch (templo) {
        case 'parroquiaSMA':
            title = 'Parróquia San Miguel Arcángel';
            content = 
                `
                    <ul type="square">
                        <li><strong>Eucaristías.</strong>
                            <ul type="disc">
                                <li><u>Lunes a Sábado:</u> 07:00 PM.</li>
                                <li><u>Jueves y Sábado:</u> 07:00 AM.</li>
                                <li><u>Domingo:</u> 07:00 AM, 09:00 AM, 06:30 PM, 07:30 PM.</li>
                            </ul>
                        </li>
                        <br>
                        <li><strong>Adoración al Santísimo Sacramento.</strong>
                            <ul type="disc">
                                <li><u>Jueves:</u> 08:00 AM - 07:00 PM.</li>
                                <li><u>Hora Santa:</u> 08:00 PM.</li>
                            </ul>
                        </li>
                        <br>
                        <li><strong>Adoración Nocturna Mexicana.</strong>
                            <ul type="disc">
                                <li><u>Hombres:</u> 1er Sábado de mes.</li>
                                <li><u>Mujeres:</u> 2do Sábado de mes.</li>
                            </ul>
                        </li>
                    </ul>
                `
            break;
        case 'temploICDM':
            title = 'Inmaculada Concepción de María';
            content = 
                `
                    <ul type="square">
                        <li><strong>Eucaristías.</strong>
                            <ul type="disc">
                                <li><u>Lunes, Martes, Miercoles y Viernes:</u> 07:00 AM.</li>
                                <li><u>Jueves:</u> 05:00 PM.</li>
                                <li><u>Sábado:</u> 06:00 PM.</li>
                                <li><u>Domingo:</u> 08:00 AM y 06:30 PM.</li>
                            </ul>
                        </li>
                        <br>
                        <li><strong>Adoración al Santísimo Sacramento.</strong>
                            <ul type="disc">
                                <li><u>Jueves:</u> 05:00 PM.</li>
                            </ul>
                        </li>
                    </ul>
                `
            break;
        case 'temploNSL':
            title = 'Nuestra Señora de la Luz';
            content = 
                `
                    <ul type="square">
                        <li><strong>Eucaristías.</strong>
                            <ul type="disc">
                                <li><u>Domingo:</u> 09:30 AM.</li>
                            </ul>
                        </li>
                        <br>
                        <li><strong>Celebración de la Palabra.</strong>
                            <ul type="disc">
                                <li><u>Viernes:</u> 05:00 PM.</li>
                                <li><u>NOTA:</u> Al concluir la celebración inicia nuestra Hora Santa.</li>
                            </ul>
                        </li>
                    </ul>
                `
            break;
        case 'temploSJD':
            title = 'San Juan Diego';
            content = 
                `
                    <ul type="square">
                        <li><strong>Eucaristías.</strong>
                            <ul type="disc">
                                <li><u>Domingo:</u> 11:00 AM.</li>
                            </ul>
                        </li>
                        <br>
                        <li><strong>Celebración de la Palabra.</strong>
                            <ul type="disc">
                                <li><u>Jueves:</u> 05:00 PM.</li>
                                <li><u>NOTA:</u> Al concluir la celebración inicia nuestra Hora Santa.</li>
                            </ul>
                        </li>
                    </ul>
                `
            break;
        case 'temploNSDG':
            title = 'Nuestra Señora de Guadalupe';
            content = 
                `
                        <ul type="square">
                            <li><strong>Eucaristías.</strong>
                                <ul type="disc">
                                    <li><u>Domingo:</u> 12:30 PM.</li>
                                </ul>
                            </li>
                            <br>
                            <li><strong>Dívina Providencia.</strong>
                                <ul type="disc">
                                    <li><u>Día primero de cada mes:</u> 11:00 AM.</li>
                                </ul>
                            </li>
                        </ul>
                `
            break;
        case 'temploRDM':
            title = 'Nuestra Señora de Guadalupe Reina de México';
            content = 
                `
                        <ul type="square">
                            <li><strong>Eucaristías.</strong>
                                <ul type="disc">
                                    <li><u>Domingo:</u> 04:30 PM.</li>
                                </ul>
                            </li>
                        </ul>
                `
            break;
        case 'temploMDB':
            title = 'Misa de barrio Sagrada Familia de Nazareth';
            content = 
                `
                        <ul type="square">
                            <li><strong>Eucaristías.</strong>
                                <ul type="disc">
                                    <li><u>Domingo:</u> 04:30 PM.</li>
                                </ul>
                            </li>
                        </ul>
                `
            break;
    }

    modalTitle.innerHTML = title;
    modalContent.innerHTML = content;
    modal.classList.remove('hidden');
}

