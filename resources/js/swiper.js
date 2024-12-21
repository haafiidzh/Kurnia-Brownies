// Swiper for Categories Home
var swiper2 = new Swiper(".home-categories-swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
        rotate: 0,
        stretch: 150,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    autoplay: {
        true: 3000,
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
                category.description;
        },
    },
});

var swiper3 = new Swiper(".product-categories-swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    autoplay: {
        true: 3000,
    },
});
