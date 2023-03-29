<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<style>
		.bx-wrapper {
			-moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0) !important;
			-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0) !important;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0) !important;
			border: 0px solid rgba(0, 0, 0, 0) !important;
			background: rgba(0, 0, 0, 0) !important;
		}

		.bx-wrapper .bx-pager {
			display: -webkit-flex;
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: flex;
			margin-left: 150px;
		}

		.bx-wrapper .bx-pager.bx-default-pager a.active {
			background: #fff !important;
			width: 25px;
			-webkit-transition: all .32s;
			-o-transition: all .32s;
			transition: all .32s;
		}
	</style>
	<title>Pesona Alam - Activities</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" type="image/x-icon" href="../../../../../pesona-alam/assets/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../../../../pesona-alam/styles/main.css" media="all" />
	<link rel="stylesheet" href="../../../../../pesona-alam/assets/fontawesome5.6.3/css/all.css" type="text/css" media="screen">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="../../../../../pesona-alam/assets/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="../../../../../pesona-alam/assets/slick/slick-theme.css" />

	<!-- css and js for shape-morph -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/shape-morph/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/shape-morph/css/demo4.css" />
		<link rel="stylesheet" type="text/css" href="assets/shape-morph/pater/pater.css" />

		<script src="assets/shape-morph/js/anime.min.js"></script>
		<script src="assets/shape-morph/js/demo.js"></script>
		<script src="assets/shape-morph/js/demo4.js"></script> -->
	<!-- css and js for shape-morph - - - END -->

	<script src="../../../../../pesona-alam/js/jquery-3.3.1.js"></script>
	<script src="../../../../../pesona-alam/js/main-master.js"></script>
	<script src="../../../../../pesona-alam/assets/EaseScroll/jquery.easeScroll.js"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
	<script type="text/javascript" src="../../../../../pesona-alam/assets/slick/slick.min.js"></script>

</head>

