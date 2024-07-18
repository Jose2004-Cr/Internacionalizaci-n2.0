document.addEventListener('DOMContentLoaded', function () {
    const addEventButton = document.getElementById('addEventButton');
    const eventModal = document.getElementById('eventModal');
    const closeModalButton = document.getElementById('closeModalButton');
    const eventForm = document.getElementById('eventForm');
    const eventsGrid = document.getElementById('eventsGrid');
    const eventsTableBody = document.getElementById('eventsTableBody');
    const tableSearch = document.getElementById('table-search');

    let events = [];

    if (!addEventButton || !eventModal || !closeModalButton || !eventForm || !eventsGrid || !eventsTableBody || !tableSearch) {
        console.error('Uno o más elementos no se encontraron en el DOM.');
        return;
    }

    addEventButton.addEventListener('click', function () {
        eventModal.classList.remove('hidden');
    });

    closeModalButton.addEventListener('click', function () {
        eventModal.classList.add('hidden');
    });

    eventForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const eventName = document.getElementById('eventName').value;
        const eventStartDate = document.getElementById('eventStartDate').value;
        const eventEndDate = document.getElementById('eventEndDate').value;
        const eventDirector = document.getElementById('eventDirector').value;
        const eventModalidad = document.getElementById('eventModalidad').value;

        if (!eventName || !eventStartDate || !eventEndDate || !eventDirector || !eventModalidad) {
            console.error('Todos los campos del formulario son obligatorios.');
            return;
        }

        const newEvent = {
            name: eventName,
            startDate: eventStartDate,
            endDate: eventEndDate,
            director: eventDirector,
            modalidad: eventModalidad,


        };

        events.push(newEvent);
        displayEvents(events);

        eventModal.classList.add('hidden');
        eventForm.reset();
    });





    function displayEvents(events) {
        events.sort((a, b) => new Date(b.endDate) - new Date(a.endDate));
        const recentEvents = events.slice(0, 6);

        eventsGrid.innerHTML = '';
        eventsTableBody.innerHTML = '';

        recentEvents.forEach(event => {
            const currentDate = new Date().toISOString().split('T')[0];
            const isActive = new Date(event.endDate) >= new Date(currentDate);
            const statusClass = isActive ? 'active' : 'finalized';
            const statusText = isActive ? 'Activo' : 'Finalizado';

            const eventCard = document.createElement('div');
            eventCard.className = 'p-4 rounded shadow-md card';
            eventCard.innerHTML = `
                <h2 class="mb-2 text-yellow-50 text-xl font-bold ">${event.name}</h2>
                <p class=" text-cyan-300"> ${event.director}</p>
                <p class="mb-6"> ${event.modalidad}</p>
                <p class="mt-2 text-sm text-blue-200"> ${event.startDate} Hasta el ${event.endDate}</p>`;

                eventCard.addEventListener('click', function () {
                    window.location.href = '/homecartas';
            });

            const eventRow = document.createElement('tr');
            eventRow.className = 'bg-white border-b dark:bg-gray-800 dark:border-gray-700';
            eventRow.innerHTML = `

                <td class="text-base mb-2">${event.name}</td>
                <td class="px-6 py-4">${event.startDate}</td>
                <td class="px-6 py-4">${event.endDate}</td>
                <td class="px-6 py-4">${event.director}</td>
                <td class="">${event.modalidad}</td>
                <td class="px-6 py-4"><span class="status ${statusClass}">${statusText}</span></td>
                <td class="px-6 py-4"><a href="/homecartas" class="details">Ver</a></td>

            `;

            eventsGrid.appendChild(eventCard);
            eventsTableBody.appendChild(eventRow);
        });
    }

    tableSearch.addEventListener('input', function () {
        const searchValue = tableSearch.value.toLowerCase();
        const filteredEvents = events.filter(event =>
            event.name.toLowerCase().includes(searchValue) ||
            event.startDate.toLowerCase().includes(searchValue) ||
            event.endDate.toLowerCase().includes(searchValue) ||
            event.director.toLowerCase().includes(searchValue) ||
            event.modalidad.toLowerCase().includes(searchValue)
        );
        displayEvents(filteredEvents);
    });

    // Initial display of events
    displayEvents(events);
});
