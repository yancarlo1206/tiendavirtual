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
                type: "POST",
                data: $(form).serialize(),
                dataType: "json",
                url: BASE.url + "registro/crear/",
                success: function(data) {
                    $('#success').fadeIn();
                    $('#formRegistro').each(function(){
                        if(data.error){
                            toastr["error"](data.error);
                        }else{
                            toastr["success"](data.ok);
                        }
                        this.reset();
                    });
                },
                error: function() {
                    $('#formRegistro').fadeTo("slow", 1, function() {
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