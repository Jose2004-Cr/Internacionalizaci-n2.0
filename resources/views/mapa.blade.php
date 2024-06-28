<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-fullscreen/dist/leaflet.fullscreen.css" />
<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/mapa.css', 'resources/css/dashboard.css'])
    <x-sider>
    </x-sider>

    <div class="container px-40 mx-auto mt-10">
        <div class="flex items-center justify-between mb-20">
            <h1 class="text-2xl font-bold"></h1>

            <body class="flex items-center justify-center min-h-screen bg-gray-100">
                <section class="container p-8 mx-auto bg-white rounded-md shadow-md">

                    <body class="flex-row p-4 d-flex justify-content-center align-items-center min-vh-100 bg-light">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="bg-gray-100 rounded shadow col-md-3 scrollable-table">
                                    <h2 class="mb-4 text-center text-primary fw-bold">Usuarios por país</h2> <input
                                        type="text" id="search" class="form-control search-bar"
                                        placeholder="Buscar por país...">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>País</th>
                                                <th>Detalles</th>
                                            </tr>
                                        </thead>
                                        <tbody id="user-table"> </tbody>
                                    </table>
                                    <div id="pagination" class="mb-3 d-flex justify-content-center"> <button
                                            id="prev" class="pagination-button me-2">Anterior <- </button> <button
                                                    id="next" class="pagination-button">Siguiente -> </button>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div id="location" class="w-100"></div>
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

    </body>
</x-app-layout>
