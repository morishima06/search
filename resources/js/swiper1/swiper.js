 // import Swiper JS
import Swiper, { Navigation } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';

 // configure Swiper to use modules
Swiper.use([Navigation]);

 // init Swiper:
const swiper = new Swiper('.swiper', {
// Optional parameters
// direction: 'vertical',
slidesPerView: 2,
breakpoints: {
  // 568px以上の場合
  568: {
    slidesPerView: 4
  }
},



// Navigation arrows
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
}

// And if we need scrollbar
});