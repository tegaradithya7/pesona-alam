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
	<title>Pesona Alam</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('main_assets/assets/images/logo.png') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('main_assets/styles/main.css') ?>" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('main_assets/assets/fontawesome5.6.3/css/all.css') ?>" type="text/css" media="screen">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('main_assets/assets/slick/slick.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('main_assets/assets/slick/slick-theme.css') ?>" />

	<!-- css and js for shape-morph -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/shape-morph/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/shape-morph/css/demo4.css" />
		<link rel="stylesheet" type="text/css" href="assets/shape-morph/pater/pater.css" />

		<script src="assets/shape-morph/js/anime.min.js"></script>
		<script src="assets/shape-morph/js/demo.js"></script>
		<script src="assets/shape-morph/js/demo4.js"></script> -->
	<!-- css and js for shape-morph - - - END -->

	<script src="<?php echo base_url('main_assets/js/jquery-3.3.1.js') ?>"></script>
	<script src="<?php echo base_url('main_assets/js/main-master.js') ?>"></script>
	<script src="<?php echo base_url('main_assets/assets/EaseScroll/jquery.easeScroll.js') ?>"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('main_assets/assets/slick/slick.min.js') ?>"></script>
	<!-- Global site tag (gtag.js) - Google Ads: 966540489 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-966540489"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-966540489');
	</script>

</head>

<body class="master-body submenu-1">
	<?php include 'nav.php' ?>
	<!-- main -->
	<div class="fullwidth-master section-header slider-init">
		<div class="header" style="background-image: url(<?php echo base_url('main_assets/assets/images/villa-D2-bedroom.jpg') ?>);">
			<div class="inner">
				<h1 class="title">VILLAS</h1>
				<p class="subtitle">The Soul of the place with irresistible style</p>
			</div>
		</div>
	</div>
	<div class="frame-master section-2">
		<img src="<?php echo base_url('main_assets/assets/images/accent-pine-cone.png') ?>" alt="" class="accent">
		<img src="<?php echo base_url('main_assets/assets/images/accent-pine-cone.png') ?>" alt="" class="accent accent-2">
		<div class="inner d-flex ai-center fd-col">
			<div class="title-1 ta-center">
				<span class="signature-title">Villas</span>
				<div class="regular-title">
					A Design Unified <br>
					<span>For Our Villas</span>
				</div>
			</div>
			<div class="subtitle-1 ta-center">
				Inspired by European Architecture and Puncak Atmosphere, Pesona Alam The Villas offers 1 to 3 bedrooms villa with the warmth and comfort of a country house. In addition, each villa is surrounded by beautiful garden, family swimming pool, gazebo and a vast pine forest nearby to accompany you during your stay
			</div>
		</div>
		<?php
		foreach ($villas as $value) {
		?>
			<div class="inner-with-slide">
				<div class="row">
					<div class="col-6">
						<div class="info-wrapper">
							<div class="title"><?= $value['name'] ?></div>
							<div class="subtitle">
								<?= $value['desc'] ?>
							</div>
							<div class="accordion-wrapper">
								<div class="accordion-title"></div>
								<div class="accordion-group">
									<div class="accordion">
										<div class="accordion-header all-caps" id="heading1">FACILITIES<i class="pull-right fas fa-chevron-down"></i></div>
										<div class="collapse" id="collapse1">
											<div class="accordion-body">
												<?= $value['facilities'] ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="slide-wrapper">
							<div class="slide" style="background-image: url(<?php echo base_url('assets/lampiran/rooms_villas_file/' . $value['rooms_villas_file']) ?>)"></div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<?php include 'footer.php' ?>
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