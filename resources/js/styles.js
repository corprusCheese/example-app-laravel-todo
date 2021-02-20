import {actions, beforeActions} from "./resize";
import * as url from "url";

beforeActions()
actions()

$("#clickSubmit").click(()=>{
    let form = document.getElementById('password-form')
    if (form.classList.contains('d-none')) {
        event.preventDefault()
        form.classList.remove('d-none');
        document.getElementById('email').removeAttribute('disabled');
        document.getElementById('name').removeAttribute('disabled');
    } else {
        console.log($("#clickSubmit").data('href'))

        let data = {
            "name": $("#name").val(),
            "password": $("#password").val(),
            "password_confirmation": $("#password-confirm").val(),
            "email": $("#email").val()
        }

        if (data['password'] == data['password_confirmation'] && data['password'] != "") {
            $.ajax({
                url: $("#clickSubmit").data('href'),
                type: "PUT",
                contentType: 'application/json',
                data: JSON.stringify(data), // access in body,
                success: function () {
                    location.reload()
                },
                error: function (error) {
                    console.log(error)
                }
            })
        }
    }
})




