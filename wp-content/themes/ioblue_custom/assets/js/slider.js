document.addEventListener('DOMContentLoaded', function() {
  new Swiper('.slider-fullwidth', {
    loop: true,
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    effect: 'slide',
    // autoplay: { delay: 5000, disableOnInteraction: false }
  });
}); 