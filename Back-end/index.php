<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google Meta Tags -->
	<meta name="description"
		content="Đầy đủ thông tin,chính xác mọi dịch vụ về wifi,di động của Viettel ở Kiên Giang.Đăng Ký để tận hưởng trải nghiệm lên mạng & dịch vụ chăm sóc khách hàng tốt nhất">
	<meta name="keywords"
		content="Đầy đủ thông tin,chính xác mọi dịch vụ về wifi,di động của Viettel ở Kiên Giang.Đăng Ký để tận hưởng trải nghiệm lên mạng & dịch vụ chăm sóc khách hàng tốt nhất">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="https://nothing.com">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Cổng thông tin hỗ trợ dịch vụ Di động, Internet, Truyền hình Viettel Rạch Giá">
	<meta property="og:description"
		content="Cung cấp thông tin đầy đủ,chính xác mọi dịch vụ về wifi,trả sau của Viettel ở Kiên Giang.Đăng Ký để tận hưởng trải nghiệm lên mạng & dịch vụ chăm sóc khách hàng tốt nhất">
	<meta property="og:image" content="https://lorempixel.com/400/200/">

	<link href="img/v-logo.png" rel="shortcut icon" type="image/x-icon" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@400;700&display=swap" rel="stylesheet">


	<!--<link rel="stylesheet" href="css/icon-font.css">-->

	<link rel="stylesheet" href="css/style.css">

	<title>Hỗ Trợ Dịch Vụ Viettel Ở Kiên Giang</title>
</head>


<?php

include "config/config.php";
include "view/navigation.php";
include "view/header.php";

