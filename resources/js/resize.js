import {getBigHeaderSvg, getSmallHeaderSvg} from "./templates";

export * from "./templates"

const resizeWidth = 360;
const navbar = $('#icon-navbar');

function resizeSmall (callbackLesser, callbackBigger) {
    $(window).resize(function () {
        $(this).width() <= resizeWidth ? callbackLesser() : callbackBigger()
    })
}

function readySmall(callbackLesser, callbackBigger) {
    window.innerWidth <= resizeWidth ? callbackLesser() : callbackBigger()
}

export function beforeActions() {
    // before actions
    readySmall(() => {
            navbar.html(getSmallHeaderSvg());
        },
        () => {
            navbar.html(getBigHeaderSvg());
        });
}

export function actions() {
    // actions
    resizeSmall(() => {
            navbar.html(getSmallHeaderSvg());
        },
        () => {
            navbar.html(getBigHeaderSvg());
        })
}
