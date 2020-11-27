<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Lắp đặt mạng wifi Viettel 2020 cho cyber, phòng net.Hỗ trợ nhanh chóng cho khách hàng ở Kiên Giang">
	<meta name="keywords" content="Lắp đặt mạng wifi viettel mãi internet viettel 2020 trọn gói chỉ từ 210k,tặng kèm modem wifi đời mới 4 cổng">
	<meta name="og"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="img/v-logo.png" rel="shortcut icon" type="image/x-icon" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@400;700&display=swap" rel="stylesheet">
	
	<!-- <link rel="stylesheet" href="ow_/css/docs.theme.min.css"> -->

	<!-- Owl Stylesheets -->
    <link rel="stylesheet" href="ow_/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="ow_/owlcarousel/assets/owl.theme.default.min.css">



	<!--<link rel="stylesheet" href="css/icon-font.css">-->

	<link rel="stylesheet" href="css/style.css">

	<title>Lắp đặt mạng Viettel cho phòng net,cyber</title>
</head>
<body>
<?php
	include "config/config.php";
	include "view/navigation.php";
	include "view/header.php";

	if (isset($_POST['submit'])) {
		// print_r($_POST);
		$sdt = mysqli_real_escape_string($conn, $_POST['SDT']);
		$contact = mysqli_real_escape_string($conn, $_POST['contact']);
		$resInfo = mysqli_real_escape_string($conn, $_POST['res-info']);
		$message = mysqli_real_escape_string($conn, $_POST['message']);
		 
		// create sql
		$sql = "INSERT INTO `user-no-reg`(SĐT,DIA_CHI,DICH_VU_DK,YEU_CAU) VALUES ('$sdt', '$contact', '$resInfo', '$message')";
		
		//save to db
		if (mysqli_query($conn,$sql)) {
			//success
			// header('Location: index.php');
		}else {
			//error
			echo $sql;
			echo "query error" . mysqli_error($conn);
		}
	}
