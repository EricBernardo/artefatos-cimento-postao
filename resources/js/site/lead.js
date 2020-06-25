// var xhr = new XMLHttpRequest();
// xhr.open("POST", yourUrl, true);
// xhr.setRequestHeader('Content-Type', 'application/json');
// xhr.send(JSON.stringify({
//     value: value
// }));

document
    .getElementById("form-contact-button")
    .addEventListener("click", function () {
        const elMessageForm = document.getElementById("messages-form");
        elMessageForm.innerHTML = "";
        const __this = this;
        const __form = document.getElementById("form-contact");
        const __url = __form.getAttribute("action");

        let formData = new FormData(document.getElementById("form-contact"));

        __this.setAttribute("disabled", "disabled");

        let xhr = new XMLHttpRequest();
        xhr.open("POST", __url);
        xhr.setRequestHeader("Accept", "application/json");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                let __html = "";
                __this.removeAttribute("disabled");
                const response = JSON.parse(xhr.response);
                if (typeof response.errors != "undefined") {
                    __html =
                        '<div id="form-message" class="alert alert-danger" role="alert">';
                    __html += '<p class="alert-heading">Atenção!</p>';
                    Object.values(response.errors).map(function (errors) {
                        Object.values(errors).map(function (error) {
                            __html += "<p>" + error + "</p>";
                        });
                    });
                    __html += "</div>";
                } else {
                    __html =
                        '<div id="form-message" class="alert alert-success" role="alert">';
                    __html +=
                        '<p class="alert-heading">Formulário enviado com sucesso!</p>';
                    __html += "</div>";

                    __form.reset();
                }

                elMessageForm.innerHTML = __html;
            }
        };
    });

// $('#form-contact').submit(function (e) {
//     e.preventDefault();
//     $('#form-message').remove();
//     var form = $(this);
//     form.find('button').attr('disabled', true).text('Aguarde...')
//     $.ajax({
//         type: "post",
//         dataType: "json",
//         url: form.attr('action'),
//         data: form.serialize(),
//         success: function () {
//             form.find('button').attr('disabled', false).text('Enviar')
//             var html_success = '<div id="form-message" class="alert alert-success" role="alert">';
//             html_success += '<p class="alert-heading">Formulário enviado com sucesso!</p>';
//             html_success += '</div>';
//             $('.form .form__form button').before(html_success);
//             form[0].reset()
//         },
//         error: function (data) {
//             form.find('button').attr('disabled', false).text('Enviar')
//             var html_error = '<div id="form-message" class="alert alert-danger" role="alert">';
//             html_error += '<p class="alert-heading">Atenção!</p>';
//             $(data.responseJSON.errors).each(function (i, erros) {
//                 $.each(erros, function (ii, error) {
//                     html_error += '<p>' + error[0] + '</p>';
//                 });
//             });
//             html_error += '</div>';
//             $('.form .form__form button').before(html_error);
//         },
//     });
// });
