'use strict';

class SliderCarousel {
    constructor({
        main,
        wrap,
        next,
        prev,
        position = 0,
        slideShow = 4
    }) {
        this.main = document.querySelector(main);
        this.wrap = document.querySelector(wrap);
        this.slides = document.querySelector(wrap).children;
        this.next = document.querySelector(next);
        this.prev = document.querySelector(prev);
        this.slideShow = slideShow;
        this.option = {
            position,
            widthSlide: Math.floor(100 / this.slideShow)
        };
    }

    init() {
        console.log(this.slides);
        this.addClass();
        this.addStyle();

        if (this.prev && this.next) {
            this.controlSlider();
        } else {
            this.addArrow();
            this.controlSlider();
        }
    }

    addClass() {
        this.main.classList.add('prod-slider');
        this.wrap.classList.add('prod-slider__wrap');
        for (const item of this.slides) {
            item.classList.add('prod-slider__item');
        }
    }

    addStyle() {
        const style = document.createElement('style');
        style.id = 'sliderCarousel-style';
        style.textContent = `
            .prod-slider{
                overflow: hidden !important;
            }
            .prod-slider__wrap{
                display:flex !important;
                transition: transform 0.5s !important;
                will-change: transform !important;
                width: 100%;
            }
            .prod-slider__item{
                flex: 0 0 ${this.option.widthSlide}% !important;
                margin: auto 12px !important;
            }
        `;
        document.head.appendChild(style);
    }
    controlSlider() {
        this.prev.addEventListener('click', this.prevSlider.bind(this));
        this.next.addEventListener('click', this.nextSlider.bind(this));
    }

    prevSlider() {
        if (this.option.position > 0) {
            --this.option.position;
            console.log(this.option.position);
            this.wrap.style.transform = `translateX(-${this.option.position * this.option.widthSlide}%)`
        }

    }

    nextSlider() {
        if (this.option.position < this.slides.length - this.slideShow) {
            ++this.option.position;
            console.log(this.option.position);
            this.wrap.style.transform = `translateX(-${this.option.position * this.option.widthSlide}%)`
        }

    }
}