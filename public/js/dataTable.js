$(document).ready( function () {
    $('#myTable').DataTable();
    } );
    
    var table = $('#myTable').DataTable({
    language: {
    "decimal": "",
    "emptyTable": "No hay información",
    "info": "Pagina _PAGE_ De _PAGES_",
    "infoEmpty": "Mostrando 0 to 0 of 0 Resultados",
    "infoFiltered": "(Filtrado de _MAX_ total Resultados)",
    "infoPostFix": "",
    "thousands": ",",
    "lengthMenu": "Mostrar : _MENU_ Resultados",
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

// var table = $('#myTable').DataTable({
// // "scrollX": true,
// // "pagingType": "numbers",
// // "processing": true,
// // "serverSide": true,
// // "ajax": "server.php",
// // order: [[2, 'asc']],
// // columnDefs: [{
// // targets: "_all",
// // orderable: false
// // }]
// });

table.columns().every(function () {
var table = this;
$('input', this.header()).on('keyup change', function () {
if (table.search() !== this.value) {
table.search(this.value).draw();
}
});
});
});

