<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<<meta name="description" content="Chi tiết trả trước Viettel 2020,hỗ trợ đăng kí nhanh gọn trong vòng 24h trong khu vực Kiên Giang">
	<meta name="keywords"
		content="Dịch vụ Viettel ở Kiên Giang Kiên Giang,viettel, Khuyến mại nạp thẻ, data, 3G, 4G, 5G, nạp tiền điện thoại, sim số đẹp, gói cước di động, cửa hàng Viettel, tổng đài Viettel, chăm sóc khách hàng Viettel">
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

	<title>Đăng kí lên mạng 4G với Viettel 2020</title>
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
	<main class="main-phone">
		<section class="phone-for">
			<ul class="phone-for-lists">
				<a href="index.php" class="phone-for-lists--item"><li>Trang Chủ</li></a>
				<a href="dich-vu-tra-sau-viettel.php" class="phone-for-lists--item"><li>Trả Sau</li></a>
				<a href="#" class="phone-for-lists--item active-navigation"><li>Trả Trước</li></a>
			</ul>
		</section>
		<section class="phone-contact">
			<h1 class="heading-secondary phone-contact--head">Gói cước trả trước Viettel</h1>
			<div class="phone-contact__hotline">
				<a href="#" class="phone-contact__hotline--blue">Hotline: <span class="phone-contact__hotline--red">03.836.27790</span></a>
				<p class="phone-contact__hotline--red">Để thuận tiện và tốt nhất cho quý khách,quý khách vui lòng liên hệ qua message FB góc trái để hỗ trợ tốt nhất ạ</p>
			</div>
	
			<div class="phoneT-detail-table">
				<div class="phoneT-detail-table--item phoneT-detail-table-1 font-table">
					<p>Tên Gói</p>
				</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-2 font-table">
					<p>Cước Phí Trọn Gói/Tháng(VND)</p>
				</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-3 font-table">
					Miễn Phí Trọn Gói
				</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-4 font-table">
					<p>Thoại Nội Mạng(Phút)</p>
				</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-5 font-table"><p>Thoại Ngoại Mạng(phút)</p></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-6 font-table">Data 3G/4G Tốc Độ Cao</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-7 font-table">SMS Nội Mạng(Tin)</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-8 font-table">SMS Nội+Ngoại Mạng(Tin)</div>
				
				<div class="phoneT-detail-table--item phoneT-detail-table-9">V120</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-10 color-table">F90U</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-11 ">V90X(Học Sinh-Sinh Viên)</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-12 color-table">ST70</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-13">ST90K</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-14 color-table">G70D</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-15 ">XL90U</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-16 color-table">UMAX300</div>
		
	
				<div class="phoneT-detail-table--item phoneT-detail-table-22">120.000</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-23 color-table">90.000</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-24">90.000</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-25 color-table">70.000</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-26">90.000</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-27 color-table">70.000</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-28">90.000</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-29 color-table">300.000</div>

				<div class="phoneT-detail-table--item phoneT-detail-table-35">Miễn Phí 20p đầu tiền/cuộc</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-36 color-table">Miễn Phí 10p đầu tiền/cuộc</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-37">Miễn Phí 20p đầu tiền/cuộc</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-38"></div>

				
				<div class="phoneT-detail-table--item phoneT-detail-table-42">50</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-43 color-table">15</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-44">20</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-45 color-table"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-46"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-47 color-table"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-48"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-49 color-table"></div>

				<div class="phoneT-detail-table--item phoneT-detail-table-55"  style="display: flex; flex-direction: column;">
					<p>4GB/ngày</p>
					<p>60GB/tháng</p>
				</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-56 color-table">5GB</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-57" style="display: flex; flex-direction: column;">
					<p>1GB/ngày</p>
					<p>30GB/tháng</p>
					
				</div>
				<div style="display: flex; flex-direction: column;" class="phoneT-detail-table--item phoneT-detail-table-58 color-table">
					<p>500MB/ngày</p>
					<p>15GB/tháng</p>
				</div>
				<div style="display: flex; flex-direction: column;" class="phoneT-detail-table--item phoneT-detail-table-59">
					<p>1GB/ngày</p>
					<p>30GB/tháng</p>
				</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-60 color-table">7GB</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-61">9GB</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-62 color-table">30GB</div>

				<div class="phoneT-detail-table--item phoneT-detail-table-68"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-69 color-table">250</div>
				<div class="phoneT-detail-table--item phoneT-detail-table-70"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-71 color-table"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-72"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-73 color-table"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-74"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-75 color-table"></div>


				<div class="phoneT-detail-table--item phoneT-detail-table-81"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-82 color-table"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-83"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-84 color-table"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-85"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-86 color-table"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-87"></div>
				<div class="phoneT-detail-table--item phoneT-detail-table-88 color-table"></div>

			</div>
			<div class="phone-contact--btn">
				<a href="#" class="btn-text-2 phone-contact--btn--1" id="scrollTo2"><span class="btn-text-2-span">Đăng Ký</span></a>
			</div>
		<!-- 	<div class="promotion-phone">
				<ul class="promotion__lists">
					<li class="promotion__list--item">
						<svg class="wifi-detail__info--list-icon">
							<use xlink:href="img/sprite.svg#icon-tag"></use>
						</svg>Đóng trước 1 tháng tặng 1GB sử dụng trong 1 tháng
					</li>
					<li class="promotion__list--item">
						<svg class="wifi-detail__info--list-icon">
							<use xlink:href="img/sprite.svg#icon-tag"></use>
						</svg>Đóng trước 3 tháng tặng 1GB/tháng sử dụng trong 3 tháng
					</li>
				</ul>	
			</div>
			<div class="promotion-phone">
				<ul class="promotion__lists">
					<li class="promotion__list--item">
						<svg class="wifi-detail__info--list-icon">
							<use xlink:href="img/sprite.svg#icon-tag"></use>
						</svg>Đóng trước 6 tháng tặng 1GB/tháng trong 6 tháng và giảm 5% giá
					</li>
					<li class="promotion__list--item">
						<svg class="wifi-detail__info--list-icon">
							<use xlink:href="img/sprite.svg#icon-tag"></use>
						</svg>Đóng trước 12 tháng tặng 1GB/tháng trong 12 tháng và giảm 5% giá
					</li>
				</ul>	
			</div> -->		
		</section>
		<section class="phone-contact">
			<div class="phone-contact--infomation">
				<h3 class="phone-contact--infomation--title">Sim trả trước Viettel là gì?</h3>

				<p class="phone-contact--infomation--text">Sim trả trước Viettel nói một cách dễ hiểu là người dùng phải trả các khoản tiền dịch vụ trước khi sử dụng. Tuy nhiên, thực tế là khi muốn sử dụng những dịch vụ nghe gọi, SMS, nhạc chuông, nhạc chờ,... từ nhà mạng thì người dùng cần nạp một khoảng tiền nhất định vào tài khoản. Có thể là 10.000đ, 20.000đ, 50.0000đ,... để có thể duy trì sử dụng các dịch vụ từ nhà mạng. Khi tài khoản hết tiền thì các nhà mạng sẽ ngừng cung cấp các dịch vụ này đến tài khoản cho đến khi người dùng nạp lại tiền vào tài khoản của mình.</p>
				<img src="img/phonePrice.jpg" alt="V120 Khuyễn Mãi Viettel" class="phone-contact--infomation--img phone-contact--infomation--img--2">
				<p class="phone-contact--infomation--text">Hiện nay, sim trả trước Viettel khá phổ biến trong cộng đồng người dùng. Theo một cuộc khảo sát đến từ nhà mạng thì có hơn 90% khách hàng đã và đang sử dụng sim trả trước Viettel, còn lại chưa tới 10% người dùng sim trả sau Viettel.</p>	

				<h3 class="phone-contact--infomation--title">Có nên sử dụng sim trả trước Viettel không</h3>
				<p class="phone-contact--infomation--text">Đây chính là một câu hỏi mà khi nào người dùng muốn lựa chọn một vấn đề gì đó đều sẽ đặt ra. Tuy nhiên, câu trả lời cho câu hỏi này lại nằm chính ở người dùng. Bởi mỗi loại sim sẽ có một ưu nhược điểm khác nhau. Người dùng có thể dựa vào những đặc điểm của từng loại sim để lựa chọn</p>
				<p class="phone-contact--infomation--text">Đối với người dùng thường hay sử dụng dịch vụ nghe, gọi của nhà mạng, hay không muốn nạp tiền thường xuyên thì có thể sử dụng sim trả sau của Viettel. Bởi thường thì gói cước trả sau của Viettel sẽ được nhà mạng thu cước phí vào cuối tháng. Còn đối với người dùng muốn chủ động kiểm soát tài khoản của mình hay mong muốn nhận được khuyến mãi của nhà mạng vào mỗi tháng thì có thể sử dụng sim trả trước của Viettel</p>

				<p class="phone-contact--infomation--text">Nhìn chung thì Viettel đã đưa đến cho người dùng rất nhiều loại gói cước khác nhau để có thể mang lại sự hài lòng nhất cho khách hàng khi sử dụng dịch vụ từ nhà mạng. Mỗi loại sim lại có một đặc điểm riêng, có thể loại này phù hợp với người này nhưng không phù hợp với người kia. Tuy nhiên, chắc chắn rằng sim trả trước Viettel là một sự lựa chọn đáng để người dùng lưu tâm khi sử dụng mạng Viettel.</p>
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
							<img src="img/location.png" class="form-2__contact-info__icon" alt="Địa Chỉ Viettel Kiên Giang" />
							<p>654 Nguyễn Trung Trực</p>
						</div>
						<div class="form-2__contact-info__information">
							<img src="img/email.png" class="form-2__contact-info__icon" alt="email" />
							<p>blackng10.5.1997@gmail.com</p>
						</div>
						<div class="form-2__contact-info__information">
							<img src="img/phone.png" class="form-2__contact-info__icon" alt="hotline Viettel Kiên Giang" />
							<p>0383.61.71.61</p>
						</div>
					</div>
				</div>
			</div>
				<div class="form-2__contact-form">
					<span class="form-2__contact-form__circle form-2__contact-form__circle--one"></span>
					<span class="form-2__contact-form__circle form-2__contact-form__circle--two"></span>

					<form  action="#">
						<h3 class="form-2__contact-form--title">Liên Hệ Chúng Tui</h3>
						<div class="form-2__contact-form--input-container">
							<input type="tel" name="phone" autocomplete="nope" class="form-2__contact-form--input" />
							<label for="">SĐT</label>
							<span>SĐT</span>
						</div>
						<div class="form-2__contact-form--input-container">
							<input type="text" name="name" autocomplete="nope" class="form-2__contact-form--input" />
							<label for="">Địa Chỉ</label>
							<span>Địa Chỉ</span>
						</div>
						<div class="form-2__contact-form--input-container  focus">
							<select  name="res-info" class="form-2__contact-form--input">
									<option value="0" selected class="form-2__contact-form--input-1">Gói V120</option>
									<option value="1" class="form-2__contact-form--input-1">Gói F90U</option>
									<option value="2" class="form-2__contact-form--input-1">Gói V90X</option>
									<option value="3" class="form-2__contact-form--input-1">Gói ST</option>
									<option value="4" class="form-2__contact-form--input-1">Gói G70D</option>
									<option value="5" class="form-2__contact-form--input-1">Gói XL90U</option>
									<option value="6" class="form-2__contact-form--input-1">Gói UMAX300</option>
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
						<input type="submit" value="Đăng Ký" class="form-2__contact-form--btn" />
					</form>
				</div>
			</div>
		</section>
	</main>

	<?php include "view/footer.php"; ?>

		<!-- javascript -->
    <script>

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