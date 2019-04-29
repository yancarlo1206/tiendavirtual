jQuery(function($) {
    $('#formRegistro').validate({
        rules: {
            nombre: {
                required: true,
                minlength: 2
            },
            celular: {
                required: true,
                minlength: 10
            },
            email: {
                required: true,
                email: true
            },
            clave: {
                required: true
            }
        },
        messages: {
            nombre: {
                required: "Registre el nombre",
                minlength: "El nombre no debe tener menos de 2 caracteres"
            },
            celular: {
                required: "Registre el celular"
            },
            email: {
                required: "Registre el correo valido"
            },
            clave: {
                required: "Registre la clave"
            },
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"external/form/contact-form.php",
                success: function() {
                      $('#success').fadeIn();
            $( '#contactform' ).each(function(){this.reset();});
                },
                error: function() {
                    $('#contactform').fadeTo( "slow", 1, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
    $('#newsletterform').validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"external/form/newsletter-form.php",
                success: function() {
                      $('#success').fadeIn();
            $('#newsletterform').each(function(){this.reset();});
                },
                error: function() {
                    $('#newsletterform').fadeTo( "slow", 1, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});