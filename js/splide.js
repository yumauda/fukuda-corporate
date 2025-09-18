"use strict";

document.addEventListener("DOMContentLoaded", function () {
  new Splide(".p-splide", {
    type: "loop",
    perPage: 1, // デフォルト（768px以上）は2枚表示
    pagination: false,
    arrows: true,
    focus: 'center',
    gap: '20px',
    breakpoints: {
      768: {
        perPage: 1, // 768px未満では1枚表示
        gap: '12px',
        padding: 0,
      },
    },
  }).mount();
});
