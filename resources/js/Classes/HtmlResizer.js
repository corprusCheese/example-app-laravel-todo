export class HtmlResizer {

    constructor() {
    }

    resizeSmall (callbackLesser, callbackBigger) {
        $(window).resize(function () {
                let widthWind = $(this).width();
                if (widthWind <= 320) {
                    callbackLesser()
                } else {
                    callbackBigger()
                }
            }
        );
    }

    readySmall(callbackLesser, callbackBigger) {
        if (window.innerWidth <= 320) {
            callbackLesser()
        } else {
            callbackBigger()
        }
    }
}