?>
<main>		
	<section class="navigation-pc">
		<ul class="navigation-pc-lists">
			<a href="#" class="navigation-pc-lists--item active-navigation"><li>Trang Chủ</li></a>
			<a href="wifi-cho-ho-gia-dinh" class="navigation-pc-lists--item"><li>Internet-Truyền Hình</li></a>
			<a href="dich-vu-tra-sau-viettel" class="navigation-pc-lists--item "><li>Dịch Vụ Di Động</li></a>
			<a href="404" class="navigation-pc-lists--item"><li>Mua Sim</li></a>
			<a href="404" class="navigation-pc-lists--item"><li>Mua Điện Thoại</li></a>
			<a href="404" class="navigation-pc-lists--item"><li>Tin Khuyến Mãi</li></a>
		</ul>
	</section>
	<section class="wifi">		

		<div class="wifi__info">
			<div class="wifi__info--left">
				<h1 class="heading-secondary--2 wifi__info--heading">Hỗ Trợ Lắp Đặt Mạng Wifi Viettel Ở Kiên Giang</h1>
				<!-- <p class="wifi__info--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nemo libero, ullam provident repellat expedita nihil beatae explicabo, maiores facere reprehenderit voluptatibus omnis sapiente nisi non tempore dicta saepe rem!</p> -->
			</div>
			<div class="wifi--info-right">
				<div class="form">
					<form action="config/server" method="POST" class="form-ui" id="test-form">

						<div class="form--info u-margin-bottom-smaill">
							<h1 class="form--heading">LIÊN HỆ</h1>
							<p class="form--text">Cung Cấp Những Dịch Vụ Tốt Nhất Cho Khách Hàng</p>
						</div>
						<div class="form__group">
							<label for="name" class="form__label">SĐT</label>
							<input type="tel" name="sdt" class="form__input" autocomplete="off" placeholder="SĐT" id="name" required pattern="(09|01|03|[2|6|8|9])+([0-9]{8})\b" oninvalid="this.setCustomValidity('Quý khách vui lòng nhập và có số 0 đầu tiên')">

						</div>

						<div class="form__group">
							<label for="contact" class="form__label">Địa Chỉ</label>
							<input type="text" name="diachi" class="form__input" autocomplete="off" maxlength="80" placeholder="Địa Chỉ Liên Lạc" id="contact" required oninvalid="this.setCustomValidity('Quý khách vui lòng nhập địa chỉ(số nhà,đường,phường)')">								

						</div>

						<div class="form__group">
							<label for="res-info" class="form__label">Dịch Vụ Liên Hệ</label>
							<select  name="res-info" class="form__input form__input--select">

								<option value="Lắp Wifi">Lắp đặt wifi</option>
								<option value="Lắp Truyền Hình">Lắp đặt truyền hình</option>
								<option value="Lắp Wifi + Truyền Hình">Lắp đặt wifi + truyền hình</option>
								<option value="Trả Sau">Đăng ký trả sau</option>
								<option value="V120">Đăng ký gói 4G và gọi điện</option>
							</select>
						</div>

						<div class="form__group">
							<button name="submit" class="form-btn btn btn--primary u-margin-top-medium">Đăng Ký</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="viettel-infomation">
		<h1 class="viettel-infomation--h1">Tại Sao Bạn Nên Đăng Ký Dịch Vụ Bên Viettel</h1>
		<div class="viettel-infomation__deep">
			<div class="viettel-infomation__deep__change viettel-infomation__deep__change--1 active">
				<div class="viettel-infomation__deep--left">
					<h3>Tập đoàn Công nghệ – Viễn thông Quân đội Viettel</h3>
					<p>Môt trong những công ty hàng đầu về công nghệ lớn nhất Việt Nam,là nơi được nhiều khách hàng tin tưởng và gửi gắm niền tin lựa chọn dịch vụ wifi và điện thoại</p>
				</div>
				<div class="viettel-infomation__deep--right">
					<img class="viettel-infomation__deep--right-img" src="img/Viettel-cong-ty.jpg" alt="Công Ty Viettel">

				</div>
			</div>
			<div class="viettel-infomation__deep__change viettel-infomation__deep__change--2">
				<div class="viettel-infomation__deep--left">
					<h3>Đặt sự tín nhiệm và hài lòng của khách hàng lên hàng đầu</h3>
					<p>Chúng tôi hiểu rằng, muốn làm được điều đó thì trước hết phải thấu hiểu khách hàng, phải lắng nghe khách hàng.Và vì vậy, khách hàng luôn được khuyến khích nói theo cách mà họ mong muốn và bằng tiếng nói của chính mình – “Hãy nói theo cách của bạn”.</p>

				</div>
				<div class="viettel-infomation__deep--right">
					<img class="viettel-infomation__deep--right-img" src="img/Picture/11.jpg" alt="Công Ty Viettel">
				</div>
			</div>
			<div class="viettel-infomation__deep__change viettel-infomation__deep__change--3">
				<div class="viettel-infomation__deep--left">
					<h3>Hỗ Trợ Khách Hàng nhanh chóng khi có yêu cầu</h3>
					<p>Phục vụ khách hàng là niềm vinh hạnh của chúng tui,luôn đồng hành cùng khách hàng 24h/ngày và 7 ngày/tuần</p>

				</div>
				<div class="viettel-infomation__deep--right">
					<img class="viettel-infomation__deep--right-img" src="img/Picture/9.jpg" alt="Viettel Hỗ Trợ">
				</div>
			</div>

		</div>
	</section>
	<section class="wifi-detail">
		<a href="wifi-cho-ho-gia-dinh"><h1 class="heading-secondary u-margin-bottom-medium">Dịch Vụ Wifi Và Truyền Hình Viettel</h1></a>
		<div class="wifi-detail__info">
				<div class="wifi-detail__info--left">
					<ul class="wifi-detail__info--list">
						<li class="wifi-detail__info--list-text wifi-detail__info--list-text-1">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-connection"></use>
							</svg>Internet Cáp Quang Tốc Độ Cao,Hàng Đầu Việt Nam
						</li>
						<li class="wifi-detail__info--list-text">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-play3"></use>
							</svg>Lướt Web Siêu Nhanh,Coi Video Siêu Đã

						</li>
						<li class="wifi-detail__info--list-text wifi-detail__info--list-text-2">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-display"></use>
							</svg>Hơn 160 Kênh Truyền Hình Và Chùm Kênh Thể Thao K+
						</li>
						<li class="wifi-detail__info--list-text">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-rotate"></use>
							</svg>Xem Và Tua Lại Các Chương Trình Truyền Hình

						</li>
						<li class="wifi-detail__info--list-text wifi-detail__info--list-text-3">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-hd"></use>
							</svg>Chất Lượng Hình Ảnh HD Độ Nét Cao

						</li>
						<li class="wifi-detail__info--list-text">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-wrench"></use>
							</svg>Hỗ trợ nhanh chóng cho khách hàng Kiên Giang 24/7
						</li>
					</ul>

				</div>
				<div class="wifi-detail__info--right">
					<!-- <div class="card">
						<div class="card__side card__side--front">
							<img src="img/banner2-front.jpg" alt="Wifi Viettel" class="card__side--banner">
						</div>
						<div class="card__side card__side--back">
							<img src="img/banner2-back.jpg" alt="Wifi Viettel" class="card__side--banner">
						</div>	
					</div> -->
					<img src="img/wifi-router.png" alt="" class="wifi-detail__info--right-img">
				</div>
			</div>
		</div>
		<a href="wifi-cho-ho-gia-dinh" class="btn-text-2"><span class="btn-text-2-span">Tìm hiểu thêm &rarr;</span></a>
		</section>
		<section class="cardSkew">
			<div class="cardSkew__container">
				<div class="cardSkew__card">
					<div class="cardSkew__card__imgBx">
						<img src="img/wifi.svg" alt="Wifi Cáp Quang Viettel">
						<h3>Dịch Vụ Wifi</h3>
					</div>		
					<div class="cardSkew__card__content">
						<p>Chất lượng đường truyền wifi Viettel cao và ổn định.Xây dựng mức giá đa dạng và phù hợp nhất tới tất cả các đối tượng khách hàng từ sinh viên,hộ gia đình tới các quán game và doanh nghiệp lớn</p>
					</div>
				</div>
					<div class="cardSkew__card">
					<div class="cardSkew__card__imgBx">
						<img src="img/smartphone.svg" alt="Trả sau và trả trước Viettel">
						<h3>Dịch Vụ Di Động</h3>
					</div>		
					<div class="cardSkew__card__content">
						<p>Viettel tặng nhiều gói khuyến mãi gọi thoại,lên mạng 4G dành cho khách hàng.Đăng kí trả sau tiết kiệm chi phí gọi điện 30%-50% với những mức giá hợp lí cho khách hàng </p>
					</div>
				</div>
					<div class="cardSkew__card">
					<div class="cardSkew__card__imgBx">
						<img src="img/customer-service.svg" alt="Hỗ Trợ Khách Hàng Viettel">
						<h3>Hỗ Trợ Khách Hàng 24/7</h3>
					</div>		
					<div class="cardSkew__card__content">
						<p>Hỗ trợ khách hàng trong khu vực Kiên Giang nhanh chóng trong 24h</p>
					</div>
				</div>
			</div>
		</section>
		<section class="phone-detail">
			<a href="dich-vu-tra-sau-viettel"><h1 class="heading-secondary u-margin-bottom-medium">Dịch Vụ Trả Sau Và Trả Trước Viettel</h1></a>
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
						<li class="phone-detail__info--list-text ">	
							<svg class="phone-detail__info--list-icon ">
								<use xlink:href="img/sprite.svg#icon-like"></use>
							</svg>Nhiều gói cước hấp dẫn và khuyễn mãi
						</li>
						<li class="phone-detail__info--list-text">
							<svg class="phone-detail__info--list-icon phone-detail__info--list-icon-1">
								<use xlink:href="img/sprite.svg#icon-wallet"></use>
							</svg>Tiết kiệm tiền khi gọi điện và lên mạng 4G

						</li>
						<li class="phone-detail__info--list-text ">
							<svg class="phone-detail__info--list-icon ">
								<use xlink:href="img/sprite.svg#icon-phone"></use>
							</svg>Cung cấp dịch vụ 4G tốt nhất Việt Nam
						</li>
						<li class="phone-detail__info--list-text">
							<svg class="phone-detail__info--list-icon phone-detail__info--list-icon-2">
								<use xlink:href="img/sprite.svg#icon-checkmark"></use>
							</svg>Gói trả sau cho thuê bao với mức giá hợp lí
							
						</li>
						<li class="phone-detail__info--list-text ">
							<svg class="phone-detail__info--list-icon ">
								<use xlink:href="img/sprite.svg#icon-office"></use>
							</svg>Được nhiều khách hàng,doanh nghiệp tin dùng
							
						</li>
						<li class="phone-detail__info--list-text">
							<svg class="phone-detail__info--list-icon phone-detail__info--list-icon-3">
								<use xlink:href="img/sprite.svg#icon-wrench"></use>
							</svg>Hỗ trợ nhanh chóng cho khách hàng Kiên Giang 24/7
						</li>
					</ul>
				</div>
			</div>
			<a href="dich-vu-tra-sau-viettel" class="btn-text-2"><span class="btn-text-2-span">Tìm hiểu thêm &rarr;</span></a>
		</section>
		<section class="gallary">
			<div class="gallary__info">
				<h1 class="gallary__info--text">Hỗ Trợ Khách Hàng 24/7</h1>
				<p class="gallary__info--textsmail">0383.61.71.61</h1>
					<h1 class="gallary__info--textsmail">1800.1098</h1>
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
			<p class="footer__text">Viettel tự hào hỗ trợ dịch vụ wifi tốt nhất cho khách hàng.Lợi ích của khách hàng là trên hết và luôn hỗ trợ khách hàng mọi lúc mọi nơi</p>
			<div class="footer__info">
				<div class="footer__info__group footer__info--1">
					<a class="footer-heading" href="index">Đăng Kí Dịch Vụ</a>
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
					</svg>
					<a href="tel:0383627790" class="header__contact-phone footer__contact-phone">0383.61.71.61</a>
					<svg class="header__contact-icon">
						<use xlink:href="img/sprite.svg#icon-phone"></use>
				</svg>
					<a href="tel:0383627790" class="header__contact-phone">1800.8098</a>
				</div>

			</div>
			<div class="footer__info__group footer__info--4">
				<h3 class="footer-heading">Địa Chỉ Công Ty</h3>
				<svg class="header__contact-icon">
					<use xlink:href="img/sprite.svg#icon-office"></use>
				</svg>
				<a href="#" class="header__contact-phone">654 Nguyễn Trung Trực, Vĩnh Lạc, Rạch Giá, tỉnh Kiên Giang</a>
			</div>		
		</footer>
	<!-- javascript -->
	<script src="ow_/vendors/jquery.min.js"></script>
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
	<!-- Form Validation -->
	<script>
		// function myFunction() {
		// 	let pattern = /((09|03|07|08|05)+([0-9]{8})\b)/g;
		// 	let elements = document.getElementsByClassName("form__input");

		// 	let error = [];
		// 	let formData = new FormData();


		// 	if (elements[0].value === "" || elements[1].value === "") {
		// 		error.push("form is blank");
		// 	} else if (pattern.test(elements[0].value) === false) {
		// 		error.push("Sdt ko hop le")
		// 	}

		// 	if (error.length === 0) {
		// 		for(var i=0; i<elements.length; i++)
		// 		{
		// 			formData.append(elements[i].name, elements[i].value);
		// 		}


		// 		var xmlHttp = new XMLHttpRequest();
		// 		xmlHttp.onreadystatechange = function()
		// 		{
		// 			if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
		// 			{
		// 				Swal.fire({
		// 					position: 'center',
		// 					icon: 'success',
		// 					title: 'Your work has been saved',
		// 					showConfirmButton: false,
		// 					timer: 1500
		// 				})
		// 			}
		// 		}
		// 		xmlHttp.open("post", "server.php"); 
		// 		xmlHttp.send(formData); 
		// 	}
		// }

			
	</script>
	<script src="js/index.js"></script>
	<script src="js/ajax.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



</body>

</html>