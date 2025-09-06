"use strict";

// Then, once the page loads...
window.addEventListener("DOMContentLoaded", function () {
  gsap.fromTo(
    ".js-image",
    {
      opacity: 0,
      y: 30,
      clipPath: "inset(0% 100% 0% 0%)",
    },
    {
      duration: 1.5,
      opacity: 1,
      y: 0,
      clipPath: "inset(0% 0% 0% 0%)",
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".js-start",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  )
  gsap.fromTo(
    ".js-image-reverse",
    {
      opacity: 0,
      y: 30,
      clipPath: "inset(0% 0% 0% 100%)",
    },
    {
      duration: 1.5,
      opacity: 1,
      y: 0,
      clipPath: "inset(0% 0% 0% 0%)",
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".js-image",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-image-last",
    {
      opacity: 0,
      y: 30,
      clipPath: "inset(0% 100% 0% 0%)",
    },
    {
      duration: 1.5,
      opacity: 1,
      y: 0,
      clipPath: "inset(0% 0% 0% 0%)",
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".js-image-reverse",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  )
});
