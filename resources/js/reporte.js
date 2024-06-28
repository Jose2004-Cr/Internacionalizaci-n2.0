$(document).ready(function() {
    const students = [
        {id: 1, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 2, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 3, name: 'John Doe', status: 'Active', email: 'john@example.com'},
        {id: 4, name: 'Jane Smith', status: 'Inactive', email: 'jane@example.com'},
        {id: 5, name: 'John Doe', status: 'Active', email: 'john@example.com'},
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

    ];

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
        ]
    });

    $('#table-search').on('input', function() {
        table.search($(this).val()).draw();
    });

    $('#dropdownRadioButton').on('click', function() {
        $('#dropdownRadio').toggleClass('show');
    });

    $('input[name="filter-radio"]').on('change', function() {
        const days = $(this).val();
 
        $('#dropdownRadioButton').text(`Últimos ${days} días`);
        $('#dropdownRadio').removeClass('show');
    });
});
