$(document).ready(function(){
    $('#insumos').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ insumos por pág.",
            "zeroRecords": "Ninguno encontrado",
            "info": "Mostrando pág _PAGE_ de _PAGES_",
            "infoEmpty": "No hay insumos",
            "infoFiltered": "(filtrado de un total de _MAX_ insumos)"
        }
    } );
    
    
});