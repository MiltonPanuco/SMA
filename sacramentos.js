const sacramentosData = [
    {
        id: 'sacramentos',
        title: '¿Qué Son Los Sacramentos?',
        description: '"Los sacramentos de la Nueva Ley fueron instituidos por Cristo y son siete, a saber, Bautismo, Confirmación, Eucaristía, Penitencia, Unción de los enfermos, Orden Sacerdotal y Matrimonio. Los siete sacramentos corresponden a todas las etapas y todos los momentos importantes de la vida del cristiano: dan nacimiento y crecimiento, curación y misión a la vida de fe de los cristianos. Hay aquí una cierta semejanza entre las etapas de la vida natural y las etapas de la vida espiritual."',
        image: 'imagen/sacramentos/sacramento.jpg',
        source: 'Catecismo de la Iglesia Católica, 1210.',
        modalTitle: "",
        modalContent: "",
    },
    {
        id: 'bautismo',
        title: 'Bautismo',
        description: 'El santo Bautismo es el fundamento de toda la vida cristiana, el pórtico de la vida en el espíritu (<em>vitae spiritualis ianua</em>) y la puerta que abre el acceso a los otros sacramentos. Por el Bautismo somos liberados del pecado y regenerados como hijos de Dios, llegamos a ser miembros de Cristo y somos incorporados a la Iglesia y hechos partícipes de su misión (cf. Concilio de Florencia: DS 1314; CIC, can. 204,1; 849; CCEO 675,1): <em>Baptismus est sacramentum regenerationis per aquam in verbo</em> ("El bautismo es el sacramento del nuevo nacimiento por el agua y la palabra": Catecismo Romano 2,2,5).',
        image: 'imagen/sacramentos/bautismo.jpg',
        source: 'Catecismo de la Iglesia Católica, 1213.',
        modalTitle: 'Fechas de Bautismo',
        modalContent:
        `
            <div>
                <h3 class="text-xl font-semibold mb-2 text-blue-600">San Miguel Arcángel</h3>
                <p class="text-gray-700">1ᴱᴿ Sábado del mes. 12:30 PM</p>
                <p class="text-gray-700">3ᴱᴿ Sábado del mes. 12:30 PM</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2 text-blue-600">Inmaculada Concepción</h3>
                <p class="text-gray-700">2ᴰᴼ Sábado del mes. 12:30 PM</p>
                <p class="text-gray-700">4ᵀᴼ Sábado del mes. 12:30 PM</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2 text-blue-600">Nuestra Señora De Guadalupe</h3>
                <p class="text-gray-700">Todos los domingos. 12:30 PM</p>
            </div>
        `,
    },
    {
        id: 'confirmación',
        title: 'Confirmación',
        description: '"Con el Bautismo y la Eucaristía, el sacramento de la Confirmación constituye el conjunto de los "sacramentos de la iniciación cristiana", cuya unidad debe ser salvaguardada. Es preciso, pues, explicar a los fieles que la recepción de este sacramento es necesaria para la plenitud de la gracia bautismal (cf <em>Ritual de la Confirmación</em>, Prenotandos 1). En efecto, a los bautizados "el sacramento de la Confirmación los une más íntimamente a la Iglesia y los enriquece con una fortaleza especial del Espíritu Santo. De esta forma quedan obligados aún más, como auténticos testigos de Cristo, a extender y defender la fe con sus palabras y sus obras."',
        image: 'imagen/sacramentos/confirmacion.jpg',
        source: 'Catecismo de la Iglesia Católica, 1285.',
        modalTitle: 'Preparación',
        modalContent:
        `
            <p class="text-gray-700">Durante todo el mes de agosto quedan abiertas las inscripciones para catequesis de niños.</p>
            <p class="text-gray-700">Durante todo el mes de julio quedan abiertas las inscripciones para catequesis de adultos.</p>
            <p class="text-gray-700 font-semibold">En caso de querer inscribirse, presentarse en la Notaría Parroquial o en su Capilla correspondiente para más detalles.</p>
        `,
    },
    {
        id: 'eucaristia',
        title: 'Eucaristía',
        description: '"La Sagrada Eucaristía culmina la iniciación cristiana. Los que han sido elevados a la dignidad del sacerdocio real por el Bautismo y configurados más profundamente con Cristo por la Confirmación, participan por medio de la Eucaristía con toda la comunidad en el sacrificio mismo del Señor."<br><br> "Nuestro Salvador, en la última Cena, la noche en que fue entregado, instituyó el Sacrificio Eucarístico de su cuerpo y su sangre para perpetuar por los siglos, hasta su vuelta, el sacrificio de la cruz y confiar así a su Esposa amada, la Iglesia, el memorial de su muerte y resurrección, sacramento de piedad, signo de unidad, vínculo de amor, banquete pascual en el que se recibe a Cristo, el alma se llena de gracia y se nos da una prenda de la gloria futura."',
        image: 'imagen/sacramentos/eucaristia.jpg',
        source: 'Catecismo de la Iglesia Católica, 1322 - 1323.',
        modalTitle: 'Preparación',
        modalContent:
        `
            <p class="text-gray-700">Durante todo el mes de agosto quedan abiertas las inscripciones para catequesis de niños.</p>
            <p class="text-gray-700">Durante todo el mes de julio quedan abiertas las inscripciones para catequesis de adultos.</p>
            <p class="text-gray-700 font-semibold">En caso de querer inscribirse, presentarse en la Notaría Parroquial o en su Capilla correspondiente para más detalles.</p>
        `,
    },
    {
        id: 'penitencia',
        title: 'Penitencia',
        description: '"Los que se acercan al sacramento de la penitencia obtienen de la misericordia de Dios el perdón de los pecados cometidos contra El y, al mismo tiempo, se reconcilian con la Iglesia, a la que ofendieron con sus pecados. Ella les mueve a conversión con su amor, su ejemplo y sus oraciones." <br><br> "[...] Se denomina sacramento de la penitencia porque consagra un proceso personal y eclesial de conversión, de arrepentimiento y de reparación por parte del cristiano pecador."',
        image: 'imagen/sacramentos/penitencia.jpg',
        source: 'Catecismo de la Iglesia Católica, 1422 - 1423.',
        modalTitle: '',
        modalContent: '',
    },
    {
        id: 'uncion-de-enfermos',
        title: 'Unción de Enfermos',
        description: '"Esta sagrada unción de los enfermos fue instituida por Cristo nuestro Señor como un sacramento verdadero y propio del Nuevo Testamento. Se aludió a efecto en Marcos, pero se recomienda a los fieles y promulgado por Santiago el apóstol y hermano del Señor." <br><br> "Con la sagrada unción de los enfermos y con la oración de los presbíteros , toda la Iglesia entera encomienda a los enfermos al Señor sufriente y glorificado para que los alivie y los salve. Incluso los anima a unirse libremente a la pasión y muerte de Cristo; y contribuir, así, al bien del Pueblo de Dios."',
        image: 'imagen/sacramentos/enfermos.jpg',
        source: 'CIC, 1499. CIC 1511.',
        modalTitle: '',
        modalContent: '',
    },
    {
        id: 'orden-sacerdotal',
        title: 'Orden Sacerdotal',
        description: '"El Orden es el sacramento gracias al cual la misión confiada por Cristo a sus Apóstoles sigue siendo ejercida en la Iglesia hasta el fin de los tiempos: es, pues, el sacramento del ministerio apostólico. Comprende tres grados: el episcopado, el presbiterado y el diaconado." <br><br> "La Iglesia entera es un pueblo sacerdotal. Por el Bautismo, todos los fieles participan del sacerdocio de Cristo. Esta participación se llama "sacerdocio común de los fieles". A partir de este sacerdocio y al servicio del mismo existe otra participación en la misión de Cristo: la del ministerio conferido por el sacramento del Orden, cuya tarea es servir en nombre y en la representación de Cristo-Cabeza en medio de la comunidad."',
        image: 'imagen/sacramentos/ordensacerdotal.jpg',
        source: 'Catecismo de la Iglesia Católica, 1536; 1591.',
        modalTitle: 'Discernimiento',
        modalContent: 'Próximamente',
    },
    {
        id: 'matrimonio',
        title: 'Matrimonio',
        description: '"La alianza matrimonial, por la que el varón y la mujer constituyen entre sí un consorcio de toda la vida, ordenado por su misma índole natural al bien de los cónyuges y a la generación y educación de la prole, fue elevada por Cristo Nuestro Señor a la dignidad de sacramento entre bautizados" <br><br> "El sacramento del Matrimonio significa la unión de Cristo con la Iglesia. Da a los esposos la gracia de amarse con el amor con que Cristo amó a su Iglesia; la gracia del sacramento perfecciona así el amor humano de los esposos, reafirma su unidad indisoluble y los santifica en el camino de la vida eterna"',
        image: 'imagen/sacramentos/matrimonio.jpg',
        source: 'Catecismo de la Iglesia Católica, 1601; 1661.',
        modalTitle: 'Pláticas Pre-Matrimoniales',
        modalContent: 
        `
            <div>
                <h3 class="text-xl font-semibold mb-2 text-blue-600">San Miguel Arcángel</h3>
                <p class="text-gray-700">Todos los viernes, de 7:00 PM a 9:00 PM, se llevarán a cabo las pláticas pre-matrimoniales</p>
            </div>
            <div>
                <p class="text-gray-700">Dichas pláticas consisten en 4 sesiones temáticas consecutivas diseñadas para abordar aspectos esenciales para la vida matrimonial.</p>
            </div>
            <div>
                <p class="text-gray-700">Favor de notificar su asistencia para reservar su lugar.</p>
            </div>
        `,
    }
];

