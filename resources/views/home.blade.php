<x-app-layout>
    <x-sider>
    </x-sider>

    {{-- @vite(['resources/css/home.css', 'resources/js/home.js','resources/css/dashboard.css']) --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            background-color: #f0f4f8;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .card {
            background-color: #1E3A8A;
            /* Blue color */
            color: white;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .slide-in {
            position: fixed;
            top: 0;
            right: 0;
            height: 100%;
            width: 0;
            overflow: hidden;
            background: white;
            transition: width 0.3s ease-in-out;
            box-shadow: -2px 0 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            padding: 20px;
        }

        .slide-in.active {
            width: 400px;
        }

        .modal-header,
        .modal-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-body {
            margin-top: 20px;
        }

        /* Table styles */
        .table-header {
            background-color: #1E3A8A;
            color: white;
        }

        .table-body .status.active {
            background-color: #48BB78;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            text-align: center;
        }

        .table-body .status.finalized {
            background-color: #FF6B6B;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            text-align: center;
        }

        .table-body .details {
            color: #1E40AF;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
    </head>

    <body>
        <div class="container">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Agregados Reciente...</h1>
                <button id="addEventButton"
                    class="px-4 py-2 text-white bg-blue-500 rounded shadow-md hover:bg-blue-700">Agregar Evento
                    +</button>
            </div>
            <section>
                <main>
                    <div class="grid grid-cols-3 gap-6" id="eventsGrid">
                        <!-- Event cards will be dynamically added here -->
                    </div>
                    <div class="mt-8">
                        <h2 class="text-xl font-bold text-gray-800">Eventos Registrados</h2>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <div
                                class="flex flex-wrap items-center justify-between pb-4 space-y-4 flex-column sm:flex-row sm:space-y-0">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center px-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m2-7A8 8 0 1 1 1 8a8 8 0 0 1 16 0Z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search"
                                        class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search for items">
                                </div>
                            </div>
                            <table id="eventsTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-white uppercase bg-gray-700 table-header">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Nombre</th>
                                        <th scope="col" class="px-6 py-3">Fecha de Inicio</th>
                                        <th scope="col" class="px-6 py-3">Fecha de Finalización</th>
                                        <th scope="col" class="px-6 py-3">Director</th>
                                        <th scope="col" class="px-6 py-3">Estado</th>
                                        <th scope="col" class="px-6 py-3">Detalles</th>
                                    </tr>
                                </thead>
                                <tbody id="eventsTableBody" class="table-body">
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            NameEvent</td>
                                        <td class="px-6 py-4">Start Date</td>
                                        <td class="px-6 py-4">End Date</td>
                                        <td class="px-6 py-4">NameDirect</td>
                                        <td class="px-6 py-4"><span class="status">Finalizado</span></td>
                                        <td class="px-6 py-4"><button class="details">Ver</button></td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </section>
        </div>
        <div id="eventModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
            <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-lg">
                <h2 class="mb-4 text-2xl font-bold">Agregar Nuevo Evento</h2>
                <form id="eventForm">
                    <div class="mb-4">
                        <label for="eventName" class="block mb-2 font-bold text-gray-700">Nombre del Evento</label>
                        <input type="text" id="eventName"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label for="eventStartDate" class="block mb-2 font-bold text-gray-700">Fecha de Inicio</label>
                        <input type="date" id="eventStartDate"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label for="eventEndDate" class="block mb-2 font-bold text-gray-700">Fecha de
                            Finalización</label>
                        <input type="date" id="eventEndDate"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label for="eventLocation" class="block mb-2 font-bold text-gray-700">Ubicación del
                            Evento</label>
                        <input type="text" id="eventLocation"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label for="eventDescription" class="block mb-2 font-bold text-gray-700">Descripción del
                            Evento</label>
                        <textarea id="eventDescription"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200"></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" id="closeModalButton"
                            class="px-4 py-2 mr-2 text-gray-700 bg-gray-200 rounded hover:bg-gray-300">Cancelar</button>
                        <button type="submit"
                            class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Agregar Evento</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const addEventButton = document.getElementById('addEventButton');
                const eventModal = document.getElementById('eventModal');
                const closeModalButton = document.getElementById('closeModalButton');
                const eventForm = document.getElementById('eventForm');
                const eventsGrid = document.getElementById('eventsGrid');
                const eventsTableBody = document.getElementById('eventsTableBody');
                const tableSearch = document.getElementById('table-search');

                let events = [];

                addEventButton.addEventListener('click', function() {
                    eventModal.classList.remove('hidden');
                });

                closeModalButton.addEventListener('click', function() {
                    eventModal.classList.add('hidden');
                });

                eventForm.addEventListener('submit', function(e) {
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
                    eventsGrid.innerHTML = '';
                    eventsTableBody.innerHTML = '';

                    events.forEach(event => {
                        const currentDate = new Date().toISOString().split('T')[0];
                        const isActive = new Date(event.endDate) >= new Date(currentDate);
                        const statusClass = isActive ? 'active' : 'finalized';
                        const statusText = isActive ? 'Activo' : 'Finalizado';

                        const eventCard = document.createElement('div');
                        eventCard.className = 'p-4 card rounded shadow-md';
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

                tableSearch.addEventListener('input', function() {
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
        </script>
    </body>

</x-app-layout>
