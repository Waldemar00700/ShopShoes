'use strict'
class SliderCarousel {
    constructor({ main, wrap }) {
        this.main = document.querySelector(main);
        this.wrap = document.querySelector(wrap);
        this.slides = document.querySelector(wrap).children;
        this.position = 0;
    }
    init() {

        this.addGloClass();
        this.addStyle();
    }
    addGloClass() {
        this.main.classList.add('.glo-slider');
        this.wrap.classList.add('.glo-slider__wrap');
        for (const item of this.slides) {
            item.classList.add('.glo-slider__item');
        }
    }

    addStyle() {
        const style = document.createElement('style');

        style.textContent = `
         .glo-slider{
            overflow:hidden;!important;
            max-width:100px;!important;
           
        } 
        .glo-slider__wrap{
            display: flex;!important;
            transition: transform 0.5s; !important;
            will-change: transform;!important;} 

            .glo-slider__item{
            flex: 0 0 25%;!important;
            margin: auto 0;!important;}`;
        document.head.appendChild(style);
    }

}