<x-app-layout>
    @vite(['resources/css/home.css', 'resources/js/home.js'])

    <body>
        <div class="container px-4 mx-auto">
            <div class="flex flex-col items-center justify-between mb-6 sm:flex-row">
                <h1 class="text-3xl font-bold text-gray-800">Agregados Reciente...</h1>
                <button id="addEventButton" class="mt-4 sm:mt-0 px-4 py-2 text-white bg-[#0F293E] rounded shadow-md hover:bg-blue-900">
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
                        <div class="overflow-x-auto">
                            <div class="flex items-center justify-between pb-4">
                                <input type="text" id="table-search" class="block p-2 border rounded-md w-80" placeholder="Buscar evento...">
                            </div>
                            <table class="min-w-full bg-white border rounded-md">
                                <thead>
                                    <tr class="border-b">
                                        <th class="px-6 py-3 text-left">Nombre del Evento</th>
                                        <th class="px-6 py-3 text-left">Fecha de Inicio</th>
                                        <th class="px-6 py-3 text-left">Fecha de Fin</th>
                                        <th class="px-6 py-3 text-left">Director</th>
                                        <th class="px-6 py-3 text-left">Movilidad</th>
                                        <th class="px-6 py-3 text-left">Estatus</th>
                                        <th class="px-6 py-3 text-left">Detalles</th>
                                    </tr>
                                </thead>
                                <tbody id="eventsTableBody">
                                    <!-- Event rows will be dynamically added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </section>
        </div>

        <div id="eventModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
            <div class="w-full max-w-lg p-8 bg-white rounded-md">
                <h2 class="mb-4 text-2xl font-bold">Agregar Nuevo Evento</h2>
                <form id="eventForm">
                    @csrf
                    <div class="mb-4">
                        <label for="eventName" class="block mb-1 font-semibold">Nombre del Evento</label>
                        <input type="text" id="eventName" name="eventName" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="eventStartDate" class="block mb-1 font-semibold">Fecha de Inicio</label>
                        <input type="date" id="eventStartDate" name="eventStartDate" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="eventEndDate" class="block mb-1 font-semibold">Fecha de Fin</label>
                        <input type="date" id="eventEndDate" name="eventEndDate" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="eventDirector" class="block mb-1 font-semibold">Director</label>
                        <input type="text" id="eventDirector" name="eventDirector" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="eventActividad" class="block mb-1 font-semibold">Actividad</label>
                        <select id="eventActividad" name="eventActividad" class="w-full p-2 border rounded-md">
                            @foreach ($actividades as $actividad)
                                <option value="{{ $actividad->id }}">{{ $actividad-> Actividad_Name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="eventMovilidad" class="block mb-1 font-semibold">Movilidad</label>
                        <select id="eventMovilidad" name="eventMovilidad" class="w-full p-2 border rounded-md">
                            @foreach ($movilidades as $movilidad)
                                <option value="{{ $movilidad->id }}">{{ $movilidad->Mov_Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" id="closeModalButton" class="px-4 py-2 mr-2 text-gray-600 bg-gray-200 rounded shadow-md hover:bg-gray-300">
                            Cancelar
                        </button>
                        <button type="submit" class="px-4 py-2 text-white bg-[#0F293E] rounded shadow-md hover:bg-blue-900">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</x-app-layout>
