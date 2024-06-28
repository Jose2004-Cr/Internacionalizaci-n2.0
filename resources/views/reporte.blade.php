<x-app-layout>
    @vite(['resources/css/dashboard.css','resources/css/reporte.css' ,'resources/js/reporte.js'])
    <x-sider>
    </x-sider>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.0/jszip.min.js"></script>

    <body>
        <div class="container">
            <div class="table-container">
                <div class="pb-4 d-flex justify-content-between">
                    <div>
                        <button id="dropdownRadioButton" class="btn btn-secondary dropdown-toggle" type="button">
                            Últimos 30 días
                        </button>
                        <div id="dropdownRadio" class="dropdown-menu">
                            <label class="dropdown-item">
                                <input type="radio" name="filter-radio" value="1"> Último día
                            </label>
                            <label class="dropdown-item">
                                <input type="radio" name="filter-radio" value="7"> Últimos 7 días
                            </label>
                            <label class="dropdown-item">
                                <input type="radio" name="filter-radio" value="30" checked> Últimos 30 días
                            </label>
                            <label class="dropdown-item">
                                <input type="radio" name="filter-radio" value="30"> Mes pasado
                            </label>
                            <label class="dropdown-item">
                                <input type="radio" name="filter-radio" value="365"> Año pasado
                            </label>
                        </div>
                    </div>
                </div>
                <table id="student-table" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" id="checkbox-all-search"></th>
                            <th scope="col">ID Estudiante</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                const students = [
                    {id: 1, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 2, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 3, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 4, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 5, name: 'Glen Eduardo', status: 'Active', email: 'john@example.com'},
        {id: 6, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 7, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 8, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 9, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 10, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 11, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 12, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 13, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 14, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 15, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 16, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 17, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 18, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 19, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 20, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
                    // Agrega más estudiantes según sea necesario
                ];

                // Destruir DataTable existente si ya está inicializado
                if ($.fn.DataTable.isDataTable('#student-table')) {
                    $('#student-table').DataTable().destroy();
                }

                const table = $('#student-table').DataTable({
                    data: students,
                    columns: [
                        { data: null, render: function (data, type, row) {
                            return '<input type="checkbox" class="student-checkbox">';
                        }},
                        { data: 'id' },
                        { data: 'name' },
                        { data: 'status' },
                        { data: 'email' },
                    ],
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            title: 'Datos de Estudiantes'
                        }
                    ],
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json'
                    }
                });

                $('#dropdownRadioButton').on('click', function() {
                    $('#dropdownRadio').toggleClass('show');
                });

                $('input[name="filter-radio"]').on('change', function() {
                    const days = $(this).val();
                    $('#dropdownRadioButton').text(`Últimos ${days} días`);
                    $('#dropdownRadio').removeClass('show');
                });

                $('#checkbox-all-search').on('change', function() {
                    const checkboxes = $('.student-checkbox');
                    checkboxes.prop('checked', $(this).is(':checked'));
                });
            });
        </script>
    </body>
</x-app-layout>


