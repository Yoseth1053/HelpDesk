$(document).ready( function () {
    $('#myTable').DataTable();
    } );
    
    var table = $('#myTable').DataTable({
    language: {
    "decimal": "",
    "emptyTable": "No hay información",
    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
    "infoPostFix": "",
    "thousands": ",",
    "lengthMenu": "Mostrar _MENU_ Entradas",
    "loadingRecords": "Cargando...",
    "processing": "Procesando...",
    "search": "Buscar:",
    "zeroRecords": "Sin resultados encontrados",
    "paginate": {
    "first": "Primero",
    "last": "Ultimo",
    "next": "Siguiente",
    "previous": "Anterior"
    }
    },
    });



$(document).ready(function ()
{
$('#myTable thead th').each(function () {
var title = $(this).text();
$(this).html(title+' <input type="text" class="form-control ph-center" placeholder="Buscar ' + title + '" />');
});

var table = $('#myTable').DataTable({
"scrollX": true,
"pagingType": "numbers",
"processing": true,
"serverSide": true,
"ajax": "server.php",
order: [[2, 'asc']],
columnDefs: [{
targets: "_all",
orderable: false
}]
});

table.columns().every(function () {
var table = this;
$('input', this.header()).on('keyup change', function () {
if (table.search() !== this.value) {
table.search(this.value).draw();
}
});
});
});

