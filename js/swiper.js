"use strict";

const pad2 = n => String(n).padStart(2, '0');

let swiper = new Swiper(".swiper1", {
  centeredSlides: false,
  loop: true,
  speed: 300,
  slidesPerView: 1.5,
  spaceBetween: 20,
  breakpoints: {
    768: {
      slidesPerView: 3.3,
      spaceBetween: 30,
    },
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // 分数（01/06）
  pagination: {
    el: '.swiper-pagination',
    type: 'fraction',
    renderFraction: (currentClass, totalClass) => (
      `<span class="pag-current ${currentClass}"></span>` +
      `<span class="pag-slash">/</span>` +
      `<span class="pag-total ${totalClass}"></span>`
    ),
    formatFractionCurrent: pad2,
    formatFractionTotal: pad2,
  },
  scrollbar: {
    el: ".swiper-scrollbar",
  },

});


let thumbSwiper = new Swiper(".thumbSwiper", {
  spaceBetween: 10,
  slidesPerView: 2,
  freeMode: true,
  watchSlidesProgress: true,
  breakpoints: {
    768: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
  },
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
