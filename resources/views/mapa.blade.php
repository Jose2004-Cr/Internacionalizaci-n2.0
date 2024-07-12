<x-app-layout>
    <div class="w-full">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="flex flex-col md:flex-row"> <!-- Contenedor principal con flexbox -->

                    <!-- Columna para la tabla -->
                    <div class="bg-gray-100 rounded shadow-lg col-md-3 p-4 scrollable-table">
                        <h1 class="mb-4 text-center text-gray-900 font-bold">USUARIOS POR PAÍS</h1>
                        <input type="text" id="search" class="form-control search-bar mb-3" placeholder="Buscar por país...">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>País</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>
                            <tbody id="user-table"></tbody>
                        </table>
                    </div>

                    <!-- Columna para el mapa -->
                    <div class="col-md-9 p-4">
                        <div id="location" class="w-full h-96"></div> <!-- Ajustar el tamaño del mapa según necesites -->
                    </div>

                </div>
            </div>
        </div>
    </div>

    @push('js')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet.vectorgrid/dist/Leaflet.VectorGrid.bundled.js"></script>
    <script src="https://unpkg.com/leaflet-fullscreen/dist/Leaflet.fullscreen.min.js"></script>
    <script src="{{ asset('js/mapa.js') }}"></script>
    @endpush

</x-app-layout>