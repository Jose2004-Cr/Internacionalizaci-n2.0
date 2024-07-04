
document.addEventListener('DOMContentLoaded', function () {
    const addEventButton = document.getElementById('addEventButton');
    const eventModal = document.getElementById('eventModal');
    const closeModalButton = document.getElementById('closeModalButton');
    const eventForm = document.getElementById('eventForm');
    const eventsGrid = document.getElementById('eventsGrid');
    const eventsTableBody = document.getElementById('eventsTableBody');
    const tableSearch = document.getElementById('table-search');

    let events = [];

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
        const eventLocation = document.getElementById('eventLocation').value;
        const eventDescription = document.getElementById('eventDescription').value;

        const newEvent = {
            name: eventName,
            startDate: eventStartDate,
            endDate: eventEndDate,
            location: eventLocation,
            description: eventDescription
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
                <h2 class="mb-2 text-lg font-bold">${event.name}</h2>
                <p class="mb-1 text-sm">Inicio: ${event.startDate}</p>
                <p class="mb-1 text-sm">Finalización: ${event.endDate}</p>
                <p class="mb-2 text-sm">Ubicación: ${event.location}</p>
                <p class="mb-4 text-sm">${event.description}</p>
                <a href="/homecartas" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Ver</a>
            `;

            const eventRow = document.createElement('tr');
            eventRow.className = 'bg-white border-b dark:bg-gray-800 dark:border-gray-700';
            eventRow.innerHTML = `
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">${event.name}</td>
                <td class="px-6 py-4">${event.startDate}</td>
                <td class="px-6 py-4">${event.endDate}</td>
                <td class="px-6 py-4">${event.location}</td>
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
            event.location.toLowerCase().includes(searchValue) ||
            event.description.toLowerCase().includes(searchValue)
        );
        displayEvents(filteredEvents);
    });

    // Initial display of events
    displayEvents(events);
});
