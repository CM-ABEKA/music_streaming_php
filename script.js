$(window).on("load", function () {
  $(".loader").fadeOut(1500);
  $(".content").fadeIn(2000);
});

var swiper = new Swiper(".swiper-container", {
  effect: "coverflow",
  grabCursor: true,
  spaceBetween: 0.5,
  speed: 3000,
  loop: true,
  centeredSlides: true,

  slidesPerView: 3,
  coverflowEffect: {
    stretch: 10,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  zoom: {
    maxRatio: 1,
    minRatio: 1,
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  fadeEffect: {
    crossFade: true,
  },
});
swiper.on("slideChangeTransitionStart", swiper.zoom.out);
// And when transition has finished scale it up.
swiper.on("slideChangeTransitionEnd", swiper.zoom.in);
