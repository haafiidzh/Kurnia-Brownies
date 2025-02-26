// HOME
var swiper1 = new Swiper(".slider", {
    spaceBetween: 0,
    // slidesPerView: 2,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            // slidesPerView: 1,
            effect: "fade",
        },
        450: {
            slidesPerView: 2,
        },
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
});

var swiperCategories = new Swiper(".categories", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    breakpoints: {
        0: {
            coverflowEffect: {
                stretch: 100,
              }
        },
        400: {
            coverflowEffect: {
                stretch: 150,
              }
        },
        500: {
            coverflowEffect: {
                stretch: 200,
              }
        },
        600: {
            coverflowEffect: {
                stretch: 250,
              }
        },
        768: {
            coverflowEffect: {
                stretch: 270,
              }
        },
        1000: {
            coverflowEffect: {
                stretch: 420,
              }
        },
        1440: {
            coverflowEffect: {
                stretch: 450,
              }
        }
    },
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    coverflowEffect: {
      rotate: 0,
    //   stretch: 500,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    navigation: {
        nextEl: ".category-button-next",
        prevEl: ".category-button-prev",
    },
    on: {
        slideChange: function () {
            // Ambil index slide aktif
            const activeIndex = this.realIndex;

            // Update nama dan deskripsi kategori
            const category = categories[activeIndex];
            document.getElementById("category-name").textContent =
                category.name;
            document.getElementById("category-description").textContent =
                category.short_description;
        },
    },
  });
// END HOME

var swiperGalleryChild = new Swiper(".gallery-child", {
    spaceBetween: 2,
    slidesPerView: 2,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
        // Ketika ukuran layar lebih kecil dari 768px
        768: {
            slidesPerView: 4, // Atur slidesPerView menjadi 2
        },
        500: {
            slidesPerView: 3, // Atur slidesPerView menjadi 2
        },
        // Tambahkan breakpoint lain jika diperlukan
    },
});

var swiperGallery = new Swiper(".gallery", {
    spaceBetween: 10,
    effect: "fade",
    loop: true,
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
    thumbs: {
        swiper: swiperGalleryChild,
    },
});