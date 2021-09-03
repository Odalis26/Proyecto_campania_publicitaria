$(document).ready(function () {

    $('#enviar').click(function () {

        var errores = '';

        // Validado Nombre ==============================
        if ($('#nombre').val() == '') {
            errores += '<p>Ingrese un nombre</p>';
            $('#nombre').css("border-bottom-color", "#F14B4B")
        } else {
            $('#nombre').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Correo ==============================
        if ($('#correo').val() == '') {
            errores += '<p>Ingrese un correo</p>';
            $('#correo').css("border-bottom-color", "#F14B4B")
        } else {
            $('#correo').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Asunto ==============================
        if ($('#asunto').val() == '') {
            errores += '<p>Ingrese un asunto</p>';
            $('#asunto').css("border-bottom-color", "#F14B4B")
        } else {
            $('#asunto').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Mensaje ==============================
        if ($('#mensaje').val() == '') {
            errores += '<p>Escriba un mensaje</p>';
            $('#mensaje').css("border-bottom-color", "#F14B4B")
        } else {
            $('#mensaje').css("border-bottom-color", "#d1d1d1")
        }

        // ENVIANDO MENSAJE ============================
        if (errores == '' == false) {
            var mensajeEmergente = '<div class="ventana_emergente">' +
                                      '<div class="mensaje">' +
                                         '<h3> Error al ingresar datos </h3>' +
                                          errores +
                                         '<span id="cerrar"> Cerrar </span>' +
                                      '</div>' +
                                   '</div>'

            $('body').append(mensajeEmergente);
        }

        // CERRANDO MODAL ==============================
        $('#cerrar').click(function () {
            $('.ventana_emergente').remove();
        });
    });

});
