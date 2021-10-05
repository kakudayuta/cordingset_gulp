document.addEventListener("DOMContentLoaded", function() {
  var mySwiper = new Swiper ('.swiper-container', {
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: true
    },
    speed: 1500,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    slidesPerView: 1,
    followFinger: false,
    draggable: false,
    preventClicksPropagation: false,
    preventClicks: false,
    touchRatio: 0
  });
  console.log('tset');
});
