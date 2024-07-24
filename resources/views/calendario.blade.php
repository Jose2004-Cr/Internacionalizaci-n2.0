<x-app-layout>
    @vite (['resources/css/calendario.css'])

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



        <script>
            const events = {!! $eventos !!};

            let dt = new Date();
            const renderDate = () => {
                dt.setDate(1);
                const today = new Date();
                const month = dt.getMonth();
                const monthName = dt.toLocaleString('default', { month: 'long' });
                const year = dt.getFullYear();
                const firstDayIndex = dt.getDay();
                const lastDay = new Date(dt.getFullYear(), dt.getMonth() + 1, 0).getDate();
                const prevLastDay = new Date(dt.getFullYear(), dt.getMonth(), 0).getDate();
                const lastDayIndex = new Date(dt.getFullYear(), dt.getMonth() + 1, 0).getDay();
                const nextDays = 7 - lastDayIndex - 1;

                document.getElementById('month-name').textContent = monthName;
                document.getElementById('year').textContent = year;

                let days = "";

                for (let x = firstDayIndex; x > 0; x--) {
                    days += `<div class="relative w-[14.28%] h-20 px-2 pt-2 border-t border-r">
                                <div class="absolute bottom-1 right-1 w-full text-gray-400">${prevLastDay - x + 1}</div>
                            </div>`;
                }

                for (let i = 1; i <= lastDay; i++) {
                    const isToday = i === today.getDate() && month === today.getMonth() && year === today.getFullYear();
                    const dayEvents = events.filter(event => {
                        const eventDate = new Date(event.hora);
                        return eventDate.getDate() === i && eventDate.getMonth() === month && eventDate.getFullYear() === year;
                    });

                    let eventHtml = '';
                    dayEvents.forEach(event => {
                        eventHtml += `<div class=" card2 mt-1 overflow-hidden bg-${event.event_theme}-500 rounded-lg shadow-md cursor-pointer event"
                                        data-title="${event.event_title}"
                                        data-date="${event.hora}"
                                        data-note="${event.nota}">
                                        <p class="text-sm font-bold text-white truncate">${event.event_title}</p>
                                        <p class="text-xs text-white truncate ">${event.nota}</p>
                                    </div>`;
                    });



                    document.addEventListener('DOMContentLoaded', function() {
                        // Selecciona todas las cartas con la clase 'event'
                        const eventCards = document.querySelectorAll('.event');

                        // Añade un evento de clic a cada carta
                        eventCards.forEach(card => {
                            card.addEventListener('click', function() {
                                // Obtén los datos de la carta
                                const title = this.getAttribute('data-title');
                                const date = this.getAttribute('data-date');
                                const note = this.getAttribute('data-note');

                                // Construye la URL para redirigir
                                const url = `/tu-vista.blade.php?title=${encodeURIComponent(title)}&date=${encodeURIComponent(date)}&note=${encodeURIComponent(note)}`;

                                // Redirige a la nueva URL
                                window.location.href = url;
                            });
                        });
                    });


                    days += `<div class="relative w-[14.28%] h-20 px-2 pt-2 border-t border-r">
                                <div class="absolute bottom-1 right-1 w-full ${isToday ? 'text-blue-500' : 'text-gray-500'}">${i}</div>
                                ${eventHtml}
                            </div>`;
                }

                for (let j = 1; j <= nextDays; j++) {
                    days += `<div class="relative w-[14.28%] h-20 px-2 pt-2 border-t border-r">
                                <div class="absolute bottom-1 right-1 w-full text-gray-400">${j}</div>
                            </div>`;
                }

                document.getElementById('calendar-grid').innerHTML = days;

                document.querySelectorAll('.event').forEach(event => {
                    event.addEventListener('click', () => {
                        const title = event.getAttribute('data-title');
                        const date = event.getAttribute('data-date');
                        const note = event.getAttribute('data-note');

                        document.getElementById('event-title').value = title;
                        document.getElementById('event-date').value = date;
                        document.getElementById('event-note').value = note;

                        document.getElementById('modal').style.display = 'block';
                    });
                });
            };

            document.getElementById('prev-month').addEventListener('click', () => {
                dt.setMonth(dt.getMonth() - 1);
                renderDate();
            });

            document.getElementById('next-month').addEventListener('click', () => {
                dt.setMonth(dt.getMonth() + 1);
                renderDate();
            });



            renderDate();
        </script>
    </body>
</x-app-layout>
