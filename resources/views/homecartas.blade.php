<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-fullscreen/dist/leaflet.fullscreen.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
<x-app-layout>
    <x-sider>
    </x-sider>
    @vite(['resources/js/homecartas.js', 'resources/css/mapa.css', 'resources/css/dashboard.css'])

    <div class="container mx-auto mt-10 px-60">
        <div class="flex items-center justify-between mb-10">
            <body class="flex items-center justify-center min-h-screen bg-gray-100">
                <section class="container p-4 mx-auto bg-white rounded-md shadow-md">

                    <body class="flex-row p-2 d-flex justify-content-center align-items-center min-vh-100 bg-light">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="bg-gray-100 rounded shadow col-md-3 scrollable-table">
                                    <h2 class="mb-4 text-center text-primary fw-bold">Paises Asistidos</h2>

                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>País</th>
                                                <th>Total</th>
                                                <th>Detalles</th>
                                            </tr>
                                        </thead>

                                    </table>
                                </div>
                                <div class="col-md-9">
                                    <div id="map-container" class="w-100" style="height: 500px;">
                                        <div id="location" class="w-100 h-100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </body>
            </div>
            @push('js')
            <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
            <script src="https://unpkg.com/leaflet.vectorgrid/dist/Leaflet.VectorGrid.bundled.js"></script>
            <script src="https://unpkg.com/leaflet-fullscreen/dist/Leaflet.fullscreen.min.js"></script>
            <script src="{{ asset('js/mapa.js') }}"></script>
        @endpush
        </div>
    </div>
    <body class="bg-gray-100">
        <section class="container w-8/12 p-8 mx-auto mt-16 bg-white rounded-md shadow-md">
            <h1 class="mb-8 text-3xl font-bold text-gray-900">Datos Del Evento</h1>
            <form class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <div class="flex flex-col mb-4">
                        <label for="nombreEvento" class="mb-2 text-xl font-bold text-blue-800">Nombre del evento</label>
                        <input type="text" id="nombreEvento"
                            class="p-3 bg-gray-100 border border-gray-300 rounded-md" placeholder="Nombre del evento"
                            readonly>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="tipoActividad" class="mb-2 text-xl font-bold text-blue-800">Tipo de actividad</label>
                        <input type="text" id="tipoActividad"
                            class="p-3 bg-gray-100 border border-gray-300 rounded-md" placeholder="Tipo de actividad"
                            readonly>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="participantes" class="mb-2 text-xl font-bold text-blue-800">Participantes <span
                                id="participantCount" class="text-xs text-gray-500">| 0 de 10</span></label>
                        <div class="flex items-center w-full mt-1">
                            <input type="text" id="participantes"
                                class="flex-grow h-12 p-3 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Nombre del participante" oninput="updateParticipantCounter()"
                                autocomplete="off">
                            <button type="button" id="addParticipantButton"
                                class="p-2 ml-2 text-white bg-blue-500 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                                onclick="addParticipant()" disabled>+</button>
                        </div>
                        <div id="participantList" class="flex flex-wrap gap-2 mt-4"></div>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col mb-4">
                        <label for="nombreResponsable" class="mb-2 text-xl font-bold text-blue-800">Nombre del responsable</label>
                        <input type="text" id="nombreResponsable"
                            class="p-3 bg-gray-100 border border-gray-300 rounded-md"
                            placeholder="Nombre del responsable" readonly>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="fechaVencimiento" class="mb-2 text-xl font-bold text-blue-800">Fecha de vencimiento</label>
                        <input type="date" id="fechaVencimiento"
                            class="w-full h-12 p-3 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Fecha de vencimiento" readonly>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="personasAsistidasBtn" class="mb-2 text-xl font-bold text-blue-800">Personas asistidas</label>
                        <div class="relative">
                            <input type="button" id="personasAsistidasBtn"
                                class="w-full p-3 pl-10 bg-gray-100 border border-gray-300 rounded-md"
                                value="Personas asistidas">
                            <svg class="absolute w-6 h-6 text-gray-800 top-3 left-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </form>
            <div class="flex justify-end mt-6">
                <button type="button" id="editButton"
                    class="px-6 py-2 text-sm font-medium text-blue-700 border border-blue-700 rounded-md hover:text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
                    onclick="enableEditMode()">Editar</button>
                <button type="button" id="deleteButton"
                    class="hidden px-6 py-2 ml-2 text-white bg-red-500 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                    onclick="deleteData()">Eliminar</button>
                <button type="button" id="saveButton"
                    class="hidden px-6 py-2 ml-2 text-white bg-green-500 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                    onclick="saveChanges()">Guardar</button>
            </div>
        </section>
    </body>
    <script>
        function enableEditMode() {
            document.getElementById("nombreEvento").readOnly = false;
            document.getElementById("tipoActividad").readOnly = false;
            document.getElementById("nombreResponsable").readOnly = false;
            document.getElementById("fechaVencimiento").readOnly = false;
            document.getElementById("deleteButton").classList.remove('hidden');
            document.getElementById("saveButton").classList.remove('hidden');
            document.getElementById("editButton").classList.add('hidden');
        }

        function saveChanges() {
            document.getElementById("nombreEvento").readOnly = true;
            document.getElementById("tipoActividad").readOnly = true;
            document.getElementById("nombreResponsable").readOnly = true;
            document.getElementById("fechaVencimiento").readOnly = true;
            document.getElementById("deleteButton").classList.add('hidden');
            document.getElementById("saveButton").classList.add('hidden');
            document.getElementById("editButton").classList.remove('hidden');
        }

        function deleteData() {
            if (confirm("¿Estás seguro de que quieres eliminar este evento?")) {
                alert("Evento eliminado");
            }
        }

        function addParticipant() {
            const participantName = document.getElementById("participantes").value.trim();
            if (participantName) {
                const participantList = document.getElementById("participantList");
                const participantCount = participantList.children.length;

                if (participantCount < 10) {
                    const participantDiv = document.createElement("div");
                    participantDiv.classList.add("flex", "items-center", "justify-between", "bg-blue-500", "text-white",
                        "p-0", "rounded-md", "w-20");

                    const nameSpan = document.createElement("span");
                    nameSpan.textContent = participantName;
                    participantDiv.appendChild(nameSpan);

                    const removeButton = document.createElement("button");
                    removeButton.classList.add("text-red-500", "hover:text-red-700", "focus:outline-none", "ml-2");
                    removeButton.textContent = "×";
                    removeButton.onclick = function() {
                        participantDiv.remove();
                        updateParticipantCounter();
                    };

                    participantDiv.appendChild(removeButton);
                    participantList.appendChild(participantDiv);
                    document.getElementById("participantes").value = "";
                    updateParticipantCounter();
                } else {
                    alert("Máximo 10 participantes alcanzado");
                }
            }
        }

        function updateParticipantCounter() {
            const participantList = document.getElementById("participantList");
            const participantCount = participantList.children.length;
            document.getElementById("participantCount").textContent = `| ${participantCount} de 10`;
            document.getElementById("addParticipantButton").disabled = participantCount >= 10;
        }

        document.getElementById("participantes").addEventListener("input", function() {
            const participantName = document.getElementById("participantes").value.trim();
            document.getElementById("addParticipantButton").disabled = !participantName;
        });

        updateParticipantCounter(); // Llamada inicial para establecer el estado del botón
    </script>
    <body>
        <section class="container w-8/12 p-6 mx-auto mt-16 bg-white rounded-md shadow-md">
            <div class="flex items-center justify-between mb-4">
                <h1 class="text-2xl font-bold text-gray-800">Personas Registradas</h1>
                <div class="flex space-x-2">
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Buscar persona..."
                            class="py-2 pl-8 pr-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <svg class="w-5 h-5 text-gray-400 absolute left-2 top-2.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7" />
                        </svg>
                    </div>
                    <button id="certificarBtn"
                        class="flex items-center px-4 py-2 text-white transition duration-300 bg-green-500 rounded-md hover:bg-green-600">
                        Certificar
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                    <button class="p-2 transition duration-300 bg-gray-200 rounded-md hover:bg-gray-300">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="overflow-hidden bg-white rounded-lg shadow-md">
                <table class="w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left">Nombre</th>
                            <th class="px-6 py-3 text-left">Asistió</th>
                            <th class="px-6 py-3 text-left">Certificado</th>
                            <th class="px-6 py-3 text-left">Correo</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200" id="participantTable">

                    </tbody>
                </table>
            </div>
        </section>
    </body>
</x-app-layout>
