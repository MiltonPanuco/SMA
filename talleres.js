document.addEventListener('DOMContentLoaded', function() {
    const talleres = [
        {
            titulo: "Taller de Oración",
            descripcion: "Aprende diferentes técnicas de oración y meditación para fortalecer tu conexión espiritual.",
            fecha: "Todos los lunes de 18:00 a 19:30",
            imagen: "imagen/taller-oracion.jpg"
        },
        {
            titulo: "Estudio Bíblico",
            descripcion: "Profundiza en las Escrituras con nuestro grupo de estudio bíblico semanal.",
            fecha: "Miércoles de 19:00 a 20:30",
            imagen: "imagen/estudio-biblico.jpg"
        },
        {
            titulo: "Taller de Música Litúrgica",
            descripcion: "Únete a nuestro coro y aprende sobre música litúrgica y canto.",
            fecha: "Sábados de 16:00 a 18:00",
            imagen: "imagen/musica-liturgica.jpg"
        }
    ];

    const container = document.getElementById('talleres-container');

    talleres.forEach(taller => {
        const tallerElement = document.createElement('div');
        tallerElement.className = 'bg-white rounded-lg shadow-md overflow-hidden';
        tallerElement.innerHTML = `
            <img src="${taller.imagen}" alt="${taller.titulo}" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2">${taller.titulo}</h2>
                <p class="text-gray-600 mb-4">${taller.descripcion}</p>
                <p class="text-sm text-gray-500 mb-4">${taller.fecha}</p>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Más información</button>
            </div>
        `;
        container.appendChild(tallerElement);
    });
});