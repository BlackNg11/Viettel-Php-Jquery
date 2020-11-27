<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google Meta Tags -->
	<meta name="description" content="Đầy đủ thông tin,chính xác mọi dịch vụ về wifi,di động của Viettel ở Kiên Giang.Đăng Ký để tận hưởng trải nghiệm lên mạng & dịch vụ chăm sóc khách hàng tốt nhất">
	<meta name="keywords" content="Đầy đủ thông tin,chính xác mọi dịch vụ về wifi,di động của Viettel ở Kiên Giang.Đăng Ký để tận hưởng trải nghiệm lên mạng & dịch vụ chăm sóc khách hàng tốt nhất">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="https://nothing.com">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Cổng thông tin hỗ trợ dịch vụ Di động, Internet, Truyền hình Viettel Rạch Giá">
	<meta property="og:description" content="Cung cấp thông tin đầy đủ,chính xác mọi dịch vụ về wifi,trả sau của Viettel ở Kiên Giang.Đăng Ký để tận hưởng trải nghiệm lên mạng & dịch vụ chăm sóc khách hàng tốt nhất">
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

	if (isset($_POST['submit'])) {
		// print_r($_POST);
		$sdt = mysqli_real_escape_string($conn, $_POST['SDT']);
		$contact = mysqli_real_escape_string($conn, $_POST['contact']);
		$resInfo = mysqli_real_escape_string($conn, $_POST['res-info']);

		 
		// create sql
		$sql = "INSERT INTO `khachhang_thuong`(sdt,diachi,dichvudangky,status) VALUES ('$sdt', '$contact', '$resInfo',1)";
		
		//save to db
		if (mysqli_query($conn,$sql)) {
			//success
			// header('Location: index.php');
		}else {
			//error
			// echo $sql;
			echo "query error" . mysqli_error($conn);
		}
	}


?>
	<main>		
		<section class="navigation-pc">
			<ul class="navigation-pc-lists">
				<a href="#" class="navigation-pc-lists--item active-navigation"><li>Trang Chủ</li></a>
				<a href="wifi-cho-ho-gia-dinh.php" class="navigation-pc-lists--item"><li>Internet-Truyền Hình</li></a>
				<a href="dich-vu-tra-sau-viettel.php" class="navigation-pc-lists--item "><li>Dịch Vụ Di Động</li></a>
				<a href="404.php" class="navigation-pc-lists--item"><li>Mua Sim</li></a>
				<a href="404.php" class="navigation-pc-lists--item"><li>Mua Điện Thoại</li></a>
				<a href="404.php" class="navigation-pc-lists--item"><li>Tin Khuyến Mãi</li></a>
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
						<form action="index.php" method="POST" class="form-ui">
							<div class="form--info u-margin-bottom-smaill">
								<h1 class="form--heading">LIÊN HỆ</h1>
								<p class="form--text">Cung Cấp Những Dịch Vụ Tốt Nhất Cho Khách Hàng</p>
							</div>
							<div class="form__group">
								<label for="name" class="form__label">SĐT</label>
								<input type="tel" name="SDT" class="form__input" autocomplete="off" placeholder="SĐT" id="name" required pattern="(09|01|03|[2|6|8|9])+([0-9]{8})\b" oninvalid="this.setCustomValidity('Quý khách vui lòng nhập và có số 0 đầu tiên')">
							</div>

							<div class="form__group">
								<label for="contact" class="form__label">Địa Chỉ</label>
								<input type="text" name="contact" class="form__input" autocomplete="off"  minlength="5" maxlength="80" placeholder="Địa Chỉ Liên Lạc" id="contact" required oninvalid="this.setCustomValidity('Quý khách vui lòng nhập địa chỉ(số nhà,đường,phường)')">								
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
			<a href="wifi-cho-ho-gia-dinh.php"><h1 class="heading-secondary u-margin-bottom-medium">Dịch Vụ Wifi Và Truyền Hình Viettel</h1></a>
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
			
			<a href="wifi-cho-ho-gia-dinh.php" class="btn-text-2"><span class="btn-text-2-span">Tìm hiểu thêm &rarr;</span></a>
		</section>
		<section class="phone-detail">
			<a href="dich-vu-tra-sau-viettel.php"><h1 class="heading-secondary u-margin-bottom-medium">Dịch Vụ Trả Sau Và Trả Trước Viettel</h1></a>
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
			<a href="dich-vu-tra-sau-viettel.php" class="btn-text-2"><span class="btn-text-2-span">Tìm hiểu thêm &rarr;</span></a>
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
<?php
	include "view/footer.php";
?>
		<!-- javascript -->
    <script src="ow_/vendors/jquery.min.js"></script>
    <script src="ow_/owlcarousel/owl.carousel.js"></script>
    <script>
    	$('.owl-carousel').owlCarousel({
    		loop:true,
    		margin:20,
    		nav:true,
    		autoHeight: true,
    		autoplay:true,
    		autoplayTimeout:5000,
    		autoplayHoverPause:true,
    		responsive:{
    			0:{
    				items:1
    			},
    			600:{
    				items:1
    			},
    			1000:{
    				items:3
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
    <script src="js/index.js"></script>
</body>
</html>