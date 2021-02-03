import {HtmlTemplates} from "./Classes/HtmlTemplates";
import {HtmlResizer} from "./Classes/HtmlResizer";

let htmlResizer = new HtmlResizer()
let htmlTemplates = new HtmlTemplates()


// before actions
htmlResizer.readySmall(() => {
        $('#icon-navbar').html(htmlTemplates.getSmallHeaderSvg());
    },
    () => {
        $('#icon-navbar').html(htmlTemplates.getBigHeaderSvg());
    });

// actions
htmlResizer.resizeSmall(() => {
        $('#icon-navbar').html(htmlTemplates.getSmallHeaderSvg());
    },
    () => {
        $('#icon-navbar').html(htmlTemplates.getBigHeaderSvg());
    })

