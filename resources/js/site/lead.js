$(document).ready(function () {

    $('#form-contact').submit(function (e) {
        e.preventDefault();
        $('#form-message').remove();
        var form = $(this);
        form.find('button').attr('disabled', true).text('Aguarde...')
        $.ajax({
            type: "post",
            dataType: "json",
            url: form.attr('action'),
            data: form.serialize(),
            success: function () {
                form.find('button').attr('disabled', false).text('Enviar')
                var html_success = '<div id="form-message" class="alert alert-success" role="alert">';
                html_success += '<p class="alert-heading">Formulário enviado com sucesso!</p>';
                html_success += '</div>';
                $('.form .form__form button').before(html_success);
                form[0].reset()
            },
            error: function (data) {
                form.find('button').attr('disabled', false).text('Enviar')
                var html_error = '<div id="form-message" class="alert alert-danger" role="alert">';
                html_error += '<p class="alert-heading">Atenção!</p>';
                $(data.responseJSON.errors).each(function (i, erros) {
                    $.each(erros, function (ii, error) {
                        html_error += '<p>' + error[0] + '</p>';
                    });
                });
                html_error += '</div>';
                $('.form .form__form button').before(html_error);
            },
        });
    });

});
