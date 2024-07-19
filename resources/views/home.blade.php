<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


<x-app-layout>
    @vite(['resources/css/home.css', 'resources/js/home.js'])

    <body>
        <div class="container px-4 mx-auto">
            <div class="flex flex-col items-center justify-between mb-6 sm:flex-row">
                <h1 class="text-3xl font-bold text-gray-800">Agregados Reciente...</h1>
                <button id="addEventButton"
                    class="mt-4 sm:mt-0 px-4 py-2 text-white bg-[#0F293E] rounded shadow-md hover:bg-blue-900">
                    Agregar Evento +
                </button>
            </div>
            <section>
                <main>
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3" id="eventsGrid">
                        <!-- Event cards will be dynamically added here -->
                    </div>
                    <div class="mt-12">
                        <h2 class="text-xl font-bold text-gray-800">Eventos Registrados</h2>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <div
                                class="flex flex-col items-center justify-between pb-4 space-y-4 sm:flex-row sm:space-y-0">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center px-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m2-7A8 8 0 1 1 1 8a8 8 0 0 1 16 0Z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search"
                                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg sm:w-96 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Buscar">
                                </div>
                            </div>
                            <table id="eventsTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-white uppercase bg-gray-700 table-header">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Nombre</th>
                                        <th scope="col" class="px-6 py-3">Fecha de Inicio</th>
                                        <th scope="col" class="px-6 py-3">Fecha de Finalización</th>
                                        <th scope="col" class="px-6 py-3">Director</th>
                                        <th scope="col" class="px-6 py-3">Movilidad</th>
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
                        <label for="eventDirector" class="block mb-2 font-bold text-gray-700">Director del
                            Evento</label>
                        <input type="text" id="eventDirector"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label for="eventModalidad" class="block mb-2 font-bold text-gray-700">Tipo de movilidad</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200"
                            name="eventModalidad" id="eventModalidad">
                            
                            <option value="" disabled selected>Seleccione un tipo de movilidad</option>
                            <option value="Entrante virtual">Entrante virtual</option>
                            <option value="Entrante presencial">Entrante presencial</option>
                            <option value="Saliente virtual">Saliente virtual</option>
                            <option value="Saliente presencial">Saliente presencial</option>
                        </select>
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
                    <div class="flex justify-end">
                        <button type="button" id="closeModalButton"
                            class="px-4 py-2 mr-2 text-gray-700 bg-gray-200 rounded hover:bg-gray-300">Cancelar</button>
                        <button type="submit"
                            class="px-4 py-2 text-white bg-[#0F293E] rounded hover:bg-blue-900">Agregar Evento</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</x-app-layout>