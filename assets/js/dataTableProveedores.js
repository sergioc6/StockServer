$(document).ready(function(){
    $('#proveedores').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ proveedores por pág.",
            "zeroRecords": "Ninguno encontrado",
            "info": "Mostrando pág _PAGE_ de _PAGES_",
            "infoEmpty": "No hay proveedores",
            "infoFiltered": "(filtrado de un total de _MAX_ proveedores)"
        }
    } );
    
    
});