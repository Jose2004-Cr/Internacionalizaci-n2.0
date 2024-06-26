<x-app-layout>
    <x-sider>
    </x-sider>

    @vite(['resources/css/home.css', 'resources/js/home.js','resources/css/dashboard.css'])

    <body class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="container px-12 mx-auto mt-12">
            <div class="flex items-center justify-between mb-12">
                <h1 class="text-3xl font-bold text-gray-700">Eventos Recientes</h1>
                <button id="addEventButton"
                    class="px-4 py-2 text-white transition bg-blue-500 rounded shadow-md hover:bg-blue-700">Agregar
                    evento +</button>
            </div>
            <section>
                <main>
                    <div class="grid grid-cols-3 gap-6" id="eventsGrid">
                        <!-- Example Event Cards -->
                        <div
                            class="flex flex-col justify-between w-full p-6 text-white rounded-md shadow-md card bg-gradient-to-r from-blue-400 to-indigo-500">
                            <h3 class="text-xl font-bold">Internacionalizacion</h3>
                            <p>Innova _ Colombia</p>
                            <p>Fecha: 14-06 hasta las 6:00 P.M.</p>
                        </div>
                        <div
                            class="flex flex-col justify-between w-full p-6 text-white rounded-md shadow-md card bg-gradient-to-r from-blue-400 to-indigo-500">
                            <h3 class="text-xl font-bold">Hermes</h3>
                            <p>Tecnologico _ Colombia</p>
                            <p>Fecha: 17-06 hasta las 3:00 P.M.</p>
                        </div>
                        <div
                            class="flex flex-col justify-between w-full p-6 text-white rounded-md shadow-md card bg-gradient-to-r from-blue-400 to-indigo-500">
                            <h3 class="text-xl font-bold">Los Panes</h3>
                            <p>Panderia _ Colombia</p>
                            <p>Fecha: 21-06 hasta las 9:00 A.M.</p>
                        </div>
                    </div>
                </main>
            </section>

            <div id="slideInForm" class="slide-in rounded-l-md">
                <div class="flex items-center justify-between mb-4 modal-header">
                    <h2 class="text-2xl font-bold text-gray-700">Agregar evento</h2>
                    <button id="closeSlideInForm" class="text-xl font-bold text-red-500">X</button>
                </div>
                <form id="eventForm" class="modal-body">
                    <input id="eventName" type="text" placeholder="Nombre del evento"
                        class="w-full p-2 mb-4 border border-gray-300 rounded">
                    <input id="eventDirector" type="text" placeholder="Director del evento"
                        class="w-full p-2 mb-4 border border-gray-300 rounded">
                    <button type="button" id="activityTypeButton"
                        class="w-full p-2 mb-4 text-white transition bg-blue-600 rounded hover:bg-blue-700">Tipo de
                        actividad</button>
                    <div id="participantsList" class="mb-4">
                        <button type="button" id="addParticipantButton"
                            class="w-full p-2 mb-2 text-white transition bg-blue-600 rounded hover:bg-blue-700">Agregar
                            participante +</button>
                    </div>
                    <input id="eventDate" type="text" placeholder="Fechas"
                        class="w-full p-2 mb-4 border border-gray-300 rounded">
                </form>
                <div class="modal-footer">
                    <button type="button" id="saveEventButton"
                        class="w-full px-4 py-2 text-white transition bg-blue-600 rounded shadow hover:bg-blue-700">Guardar
                        evento</button>
                </div>
            </div>
        </div>

    </body>
</x-app-layout>
