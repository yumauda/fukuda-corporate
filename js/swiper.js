"use strict";

let swiper = new Swiper(".swiper1", {
  loop: true,
  centeredSlides: false,
  autoplay: {
    delay: 2500,
    /*  disableOnInteraction: false, */
  },
  speed: 300,
  slidesPerView: 1.5,
  spaceBetween: 20,
  breakpoints: {
    768: {
      slidesPerView: 3.3,
      spaceBetween: 30
    },
  },
});

let thumbSwiper = new Swiper(".thumbSwiper", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});

let mainSwiper = new Swiper(".mainSwiper", {
  spaceBetween: 10,
  loop: true,
  effect: "fade",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: thumbSwiper,
  },
});
