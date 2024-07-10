class Canvas2DUtility {
    constructor(canvas) {
        this.canvasElement = canvas;
        this.context2d = canvas.getContext("2d");
    }
    get canvas() {return this.canvasElement};
    get context() {return this.context2d};
    drawRect(x,y,width,height,color) {
        if(color != null) {
            this.context2d.fillStyle = color;
        }
        this.context2d.fillRect(x,y,width,height);
    }
}

let util = new Canvas2DUtility(document.body.querySelector("#main_canvas"));
let cvs = util.canvas;