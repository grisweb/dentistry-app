let offset = 0;
let wrapperWidth = 0;
const slider = document.querySelector('.services__slider-wrapper');
const sliderWrap = document.querySelector('.services__items');
const sliderItems = document.querySelectorAll('.services__item');
const commandSliderItems = document.querySelector('.command__items');

const getSlidesVisible = () => {
    let res = 4;

    if (window.matchMedia('(max-width: 1200px)').matches) {
        res = 3;
    }

    if (window.matchMedia('(max-width: 900px)').matches) {
        res = 2;
    }

    if (window.matchMedia('(max-width: 600px)').matches) {
        res = 1;
    }

    return res;
}

let bias = 0;

const setSliderItemsWidth = () => {
    const width = slider.clientWidth;

    sliderItems.forEach((item) => {
        item.style.width = width / getSlidesVisible() + 'px';
    });
}

setSliderItemsWidth();

let isAnimated = false;

const updateSlide = (direction) => {
    if (!isAnimated) {
        isAnimated = true;

        bias += direction;
        sliderWrap.style.transform = `translateX(${(bias) * -(slider.clientWidth / getSlidesVisible())}px)`;

        setTimeout(() => {
            isAnimated = false;
        }, 250);
    }
}

window.addEventListener('resize', () => {
    setSliderItemsWidth();
    sliderWrap.style.transform = `translateX(${(bias) * -(slider.clientWidth / getSlidesVisible())}px)`;
});

document.querySelector('#slider__next-btn').addEventListener('click', () => {
    if (bias !== sliderItems.length  - getSlidesVisible()) {
        updateSlide(1);
    }
});


document.querySelector('#slider__prev-btn').addEventListener('click', () => {
    if (bias !== 0) {
        updateSlide(-1);
    }
});
//
//
// document.querySelector('#command-slider__next-btn').addEventListener('click', function(){
//     wrapperWidth = document.querySelector('.command__slider-wrapper').offsetWidth;
//     console.log(wrapperWidth)
//     offset = offset + wrapperWidth;
//     if (offset > wrapperWidth) {
//         offset = 0;
//     }
//     commandSliderItems.style.left = -offset + 'px';
// });
//
// document.querySelector('#command-slider__prev-btn').addEventListener('click', function () {
//     wrapperWidth = document.querySelector('.command__slider-wrapper').offsetWidth;
//     offset = offset - wrapperWidth;
//     if (offset < 0) {
//         offset = wrapperWidth;
//     }
//     commandSliderItems.style.left = -offset + 'px';
// });
//
// document.querySelector('.burger-menu__btn').addEventListener('click', function () {
//     let menu =  document.querySelector('.burger-menu__navigation');
//     if (menu.style.display === 'none') {
//         menu.style.display = 'flex';
//     } else {
//         menu.style.display = 'none'
//     }
// });


