$(document).ready(function(){
    $('#usuarios').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ usuarios por pág.",
            "zeroRecords": "Ninguno encontrado",
            "info": "Mostrando pág _PAGE_ de _PAGES_",
            "infoEmpty": "No hay usuarios",
            "infoFiltered": "(filtrado de un total de _MAX_ usuario)"
        }
    } );
    
    
});