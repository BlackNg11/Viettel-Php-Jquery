<body>
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				xfbml            : true,
				version          : 'v9.0'
			});
		};

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Your Chat Plugin code -->
		<div class="fb-customerchat"
		attribution=setup_tool
		page_id="119868136598056"
		theme_color="#14AFB4"
		logged_in_greeting="Chào anh/chị !!! Anh chị muốn đăng kí dịch vụ Viettel nào ạ ?."
		logged_out_greeting="Chào anh/chị !!! Anh chị muốn đăng kí dịch vụ Viettel nào ạ ?.">
	</div>

	<div class="navigation">
		<input type="checkbox" class="navigation__checkbox" id="navi-toggle">

		<label for="navi-toggle" class="navigation__button">
			<span class="navigation__icon">&nbsp;</span>
		</label>

		<div class="navigation__background">&nbsp;</div>

		<nav class="navigation__nav">
			<ul class="navigation__list">
				<li class="navigation__item"><a href="index.html" class="navigation__link"><span>01</span>Trang Chủ</a></li>
				<li class="navigation__item"><a href="wifi-cho-ho-gia-dinh.html" class="navigation__link"><span>02</span>Internet + Truyền Hình</a></li>
				<li class="navigation__item"><a href="dich-vu-tra-sau-viettel.html" class="navigation__link"><span>03</span>Dịch Vụ Di Động</a></li>
				<li class="navigation__item"><a href="404.html" class="navigation__link"><span>04</span>Mua Sim</a></li>
				<li class="navigation__item"><a href="404.html" class="navigation__link"><span>05</span>Mua Điện Thoại</a></li>
				<li class="navigation__item"><a href="404.html" class="navigation__link"><span>06</span>Tin Khuyến Mãi</a></li>
			</ul>
		</nav>
	</div>

	<header class="header">
		<div class="header__logo">
			<div class="header__logo--alone">
				<a href="index.html"><img src=img/v-logo.png alt="Viettel-logo-1" class="header__logo--big"></a>
			</div>
			<div class="header__logo__group">
				<img src="img/vietteltext-logo.png" alt="Viettel-logo-2" class="header__logo__group--small">	
				<p class="header__logo__group--text">Hãy Nói Theo Cách Của Bạn</p>
			</div>
		</div>
		<div class="header__contact">
			<div class="header__contact__line header__contact__line--1">
				<svg class="header__contact-icon">
					<use xlink:href="img/sprite.svg#icon-phone1"></use>
				</svg>
				<a href="tel:0383627790" class="header__contact-phone">0383.61.71.61</a>
			</div>	
			<div class="header__contact__line header__contact__line--2">
				<svg class="header__contact-icon">
					<use xlink:href="img/sprite.svg#icon-phone1"></use>
				</svg>
				<a href="tel:0383627790" class="header__contact-phone">1800.8098</a>
			</div>		
		</div>
	</header>