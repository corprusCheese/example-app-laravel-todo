import {HtmlTemplates} from "./Classes/HtmlTemplates";
import {HtmlResizer} from "./Classes/HtmlResizer";

let htmlResizer = new HtmlResizer()
let htmlTemplates = new HtmlTemplates()
let navbar = $('#icon-navbar');

// before actions
htmlResizer.readySmall(() => {
        navbar.html(htmlTemplates.getSmallHeaderSvg());
    },
    () => {
        navbar.html(htmlTemplates.getBigHeaderSvg());
    });

// actions
htmlResizer.resizeSmall(() => {
        navbar.html(htmlTemplates.getSmallHeaderSvg());
    },
    () => {
        navbar.html(htmlTemplates.getBigHeaderSvg());
    })

