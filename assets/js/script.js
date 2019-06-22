(function($, window) {
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav: false,
        dots: false,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('.nav li > .sub-menu').parent().hover(function() {
        var submenu = $(this).children('.sub-menu');
        if ( $(submenu).is(':hidden') ) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });
    $("#_form_contato").on("submit", function( event ) {
        event.preventDefault();

        var $callbacks = $("#_contato_callbacks");
        var formData = new FormData();

        formData.append("action", "contato");
        formData.append("nome", $("#contato_nome").val());
        formData.append("email", $("#contato_email").val());
        formData.append("telefone", $("#contato_telefone").val());
        formData.append("assunto", $("#contato_assunto").val());
        formData.append("mensagem", $("#contato_mensagem").val());

        $.ajax({
            type: "post",
            url: ajaxurl,
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            beforeSend: function() {
                $callbacks.find(".alert").remove();
            },
            success: function(res) {
                if ( res.erros ) {
                    $callbacks.prepend(createAlert('danger', res.erros[0]));
                } else {
                    $('#md').append('<div class="modal fade in" role="dialog" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" style="display: block;">\
                            <div class="modal-dialog" role="document">\
                                <div class="modal-content">\
                                    <div class="modal-body">\
                                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>\
                                        <p>Contato enviado com sucesso!</p>\
                                        <button type="button" class="btn btn-default" id="btn-fechar">Ok</button>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>');
                    $('#btn-fechar').on('click', function() {
                        $('.modal').css("display", "none");
                    });
                    // alert("Enviado com sucesso!");
                    // clearValues(["#contato_nome", "#contato_email", "#contato_assunto", "#contato_mensagem"]);
                    //$callbacks.prepend(createAlert('success', 'Contato enviado com sucesso. Em breve entraremos em contato através dos dados informados no formulário.'));
                }
            },
            error: function(res) {
                $callbacks.prepend(createAlert('danger', 'ops, estamos com problemas em nosso servidor. tente de novo mais tarde.'));
            },
            complete: function(res) {
                console.log("complete");
                $("html, body").animate({ scrollTop: $("#_form_contato").offset().top-100 }, 600);
            }
        });
    });
})(jQuery, window);