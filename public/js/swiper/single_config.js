const swiper = new Swiper(".swiper", {
    // ナビボタンが必要なら追加
	slidesPerView: 3,
    breakpoints: {
        // 768px以上の場合
        768: {
          slidesPerView: 4
        }
      },
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},
});