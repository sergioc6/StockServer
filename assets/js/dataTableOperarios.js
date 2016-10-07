$(document).ready(function(){
    $('#operarios').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ operarios por pág.",
            "zeroRecords": "Ninguno encontrado",
            "info": "Mostrando pág _PAGE_ de _PAGES_",
            "infoEmpty": "No hay operarios",
            "infoFiltered": "(filtrado de un total de _MAX_ operario)"
        }
    } );
    
    
});