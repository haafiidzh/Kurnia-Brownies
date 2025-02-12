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

function numberShortner(number) {
    if (number >= 0 && number < 1000) {
        return Math.floor(number);
    } else if (number >= 1000 && number < 1000000) {
        return Math.floor(number / 1000) + "K+";
    } else if (number >= 1000000 && number < 1000000000) {
        return Math.floor(number / 1000000) + "M+";
    } else if (number >= 1000000000 && number < 1000000000000) {
        return Math.floor(number / 1000000000) + "B+";
    } else {
        return Math.floor(number / 1000000000000) + "T+";
    }
}