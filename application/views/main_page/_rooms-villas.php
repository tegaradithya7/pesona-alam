<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<style>
			.bx-wrapper {
				-moz-box-shadow: 0 0 5px rgba(0,0,0,0)!important;
			     -webkit-box-shadow: 0 0 5px rgba(0,0,0,0)!important; 
			     box-shadow: 0 0 5px rgba(0,0,0,0)!important; 
			     border: 0px solid rgba(0,0,0,0)!important; 
			     background: rgba(0,0,0,0)!important; 
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
				background: #fff!important;
				width: 25px;
				-webkit-transition: all .32s;
				-o-transition: all .32s;
				transition: all .32s;
			}
		</style>
		<title>Pesona Alam</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('main_assets/assets/images/logo.png') ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('main_assets/styles/main.css') ?>" media="all"/>
		<link rel="stylesheet" href="<?php echo base_url('main_assets/assets/fontawesome5.6.3/css/all.css') ?>" type="text/css" media="screen">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('main_assets/assets/slick/slick.css') ?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('main_assets/assets/slick/slick-theme.css') ?>"/>

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
		
	</head>
	<body class="master-body submenu-1">
		<?php include 'nav.php' ?>
		<!-- main -->
		<div class="fullwidth-master section-header slider-init">
			<div class="header" style="background-image: url(<?php echo base_url('main_assets/assets/images/room-double.jpg') ?>);">
				<div class="inner">
					<h1 class="title">Rooms & Villas</h1>
					<p class="subtitle">Best Memories Start Here</p>
				</div>
			</div>
		</div>
		<div class="frame-master section-1">
			<img src="<?php echo base_url('main_assets/assets/images/accent-pine-cone.png') ?>" alt="" class="accent">
			<div class="inner d-flex ai-center fd-col">
				<div class="title-1 ta-center">
					<span class="signature-title">Rooms</span>
					<div class="regular-title">
						Escape the Ordinary<br><span>With A Soul</span>
					</div>
				</div>
				<div class="subtitle-1 ta-center">
					At Pesona alam , we believe the ultimate luxury is connection. The rooms and the experience have been designed to allow our guests to reconnect with nature, with their loved ones and most importantly, with themselves.
				</div>
			</div>
			<div class="slider">
				<div class="slider-wrapper">
					<?php
						$arr = array (
						    '1' => array(
					            'bg' => 'room-superior.jpg',
					            'title' => 'Superior Room',
					            'size' => '26m2',
					            'person' => '2 adults'
					        ),
					        '2' => array(
					            'bg' => 'room-deluxe-standard.jpg',
					            'title' => 'Deluxe Standard',
					            'size' => '26m2',
					            'person' => '2 adults'
					        ),
					        '3' => array(
					            'bg' => 'room-deluxe-mountain-view.jpg',
					            'title' => 'Deluxe Mountain View',
					            'size' => '26m2',
					            'person' => '2 adults'
					        ),
					        '4' => array(
					            'bg' => 'room-deluxe-corner.jpg',
					            'title' => 'Deluxe Corner',
					            'size' => '28m2',
					            'person' => '2 adults'
					        ),
						);
							foreach ($arr as $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/'.$value['bg']) ?>)" onclick="location.href='<?php echo site_url('menu/rooms') ?>'">
								<div class="slide-info">
									<div class="info-title">
										<?php echo $value['title'] ?>
									</div>
									<div class="info-content">
										<span><i class="fas fa-expand-arrows-alt"></i><?php echo $value['size'] ?></span>
										<span><i class="fas fa-users"></i><?php echo $value['person'] ?></span>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="see-more" onclick="location.href='<?php echo site_url('menu/rooms') ?>'">
					<div>See more <span>rooms</span></div>
				</div>
			</div>
		</div>
		<div class="fullwidth-master section-3">
			<img src="<?php echo base_url('main_assets/assets/images/accent-curve-line.png') ?>" alt="" class="accent">
			<div class="inner">
				<div class="title-1">
					<span class="signature-title">Villas</span>
					<div class="regular-title">
						A Design Unified
						<br>Makes You Feel at Home
					</div>
				</div>
				<div class="subtitle-1">
					Inspired by European Architecture and Puncak Atmosphere, Pesona Alam The Villas offers 1 to 3 bedrooms villa with the warmth and comfort of a country house. In addition, each villa is surrounded by beautiful garden, family swimming pool, gazebo and a vast pine forest nearby to accompany you during your stay
				</div>
			</div>
			<div class="slider">
				<div class="see-more" onclick="location.href='<?php echo site_url('menu/villas') ?>'">
					<div>See more <span>villas</span></div>
				</div>
				<div class="slider-wrapper">
					<?php 
						$arr = array (
						    '1' => array(
					            'bg' => 'villa-S1-bedroom.jpg',
					            'title' => 'Villa Superior 1 Bedroom',
					            'size' => '26m2',
					            'person' => '2 adults'
					        ),
					        '2' => array(
					            'bg' => 'villa-S2-bedroom.jpg',
					            'title' => 'Villa Superior 2 Bedroom',
					            'size' => '26m2',
					            'person' => '2 adults'
					        ),
					        '3' => array(
					            'bg' => 'villa-D2-bedroom.jpg',
					            'title' => 'Villa Deluxe 2 Bedroom',
					            'size' => '26m2',
					            'person' => '2 adults'
					        ),
					        '4' => array(
					            'bg' => 'villa-D3-bedroom.jpg',
					            'title' => 'Villa Deluxe 3 Bedroom',
					            'size' => '28m2',
					            'person' => '2 adults'
					        ),
						);
							foreach ($arr as $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/'.$value['bg']) ?>)" onclick="location.href='<?php echo site_url('menu/villas') ?>'">
								
								<div class="info-wrapper">
									<div class="slide-title"><?php echo $value['title'] ?></div>
									<div class="slide-subtitle">
										<!-- <span><i class="fas fa-expand-arrows-alt"></i> 24m<sup>2</sup></span>
										<span><i class="fas fa-users"></i> 2 adults</span> -->
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
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







