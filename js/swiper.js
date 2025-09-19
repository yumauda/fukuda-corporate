"use strict";
const pad2 = n => String(n).padStart(2, '0');

let swiper = new Swiper(".swiper1", {
  loop: true,
  centeredSlides: false,
  speed: 300,
  slidesPerView: 1.5,
  spaceBetween: 20,
  breakpoints: {
    768: {
      slidesPerView: 3.3,
      spaceBetween: 30,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
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

  // 細い進捗バー（スクショ風）
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
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
