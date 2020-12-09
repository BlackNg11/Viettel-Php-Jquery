<?php
    ob_start();
    include "admin/classes/news.php";
?>
<?php
    $news = new news();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Dịch Vụ Viettel Ở Kiên Giang">
	<meta name="keywords" content="Viettel Kiên Giang, Viettel Telecom,my viettel, Khuyến mại nạp thẻ, data, 3G, 4G, 5G, nạp tiền điện thoại, sim số đẹp, gói cước di động, cửa hàng Viettel, tổng đài Viettel, chăm sóc khách hàng Viettel">
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

	<title>Tin Tức Viettel</title>
</head>
<body>
	<?php
	include "view/navigation.php";
	include "view/header.php";
	?>

	<main class="mainBlog">
		<section class="phone-for">
			<ul class="phone-for-lists">
				<a href="trang-chu.php" class="phone-for-lists--item">
					<li>Trang Chủ</li>
				</a>
				<a href="#" class="phone-for-lists--item ">
					<li>Tin Khuyến Mãi</li>
				</a>
			</ul>
		</section>
		<section class="mainBlog__news">
			<div class="mainBlog__news__recent">
				<div class="mainBlog__news__recent--h1">
					<a href="#">Tin Mới
						<svg viewBox="0 0 185.343 185.343">
							<path d="M51.707 185.343a10.692 10.692 0 01-7.593-3.149 10.724 10.724 0 010-15.175l74.352-74.347L44.114 18.32c-4.194-4.194-4.194-10.987 0-15.175 4.194-4.194 10.987-4.194 15.18 0l81.934 81.934c4.194 4.194 4.194 10.987 0 15.175l-81.934 81.939a10.678 10.678 0 01-7.587 3.15z" fill="#14AFB4"></path>
						</svg>
					</a>
					
				</div>
				<?php
				$get_new = $news->show_1news();
				if($get_new){
					while($result_new = $get_new->fetch_assoc()){
				?> 
				<div class="mainBlog__news__recent--bigNew">
					<a href="#"><img src="admin/images/<?php echo $result_new['thumbnail'] ?>" alt=""></a>
					<div class="mainBlog__news__recent--bigNew-layout">
						<a href="#"><?php echo $result_new['title'] ?></a>
						<p><?php echo $result_new['descripsion'] ?></p>
					</div>
				</div>
				<?php 
					}
				} 
				?>
				<?php
				$get_news = $news->show_2news();
				if($get_news){
					while($result_news = $get_news->fetch_assoc()){
				?> 
				<div class="mainBlog__news__recent--smaillNew">
					<a href="#"><img src="admin/images/<?php echo $result_news['thumbnail'] ?>" alt=""></a>
					<div class="mainBlog__news__recent--bigNew-layout">
						<a href="#"><?php echo $result_news['title'] ?></a>
						<p><?php echo $result_news['descripsion'] ?></p>
					</div>
				</div>
				<?php 
					}
				} 
				?>
			</div>
			<div class="mainBlog__news__recent">
				<div class="mainBlog__news__recent--h1">
					<a href="#">Khuyến Mãi
						<svg viewBox="0 0 185.343 185.343">
							<path d="M51.707 185.343a10.692 10.692 0 01-7.593-3.149 10.724 10.724 0 010-15.175l74.352-74.347L44.114 18.32c-4.194-4.194-4.194-10.987 0-15.175 4.194-4.194 10.987-4.194 15.18 0l81.934 81.934c4.194 4.194 4.194 10.987 0 15.175l-81.934 81.939a10.678 10.678 0 01-7.587 3.15z" fill="#14AFB4"></path>
						</svg>
					</a>
					
				</div>
				<?php
				$get_newkhuyenmai = $news->show_1newskhuyenmai();
				if($get_newkhuyenmai){
					while($result_newkhuyenmai = $get_newkhuyenmai->fetch_assoc()){
				?> 
				<div class="mainBlog__news__recent--bigNew">
					<a href="#"><img src="admin/images/<?php echo $result_newkhuyenmai['thumbnail'] ?>" alt=""></a>
					<div class="mainBlog__news__recent--bigNew-layout">
						<a href="#"><?php echo $result_newkhuyenmai['title'] ?></a>
						<p><?php echo $result_newkhuyenmai['descripsion'] ?></p>
					</div>
				</div>
				<?php 
					}
				} 
				?>
				<?php
				$get_newskhuyenmai = $news->show_2newskhuyenmai();
				if($get_newskhuyenmai){
					while($result_newskhuyenmai = $get_newskhuyenmai->fetch_assoc()){
				?> 
				<div class="mainBlog__news__recent--smaillNew">
					<a href="#"><img src="admin/images/<?php echo $result_newskhuyenmai['thumbnail'] ?>" alt=""></a>
					<div class="mainBlog__news__recent--bigNew-layout">
						<a href="#"><?php echo $result_newskhuyenmai['title'] ?></a>
						<p><?php echo $result_newskhuyenmai['descripsion'] ?></p>
					</div>
				</div>
				<?php 
					}
				} 
				?>
			</div>
		</section>
	</main>

	<?php
		include "view/footer.php";
	?>

		<!-- javascript -->
		<script src="ow_/vendors/jquery.min.js"></script>
		
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
		<script src="js/index.js"></script>
		<script src="js/ajax.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
		logged_in_greeting="Chào anh/chị !!! Anh chị muốn đăng kí dịch vụ Viettel nào ạ ?"
		logged_out_greeting="Chào anh/chị !!! Anh chị muốn đăng kí dịch vụ Viettel nào ạ ?">
	</div>
</body>
</html>