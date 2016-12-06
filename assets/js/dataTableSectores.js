$(document).ready(function(){
    $('#sectores').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ sectores por pág.",
            "zeroRecords": "Ninguno encontrado",
            "info": "Mostrando pág _PAGE_ de _PAGES_",
            "infoEmpty": "No hay sectores",
            "infoFiltered": "(filtrado de un total de _MAX_ sectores)"
        }
    } );
    
    
});