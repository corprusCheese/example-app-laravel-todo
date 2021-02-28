export function loadImgToServer() {
    var $input = $("#changePhoto");
    var fd = new FormData;
    fd.append('img', $input.prop('files')[0]);
    return $.ajax({
        url: $("#changePhoto").data('href'),
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            console.log(data);
        }
    });
}
