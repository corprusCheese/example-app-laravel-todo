export function loadImgToServer($input) {
    let fd = new FormData;
    fd.append('img', $input.prop('files')[0]);
    return $.ajax({
        url: $input.data('href'),
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            console.log(data);
        }
    });
}

export function enableButtonAndPrevent(event, buttonId) {
    document.getElementById(buttonId).removeAttribute('disabled');
    event.preventDefault();
}
