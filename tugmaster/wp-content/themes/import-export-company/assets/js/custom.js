jQuery(document).ready(function () {
  var import_export_company_swiper_testimonials = new Swiper(".testimonial-swiper-slider.mySwiper", {
    slidesPerView: 3,
      spaceBetween: 50,
      speed: 1000,
      autoplay: {
        delay: 3000,
        disableOnPoppinsaction: false,
      },
      navigation: {
        nextEl: ".testimonial-swiper-button-next",
        prevEl: ".testimonial-swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView: 2,
        },
        1023: {
          slidesPerView: 3,
        }
    },
  });
});
jQuery(document).ready(function () {
  var swiper = new Swiper(".swiper-main-slider.mySwiper", {
    loop: true,
    spaceBetween: 5,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: false,
    direction: "vertical",
    slidesPerView: 5,
    breakpoints: {
      1200: {
        direction: "vertical",
        slidesPerView: 5,
      },
      992: {
        direction: "vertical",
        slidesPerView: 5,
      },
      // Below 768px → Horizontal only
      781: {
        direction: "vertical",
        slidesPerView: 5,
      },
      600: {
        direction: "vertical",
        slidesPerView: 1,
      },
      0: {
        direction: "vertical",
        slidesPerView: 1,
      }
    }
  });
});
