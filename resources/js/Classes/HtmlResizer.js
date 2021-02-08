export class HtmlResizer {

    constructor() {
        this.resizeWidth = 370;
    }

    resizeSmall (callbackLesser, callbackBigger) {
        $(window).resize(function () {
            $(this).width() <= this.resizeWidth ? callbackLesser() : callbackBigger()
        })
    }

    readySmall(callbackLesser, callbackBigger) {
        window.innerWidth <= this.resizeWidth ? callbackLesser() : callbackBigger()
    }
}
