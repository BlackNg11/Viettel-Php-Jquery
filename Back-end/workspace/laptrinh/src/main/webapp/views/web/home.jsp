<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@include file="/common/taglib.jsp"%>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Cung cấp thông tin đầy đủ,chính xác mọi dịch vụ wifi,trả sau của Viettel ở Kiên Giang.Đăng Ký để tận hưởng trải nghiệm lên mạng & dịch vụ chăm sóc khách hàng tốt nhất">
	<meta name="keywords" content="Viettel Kiên Giang, Viettel Telecom,my viettel, Khuyến mại nạp thẻ, data, 3G, 4G, 5G, nạp tiền điện thoại, sim số đẹp, gói cước di động, cửa hàng Viettel, tổng đài Viettel, chăm sóc khách hàng Viettel">
	<meta name="og"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="img/v-logo.png" rel="shortcut icon" type="image/x-icon" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@400;700&display=swap" rel="stylesheet">


	<!--<link rel="stylesheet" href="css/icon-font.css">-->

	<style><%@include file="/WEB-INF/css/style.css"%></style>

	<title>Viettel Kiên Giang | Hãy nói theo cách của bạn</title>
</head>

<body>
	<div class="navigation">
		<input type="checkbox" class="navigation__checkbox" id="navi-toggle">

		<label for="navi-toggle" class="navigation__button">
			<span class="navigation__icon">&nbsp;</span>
		</label>

		<div class="navigation__background">&nbsp;</div>

		<nav class="navigation__nav">
			<ul class="navigation__list">
				<li class="navigation__item"><a href="#" class="navigation__link"><span>01</span>Đăng Kí Dịch Vụ</a></li>
				<li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Internet + Truyền Hình</a></li>
				<li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Dịch Vụ Di Động</a></li>
				<li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Mua Sim</a></li>
				<li class="navigation__item"><a href="#" class="navigation__link"><span>05</span>Mua Điện Thoại</a></li>
				<li class="navigation__item"><a href="#" class="navigation__link"><span>06</span>Thông Tin Về Viettel</a></li>
			</ul>
		</nav>
	</div>

	<header class="header">
		<div class="header__logo">
			<div class="header__logo--alone">
				<img src=img/v-logo.png alt="Viettel-logo-1" class="header__logo--big">
			</div>
			<div class="header__logo__group">
				<img src="img/vietteltext-logo.png" alt="Viettel-logo-2" class="header__logo__group--small">	
				<p class="header__logo__group--text">Hãy Nói Theo Cách Của Bạn</p>
			</div>
		</div>
		<div class="header__contact">
			<div class="header__contact__line header__contact__line--1">
				<svg class="header__contact-icon">
					<use xlink:href="img/sprite.svg#icon-phone"></use>
				</svg>
				<a href="tel:0383627790" class="header__contact-phone">03.836.27790</a>
			</div>	
			<div class="header__contact__line header__contact__line--2">
				<svg class="header__contact-icon">
					<use xlink:href="img/sprite.svg#icon-phone"></use>
				</svg>
				<a href="tel:0383627790" class="header__contact-phone">03.836.27790</a>
			</div>		
		</div>
	</header>

	<main>
		<section class="wifi">		
			<div class="wifi__info">
				<div class="wifi__info--left">
					<h1 class="heading-secondary--2">Công Ty Viễn Thông Viettel Rạch Giá</h1>
					<p class="wifi__info--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nemo libero, ullam provident repellat expedita nihil beatae explicabo, maiores facere reprehenderit voluptatibus omnis sapiente nisi non tempore dicta saepe rem!</p>
					
				</div>
				<div class="wifi--info-right">
					<div class="form">
						<form action="${pageContext.request.contextPath}/trang-chu" class="form-ui" method="post">
							<div class="form--info u-margin-bottom-smaill">
								<h1 class="form--heading">LIÊN HỆ</h1>
								<p class="form--text">Cung Cấp Những Dịch Vụ Tốt Nhất Cho Khách Hàng</p>
							</div>
							<div class="form__group">
								<label for="name" class="form__label">SĐT</label>
								<input type="tel" name="sdt" class="form__input" autocomplete="off" placeholder="Số Điện Thoại" id="name" required>
							</div>

							<div class="form__group">
								<label for="contact" class="form__label">Địa Chỉ</label>
								<input type="text" name="diachi" class="form__input" autocomplete="off" placeholder="Địa Chỉ Liên Lạc" id="contact" required>								
							</div>

							<div class="form__group">
								<label for="res-info" class="form__label">Dịch Vụ Liên Hệ</label>
								<select  name="dichvu" class="form__input form__input--select">
									<option value="wifi">Lắp đặt wifi</option>
									<option value="truyenhinh">Lắp đặt truyền hình</option>
									<option value="combo">Lắp đặt wifi + truyền hình</option>
									<option value="4g">Đăng ký mạng 4g Viettel</option>
									<option value="trasau">Chuyển sang thuê bao trả sau</option>
								</select>
							</div>

							<div class="form__group">
								<button class="form-btn btn btn--primary u-margin-top-medium" type="submit" name="submit">Đăng Ký Liên Hệ</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="wifi-detail">
			<h1 class="heading-secondary u-margin-bottom-medium">Dịch Vụ Wifi Và Truyền Hình</h1>
			<div class="wifi-detail__info">
				<div class="wifi-detail__info--left">
					<ul class="wifi-detail__info--list">
						<li class="wifi-detail__info--list-text">	
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-connection"></use>
							</svg>Internet Tốc Độ Cao,Hàng Đầu Việt Nam
						</li>
						<li class="wifi-detail__info--list-text">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-play3"></use>
							</svg>Lướt Web Siêu Nhanh,Coi Video Siêu Đã

						</li>
						<li class="wifi-detail__info--list-text">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-display"></use>
							</svg>Hơn 160 Kênh Truyền Hình Và Chùm Kênh Thể Thao K+
						</li>
						<li class="wifi-detail__info--list-text">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-rotate"></use>
							</svg>Xem Và Tua Lại Các Chương Trình Truyền Hình
							
						</li>
						<li class="wifi-detail__info--list-text">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-hd"></use>
							</svg>Chất Lượng Hình Ảnh HD Độ Nét Cao
							
						</li>
						<li class="wifi-detail__info--list-text">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-wrench"></use>
							</svg>Lắt Đặt Trong 24h,Hỗ Trợ Khách Hàng 24/7
						</li>
					</ul>
				</div>
				<div class="wifi-detail__info--right">
					<div class="card">
						<div class="card__side card__side--front">
							<img src="img/banner1-front.jpg" alt="Wifi Viettel" class="card__side--banner">
						</div>
						<div class="card__side card__side--back">
							<img src="img/banner1-back.jpg" alt="Wifi Viettel" class="card__side--banner">
						</div>	
					</div>
				</div>
			</div>
		</section>
		<section class="phone-detail">
			<h1 class="heading-secondary u-margin-bottom-medium">Dịch Vụ Trả Sau Và Mạng 4G</h1>
			<div class="phone-detail__info">
				<div class="phone-detail__info--left">
					<div class="card">
						<div class="card__side card__side--front">
							<img src="img/banner1-front.jpg" alt="Phone Viettel" class="card__side--banner">
						</div>
						<div class="card__side card__side--back">
							<img src="img/banner1-back.jpg" alt="Phone Viettel" class="card__side--banner">
						</div>	
					</div>
				</div>
				<div class="phone-detail__info--right">
					<ul class="phone-detail__info--list">
						<li class="phone-detail__info--list-text">	
							<svg class="phone-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-connection"></use>
							</svg>Internet Tốc Độ Cao,Hàng Đầu Việt Nam
						</li>
						<li class="phone-detail__info--list-text">
							<svg class="phone-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-play3"></use>
							</svg>Lướt Web Siêu Nhanh,Coi Video Siêu Đã

						</li>
						<li class="phone-detail__info--list-text">
							<svg class="phone-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-display"></use>
							</svg>Hơn 160 Kênh Truyền Hình Và Chùm Kênh Thể Thao K+
						</li>
						<li class="phone-detail__info--list-text">
							<svg class="phone-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-rotate"></use>
							</svg>Xem Và Tua Lại Các Chương Trình Truyền Hình
							
						</li>
						<li class="phone-detail__info--list-text">
							<svg class="phone-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-hd"></use>
							</svg>Chất Lượng Hình Ảnh HD Độ Nét Cao
							
						</li>
						<li class="phone-detail__info--list-text">
							<svg class="phone-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-wrench"></use>
							</svg>Lắt Đặt Trong 24h,Hỗ Trợ Khách Hàng 24/7
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="gallary">
			<div class="gallary__info">
				<h1 class="gallary__info--text">Hỗ Trợ Khách Hàng 24/7</h1>
				<p class="gallary__info--textsmail">03.836.27790</h1>
				<h1 class="gallary__info--textsmail">03.836.27790</h1>
			</div>
			<figure class="gallary__item gallary__item--1">
				<img src="img/Picture/1.jpg" alt="Viettel Picture 1" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--2">
				<img src="img/Picture/2.jpg" alt="Viettel Picture 2" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--3">
				<img src="img/Picture/3.jpg" alt="Viettel Picture 3" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--4">
				<img src="img/Picture/16.jpg" alt="Viettel Picture 4" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--5">
				<img src="img/Picture/5.jpg" alt="Viettel Picture 5" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--6">
				<img src="img/Picture/15.jpg" alt="Viettel Picture 6" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--7">
				<img src="img/Picture/7.jpg" alt="Viettel Picture 7" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--8">
				<img src="img/Picture/8.jpg" alt="Viettel Picture 8" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--9">
				<img src="img/Picture/9.jpg" alt="Viettel Picture 9" class="gallary__img">	
			</figure>
		</section>
	</main>

	<footer class="footer">
		<img src="img/vietteltext-logo.png" alt="Viettel-logo-2" class="footer__logo u-margin-bottom-medium">
		<p class="footer__text u-margin-bottom-big">Viettel Rạch Giá tự hào hỗ trợ dịch vụ wifi tốt nhất cho khách hàng.Lợi ích của khách hàng là trên hết và luôn hỗ trợ khách hàng mọi lúc mọi nơi</p>
		<div class="footer__info">
			<div class="footer__info__group footer__info--1">
				<a class="footer-heading" href="#">Đăng Kí Dịch Vụ</a>
			</div>
			<div class="footer__info__group footer__info--2">
				<h3 class="footer-heading">Liên Hệ Qua Mạng Xã Hội</h3>
				<a href="">
					<svg class="wifi-detail__info--list-icon">
						<use xlink:href="img/sprite.svg#icon-facebook"></use>
					</svg>
				</a>
				<a href="">
					<svg class="wifi-detail__info--list-icon">
						<use xlink:href="img/sprite.svg#icon-youtube"></use>
					</svg>
				</a>
				
				<a href=""><img src="img/zalo-seeklogo.com.svg" alt="Zalo" class="header__contact-icon header__contact-icon--black"></a>
			</div>
			<div class="footer__info__group footer__info--3">
				<h3 class="footer-heading">Liên Hệ Qua Điện Thoại</h3>
				<svg class="header__contact-icon">
					<use xlink:href="img/sprite.svg#icon-phone"></use>
				</svg>
				<a href="tel:0383627790" class="header__contact-phone">03.836.27790</a>
				<svg class="header__contact-icon">
					<use xlink:href="img/sprite.svg#icon-phone"></use>
				</svg>
				<a href="tel:0383627790" class="header__contact-phone">03.836.27790</a>
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
</body>
</html>
