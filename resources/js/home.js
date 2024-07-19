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

    eventForm.addEventListener('submit', async function (e) {
        e.preventDefault();

        const eventName = document.getElementById('eventName').value;
        const eventStartDate = document.getElementById('eventStartDate').value;
        const eventEndDate = document.getElementById('eventEndDate').value;
        const eventDirector = document.getElementById('eventDirector').value;
        const eventActividad = document.getElementById('eventActividad').value;
        const eventMovilidad = document.getElementById('eventMovilidad').value;

        if (!eventName || !eventStartDate || !eventEndDate || !eventDirector || !eventActividad || !eventMovilidad) {
            console.error('Todos los campos del formulario son obligatorios.');
            return;
        }

        const newEvent = {
            Name: eventName,
            Evento_Inicio: eventStartDate,
            Evento_Fin: eventEndDate,
            Director: eventDirector,
            actividad_id: eventActividad,
            movilidad_id: eventMovilidad,
        };

        try {
            const response = await fetch('/eventos', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(newEvent)
            });

            if (!response.ok) {
                throw new Error('Error al guardar el evento');
            }

            const savedEvent = await response.json();
            events.push(savedEvent);
            displayEvents(events);

            eventModal.classList.add('hidden');
            eventForm.reset();
        } catch (error) {
            console.error('Hubo un problema con la solicitud Fetch:', error);
        }
    });

    async function fetchEvents() {
        try {
            const response = await fetch('/eventos');
            if (!response.ok) {
                throw new Error('Error al cargar los eventos');
            }
            const data = await response.json();
            events = data;
            displayEvents(events);
        } catch (error) {
            console.error('Hubo un problema al cargar los eventos:', error);
        }
    }

    function displayEvents(events) {
        events.sort((a, b) => new Date(b.Evento_Fin) - new Date(a.Evento_Fin));
        const recentEvents = events.slice(0, 6);

        eventsGrid.innerHTML = '';
        eventsTableBody.innerHTML = '';

        recentEvents.forEach(event => {
            const currentDate = new Date().toISOString().split('T')[0];
            const isActive = new Date(event.Evento_Fin) >= new Date(currentDate);
            const statusClass = isActive ? 'active' : 'finalized';
            const statusText = isActive ? 'Activo' : 'Finalizado';

            const eventCard = document.createElement('div');
            eventCard.className = 'p-4 rounded shadow-md card';
            eventCard.innerHTML = `
                <h2 class="mb-2 text-yellow-50 text-xl font-bold ">${event.Name}</h2>
                <p class=" text-cyan-300"> ${event.Director}</p>
                <p class="mb-6"> ${event.movilidad_id}</p>
                <p class="mt-2 text-sm text-blue-200"> ${event.Evento_Inicio} Hasta el ${event.Evento_Fin}</p>`;

            eventCard.addEventListener('click', function () {
                window.location.href = '/homecartas';
            });

            const eventRow = document.createElement('tr');
            eventRow.className = 'bg-white border-b dark:bg-gray-800 dark:border-gray-700';
            eventRow.innerHTML = `
                <td class="text-base mb-2">${event.Name}</td>
                <td class="px-6 py-4">${event.Evento_Inicio}</td>
                <td class="px-6 py-4">${event.Evento_Fin}</td>
                <td class="px-6 py-4">${event.Director}</td>
                <td class="">${event.movilidad_id}</td>
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
            event.Name.toLowerCase().includes(searchValue) ||
            event.Evento_Inicio.toLowerCase().includes(searchValue) ||
            event.Evento_Fin.toLowerCase().includes(searchValue) ||
            event.Director.toLowerCase().includes(searchValue) ||
            event.movilidad_id.toLowerCase().includes(searchValue)
        );
        displayEvents(filteredEvents);
    });

    // Initial fetch and display of events
    fetchEvents();
});
