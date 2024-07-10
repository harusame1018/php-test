const CANVAS_WIDTH = 640;
const CANVAS_HEIGHT = 480;

window.addEventListener("load", () => {
    util = new Canvas2DUtility(document.body.querySelector("#main_canvas"));
    canvas = util.canvas;
    ctx = util.context;

    util.imageLoader
});