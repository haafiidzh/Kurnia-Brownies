import "./bootstrap";
import "./swiper";

// import { initializeSwiper } from "./swiper";

document.addEventListener("livewire:load", () => {
    Livewire.hook("message.processed", () => {
        // Destroy instance lama Swiper (jika diperlukan)
        var swiperContainer = document.querySelector(".slider").swiper;
        if (swiperContainer) {
            console.log('ulang');
            swiperContainer.destroy(); // Hapus instance lama
            swiperContainer.init(); // Hapus instance lama
        }

        // Inisialisasi ulang Swiper
        // initializeSwiper();
    });
});
