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
