<<<<<<< HEAD
<footer class="footer">
	<img src="img/vietteltext-logo.png" alt="Viettel-logo-2" class="footer__logo u-margin-bottom-medium">
	<p class="footer__text">Viettel tự hào hỗ trợ dịch vụ wifi tốt nhất cho khách hàng.Lợi ích của khách hàng là trên
		hết và luôn hỗ trợ khách hàng mọi lúc mọi nơi</p>
	<div class="footer__info">
		<div class="footer__info__group footer__info--1">
			<a class="footer-heading" href="index.php">Đăng Kí Dịch Vụ</a>
		</div>
		<div class="footer__info__group footer__info--2">
			<h3 class="footer-heading">Liên Hệ Qua Mạng Xã Hội</h3>
			<div class="footer-bot--1">
				<a href="">
					<svg class="wifi-detail__info--list-icon">
						<use xlink:href="img/sprite.svg#icon-facebook"></use>
=======

	<footer class="footer">
		<img src="img/vietteltext-logo.png" alt="Viettel-logo-2" class="footer__logo u-margin-bottom-medium">
		<p class="footer__text">Viettel tự hào hỗ trợ dịch vụ wifi tốt nhất cho khách hàng.Lợi ích của khách hàng là trên hết và luôn hỗ trợ khách hàng mọi lúc mọi nơi</p>
		<div class="footer__info">
			<div class="footer__info__group footer__info--1">
				<a class="footer-heading" href="index.php">Đăng Kí Dịch Vụ</a>
			</div>
			<div class="footer__info__group footer__info--2">
				<h3 class="footer-heading">Liên Hệ Qua Mạng Xã Hội</h3>
				<div class="footer-bot--1">
					<a href="https://www.facebook.com/D%E1%BB%8Bch-V%E1%BB%A5-Viettel-Ki%C3%AAn-Giang-119868136598056">
						<svg class="wifi-detail__info--list-icon">
							<use xlink:href="img/sprite.svg#icon-facebook"></use>
						</svg>
					</a>
					<a href="https://www.youtube.com/user/Viettelchannels">
						<svg class="wifi-detail__info--list-icon">
							<use xlink:href="img/sprite.svg#icon-youtube"></use>
						</svg>
					</a>

					<a href="https://zalo.me/1814378069399742003"><img src="img/zalo-seeklogo.com.svg" alt="Zalo" class="wifi-detail__info--list-icon"></a>
				</div>
				
			</div>
			<div class="footer__info__group footer__info--3">
				<h3 class="footer-heading">Liên Hệ Qua Điện Thoại</h3>
				<div class="footer-bot--2">
					<svg class="header__contact-icon">
						<use xlink:href="img/sprite.svg#icon-phone"></use>
>>>>>>> 63ea4021ba84963b7a73b75ede48b0e280c3a435
					</svg>
				</a>
				<a href="">
					<svg class="wifi-detail__info--list-icon">
						<use xlink:href="img/sprite.svg#icon-youtube"></use>
					</svg>
				</a>

				<a href=""><img src="img/zalo-seeklogo.com.svg" alt="Zalo" class="wifi-detail__info--list-icon"></a>
			</div>

		</div>
		<div class="footer__info__group footer__info--3">
			<h3 class="footer-heading">Liên Hệ Qua Điện Thoại</h3>
			<div class="footer-bot--2">
				<svg class="header__contact-icon">
					<use xlink:href="img/sprite.svg#icon-phone"></use>
				</svg>
				<a href="tel:0383627790" class="header__contact-phone footer__contact-phone">0383.61.71.61</a>
				<svg class="header__contact-icon">
					<use xlink:href="img/sprite.svg#icon-phone"></use>
				</svg>
				<a href="tel:0383627790" class="header__contact-phone">1800.8098</a>
			</div>

		</div>
		<div class="footer__info__group footer__info--3">
			<h3 class="footer-heading">Địa Chỉ Công Ty</h3>
			<svg class="header__contact-icon">
				<use xlink:href="img/sprite.svg#icon-office"></use>
			</svg>
			<a href="#" class="header__contact-phone">654 Nguyễn Trung Trực, Vĩnh Lạc, Rạch Giá, tỉnh Kiên Giang</a>
		</div>
	</div>
</footer>

<!-- javascript -->
<script src="ow_/vendors/jquery.min.js"></script>
<script src="ow_/owlcarousel/owl.carousel.js"></script>
<script>
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		autoHeight: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 3
			}
		}
	})

	const inputs = document.querySelectorAll(".form-2__contact-form--input");

	function focusFunc() {
		let parent = this.parentNode;
		parent.classList.add("focus");
	}

	function blurFunc() {
		let parent = this.parentNode;
		if (this.value == "") {
			parent.classList.remove("focus");
		}
	}

	inputs.forEach((input) => {
		input.addEventListener("focus", focusFunc);
		input.addEventListener("blur", blurFunc);
	});
</script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function () {
		FB.init({
			xfbml: true,
			version: 'v9.0'
		});
	};

	(function (d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat" attribution=setup_tool page_id="119868136598056" theme_color="#14AFB4"
	logged_in_greeting="Chào anh/chị !!! Anh chị muốn đăng kí dịch vụ Viettel nào ạ ?."
	logged_out_greeting="Chào anh/chị !!! Anh chị muốn đăng kí dịch vụ Viettel nào ạ ?.">
</div>
<script src="js/index.js"></script>