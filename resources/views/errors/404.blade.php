
@extends('errors.layouts.base')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('detail', 'お探しのページは見つかりませんでした。')




<script>
window.addEventListener('load', function () {
	document.querySelectorAll('.slider').forEach(slider => {
		//左矢印クリック
		slider.querySelector('.left').onclick = function () {
			let ul = this.parentNode.querySelector('ul');
			ul.scrollLeft -= ul.clientWidth;
		};
		//右矢印クリック
		slider.querySelector('.right').onclick = function () {
			let ul = this.parentNode.querySelector('ul');
			ul.scrollLeft += ul.clientWidth;
		};
		//サムネイル番号のカウント用
		let thumbs_no = 0;
		//サムネイル番号の割り振りとクリックイベントの追加
		slider.querySelectorAll('.thumbs li').forEach(thumbs_elm => {
			if (thumbs_no == 0) {
				//最初は1つ目のサムネイルが選択された状態にしておく
				thumbs_elm.classList.add('selected');
			}
			//自身が何番目の要素かdataset属性に保存しておく
			thumbs_elm.dataset.no = thumbs_no++;
			//サムネイルクリック時のイベント
			thumbs_elm.onclick = function () {
				//現在アクティブなサムネイルのクラスを変更（選択解除）
				slider.querySelector('.thumbs .selected').classList.remove('selected');
				//次にアクティブにするサムネイルのクラスを変更（選択状態）
				this.classList.add('selected');
				//サムネイル番号からスクロール量を算出する
				let preview_ul = slider.querySelector('div > ul');
				preview_ul.scrollLeft = (preview_ul.clientWidth * this.dataset.no);
			}
		});
		//スクロール発生時のイベント
		slider.querySelector('div > ul').onscroll = function () {
			//onscrollはスクロールが終わるまでに何度も発生するため、
			//100ミリ秒間onscrollが発生しなかったときに限り、処理を続行する
			clearTimeout(slider.dataset.timeoutid);
			slider.dataset.timeoutid = setTimeout(function () {
				//現在アクティブなサムネイルのクラスを変更（選択解除）
				slider.querySelector('.thumbs .selected').classList.remove('selected');
				//プレビューとサムネイルのノードを取得
				let preview_ul = slider.querySelector('div > ul');
				let thumbs = slider.querySelector('.thumbs');
				//現在のスクロール量からサムネイル番号を算出
				let thumbs_no = Math.floor(preview_ul.scrollLeft / preview_ul.clientWidth);
				//アクティブにするサムネイルのクラスを変更（選択状態）
				thumbs.children[thumbs_no].classList.add('selected');
			}, 100);
		};
	});
});
</script>