?>
	<main class="main-wifi">
		<section class="wifi-for">
			<ul class="wifi-for-lists">
				<a href="index.php" class="wifi-for-lists--item"><li>Trang Chủ</li></a>
				<a href="wifi-cho-ho-gia-dinh.php" class="wifi-for-lists--item"><li>Hộ Gia Đình</li></a>
				<a href="#" class="wifi-for-lists--item active-navigation"><li>Quán Net</li></a>
				<a href="wifi-cho-doanh-nghiep.php" class="wifi-for-lists--item"><li>Doanh Nghiệp</li></a>
				<!-- <a href="truyen-hinh-viettel.php" class="wifi-for-lists--item"><li>Truyền Hình</li></a> -->
			</ul>
		</section>
		<section class="wifi-contact">
			<h1 class="heading-secondary wifi-contact--head">Bảng giá dịch vụ wifi Viettel cho phòng Net</h1>
			<div class="wifi-contact__hotline">
				<a href="#" class="wifi-contact__hotline--blue">Hotline: <span class="wifi-contact__hotline--red">0383.61.71.61</span></a>
				<p class="wifi-contact__hotline--red">Để thuận tiện và tốt nhất cho quý khách,quý khách vui lòng liên hệ qua message FB góc trái để hỗ trợ tốt nhất ạ</p>
			</div>

			<h3 class="wifi-contact--wifi">Wifi</h3>
			<div class="wifi-contact--carousel">
				<div class="owl-carousel owl-theme">
					<div class="item card-wifi" >
						<h2 class="card-wifi-heading card-wifi-heading--2">
							SUPERNET3
							<span>80 MBPS</span>
						</h2>
						<div class="card-wifi-bottom">
							<div class="card-wifi-bottom-prices">
								<!-- <p class="card-wifi-bottom-percent">-26%</p> -->
								<div class="card-wifi-bottom__sale">
									<p class="card-wifi-bottom__sale--price">310.000đ/tháng</p>
									<!-- <p class="card-wifi-bottom__sale--discount">250.000đ/tháng</p> -->
								</div>
							</div>
							<p class="card-wifi-bottom--text">Dành cho tiệm net từ 8-12 máy tinh</p>					
						</div>
						<a href="#" class="btn card-wifi-bottom--btn btn-scroll--2">Đăng Ký</a>
					</div>
					<div class="item card-wifi" >
						<h2 class="card-wifi-heading">
							SUPERNET4
							<span>100 MBPS</span>
						</h2>
						<div class="card-wifi-bottom">
							<div class="card-wifi-bottom-prices">
								<!-- <p class="card-wifi-bottom-percent">-26%</p> -->
								<div class="card-wifi-bottom__sale">
									<p class="card-wifi-bottom__sale--price">350.000đ/tháng</p>
									<!-- <p class="card-wifi-bottom__sale--discount">250.000đ/tháng</p> -->
								</div>
							</div>
							<p class="card-wifi-bottom--text">Dành cho tiệm net từ 12-15 máy tính</p>					
						</div>
						<a href="#" class="btn card-wifi-bottom--btn btn-scroll--2">Đăng Ký</a>
					</div>
					<div class="item card-wifi" >
						<h2 class="card-wifi-heading card-wifi-heading--2">
							SUPERNET5
							<span>200 MBPS</span>
						</h2>
						<span class="card-wifi--best">Phổ Biến Nhất</span>
						<div class="card-wifi-bottom">
							<div class="card-wifi-bottom-prices">
								<!-- <p class="card-wifi-bottom-percent">-26%</p> -->
								<div class="card-wifi-bottom__sale">
									<p class="card-wifi-bottom__sale--price">535.000đ/tháng</p>
									<!-- <p class="card-wifi-bottom__sale--discount">250.000đ/tháng</p> -->
								</div>
							</div>
							<p class="card-wifi-bottom--text">Dành cho tiệm net từ 15-20 máy tính</p>					
						</div>
						<a href="#" class="btn card-wifi-bottom--btn btn-scroll--2">Đăng Ký</a>
					</div>
					<div class="item card-wifi" >
						<h2 class="card-wifi-heading">
							FAST 60
							<span>60 MBPS/1 MBPS</span>
						</h2>
						<div class="card-wifi-bottom">
							<div class="card-wifi-bottom-prices">
								<!-- <p class="card-wifi-bottom-percent">-26%</p> -->
								<div class="card-wifi-bottom__sale">
									<p class="card-wifi-bottom__sale--price">880.000đ/tháng</p>
									<!-- <p class="card-wifi-bottom__sale--discount">250.000đ/tháng</p> -->
								</div>
							</div>
							<p class="card-wifi-bottom--text">Dành cho tiệm net từ 30-40 máy tính</p>					
						</div>
						<a href="index.php" class="btn card-wifi-bottom--btn btn-scroll--2">Đăng Ký</a>
					</div>
					<div class="item card-wifi" >
						<h2 class="card-wifi-heading card-wifi-heading--2">
							FAST 60+
							<span>60 MBPS/2 MBPS</span>
						</h2>
						<div class="card-wifi-bottom">
							<div class="card-wifi-bottom-prices">
								<!-- <p class="card-wifi-bottom-percent">-26%</p> -->
								<div class="card-wifi-bottom__sale">
									<p class="card-wifi-bottom__sale--price">1.400.000đ/tháng</p>
									<!-- <p class="card-wifi-bottom__sale--discount">250.000đ/tháng</p> -->
								</div>
							</div>
							<p class="card-wifi-bottom--text">Dành cho tiệm net từ 30-40 máy tính với mạng truy cập nước ngoài tốt nhất</p>
							
						</div>
						<a href="index.php" class="btn card-wifi-bottom--btn btn-scroll--2">Đăng Ký</a>	
					</div>
					<div class="item card-wifi" >
						<h2 class="card-wifi-heading">
							FAST 80
							<span>80 MBPS/1.5 MBPS</span>
						</h2>
						<div class="card-wifi-bottom">
							<div class="card-wifi-bottom-prices">
								<!-- <p class="card-wifi-bottom-percent">-26%</p> -->
								<div class="card-wifi-bottom__sale">
									<p class="card-wifi-bottom__sale--price">2.200.000đ/tháng</p>
									<!-- <p class="card-wifi-bottom__sale--discount">250.000đ/tháng</p> -->
								</div>
							</div>
							<p class="card-wifi-bottom--text">Dành cho tiệm net từ 40-60 máy tính</p>

						</div>
						<a href="index.php" class="btn card-wifi-bottom--btn btn-scroll--2">Đăng Ký</a>
					</div>
					<div class="item card-wifi">
						<h2 class="card-wifi-heading card-wifi-heading--2">
							FAST 80+
							<span>80 MBPS/3 MBPS</span>
						</h2>
						<div class="card-wifi-bottom">
							<div class="card-wifi-bottom-prices">
								<!-- <p class="card-wifi-bottom-percent">-26%</p> -->
								<div class="card-wifi-bottom__sale">
									<p class="card-wifi-bottom__sale--price">3.300.000đ/tháng</p>
									<!-- <p class="card-wifi-bottom__sale--discount">250.000đ/tháng</p> -->
								</div>
							</div>
							<p class="card-wifi-bottom--text">Dành cho tiệm net từ 40-60 máy tính với mạng truy cập nước ngoài tốt nhất</p>		
						</div>
						<a href="index.php" class="btn card-wifi-bottom--btn btn-scroll--2">Đăng Ký</a>
					</div>
					<div class="item card-wifi">
						<h2 class="card-wifi-heading">
							FAST 100
							<span>100 Mbps/2 Mbps</span>
						</h2>
						<div class="card-wifi-bottom">
							<div class="card-wifi-bottom-prices">
								<!-- <p class="card-wifi-bottom-percent">-26%</p> -->
								<div class="card-wifi-bottom__sale">
									<p class="card-wifi-bottom__sale--price">4.400.000đ/tháng</p>
									<!-- <p class="card-wifi-bottom__sale--discount">250.000đ/tháng</p> -->
								</div>
							</div>
							<p class="card-wifi-bottom--text">Dành cho tiệm net từ 60-100 máy tính </p>		
						</div>
						<a href="index.php" class="btn card-wifi-bottom--btn btn-scroll--2">Đăng Ký</a>
					</div>
					<div class="item card-wifi">
						<h2 class="card-wifi-heading card-wifi-heading--2">
							Fat100+
							<span>100 Mbps/3 Mbps</span>
						</h2>
						<div class="card-wifi-bottom">
							<div class="card-wifi-bottom-prices">
								<!-- <p class="card-wifi-bottom-percent">-26%</p> -->
								<div class="card-wifi-bottom__sale">
									<p class="card-wifi-bottom__sale--price">6.600.000đ/tháng</p>
									<!-- <p class="card-wifi-bottom__sale--discount">250.000đ/tháng</p> -->
								</div>
							</div>
							<p class="card-wifi-bottom--text">Dành cho tiệm net từ 60-100 máy tính với mạng truy cập nước ngoài tốt nhất</p>		
						</div>
						<a href="index.php" class="btn card-wifi-bottom--btn btn-scroll--2">Đăng Ký</a>
					</div>
				</div>
			</div>
			<div class="promotion">
				<ul class="promotion__lists">
					<li class="promotion__list--item">
						<svg class="wifi-detail__info--list-icon">
							<use xlink:href="img/sprite.svg#icon-tag"></use>
						</svg>Đóng trước 6 tháng tặng 1 tháng cho khách hàng
					</li>
					<li class="promotion__list--item">
						<svg class="wifi-detail__info--list-icon">
							<use xlink:href="img/sprite.svg#icon-tag"></use>
						</svg>Đóng trước 12 tháng tặng 2 tháng cho khách hàng
					</li>
					<li class="promotion__list--item">
						<svg class="wifi-detail__info--list-icon">
							<use xlink:href="img/sprite.svg#icon-tag"></use>
						</svg>Đóng trước 18 tháng tặng 3 tháng cho khách hàng
					</li>
				</ul>	
			</div>

	
			<div class="wifi-contact__setting">
				<p>Để quán Game, quán Net của bạn là sự lựa chọn lý tưởng của các gamer hay các bạn sinh viên có nhu cầu học tập thì đường truyền cáp quang của bạn phải thực sự đáp ứng được nhu cầu của họ bằng sự hài lòng nhất, mạng không bị lag, không giật, tốc độ ổn định, mượt mà nếu không thì họ khó có thể quay lại quán của bạn một lần nữa đấy. Viettel cung cấp dịch vụ lắp mạng cáp quang Viettel cho quán game, quán net tốc độ cao với mức giá ưu đãi như sau:</p>
				<p>Tùy vào quy mô, số lượng máy của quán mà bạn lựa chọn cho mình gói cước phù hợp nhé. Các gói Fast60, Fast60+ phù hợp với các tiệm Net có quy mô 10-15 máy tính để đạt tốc độ cao nhất, gói Fast80, Fast80+ phù hợp với quy mô 15-20 máy tính trở lên. Khi đăng kí lắp đặt và sử dụng một trong các gói cước trên, khách hàng sẽ có thêm các ưu đãi như sau:</p>
			</div>
			<div class="wifi-contact__img">
				<img src="img/khuyen-mai-cap-quang-viettel.jpg" alt="Chi Tiết Cáp Quang" class="wifi-contact__img--size">
				<p class="wifi-contact__img--status-img">Ưu điểm của công nghệ FTTH mà Viettel sử dụng</p>
			</div>
			
						<div class="wifi-contact--infomation">
				<h3 class="wifi-contact--infomation--heading">Lắp đặt  wifi cáp quang Viettel có gì đặc biệt?</h3>
				<p class="wifi-contact--infomation--text">Với mong muốn mang lại chất lượng và dịch vụ tốt nhất dành cho khách hàng.Viettel đã và đang cố gắng xây dựng mạng lưới hạ tầng rộng khắp tại tất cả các khu vực nội ngoại thành và các tỉnh trên toàn quốc, đồng thời xây dựng mức giá đa dạng và phù hợp nhất tới tất cả các đối tượng khách hàng từ sinh viên , hộ gia đình tới các quán game và doanh nghiệp lớn…</p>
				<p class="wifi-contact--infomation--text">Khi bạn Lắp Mạng Wifi Viettel trên 1 đường truyền nền công nghệ là Cáp Quang tốc độ rất cao và ổn định, tại sao bạn không lắp thêm các dịch vụ thiết yếu khác trên cùng 1 đường truyền mà vẫn không ảnh hưởng tới tốc độ truy cập internet đó để tiết kiệm chi phí lắp đặt và không làm ảnh hưởng tới mỹ quan của ngôi nhà bạn , đồng thời cước sẽ gộp hết 1 nhà cung cấp và chỉ cần thanh toán 1 lần duy nhất trong tháng là xong.</p>
				<p class="wifi-contact--infomation--text">Với công nghệ truyền tải internet hiện đại nhất trên thế giới GPON, mạng cáp quang Viettel mang đến nhiều trải nghiệm thú vị cho khách hàng khi truy cập internet. Đầu tiên đó là việc truy cập internet nhanh chóng hơn gấp 200 lần so với cáp đồng tốc độ download/upload nhanh như nhau, phục vụ nhu cầu giải trí, học tập và công việc diễn ra thuận lợi, suôn sẻ.</p>
				<p class="wifi-contact--infomation--text">Hiện nay, chỉ với giá gói 185.000đ/tháng khách hàng đã có thể lắp wifi Viettel khi sử dụng gói cước cáp quang dành cho gia đình. Ngoài ra, còn có thêm các gói cước phù hợp với quán game, tổ chức doanh nghiệp, khách hàng lựa chọn tùy theo nhu cầu sử dụng.</p>
				<p class="wifi-contact--infomation--text">Viettel cung cấp các gói cước cáp quang giá rẻ cho khách hàng đăng ký wifi cáp quang Viettel trong thời điểm này. Giá cước cáp quang giảm từ 26% đến 40% giá cước so với giá niêm yết cùng nhiều chương trình khuyến mãi hấp dẫn khác như:</p>
				<ul class="wifi-contact--infomation--list">
					<li>✓ Tặng modem wifi 4 cổng</li>
					<li>✓ Miễn phí 100% phí lắp đặt mạng cáp quang Viettel khi khách hàng trả trước từ 3 tháng cước phí trở lên, tặng từ 1-3 tháng sử dụng internet miễn phí khi đăng ký trả trước từ 6 tháng trở lên.</li>
				</ul>
				<p class="wifi-contact--infomation--text">Dịch vụ lắp đặt mạng wifi Viettel hiện đại cùng phong cách làm việc chuyên nghiệp sẽ mang đến sự hài lòng tuyệt đối cho khách hàng. Liên hệ tới số hotline 038.362.7790 hoặc 1800 8168 để được tư vấn miễn phí về dịch vụ cũng như để được nhận những ưu đãi lớn nhất.</p>
			</div>	
		</section>
		<section class="form-register">
			<span class="form-register__big-circle"></span>
			<img src="img/shape.png" class="form-register--square" alt="" />
			<div class="form-2">
				<div class="form-2__contact-info">
					<h3 class="form-2__contact-info__title">Viettel</h3>
					<p class="form-2__contact-info__text">
						Hỗ Trợ Khách Hàng Lắp Đặt Wifi và Dịch Vụ Di Động Nhanh Chóng 24/7 Trong Khu Vực Kiên Giang
					</p>
					<div class="form-2__contact-info__info">
						<div class="form-2__contact-info__information">
							<img src="img/location.png" class="form-2__contact-info__icon" alt="" />
							<p>654 Nguyễn Trung Trực</p>
						</div>
						<div class="form-2__contact-info__information">
							<img src="img/email.png" class="form-2__contact-info__icon" alt="" />
							<p>lorem@ipsum.com</p>
						</div>
						<div class="form-2__contact-info__information">
							<img src="img/phone.png" class="form-2__contact-info__icon" alt="" />
							<p>038.362.7790</p>
						</div>
					</div>
					<div class="form-2__contact-info__social-media">
						<p>Mạng Xã Hội :</p>
						<div class="form-2__contact-info__social-icons">
							<a href="">
								<svg class="wifi-detail__info--list-icon wifi-detail__info--list-icon--1">
									<use xlink:href="img/sprite.svg#icon-facebook"></use>
								</svg>
							</a>
							<a href="">
								<svg class="wifi-detail__info--list-icon wifi-detail__info--list-icon--1">
									<use xlink:href="img/sprite.svg#icon-youtube"></use>
								</svg>
							</a>
							<!-- <a href="">
								<svg class="wifi-detail__info--list-icon wifi-detail__info--list-icon--1">
									<use xlink:href="img/sprite.svg#icon-facebook"></use>
								</svg>
							</a> -->
						</div>
					</div>
				</div>
				<div class="form-2__contact-form">
					<span class="form-2__contact-form__circle form-2__contact-form__circle--one"></span>
					<span class="form-2__contact-form__circle form-2__contact-form__circle--two"></span>

					<form action="wifi-cho-ho-gia-dinh.php" method="POST">
						<h3 class="form-2__contact-form--title">Liên Hệ</h3>
						<div class="form-2__contact-form--input-container">
							<input type="tel" name="SDT"  autocomplete="nope" required pattern="(09|01|03|[2|6|8|9])+([0-9]{8})\b" oninvalid="this.setCustomValidity('Quý khách vui lòng nhập và có số 0 đầu tiên')" class="form-2__contact-form--input" />
							<label for="">SĐT</label>
							<span>SĐT</span>
						</div>
						<div class="form-2__contact-form--input-container">
							<input type="text" name="contact" autocomplete="nope" class="form-2__contact-form--input" minlength="5" maxlength="80"  id="contact" required oninvalid="this.setCustomValidity('Quý khách vui lòng nhập địa chỉ(số nhà,đường,phường)')"/>
							<label for="">Địa Chỉ</label>
							<span>Địa Chỉ</span>
						</div>
						<div class="form-2__contact-form--input-container  focus">
							<select  name="res-info" class="form-2__contact-form--input">
									<option value="Net" selected class="form-2__contact-form--input-1">Gói SuperNet</option>
									<option value="SuperNet" class="form-2__contact-form--input-1">Gói Fat</option>
							</select>
							<label for="">Gói Đăng Ký</label>
							<span>Gói Đăng Ký</span>
						</div>
						<!-- <div class="form-2__contact-form--input-container">
							<input type="email" name="email" autocomplete="off" class="form-2__contact-form--input" />
							<label for="">Email</label>
							<span>Email</span>
						</div> -->
						<div class="form-2__contact-form--input-container form-2__contact-form--textarea">
							<textarea name="message" class="form-2__contact-form--input"></textarea>
							<label for="">Yêu Cầu</label>
							<span>Yêu Cầu</span>
						</div>
						<input type="submit" name="submit" value="Đăng Ký" class="form-2__contact-form--btn" />
					</form>
				</div>
			</div>
		</section>
	</main>

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

					<a href=""><img src="img/zalo-seeklogo.com.svg" alt="Zalo" class="wifi-detail__info--list-icon"></a>
				</div>
				s
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
</body>
</html>