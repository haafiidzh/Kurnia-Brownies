import Swiper from 'swiper/bundle';
import Masonry from 'masonry-layout';
import imagesLoaded from 'imagesloaded';
import MoveTo from 'moveto';
import AOS from 'aos';
import 'livewire-sortable';

window.Swiper       = Swiper;
window.Masonry      = Masonry;
window.imagesLoaded = imagesLoaded;
window.MoveTo       = MoveTo;

AOS.init({
    offset: window.innerWidth < 768 ? 400 : 200,
})