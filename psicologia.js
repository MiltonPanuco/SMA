// Datos de los psicólogos
const psychologists = [
    {
        name: 'Dr. Juan Pérez',
        image: 'imagen/psicologia/silueta.jpg',
        license: '123456',
        specialty: 'Sistémico, Cognitivo, Conductual',
        people: 'Jóvenes, Adultos, Niños',
        modality: 'Presencial',
        quote: 'Si escuchas a Dios, ya tienes la mayor parte resuelta.'
    },
    {
        name: 'Dra. Ana Gómez',
        image: 'imagen/psicologia/silueta.jpg',
        license: 'XXXXXXXX',
        specialty: 'Lorem ipsum dolor sit amet',
        people: 'Lorem ipsum dolor sit amet',
        modality: 'Lorem ipsum dolor sit amet',
        quote: 'Lorem ipsum dolor sit amet'
    },
    {
        name: 'Dr. Luis Martínez',
        image: 'imagen/psicologia/silueta.jpg',
        license: 'XXXXXXXX',
        specialty: 'Lorem ipsum dolor sit amet',
        people: 'Lorem ipsum dolor sit amet',
        modality: 'Lorem ipsum dolor sit amet',
        quote: 'Lorem ipsum dolor sit amet'
    },
    {
        name: 'Dra. Mariana Rodríguez',
        image: 'imagen/psicologia/silueta.jpg',
        license: 'XXXXXXXX',
        specialty: 'Lorem ipsum dolor sit amet',
        people: 'Lorem ipsum dolor sit amet',
        modality: 'Lorem ipsum dolor sit amet',
        quote: 'Lorem ipsum dolor sit amet'
    },
    {
        name: 'Dr. Andrés López',
        image: 'imagen/psicologia/silueta.jpg',
        license: 'XXXXXXXX',
        specialty: 'Lorem ipsum dolor sit amet',
        people: 'Lorem ipsum dolor sit amet',
        modality: 'Lorem ipsum dolor sit amet',
        quote: 'Lorem ipsum dolor sit amet'
    },
    {
        name: 'Dra. Laura Díaz',
        image: 'imagen/psicologia/silueta.jpg',
        license: 'XXXXXXXX',
        specialty: 'Lorem ipsum dolor sit amet',
        people: 'Lorem ipsum dolor sit amet',
        modality: 'Lorem ipsum dolor sit amet',
        quote: 'Lorem ipsum dolor sit amet'
    }
];

// Generar las tarjetas de psicólogos
function renderPsychologists() {
    const container = document.getElementById('psychologistsContainer');
    container.innerHTML = psychologists.map(psychologist => `
            <div class="col-md-4 psychologist-card hidden">
                
                <div class="card" data-toggle="modal" 
                data-target="#psychologistModal" 
                data-name="${psychologist.name}" 
                data-image="${psychologist.image}" 
                data-license="${psychologist.license}" 
                data-specialty="${psychologist.specialty}" 
                data-people="${psychologist.people}" 
                data-modality="${psychologist.modality}" 
                data-quote="${psychologist.quote}"> 

                    <img src="${psychologist.image}" class="card-img-top" alt="${psychologist.name}">

                    <div class="card-body">
                        <h5 class="card-title">${psychologist.name}</h5>
                        <p class="card-text" style="margin-bottom: 10px">"${psychologist.quote}"</p>
                    </div>

                </div>
                
            </div>
        `).join('');
}

// Inicializar las tarjetas
renderPsychologists();

// Manejar la apertura del modal
$('#psychologistModal').on('show.bs.modal', function (event) {
    const button = $(event.relatedTarget); // Botón que abrió el modal
    const name = button.data('name');
    const image = button.data('image');
    const license = button.data('license');
    const specialty = button.data('specialty');
    const people = button.data('people');
    const modality = button.data('modality');
    const quote = button.data('quote');

    const modal = $(this);
    modal.find('.modal-title').text(name);
    modal.find('#modalImage').attr('src', image);
    modal.find('#modalLicense').text(license);
    modal.find('#modalSpecialty').text(specialty);
    modal.find('#modalPeople').text(people);
    modal.find('#modalModality').text(modality);
    modal.find('#modalQuote').text(quote);

    // Animar la apertura del modal
    anime({
        targets: '.modal-content',
        opacity: [0, 1],
        duration: 500,
        easing: 'easeInOutQuad'
    });
});

$('.close-modal').on('click', function () {
    anime({
        targets: '.modal-content',
        opacity: [1, 0],
        easing: 'easeInOutQuad',
        duration: 500,
        complete: function () {
            $('#psychologistModal').modal('hide');
        }
    });
});

// ---- EVITAR SCROLL AL MODAL ---- //

$('#psychologistModal').on('show.bs.modal', function () {
    $('body').addClass('modal-open-body');
});

$('#psychologistModal').on('hidden.bs.modal', function () {
    $('body').removeClass('modal-open-body');
});

// ---- INFORMACIÓN ADICIONAL ---- //

const stack = document.querySelector(".unique-stack");
const cards = Array.from(stack.children)
    .reverse()
    .filter((child) => child.classList.contains("unique-card"));

cards.forEach((card) => stack.appendChild(card));

function moveCard() {
    const lastCard = stack.lastElementChild;
    if (lastCard.classList.contains("unique-card")) {
        lastCard.classList.add("unique-swap");

        setTimeout(() => {
            lastCard.classList.remove("unique-swap");
            stack.insertBefore(lastCard, stack.firstElementChild);
        }, 1200);
    }
}

let autoplayInterval = setInterval(moveCard, 4000);

stack.addEventListener("click", function (e) {
    const card = e.target.closest(".unique-card");
    if (card && card === stack.lastElementChild) {
        card.classList.add("unique-swap");

        setTimeout(() => {
            card.classList.remove("unique-swap");
            stack.insertBefore(card, stack.firstElementChild);
        }, 1200);
    }
});