<body class="master-body submenu-1 news">
	<nav class="nav">
		<div class="row">
			<div class="col-4 d-flex ai-center">
				<div class="nav-menu fullmenu-toggle">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
			</div>
			<div class="col-4 d-flex jc-center">
				<img src="../../../../../pesona-alam/assets/images/logo.png" alt="" class="nav-logo" onclick="location.href='index.php'">
			</div>
			<div class="col-4 d-flex ai-center">
				<div class="nav-booking ml-auto">
					<span>book now</span>
				</div>
			</div>
		</div>
	</nav>

	<div class="fullmenu">
		<img src="../../../../../pesona-alam/assets/images/logo.png" alt="" class="fullmenu-logo">
		<div class="logo-group">
			<img src="../../../../../pesona-alam/assets/images/logo-all-sedayu.png" alt="" class="">
			<img src="../../../../../pesona-alam/assets/images/logo-tauzia.png" alt="" class="">
		</div>
		<div class="inner">
			<div class="fullmenu-item" onclick="location.href='index.php'">
				<span>home</span>
			</div>
			<div class="fullmenu-item" onclick="location.href='offers.php'">
				<span>offers</span>
			</div>
			<div class="fullmenu-item" onclick="location.href='rooms-villas.php'">
				<span>rooms & villas</span>
			</div>
			<div class="fullmenu-item" onclick="location.href='meeting-event.php'">
				<span>meeting & events</span>
				<!-- <div class="submenu">
						<div class="submenu-item">meeting</div>
						<div class="submenu-item">event</div>
					</div> -->
			</div>
			<div class="fullmenu-item" onclick="location.href='facilities.php'">
				<span>facilities</span>
			</div>
			<div class="fullmenu-item long-title" onclick="location.href='activities.php'">
				<span>Activities</span>
			</div>
			<!-- <div class="fullmenu-item">
					<span>gallery</span>
				</div> -->
			<div class="fullmenu-item" onclick="location.href='news.php'">
				<span>news</span>
			</div>
			<div class="fullmenu-item" onclick="location.href='contact.php'">
				<span>contact</span>
			</div>
		</div>
	</div>

	<div class="book-now">
		<div class="toggle-button">
			<span>book a room</span>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-3">
					<div class="form-control">
						<label for="">arrival</label>
						<input type="date">
					</div>
				</div>
				<div class="col-3">
					<div class="form-control">
						<label for="">departure</label>
						<input type="date">
					</div>
				</div>
				<div class="col-3">
					<div class="form-control">
						<label for="">promo code</label>
						<input type="text" placeholder="EX: SUNDAY01">
					</div>
				</div>
				<div class="col-3">
					<div class="button-wrapper">
						<input type="submit" value="book now">
					</div>
					<p>Amend/Cancel Reservation</p>
				</div>
			</div>
		</div>
	</div>
	<!-- main -->
	<div class="fullwidth-master section-header slider-init">
		<div class="header" style="background-image: url(../../../assets/lampiran/temp/<?php echo $img[1] ?>);">
			<div class="inner">
				<h1 class="title"><?php echo $menu; ?></h1>
				<p class="subtitle">We keep everything updated</p>
			</div>
		</div>
	</div>
	<div class="frame-master section-1">
		<img src="../../../../../pesona-alam/assets/images/accent-pine-cone.png" alt="" class="accent">
		<div class="inner d-flex ai-center fd-col">
			<span class="date">
				<?php echo $date; ?>
			</span>
			<div class="title-1 ta-center">
				<span class="signature-title">Newsletter</span>
				<div class="regular-title">
					<?php echo $title ?>
				</div>
			</div>
			<div class="subtitle-1 ta-center">
				<?php echo $desc ?>
			</div>
		</div>
		<div class="slider">
			<div class="slider-wrapper">
				<?php
				foreach ($img as $value) {
				?>
					<div class="slide">
						<div class="bg-img" style="background-image: url(../../../assets/lampiran/temp/<?php echo $value ?>);">
							<!-- <div class="slide-info ai-start">
									<div class="info-title">
										<?php echo $value['title'] ?>
									</div>
									<div class="info-content">
										<?php echo $value['subtitle'] ?>
									</div>
								</div> -->
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
	<div class="footer">
		<img src="../../../../../pesona-alam/assets/images/footer-accent-1.png" alt="" class="footer-accent-1">
		<img src="../../../../../pesona-alam/assets/images/footer-accent-2.png" alt="" class="footer-accent-2">
		<div class="inner">
			<div class="row">
				<div class="col-3">
					<img src="../../../../../pesona-alam/assets/images/logo-colored.png" alt="" class="footer-logo">
				</div>
				<div class="col-9">
					<div class="row">
						<div class="col-4">
							<div class="footer-info">
								<div class="info-title">
									Links
								</div>
								<div class="info-content">
									<div>Privacy Policy</div>
									<div>Terms & Conditions</div>
									<div>FAQ</div>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="footer-info">
								<div class="info-title">
									Pesona Alam
								</div>
								<div class="info-content">
									Jalan Taman Safari No. 101 <br>
									Kp. Baru Tegal. <br>
									Desa Cibeureum <br>
									Cisarua, Bogor, Indonesia <br>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="footer-info">
								<div class="info-title">
									Get in Touch
								</div>
								<div class="info-content">
									<div>0251 821 7111</div>
									<div>info-pesonaalam@tauzia.com</div>
									<div>res1-pesonaalam@tauzia.com</div>
									<div class="social-media">
										<i class="fab fa-facebook"></i>
										<i class="fab fa-instagram"></i>
										<i class="fab fa-tripadvisor"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- main - - - END -->
	<script>
		$(document).ready(function() {

			function onReady(callback) {
				var intervalId = window.setInterval(function() {
					if (document.getElementsByTagName('body')[0] !== undefined) {
						window.clearInterval(intervalId);
						callback.call(this);
					}
				}, 3000);
			}

			function setVisible(selector, visible) {
				document.querySelector(selector).style.display = visible ? 'block' : 'none';
			}

			onReady(function() {
				setVisible('.main', true);
				$('#loading').addClass('hide');
			});

			// submenu .section-2 .inner-with-slide
			$('.slide-wrapper').slick({
				infinite: true,
				//    autoplay: true,
				// autoplaySpeed: 4000,
				slidesToShow: 1,
				dots: false,
				nextArrow: '<div class="slide-next"><i class="fa fa-chevron-right"></i></div>',
				prevArrow: '<div class="slide-prev"><i class="fa fa-chevron-left"></i></div>',
			});

			// accordion
			$('.accordion-group').on('click', '.accordion .accordion-header', function(e) {
				e.preventDefault();
				console.log('clicked');
				$(this).next('.collapse').not(':animated').slideToggle();
				$(this).children('.fas').toggleClass('expanded');

				if ($(this).children('.fas').hasClass('expanded')) {
					$(this).children('.fas').removeClass('fa-chevron-down').addClass('fa-chevron-up');
				} else {
					$(this).children('.fas').removeClass('fa-chevron-up').addClass('fa-chevron-down');
				}
			});

		})
	</script>
</body>

</html>
<form action="<?php echo base_url('master/spa/' . $url . '/' . $id) ?>" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="title" value="<?php echo $title ?>">
	<input type="hidden" name="desc" value="<?php echo $desc ?>">
	<input type="hidden" name="date" value="<?php echo $date ?>">
	<input type="hidden" name="type" value="<?php echo $type ?>">
	<?php foreach ($img as $key => $value) { ?>
		<input type="hidden" name="<?php echo $file ?>[]" value="<?php echo $value ?>">
	<?php } ?>

	<button class="btn is-primary" style="margin-top: 15px;margin-bottom: 15px;margin-left: 500px">Save</button>
	<button class="btn is-primary" style="margin-top: 15px;margin-bottom: 15px;margin-left: -10px">Cancel</button>
</form>