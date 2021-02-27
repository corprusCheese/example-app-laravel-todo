import {loadImgToServer} from "./functions"

$("#clickSubmit").click((event)=>{
    let form = document.getElementById('password-form')
    if (form.classList.contains('d-none')) {
        event.preventDefault()
        form.classList.remove('d-none');
    } else {
        let data = {
            "name": $("#name").val(),
            "password": $("#password").val(),
            "password_confirmation": $("#password-confirm").val(),
            "email": $("#email").val(),
            "description": $("#description").val(),
            "photo": typeof $("#changePhoto").prop('files')[0].name !== undefined ? $("#changePhoto").prop('files')[0].name: ""
        }

        if (data['password'] == data['password_confirmation'] && data['password'] != "") {
            document.getElementById('clickSubmit').setAttribute('disabled', "disabled");
            $.ajax({
                url: $("#clickSubmit").data('href'),
                type: "PUT",
                contentType: 'application/json',
                data: JSON.stringify(data), // access in body,
                success: function () {
                    loadImgToServer()
                    window.location = window.location.href.split("?")[0];
                },
                error: function (error) {
                    document.getElementById('clickSubmit').removeAttribute('disabled');
                }
            })
        }
    }
})

$("#changePhoto").change( function () {
    var $input = $("#changePhoto");

    if ($input.prop('files') && $input.prop('files')[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#photo').attr('src', e.target.result);
        }

        reader.readAsDataURL($input.prop('files')[0]);
    }
})

$('#clickCreateRecord').click((event) => {

    let data = {
        'text': $("#text").val(),
        'user_id': $("#user").data('id')
    }
    $.ajax({
        url: $("#clickCreateRecord").data('href'),
        type: "POST",
        contentType: 'application/json',
        data: JSON.stringify(data), // access in body,
        success: function () {
            //loadImgToServer()
            //window.location = window.location.href.split("?")[0];
        },
        error: function (error) {
            document.getElementById('clickSubmit').removeAttribute('disabled');
        }
    })
})
