$(document).ready(function() {

    /* validación de formulario */
    var formData = $('#form_login');
    $('#btn_ingresar').click(function(event) {
        $(formData).validate({
            rules: {
                email: {
                    required: true,
                    minlength: 3
                },
                pass: {
                    required: true,
                }
            },
            messages: {
                email: {
                    required: "Por favor, ingrese su correo",
                    email: "Por favor, ingrese un correo válido"
                },
                pass: {
                    required: "Por favor, ingrese su contraseña"
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }

        });
    });
});