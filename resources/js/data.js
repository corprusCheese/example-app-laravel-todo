import {enableButtonAndPrevent, loadImgToServer} from "./functions"

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
            "photo": typeof $("#changePhoto").prop('files')[0] !== "undefined" ? $("#changePhoto").prop('files')[0].name: $("#photo").attr('data-src')
        }

        if (data['password'] == data['password_confirmation'] && data['password'] != "") {
            document.getElementById('clickSubmit').setAttribute('disabled', "disabled");
            $.ajax({
                url: $("#clickSubmit").data('href'),
                type: "PUT",
                contentType: 'application/json',
                data: JSON.stringify(data), // access in body,
                success: function () {
                    loadImgToServer($("#changePhoto")).then(() => {
                        window.location = window.location.href.split("?")[0];
                    })
                },
                error: function (error) {
                    alert("Введён неверный пароль")
                    enableButtonAndPrevent(event, 'clickSubmit')
                }
            })
        } else {
            alert("Неправильно введён пароль")
            enableButtonAndPrevent(event, 'clickSubmit')
        }
    }
})

$("#changePhoto").change( function () {
    let $input = $("#changePhoto");

    if ($input.prop('files') && $input.prop('files')[0]) {
        let reader = new FileReader();

        reader.onload = function(e) {
            $('#photo').attr('src', e.target.result);
        }

        reader.readAsDataURL($input.prop('files')[0]);
    }
})

$('#clickCreateRecord').click((event) => {

    let data = {
        'text': $("#text").val(),
        'user_id': $("#user").data('id'),
    }
    $.ajax({
        url: $("#clickCreateRecord").data('href'),
        type: "POST",
        contentType: 'application/json',
        data: JSON.stringify(data), // access in body,
        success: function () {
            //loadImgToServer()
            window.location = "/records"
        },
        error: function (error) {}
    })
})

$('#clickUpdateRecord').click((event) => {

    let data = {
        'text': $("#text").val(),
        'user_id': $("#user").data('id')
    }
    $.ajax({
        url: $("#clickUpdateRecord").data('href'),
        type: "PUT",
        contentType: 'application/json',
        data: JSON.stringify(data), // access in body,
        success: function () {
            //loadImgToServer()
            window.location = "/records"
        },
        error: function (error) {}
    })
})

$('#clickDeleteRecord').click((event) => {

    let data = {
        'text': $("#text").val(),
        'user_id': $("#user").data('id')
    }
    $.ajax({
        url: $("#clickDeleteRecord").data('href'),
        type: "DELETE",
        contentType: 'application/json',
        data: JSON.stringify(data), // access in body,
        success: function () {
            window.location = "/records"
        },
        error: function (error) {}
    })
})
