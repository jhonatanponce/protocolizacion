$(document).ready(function() {

    $("#formulario").validate({
        
        rules: {
            'cedula_asignacion': {
                required: true,
                number: true,
                minlength: 7,
                maxlength: 8
            },
            'opcionasignacion': {
                required: true,
            }

        },
        messages: {
            
            'cedula_asignacion': {
                required: "Requerido.",
                number: "Solo números",
                minlength: "Debe ser mínimo 7 dígitos",
                maxlength: "Debe ser máximo 9 dígitos"
            },
            'opcionasignacion': {
                required: "Marque una opción"
            }
        }
    });
//    REPLICO LAS VALIDACIONES PERO CON ID DE FORMULARIO DISTINTO PARA LAS PLANTILLAS QUE TIENEN VARIOS FORMULARIOS
    $("#formulario1").validate({
        
        rules: {
            'cedula_asignacion': {
                required: true,
                number: true,
                minlength: 7,
                maxlength: 8
            },
            'opcionasignacion': {
                required: true,
            }

        },
        messages: {
            
            'cedula_asignacion': {
                required: "Requerido.",
                number: "Solo números",
                minlength: "Debe ser mínimo 7 dígitos",
                maxlength: "Debe ser máximo 9 dígitos"
            },
            'opcionasignacion': {
                required: "Marque una opción"
            }
        }
    });

});