function createSacramentoElement(sacramento, index) {
    const container = document.createElement('div');
    container.className = 'bg-white bg-opacity-90 rounded-xl shadow-lg overflow-hidden flex flex-col lg:flex-row mb-16 mx-auto';
    if (index % 2 !== 0) container.classList.add('lg:flex-row-reverse');

    const buttonHtml = sacramento.modalContent
        ? `<button id="openModal${sacramento.id}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:shadow-outline transition duration-300 ease-in-out transform  mb-4 sm:mb-0 w-full sm:w-auto">
                Más información
            </button>`
        : '';

    container.innerHTML = `
        <div class="w-full content-center lg:w-1/2 p-8">
            <img src="${sacramento.image}" alt="Imagen de ${sacramento.title}" class="w-full h-64 lg:h-96 object-cover rounded-lg shadow-md">
        </div>
        <div class="w-full text-justify lg:w-1/2 p-10 flex flex-col justify-between">
            <div>
                <h2 class="text-2xl font-semibold mb-4 text-gray-800 text-center">${sacramento.title}</h2>
                <p class="text-gray-600 mb-6 text-base">${sacramento.description}</p>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between">
                ${buttonHtml}
                <span class="text-sm text-gray-500 italic mt-2 sm:mt-0">${sacramento.source}</span>
            </div>
        </div>
    `;

    return container;
}

