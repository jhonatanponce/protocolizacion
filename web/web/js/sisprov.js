(function($) {
    
    
    $.fn.getRolesUsuario = function(id, sfurl) {
        
        $.ajax({
            url: sfurl, //"{{ path('ajax_usuario_rol') }}"
            data: "id=" + id,
            success: function(data) {
                if (data.responseCode === 200) {
                    $.each(data.role, function(idx, obj) {
                        $('#'+obj).attr('checked','checked');
                    });
                    
                } else if (data.responseCode === 400) {

                   alert(data.msg);
                }
            }
        });
    };
    
    $.fn.getOpcionesRol = function(id, sfurl) {
        
        $.ajax({
            url: sfurl, //"{{ path('ajax_rol_opcion') }}"
            data: "id=" + id,
            success: function(data) {
                if (data.responseCode === 200) {
                    $.each(data.opcion, function(idx, obj) {
                        $('#'+obj).attr('checked','checked');
                    });
                    
                } else if (data.responseCode === 400) {

                   alert(data.msg);
                }
            }
        });
    };
    
    $.fn.validarOnidex = function(cedula, nacionalidad, sfurl) {
        $.ajax({
            url: sfurl, //"{{ path('ajax_validar_onidex') }}"
            data: "cedula=" + cedula + "&nacionalidad=" + nacionalidad,
            success: function(data) {
                if (data.responseCode === 200) {
                    $('#persona_nacionalidad').attr({value: data.nacionalidad, readonly: true});
                    $('#persona_cedula').attr({value: data.cedula, readonly: true});
                    $('#persona_fechaNacimiento').attr({value: data.fechaNac, readonly: true});
                    $('#persona_primerNombre').attr({value: data.nombr1, readonly: true});
                    $('#persona_segundoNombre').attr({value: data.nombr2, readonly: true});
                    $('#persona_primerApellido').attr({value: data.apell1, readonly: true});
                    $('#persona_segundoApellido').attr({value: data.apell2, readonly: true});
                    $('#persona_genSexo').attr({value: data.sexo, readonly: false});
                    $('#persona_genEdoCivil').attr({value: data.edocivil, readonly: false});                    
                } else if (data.responseCode === 400) {

                   alert(data.msg);
                   
                   $('#persona_submit').remove()
                }
            }
        });
    };

})(jQuery);

function encriptar(e,t,u){e.value=base64_encode(e.value);t.value=base64_encode(t.value);if(e.value  == '' || u.value  == ''){alert('Debe Ingresar Usuario y Clave'); document.login.reset();}else{document.login.submit();}}function base64_encode(e){var t="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";var n,r,i,s,o,u,a,f,l=0,c=0,h="",p=[];if(!e){return e}do{n=e.charCodeAt(l++);r=e.charCodeAt(l++);i=e.charCodeAt(l++);f=n<<16|r<<8|i;s=f>>18&63;o=f>>12&63;u=f>>6&63;a=f&63;p[c++]=t.charAt(s)+t.charAt(o)+t.charAt(u)+t.charAt(a)}while(l<e.length);h=p.join("");var d=e.length%3;return(d?h.slice(0,d-3):h)+"===".slice(d||3)}