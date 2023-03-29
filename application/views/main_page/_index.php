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
	<body class="master-body">
		<?php include 'nav.php' ?>
		<!-- main -->
		<div class="fullwidth-master section-header slider-init">
			<div class="header">
				<div class="inner">
					<h1 class="title">THE HIDDEN GAME IN PUNCAK</h1>
					<p class="subtitle">Settled on top of a hill in Cisarua, Pesona Alam is a Resort dedicated to showcase the beauty of nature.</p>
				</div>
			</div>
			<div class="header" style="background-image: url(<?php echo base_url('main_assets/assets/images/header-bg-2.jpg') ?>);"></div>
			<div class="header" style="background-image: url(<?php echo base_url('main_assets/assets/images/header-bg-3.jpg') ?>);"></div>
		</div>
		<!-- <div class="frame-master section-header slider-init">
		</div> -->
		<div class="frame-master section-1">
			<img src="<?php echo base_url('main_assets/assets/images/accent-pine-cone.png') ?>" alt="" class="accent">
			<div class="inner">
				<div class="title-1">
					<span class="signature-title">Facilities</span>
					<div class="regular-title">
						Be captivated by the <br>
						Services and Facilities <br>
						<span>we offer</span>
					</div>
				</div>
				<div class="subtitle-1">
					We proud to serve a unique, memorable experience and healthy products that made from freshest ingredients crafted by our talented culinary brigade and mixologist.
				</div>
			</div>
			<div class="slider">
				<div class="slider-wrapper">
					<?php
						$arr = array (
						    '1' => array(
					            'bg' => 'slide-bg-1.jpg',
					            'title' => 'The outdoor <span>tent</span>',
					        ),
					        '2' => array(
					            'bg' => 'slide-bg-2.jpg',
					            'title' => 'Berembun <span>Spa</span>',
					        ),
					        '3' => array(
					            'bg' => 'slide-bg-3.jpg',
					            'title' => 'Outbound <span>area</span>',
					        ),
					        '4' => array(
					            'bg' => 'slide-bg-1.jpg',
					            'title' => 'The outdoor <span>tent</span>',
					        ),
					        '5' => array(
					            'bg' => 'slide-bg-2.jpg',
					            'title' => 'Berembun <span>Spa</span>',
					        ),
					        '6' => array(
					            'bg' => 'slide-bg-3.jpg',
					            'title' => 'Outbound <span>area</span>',
					        ),
						);
							foreach ($arr as $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/'.$value['bg']) ?>)"></div>
							<div class="slide-title"><?php echo $value['title'] ?></div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="frame-master section-2">
			<img src="<?php echo base_url('main_assets/assets/images/accent-pine-cone.png') ?>" alt="" class="accent">
			<img src="<?php echo base_url('main_assets/assets/images/accent-pine-cone.png') ?>" alt="" class="accent accent-2">
			<div class="inner d-flex ai-center fd-col">
				<div class="title-1 ta-center">
					<span class="signature-title">Rooms</span>
					<div class="regular-title">
						Escape the Ordinary<br><span style="display: block;">With A Soul</span>
					</div>
				</div>
				<div class="subtitle-1 ta-center">
					138 hotel rooms with natural influences featuring minimalist contemporary design to allow our guests reconnect with nature.
				</div>
			</div>
			<div class="slider">
				<div class="slider-wrapper">
					<?php
						$arr = array (
						    '1' => array(
					            'bg' => 'room-superior.jpg',
					            'title' => 'Superior Room',
					            'subtitle' => 'All Superior Rooms offer the warmth and comfort of a country house hotel with sleek and modern interiors.'
					        ),
					        '2' => array(
					            'bg' => 'room-deluxe-standard.jpg',
					            'title' => 'Deluxe Standard',
					            'subtitle' => 'Our Deluxe room offers king-size bed or twin bed based on availability, vast bathroom with walk-in shower with breathtaking views of our own garden or pine forest.'
					        ),
					        '3' => array(
					            'bg' => 'room-deluxe-mountain-view.jpg',
					            'title' => 'Deluxe Mountain View',
					            'subtitle' => 'Deluxe Mountain View room offers king-size bed or twin bed room based on availability, vast bathroom with walk-in shower and wider balcony with breathtaking views of Puncak.',
					        ),
					        '4' => array(
					            'bg' => 'room-deluxe-corner.jpg',
					            'title' => 'Deluxe Corner',
					            'subtitle' => 'Our Deluxe Corner offers king-size bed, vast bathroom with walk-in shower and wider balcony with breathtaking views of Puncak and its surroundings.',
					        ),
						);
						foreach ($arr as $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/'.$value['bg']) ?>)">
								<div class="slide-title"><?php echo $value['title'] ?></div>
								<div class="slide-subtitle"><?php echo $value['subtitle'] ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="fullwidth-master section-3">
			<img src="<?php echo base_url('main_assets/assets/images/accent-curve-line.png')?>" alt="" class="accent">
			<div class="inner">
				<div class="title-1">
					<span class="signature-title">Villas</span>
					<div class="regular-title">
						A Design Unified
						<br>Makes You Feel at Home
					</div>
				</div>
				<div class="subtitle-1">
					Inspired by European Architecture and Puncak Atmosphere, Pesona Alam The Villas offers 1 to 3 bedrooms villa with the warmth and comfort of a country house. In addition, each villa is surrounded by beautiful garden, family swimming pool, gazebo and a vast pine forest nearby to accompany you during your stay.
				</div>
			</div>
			<div class="slider">
				<div class="slider-wrapper">
					<?php
						$arr = array (
						    '1' => array(
					            'bg' => 'villa-S1-bedroom.jpg',
					            'title' => 'Villa Superior 1 Bedroom',
					            'subtitle' => 'Villa Superior 1 Bedroom offers the warmth and comfort of a country house.'
					        ),
					        '2' => array(
					            'bg' => 'villa-S2-bedroom.jpg',
					            'title' => 'Villa Superior 2 Bedroom',
					            'subtitle' => 'Villa Superior 2 Bedrooms offers the warmth and comfort of 1 King Size Bed Room and 1 Single Bed Room.'
					        ),
					        '3' => array(
					            'bg' => 'villa-D2-bedroom.jpg',
					            'title' => 'Villa Deluxe 2 Bedroom',
					            'subtitle' => 'Villa Deluxe 2 Bedrooms offers the warmth and comfort of 1 King Size Bed Room and 1 Twin Bed Room.'
					        ),
					        '4' => array(
					            'bg' => 'villa-D3-bedroom.jpg',
					            'title' => 'Villa Deluxe 3 Bedroom',
					            'subtitle' => 'Villa Deluxe 3 Bedrooms offers 1 King Size Bed room, 1 Queen Bed Room and 1 Twin Bed room that is the perfect accommodation.'
					        ),
						);
						foreach ($arr as $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/'.$value['bg']) ?>)"></div>
							<div class="info-wrapper">
								<div class="slide-title"><?php echo $value['title'] ?></div>
								<div class="slide-subtitle"><?php echo $value['subtitle'] ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="frame-master section-4">
			<!-- <img src="assets/images/accent-pine-cone.png" alt="" class="accent"> -->
			<img src="<?php echo base_url('main_assets/assets/images/accent-branch.png') ?>" alt="" class="accent accent-2">
			<div class="inner d-flex ai-center fd-col">
				<div class="title-1 ta-center">
					<span class="signature-title">Activity</span>
					<div class="regular-title">
						Explore the Essence of<br>
						<span>Happiness</span>
					</div>
				</div>
				<div class="subtitle-1 ta-center">
					Take a journey to blend well with nature and keep your self active
				</div>
			</div>
			<div class="slider">
				<div class="slider-wrapper">
					<?php
						$arr = array (
						    '1' => array(
					            'bg' => 'slide-bg-5.jpg',
					            'title' => 'The lake house',
					        ),
					        '2' => array(
					            'bg' => 'slide-bg-6.jpg',
					            'title' => 'Petting Zoo',
					        ),
					        '3' => array(
					            'bg' => 'slide-bg-7.jpg',
					            'title' => 'pine forest',
					        ),
					        '4' => array(
					            'bg' => 'slide-bg-8.jpg',
					            'title' => 'club huis',
					        ),
					        '5' => array(
					            'bg' => 'slide-bg-5.jpg',
					            'title' => 'The lake house',
					        ),
					        '6' => array(
					            'bg' => 'slide-bg-4.jpg',
					            'title' => 'horse riding',
					        ),
						);
						// $arr = array('slide-bg-5', 'slide-bg-6', 'slide-bg-7', 'slide-bg-8', 'slide-bg-4', 'slide-bg-5', 'slide-bg-6', 'slide-bg-7', 'slide-bg-8', 'slide-bg-4',);
						foreach ($arr as $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/'.$value['bg']) ?>)">
								<div class="slide-title"><?php echo $value['title'] ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="frame-master section-5">
			<img src="<?php echo base_url('main_assets/assets/images/accent-branch-fliped.png') ?>" alt="" class="accent accent-2">
			<div class="inner">
				<div class="title-1">
					<span class="signature-title">Offers</span>
					<div class="regular-title">
						view exclusive deals <br>
						<span>Especially For You</span>
					</div>
				</div>
				<div class="subtitle-1">
					Our special offers ensure a memorable holiday with unique and pampering packages only for you.
				</div>
			</div>
			<div class="slider">
				<div class="slider-wrapper">
					<?php
						foreach ($latest_info as $key => $value) {
						$img = explode(',', $value['image']);
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo base_url('assets/lampiran/'.$value['path'].'/'.$img[0]) ?>)">
								<div class="info-wrapper">
									<div class="slide-title <?php echo $value['type'] ?>"><?php echo $value['type'] ?></div>
									<div class="slide-subtitle"><?php echo $value['title'] ?></div>
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

			})
		</script>
	</body>
</html>