function createModal(sacramento) {
    const modalTemplate = document.getElementById('modal-template');
    const modal = modalTemplate.content.cloneNode(true).children[0];

    modal.id = `modal${sacramento.id}`;
    modal.querySelector('h2').textContent = sacramento.modalTitle;
    modal.querySelector('.modal-content').innerHTML = sacramento.modalContent;

    return modal;
}

function setupModal(sacramento) {
    const openBtn = document.getElementById(`openModal${sacramento.id}`);
    if (!openBtn) return;

    const modal = document.getElementById(`modal${sacramento.id}`);
    const closeBtn = modal.querySelector('.close-modal');

    openBtn.addEventListener('click', () => {
        const scrollY = window.scrollY;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('no-scroll');
        document.body.style.top = `-${scrollY}px`;
        closeBtn.focus();
    });
    closeBtn.addEventListener('click', () => {
        const scrollY = document.body.style.top;
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.classList.remove('no-scroll');
        document.body.style.top = '';
        window.scrollTo(0, parseInt(scrollY || '0') * -1);
        openBtn.focus();
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            const scrollY = document.body.style.top;
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.classList.remove('no-scroll');
            document.body.style.top = '';
            window.scrollTo(0, parseInt(scrollY || '0') * -1);
            openBtn.focus();
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('sacramentos-container');

    sacramentosData.forEach((sacramento, index) => {
        const sacramentoElement = createSacramentoElement(sacramento, index);
        container.appendChild(sacramentoElement);

        const modal = createModal(sacramento);
        document.body.appendChild(modal);

        setupModal(sacramento);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            const openModal = document.querySelector('.modal:not(.hidden)');
            if (openModal) {
                const scrollY = document.body.style.top;
                openModal.classList.add('hidden');
                openModal.classList.remove('flex');
                document.body.classList.remove('no-scroll');
                document.body.style.top = '';
                window.scrollTo(0, parseInt(scrollY || '0') * -1);
                document.getElementById(`openModal${openModal.id.replace('modal', '')}`).focus();
            }
        }
    });
});