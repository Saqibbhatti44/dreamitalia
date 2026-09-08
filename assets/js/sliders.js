/* ==========================================================================
   Dream Italia UniPathways — Swiper Slider Configurations
   Testimonials + Italy Advantage carousel
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {

  if (!window.Swiper) return;

  /* ---------------------------------------------------------------------
     Testimonials Carousel
     --------------------------------------------------------------------- */
  const testimonialEl = document.querySelector('.testimonials-swiper');
  if (testimonialEl) {
    new Swiper(testimonialEl, {
      loop: true,
      grabCursor: true,
      spaceBetween: 24,
      slidesPerView: 1,
      autoHeight: false,
      autoplay: {
        delay: 5500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.testimonials-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.testimonials-next',
        prevEl: '.testimonials-prev',
      },
      breakpoints: {
        768: { slidesPerView: 2 },
        1280: { slidesPerView: 3 },
      },
    });
  }

  /* ---------------------------------------------------------------------
     Italy Advantage Showcase Carousel (mobile only; grid on desktop)
     --------------------------------------------------------------------- */
  const advantageEl = document.querySelector('.advantage-swiper');
  if (advantageEl) {
    new Swiper(advantageEl, {
      grabCursor: true,
      spaceBetween: 20,
      slidesPerView: 1.15,
      centeredSlides: false,
      pagination: {
        el: '.advantage-pagination',
        clickable: true,
      },
      breakpoints: {
        640: { slidesPerView: 2.1 },
        1024: { slidesPerView: 4, allowTouchMove: false },
      },
    });
  }

  /* ---------------------------------------------------------------------
     University Logo Strip / Universities Page Gallery
     --------------------------------------------------------------------- */
  const uniEl = document.querySelector('.universities-swiper');
  if (uniEl) {
    new Swiper(uniEl, {
      loop: true,
      grabCursor: true,
      spaceBetween: 24,
      slidesPerView: 2,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      breakpoints: {
        768: { slidesPerView: 4 },
        1280: { slidesPerView: 6 },
      },
    });
  }

});
