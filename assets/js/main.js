const slides = document.querySelectorAll('.tehnika-gallery_images-box span'),
    btnNext = document.querySelectorAll('.btn-next');


let index = 0;

// функция которая ставит активный слайд, n принимает параметр номер слайда которы станет активный  

const activeSlide = n => {
    for (let slide of slides) {
        slide.classList.remove('active');
    }
    slides[n].classList.add('active');
}
const activeDot = n => {

    for (let dot of dots) {
        dot.classList.remove('active');
    }
    dots[n].classList.add('active');
}

const prepareCurrentSlide = (ind) => {
    activeSlide(ind);
    activeDot(ind);
}

const nextSlide = () => {
    if (index == slides.length - 1) {
        index = 0;
        prepareCurrentSlide(index);
    } else {
        index++;
        prepareCurrentSlide(index);
    }
}

dots.forEach((item, indexDot) => {
    item.addEventListener('click', () => {
        index = indexDot;
        prepareCurrentSlide(index);
    })
})
menuBurger.addEventListener('click', () => {
    btnNext.classList.toggle('active');
    btnPrev.classList.toggle('active');
})


setInterval(nextSlide, 5000);


// меню бургер 

const menuBurger = document.querySelector('.menu-burger'),
    menuBurgerSpan = document.querySelector('.menu-burger span'),
    menuList = document.querySelector('.header__menu'),
    mobileWrapper = document.querySelector('.mobile-wrapper');

menuBurger.addEventListener('click', () => {
    menuBurgerSpan.classList.toggle('active');
    menuList.classList.toggle('animate');
    mobileWrapper.classList.toggle('animate');
})

// gallery slider
let gallery = document.querySelector('.tehnika-gallery');

if (gallery) {
    let mainContainer = gallery.querySelector('.img-wrap');
    let thumbnails = document.querySelectorAll('.tehnika-gallery_images-box span');

    thumbnails.forEach((thumbnail, index) => {
        index === 0 && thumbnail.classList.add('active')
        thumbnail.addEventListener('click', () => {

            let cloneImg = thumbnail.querySelector('img').cloneNode();

            mainContainer.replaceChild(cloneImg, mainContainer.querySelector('img'));
            thumbnails.forEach(item => item.classList.remove('active'))
            thumbnail.classList.add('active')

        });
    })
}