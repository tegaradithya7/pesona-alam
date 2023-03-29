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

		.fixed-overlay {
			position: fixed;
			width: calc(100vw - 60px);
			height: calc(100vh -50px);
			z-index: 9999;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			border: 25px solid #fff;
		}

		.overlay-button {
			position: absolute;
			bottom: 20px;
			text-align: center;
			font-size: 15px;
			padding: 25px 30px;
			background: #fff;
			color: #78725e;
			width: 500px;
			left: calc((100vw - 560px) / 2);
			box-shadow: 0px 5px 15px rgba(55, 55, 55, 0.2);
			border: 1px solid #7B725E;
		}

		ul {
			list-style-type: disc !important;
			list-style-position: inside !important;
		}

		ol {
			list-style-type: decimal !important;
			list-style-position: inside !important;
		}

		ul ul,
		ol ul {
			list-style-type: circle !important;
			list-style-position: inside !important;
			margin-left: 15px !important;
		}

		ol ol,
		ul ol {
			list-style-type: lower-latin !important;
			list-style-position: inside !important;
			margin-left: 15px !important;
		}

		strong {
			font-weight: bold !important;
			font-style: bold !important;
		}

		i {
			font-style: italic !important;
		}
	</style>
	<title>Pesona Alam - Activities</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('main_assets/assets/images/logo.png') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('main_assets/styles/main.css') ?>" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('main_assets/assets/fontawesome5.6.3/css/all.css') ?>" type="text/css" media="screen">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('main_assets/assets/slick/slick.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('main_assets/assets/slick/slick-theme.css') ?>" />
	<script src="<?php echo base_url('main_assets/js/jquery-3.3.1.js') ?>"></script>
	<script src="<?php echo base_url('main_assets/js/main-master.js') ?>"></script>
	<script src="<?php echo base_url('main_assets/assets/EaseScroll/jquery.easeScroll.js') ?>"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('main_assets/assets/slick/slick.min.js') ?>"></script>
</head>

<body class="master-body submenu-1 news" style="border: 25px solid #fff">
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
				<img src="<?php echo base_url('main_assets/assets/images/logo.png') ?>" alt="" class="nav-logo" onclick="location.href='index.php'">
			</div>
			<div class="col-4 d-flex ai-center">
				<div class="nav-booking ml-auto">
					<span>book now</span>
				</div>
			</div>
		</div>
	</nav>

	<div class="fullmenu">
		<img src="<?php echo base_url('main_assets/assets/images/logo.png') ?>" alt="" class="fullmenu-logo">
		<div class="logo-group">
			<img src="<?php echo base_url('main_assets/assets/images/logo-all-sedayu.png') ?>" alt="" class="">
			<img src="<?php echo base_url('main_assets/assets/images/logo-tauzia.png') ?>" alt="" class="">
		</div>
		<div class="inner">
			<div class="fullmenu-item" onclick="location.href='index.php'">
				<span>home</span>
			</div>
			<div class="fullmenu-item" onclick="location.href='news.php'">
				<span>news</span>
			</div>
			<div class="fullmenu-item" onclick="location.href='facilities.php'">
				<span>facilities</span>
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
			<div class="fullmenu-item long-title" onclick="location.href='activities.php'">
				<span>Activities</span>
			</div>
			<div class="fullmenu-item" onclick="location.href='offers.php'">
				<span>offers</span>
			</div>
			<!-- <div class="fullmenu-item">
					<span>gallery</span>
				</div> -->
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
		<?php if ($img[1] == '') { ?>
			<div class="header" style="background-image: url(<?php echo base_url('assets/images/header-bg.jpg') ?>);">
			<?php } else { ?>
				<div class="header" style="background-image: url(<?php echo base_url('assets/lampiran/' . $path . '/' . $img[1]) ?>);">
				<?php } ?>
				<div class="inner">
					<h1 class="title"><?php echo $menu; ?></h1>
					<p class="subtitle">We keep everything updated</p>
				</div>
				</div>
			</div>
			<div class="frame-master section-1">
				<img src="<?php echo base_url('main_assets/assets/images/accent-pine-cone.png') ?>" alt="" class="accent">
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
								<div class="bg-img" style="background-image: url('<?php echo base_url('assets/lampiran/' . $path . '/' . $value) ?>')">
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
				<img src="<?php echo base_url('main_assets/assets/images/footer-accent-1.png') ?>" alt="" class="footer-accent-1">
				<img src="<?php echo base_url('main_assets/assets/images/footer-accent-2.png') ?>" alt="" class="footer-accent-2">
				<div class="inner">
					<div class="row">
						<div class="col-3">
							<img src="<?php echo base_url('main_assets/assets/images/logo-colored.png') ?>" alt="" class="footer-logo">
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
<div class="fixed-overlay">
	<div class="overlay-button">
		<b>This is preview page</b>
		<br><br>Click save for submit, or cancel for back to editing page.<br><br>
		<form action="<?php echo base_url($url . '/' . $id) ?>" method="POST" enctype="multipart/form-data">
			<div style="visibility: hidden;opacity: 0">
				<input type="hidden" name="title" value="<?php echo $title ?>">
				<input type="hidden" name="desc" value="<?php echo $desc ?>">
				<input type="hidden" name="date" value="<?php echo $date ?>">
				<input type="hidden" name="type" value="<?php echo $type ?>">
				<?php foreach ($img as $key => $value) { ?>
					<input type="hidden" name="<?php echo $file ?>[]" value="<?php echo $value ?>">
				<?php } ?>
			</div>
			<button class="btn is-primary" style="">Save</button>
			<a class="btn is-primary btn-cancel" style="">Cancel</a>
		</form>
	</div>
</div>
<script>
	$(function() {
		$('.btn-cancel').on('click', function() {
			// alert('asdasdas');
			window.location.href = '<?php echo site_url($url_back) ?>';
		});
	})
</script>

</html>