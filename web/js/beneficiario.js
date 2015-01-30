$(document).ready(function() {

    $("#fecha_nacimiento").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        yearRange: '-100:+0',
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        firstDay: 1,
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
    });

    $("#fecha_censo").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        yearRange: '-100:+0',
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        firstDay: 1,
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
    });

    jQuery.validator.addMethod("digits", function(value, element) {
        return this.optional(element) || /^\d+$/i.test(value);
    }, "<p>Sólo dígitos.</p>");

    jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^\w+$/i.test(value);
    }, "<p>Sólo carácteres alfanuméricos.</p>");

    jQuery.validator.addMethod("letterspace", function(value, element) {
        return this.optional(element) || /^[a-z ]+$/i.test(value);
    }, "<p>Sólo letras.</p>");

    $("#beneficiario").validate({
        errorPlacement: function(error, element) {
                error.insertAfter(element);
        },
        rules: {
            'cedula': {
                required: true,
                alphanumeric: true
            },
            'fecha_nacimiento': {
                required: true
            },
            'primer_nombre': {
                required: true,
                letterspace: true
            },
            'segundo_nombre': {
                letterspace: true
            },
            'primer_apellido': {
                required: true,
                letterspace: true
            },
            'segundo_apellido': {
                letterspace: true
            },
            'rif': {
                required: true,
                alphanumeric: true
            },
            'fecha_censo': {
                required: true
            },
            'telefono_habitacion': {
                digito: true,
                minlength: 11,
                maxlength: 11
            },
            'telefono_movil': {
                digito: true,
                minlength: 11,
                maxlength: 11
            },
            'telefono_adicional': {
                digito: true,
                minlength: 11,
                maxlength: 11
            },
            'correo': {
                email: true
            },
            'correo_alterno': {
                email: true
            },
            'direccion': {
                required: true
            },
            'estadoid': {
                required: true
            },
            'municipioid': {
                required: true
            },
            'parroquiaid': {
                required: true
            },
            'condicion_trabajo': {
                required: true
            },
            'fuente_ingreso': {
                required: true
            },
            'sector_trabajo': {
                required: true
            },
            'relacion_trabajo': {
                required: true
            },
            'cargo': {
                required: true
            },
            'telefono_trabajo': {
                digito: true,
                minlength: 11,
                maxlength: 11
            },
            'ingreso_mensual': {
                required: true,
                number: true
            },
            'ingreso_declarado': {
                required: true,
                number: true
            },
            'ingreso_promedio': {
                required: true,
                number: true
            }

        },
        messages: {
            'cedula': {
                required: "<p>Requerido.</p>"
            },
            'fecha_nacimiento': {
                required: "<p>Requerido.</p>"
            },
            'primer_nombre': {
                required: "<p>Requerido.</p>"
            },
            'primer_apellido': {
                required: "<p>Requerido.</p>"
            },
            'rif': {
                required: "<p>Requerido.</p>"
            },
            'fecha_censo': {
                required: "<p>Requerido.</p>"
            },
            'telefono_habitacion': {
                minlength: "<p>Debe ser mínimo 11 dígitos</p>",
                maxlength: "<p>Debe ser mínimo 11 dígitos</p>"
            },
            'telefono_movil': {
                minlength: "<p>Debe ser mínimo 11 dígitos</p>",
                maxlength: "<p>Debe ser mínimo 11 dígitos</p>"
            },
            'telefono_adicional': {
                minlength: "<p>Debe ser mínimo 11 dígitos</p>",
                maxlength: "<p>Debe ser mínimo 11 dígitos</p>"
            },
            'correo': {
                email: "<p>Correo Inválido</p>"
            },
            'correo_alterno': {
                email: "<p>Correo Inválido</p>"
            },
            'direccion': {
                required: "<p>Requerido.</p>"
            },
            'estadoid': {
                required: "<p>Requerido.</p>"
            },
            'municipioid': {
                required: "<p>Requerido.</p>"
            },
            'parroquiaid': {
                required: "<p>Requerido.</p>"
            },
            'condicion_trabajo': {
                required: "<p>Requerido.</p>"
            },
            'fuente_ingreso': {
                required: "<p>Requerido.</p>"
            },
            'sector_trabajo': {
                required: "<p>Requerido.</p>"
            },
            'relacion_trabajo': {
                required: "<p>Requerido.</p>"
            },
            'cargo': {
                required: "<p>Requerido.</p>"
            },
            'telefono_trabajo': {
                minlength: "<p>Debe ser mínimo 11 dígitos</p>",
                maxlength: "<p>Debe ser mínimo 11 dígitos</p>"
            },
            'ingreso_mensual': {
                required: "<p>Requerido.</p>",
                number: "<p>Solo números.</p>"
            },
            'ingreso_declarado': {
                required: "<p>Requerido.</p>",
                number: "<p>Solo números.</p>"
            },
            'ingreso_promedio': {
                required: "<p>Requerido.</p>",
                number: "<p>Solo números.</p>"
            }
        }
    });

});
