<link rel="dns-prefetch" href="//unpkg.com" />
<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<x-app-layout>
    <x-sider>
    </x-sider>
    @vite (['resources/css/dashboard.css','resources/css/calendario.css','resources/js/calendario.js'])

    <link rel="dns-prefetch" href="//unpkg.com" />
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">

    <body class="antialiased bg-gray-100 sans-serif">
        <div class="h-screen px-4 py-2 mx-auto md:py-96 md:ml-16" id="app">
            <div class="overflow-hidden bg-white rounded-lg shadow">
                <div class="flex items-center justify-between px-6 py-2 bg-blue-800">
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
                        <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Fecha del
                            Evento</label>
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
                        <textarea id="event-note"
                            class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500"
                            oninput="updateCharacterCount()"></textarea>
                        <p id="character-count">200 caracteres restantes</p>
                    </div>
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
                    </script>
                    <div class="inline-block w-64 mb-4">
                        <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Selecciona un
                            tema</label>
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
    </body>
</x-app-layout>
