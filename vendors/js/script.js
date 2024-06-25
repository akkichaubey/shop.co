var NewArrival = new Swiper(".new-arrival", {
  slidesPerView: "auto",
  spaceBetween: 20,
});

var TopSelling = new Swiper(".top-selling", {
  slidesPerView: "auto",
  spaceBetween: 20,
});

var testimonialSlider = new Swiper(".testimonial-slider", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  centeredSlides: true,
  speed:2000,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".testimonial-next",
    prevEl: ".testimonial-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    }
  },
});


var productThumbsSlider = new Swiper(".product-thumbs-slider", {
  loop:false,
  // centeredSlides: true,
  // direction: false,
  spaceBetween: 14,
  slidesPerView: 3,
  freeMode: true,
  breakpoints: {
    "768": {
      direction: "vertical",
    },
  },
});
var productSlider = new Swiper(".product-slider", {
  loop:false,
  spaceBetween: 10,
  effect: 'fade',
    fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  thumbs: {
    swiper: productThumbsSlider,
  },
});