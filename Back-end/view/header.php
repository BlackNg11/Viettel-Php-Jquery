<body>
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
	



	<header class="header" style="height: 12.5vh;">
		<div class="header__logo">
			<div class="header__logo--alone">
				<a href="index.php"><img src=img/v-logo.png alt="Viettel-logo-1" class="header__logo--big"></a>
			</div>
			<div class="header__logo__group">
				<img src="img/vietteltext-logo.png" alt="Viettel-logo-2" class="header__logo__group--small">
				<p class="header__logo__group--text">Hãy Nói Theo Cách Của Bạn</p>
			</div>
		</div>
		<div class="header__contact">
			<div class="header__contact__line header__contact__line--1">
				<svg class="header__contact-icon" style="width: 2rem;height: 2rem;fill: #162A23">
					<use xlink:href="img/sprite.svg#icon-phone1"></use>
				</svg>
				<div style="font-size: 2rem;color: #162A23">Hotline:</div>
				<a href="tel:0383627790" class="header__contact-phone"
					style="margin-top: 0;font-weight: 700;font-size: 2rem;margin-left: 2px">0383.61.71.61</a>
			</div>

			<!-- 
			<div class="header__contact__line header__contact__line--2">
				<svg class="header__contact-icon">
					<use xlink:href="img/sprite.svg#icon-phone1"></use>
				</svg>
				<a href="tel:0383627790" class="header__contact-phone">1800.8098</a>
			</div> -->
		</div>
	</header>