<x-app-layout>
    @vite (['resources/css/calendario.css',])

    <link rel="dns-prefetch" href="//unpkg.com" />
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">

    <body class="antialiased bg-gray-100 sans-serif">
        <div class="h-screen px-4 py-2 mx-auto md:py-96 md:ml-16" id="app">
            <div class="overflow-hidden bg-white rounded-lg shadow">

                <div class="flex items-center justify-between px-6 py-2 bg-[#0F293E]">
                    <div>
                        <span id="month-name" class="text-lg font-bold text-white"></span>
                        <span id="year" class="ml-1 text-lg font-bold text-white"></span>
                    </div>
                    <div class="px-1 border rounded-lg" style="padding-top: 2px;">
                        <button id="prev-month" type="button"
                            class="inline-flex items-center p-1 leading-none transition duration-100 ease-in-out rounded-lg cursor-pointer hover:bg-gray-200">
                            <svg class="inline-flex w-6 h-6 leading-none text-white" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <div class="inline-flex h-6 border-r"></div>
                        <button id="next-month" type="button"
                            class="inline-flex items-center p-1 leading-none transition duration-100 ease-in-out rounded-lg cursor-pointer hover:bg-gray-200">
                            <svg class="inline-flex w-6 h-6 leading-none text-white" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="-mx-1 -mb-1 calendar-container">
                    <div class="flex flex-wrap" style="margin-bottom: -40px;">
                        <div style="width: 14.2857%" class="px-2 py-2">
                            <div class="text-sm font-bold tracking-wide text-center text-gray-600 uppercase">Dom</div>
                        </div>
                        <div style="width: 14.2857%" class="px-2 py-2">
                            <div class="text-sm font-bold tracking-wide text-center text-gray-600 uppercase">Lun</div>
                        </div>
                        <div style="width: 14.2857%" class="px-2 py-2">
                            <div class="text-sm font-bold tracking-wide text-center text-gray-600 uppercase">Mar</div>
                        </div>
                        <div style="width: 14.2857%" class="px-2 py-2">
                            <div class="text-sm font-bold tracking-wide text-center text-gray-600 uppercase">Mié</div>
                        </div>
                        <div style="width: 14.2857%" class="px-2 py-2">
                            <div class="text-sm font-bold tracking-wide text-center text-gray-600 uppercase">Jue</div>
                        </div>
                        <div style="width: 14.2857%" class="px-2 py-2">
                            <div class="text-sm font-bold tracking-wide text-center text-gray-600 uppercase">Vie</div>
                        </div>
                        <div style="width: 14.2857%" class="px-2 py-2">
                            <div class="text-sm font-bold tracking-wide text-center text-gray-600 uppercase">Sáb</div>
                        </div>
                    </div>

                    <div id="calendar-grid" class="flex flex-wrap border-t border-l calendar-grid"></div>
                </div>
                
            </div>
        </div>

        <div id="modal" style="background-color: rgba(0, 0, 0, 0.8)"
            class="fixed top-0 bottom-0 left-0 right-0 z-40 hidden w-full h-full">
            <div class="absolute relative left-0 right-0 max-w-xl p-4 mx-auto mt-24 overflow-hidden">
                <div class="absolute top-0 right-0 inline-flex items-center justify-center w-10 h-10 text-gray-500 bg-white rounded-full shadow cursor-pointer hover:text-gray-800"
                    id="close-modal">
                    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                    </svg>
                </div>

                <div class="block w-full p-8 overflow-hidden bg-white rounded-lg shadow">

                    <h2 class="pb-2 mb-6 text-2xl font-bold text-gray-800 border-b">Agregar Nota</h2>

                    <div class="mb-4">
                        <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Título</label>
                        <input id="event-title"
                            class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500"
                            type="text">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Fecha del Evento</label>
                        <input id="event-date"
                            class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500"
                            type="text" readonly>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Hora</label>
                        <input id="event-time"
                            class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500"
                            type="time">
                    </div>

                    <div class="mb-4" onload="resetCharacterCount()">
                        <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Nota</label>
                        <textarea id="event-note" class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500" oninput="updateCharacterCount()"></textarea>
                        <p id="character-count">200 caracteres restantes</p>

                        <script>
                            function updateCharacterCount() {
                                const textarea = document.getElementById('event-note');
                                const characterCountDisplay = document.getElementById('character-count');
                                const maxCharacters = 200;
                                const currentLength = textarea.value.length;

                                if (currentLength > maxCharacters) {
                                    textarea.value = textarea.value.substring(0, maxCharacters);
                                }

                                const charactersRemaining = maxCharacters - textarea.value.length;
                                characterCountDisplay.textContent = charactersRemaining + ' caracteres restantes';

                                if (charactersRemaining < 0) {
                                    characterCountDisplay.style.color = 'red';
                                } else {
                                    characterCountDisplay.style.color = '';
                                }
                            }

                            function resetCharacterCount() {
                                const textarea = document.getElementById('event-note');
                                const characterCountDisplay = document.getElementById('character-count');

                                textarea.value = '';
                                characterCountDisplay.textContent = maxCharacters + ' caracteres restantes';
                                characterCountDisplay.style.color = '';
                            }
                        </script>




                    <div class="inline-block w-64 mb-4">
                        <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Selecciona un tema</label>
                        <div class="relative">
                            <select id="event-theme"
                                class="block w-full px-4 py-2 pr-8 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none hover:border-gray-500 focus:outline-none focus:bg-white focus:border-blue-500">
                                <option value="blue">Azul</option>
                                <option value="red">Rojo</option>
                                <option value="yellow">Amarillo</option>
                                <option value="green">Verde</option>
                                <option value="purple">Púrpura</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-8 text-right">
                        <button type="button"
                            class="px-4 py-2 mr-2 font-semibold text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100"
                            id="delete-button">
                            Eliminar Evento
                        </button>

                        <button type="button"
                            class="px-4 py-2 font-semibold text-white bg-gray-800 border border-gray-800 rounded-lg shadow-sm hover:bg-gray-700"
                            id="save-button">
                            Guardar Evento
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const MONTH_NAMES = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ];
            const DAYS = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];

            let events = [{
                hora: new Date(2023, 5, 25),
                event_title: "Evento en Español",
                event_theme: 'blue',
                nota: "Nota del evento"
            }];

            function init() {
                const calendarGrid = document.getElementById('calendar-grid');
                const monthName = document.getElementById('month-name');
                const year = document.getElementById('year');

                let today = new Date();
                let currentMonth = today.getMonth();
                let currentYear = today.getFullYear();

                renderCalendar(currentMonth, currentYear);

                document.getElementById('prev-month').addEventListener('click', function () {
                    currentMonth = currentMonth === 0 ? 11 : currentMonth - 1;
                    currentYear = currentMonth === 11 ? currentYear - 1 : currentYear;
                    renderCalendar(currentMonth, currentYear);
                });

                document.getElementById('next-month').addEventListener('click', function () {
                    currentMonth = currentMonth === 11 ? 0 : currentMonth + 1;
                    currentYear = currentMonth === 0 ? currentYear + 1 : currentYear;
                    renderCalendar(currentMonth, currentYear);
                });

                function renderCalendar(month, year) {
                    calendarGrid.innerHTML = '';
                    monthName.textContent = MONTH_NAMES[month];
                    document.getElementById('year').textContent = year;

                    const firstDay = new Date(year, month).getDay();
                    const daysInMonth = new Date(year, month + 1, 0).getDate();

                    for (let i = 0; i < firstDay; i++) {
                        const emptyCell = document.createElement('div');
                        emptyCell.className = 'px-2 py-2 border-t border-r text-center';
                        emptyCell.style.width = '14.2857%';
                        calendarGrid.appendChild(emptyCell);
                    }

                    for (let day = 1; day <= daysInMonth; day++) {
                        const dateCell = document.createElement('div');
                        dateCell.className = 'px-2 py-2 border-t border-r border-b text-relative relative cursor-pointer';
                        dateCell.style.width = '14.2857%';
                        dateCell.textContent = day;

                        const eventTitleContainer = document.createElement('div');
                        eventTitleContainer.className = 'text-xs text-gray-600 mt-1';
                        dateCell.appendChild(eventTitleContainer);

                        const currentDate = new Date(year, month, day);
                        const event = events.find(e => e.hora.toDateString() === currentDate.toDateString());

                        if (event) {
                            const eventMarker = document.createElement('div');
                            eventMarker.className = `flex items-center justify-center h-5 w-5 rounded-sm bg-${event.event_theme}-500 text-white font-bold`;
                            // eventMarker.textContent = event.event_title;
                            dateCell.appendChild(eventMarker);
                        }

                        if (currentDate.toDateString() === new Date().toDateString()) {
                            dateCell.classList.add('bg-blue-100');
                        }

                        dateCell.addEventListener('click', function () {
                            document.getElementById('modal').classList.remove('hidden');
                            document.getElementById('event-date').value = currentDate.toLocaleDateString('es-ES', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric'
                            });

                            const existingEvent = events.find(e => e.hora.toDateString() === currentDate.toDateString());
                            if (existingEvent) {
                                document.getElementById('event-title').value = existingEvent.event_title;
                                document.getElementById('event-theme').value = existingEvent.event_theme;
                                document.getElementById('event-note').value = existingEvent.nota;
                                document.getElementById('delete-button').style.display = 'inline-block';
                                document.getElementById('save-button').textContent = 'Actualizar Evento';
                            } else {
                                document.getElementById('event-title').value = '';
                                document.getElementById('event-theme').value = 'blue';
                                document.getElementById('event-note').value = '';
                                document.getElementById('delete-button').style.display = 'none';
                                document.getElementById('save-button').textContent = 'Guardar Evento';
                            }

                            document.getElementById('save-button').onclick = function () {
                                const eventTitle = document.getElementById('event-title').value;
                                const eventTheme = document.getElementById('event-theme').value;
                                const eventNote = document.getElementById('event-note').value;
                                if (existingEvent) {
                                    existingEvent.event_title = eventTitle;
                                    existingEvent.event_theme = eventTheme;
                                    existingEvent.nota = eventNote;
                                } else {
                                    events.push({
                                        hora: currentDate,
                                        event_title: eventTitle,
                                        event_theme: eventTheme,
                                        nota: eventNote
                                    });
                                }
                                renderCalendar(currentMonth, currentYear);
                                document.getElementById('modal').classList.add('hidden');
                            };

                            document.getElementById('delete-button').onclick = function () {
                                if (existingEvent) {
                                    events = events.filter(e => e.hora.toDateString() !== currentDate.toDateString());
                                    renderCalendar(currentMonth, currentYear);
                                    document.getElementById('modal').classList.add('hidden');
                                }
                            };

                            document.getElementById('edit-button').onclick = function () {
                                if (existingEvent) {
                                    document.getElementById('event-title').value = existingEvent.event_title;
                                    document.getElementById('event-theme').value = existingEvent.event_theme;
                                    document.getElementById('event-note').value = existingEvent.nota;
                                    document.getElementById('delete-button').style.display = 'inline-block';
                                    document.getElementById('save-button').textContent = 'Actualizar Evento';
                                }
                            };
                        });

                        calendarGrid.appendChild(dateCell);
                    }
                }

                document.getElementById('close-modal').addEventListener('click', function () {
                    document.getElementById('modal').classList.add('hidden');
                });

                document.getElementById('cancel-button').addEventListener('click', function () {
                    document.getElementById('modal').classList.add('hidden');
                });
            }

            document.addEventListener('DOMContentLoaded', init);
        </script>
    </body>


</x-app-layout>
