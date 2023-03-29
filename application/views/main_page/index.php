<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<style>
	    @font-face{font-family:Marcellus-Regular;src:url(https://thebotanicapesonaalam.com/assets/fonts/Marcellus-Regular.ttf) format("opentype")}:
	    
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
		
		
		.website-option-overlay {
			position: fixed;
			max-width: 100%;
			width: calc(100% - 5rem*2);
			height: calc(100vh - 5rem*2);
			top: 0;
			left: 0;
			background-color: rgba(0,0,0,.8);
			z-index: 99;
			transition: all .32s;
		}
		.website-option-overlay.unactive {
			visibility: hidden;
			opacity: 0;
		}
		.website-option-overlay > .row {
			height: 100%;
		}
		.website-option-overlay .row,
		.website-option-overlay .d-flex {
			display: flex;
			flex-wrap: wrap;
			position: relative;
			z-index: 1;
		}
		.website-option-overlay .ai-end {
			align-items: flex-end;
		}
		.website-option-overlay .col {
			padding-right: 12px;
			padding-left: 12px;
			flex: 1;
			position: relative;
		}
		.website-option-overlay .col-6 {
			max-width: 50%;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
		}
		.website-option-overlay .col-6:after {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0, .25);
			-webkit-backdrop-filter: blur(5px);
			backdrop-filter: blur(5px);
		} 
		.website-option-overlay.p-20 {
			padding: 5rem;
		}
		.website-option-overlay .p-10 {
			padding: 2.5rem;
		}
		.website-option-overlay .pb-20 {
			padding-bottom: 5rem;
		}
		.website-option-overlay .mt-20 {
			margin-top: 5rem;
		}
		.website-option-overlay .mt-4 {
			margin-top: 1rem;
		}
		.website-option-overlay .mt-14 {
			margin-top: 3.5em;
		}
		.website-option-overlay .maw-75 {
			max-width: 75%;
		}
		.website-option-overlay .logo {
			height: 113.4px;
		}
		.website-option-overlay h3 {
			font-size: 2.25rem;
			line-height: 2.5rem;
			letter-spacing: 2px;
		}
		.website-option-overlay p {
			font-family: "Brandon_reg";
			font-size: 12px;
			line-height: 2.7;
    	letter-spacing: 4px;
		}
		.website-option-overlay .btn-overlay {
			padding: 0.75rem 1.25rem;
			border: 1px solid #fff;
			background: rgba(255,255,255, .5);
			-webkit-backdrop-filter: blur(15px);
			backdrop-filter: blur(15px);
			cursor: pointer;
		}
		.website-option-overlay .txtf-u {
			text-transform: uppercase;
		}
		.website-option-overlay .tc-dark-contrast {
			color: #fff;
		}
		.website-option-overlay .ls-5 {
			letter-spacing: 5px;
		}
		@media only screen and (min-width: 320px) and (max-width: 480px) {
			.website-option-overlay {
				width: calc(100% - 0px*2);
				height: calc(100vh - 0px*2);
			}
			.website-option-overlay.p-20 {
				padding: 0px;
			}
			.website-option-overlay > .row {
				flex-direction: column-reverse;
			}
			.website-option-overlay .col-6 {
				max-width: 100%;
				height: calc(50vh - 16px);
			}
			.website-option-overlay .p-10 {
				padding: 3px;
			}
			.website-option-overlay .pb-20 {
				padding-bottom: 2.5rem;
			}
			.website-option-overlay .mt-20 {
				margin-top: 2.5rem;
			}
			.website-option-overlay .mt-4 {
				margin-top: .5rem;
			}
			.website-option-overlay .mt-14 {
				margin-top: 1.75rem;
			}
			.website-option-overlay .logo {
				height: 64.45px;
			}
			.website-option-overlay h3 {
				font-size: 1.85rem;
				line-height: 2.15rem;
			}
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
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-966540489');
    </script>

</head>

<body class="master-body">
	<?php include 'nav.php' ?>
	
	<div class="website-option-overlay p-20">
		<div class="row">
			<div class="col col-6 d-flex ai-end" style="background-image: url('https://pesonaalamresort.com/main_assets/assets/images/header-bg-3.jpg')">
				<div class="d-flex fd-col p-10 pb-20">
					<span><img src="https://pesonaalamresort.com/main_assets/assets/images/logo.png" alt="" class="logo"></span>

					<h3 class="mt-20 tc-dark-contrast" style="font-family: 'AngleciaProDisplay-Regular'">Pesona Alam Resort</h3>
					<p class="txtf-u ls-5 tc-dark-contrast mt-4">
						resort dedicated to provide the beauty of nature to our customers
					</p>

					<span class="mt-14">
						<span class="btn-overlay close-overlay">
							<span class="txtf-u tc-dark-contrast ls-5" style="font-family: 'AngleciaProDisplay-Regular'">explore</span>
						</span>
					</span>
				</div>
			</div>
			<div class="col col-6 d-flex ai-end" style="background-image: url('https://thebotanicapesonaalam.com/assets/images/front-facade.jpg')">
				<div class="d-flex fd-col p-10 pb-20">
					<span><img src="https://thebotanicapesonaalam.com/assets/images/logo/botanica-white.png" alt="" class="logo"></span>

					<h3 class="mt-20 tc-dark-contrast" style="font-family: 'Marcellus-Regular'">The Botanica</h3>
					<p class="txtf-u ls-5 tc-dark-contrast mt-4">
					ultimate luxurious comfort in the present of nature 
					</p>

					<span class="mt-14">
						<span class="btn-overlay" onclick="location.href='https://thebotanicapesonaalam.com/'">
							<span class="txtf-u tc-dark-contrast ls-5" style="font-family: 'AngleciaProDisplay-Regular'">explore</span>
						</span>
					</span>
				</div>
			</div>
		</div>
		<script>
			$('.close-overlay').click(function() {
				$('.website-option-overlay').addClass('unactive');
			})
		</script>
	</div>
	
	<!-- main -->
	<div class="fullwidth-master section-header slider-init">
		<div class="header">
			<div class="inner">
				<h1 class="title">THE HIDDEN GEM IN PUNCAK</h1>
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
				$arr = array(
				    '0' => array(
						'bg' => 'facilities-ballroom.jpg',
						'title' => '<span>Ballroom</span>',
					),
					'1' => array(
						'bg' => 'slide-bg-2.jpg',
						'title' => '<span>Berembun </span> Spa',
					),
					'2' => array(
						'bg' => 'facilities-billiard.jpg',
						'title' => '<span>Billiard</span>',
					),
					'3' => array(
						'bg' => 'facilities-buggy-tour.jpg',
						'title' => '<span>Buggy </span> Tour',
					),
					'4' => array(
						'bg' => 'facilities-bycycle.jpg',
						'title' => '<span>Bycycle & Cycling </span> Track',
					),
					'5' => array(
						'bg' => 'facilities-gym.jpg',
						'title' => '<span>Gym </span> Area',
					),
					'6' => array(
						'bg' => 'facilities-pool.jpg',
						'title' => '<span>Infinity </span> Pool',
					),
					'7' => array(
						'bg' => 'facilities-table-tennis.jpg',
						'title' => '<span>Table </span> Tennis',
					),
					'8' => array(
						'bg' => 'facilities-Wedding-Chapel.jpg',
						'title' => '<span>Wedding </span> Chapel',
					),
				// 	'1' => array(
				// 		'bg' => 'slide-bg-1.jpg',
				// 		'title' => 'The outdoor <span>tent</span>',
				// 	),
				// 	'2' => array(
				// 		'bg' => 'slide-bg-2.jpg',
				// 		'title' => 'Berembun <span>Spa</span>',
				// 	),
				// 	'3' => array(
				// 		'bg' => 'slide-bg-3.jpg',
				// 		'title' => 'Outbound <span>area</span>',
				// 	),
				// 	'4' => array(
				// 		'bg' => 'slide-bg-1.jpg',
				// 		'title' => 'The outdoor <span>tent</span>',
				// 	),
				// 	'5' => array(
				// 		'bg' => 'slide-bg-2.jpg',
				// 		'title' => 'Berembun <span>Spa</span>',
				// 	),
				// 	'6' => array(
				// 		'bg' => 'slide-bg-3.jpg',
				// 		'title' => 'Outbound <span>area</span>',
				// 	),
				);
				foreach ($arr as $value) {
				?>
					<div class="slide">
						<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/' . $value['bg']) ?>)"></div>
						<div class="slide-title"><span><?php echo $value['title'] ?></span></div>
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
					Escape the Ordinary
				</div>
			</div>
			<div class="subtitle-1 ta-center">
				138 hotel rooms with natural influences featuring minimalist contemporary design to allow our guests reconnect with nature.
			</div>
		</div>
		<div class="slider">
			<div class="slider-wrapper">
				<?php
				$arr = array(
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
					<div class="slide" onclick="location.href='<?php echo site_url('menu/rooms') ?>'">
						<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/' . $value['bg']) ?>)">
							<div class="slide-title"><?php echo $value['title'] ?></div>
							<div class="slide-subtitle"><?php echo $value['subtitle'] ?></div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="fullwidth-master section-3">
		<img src="<?php echo base_url('main_assets/assets/images/accent-curve-line.png') ?>" alt="" class="accent">
		<div class="inner">
			<div class="title-1">
				<span class="signature-title">Villas</span>
				<div class="regular-title">
					Makes You Feel at Home
				</div>
			</div>
			<div class="subtitle-1">
				Inspired by European Architecture and Puncak Atmosphere, Pesona Alam The Villas offers 1 to 3 bedrooms villa with the warmth and comfort of a country house. In addition, each villa is surrounded by beautiful garden, family swimming pool, gazebo and a vast pine forest nearby to accompany you during your stay.
			</div>
		</div>
		<div class="slider">
			<div class="slider-wrapper">
				<?php
				$arr = array(
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
					<div class="slide" onclick="location.href='<?php echo site_url('menu/villas') ?>'">
						<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/' . $value['bg']) ?>)"></div>
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
				$arr = array(
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
						<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/' . $value['bg']) ?>)">
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
					Especially For You
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
					<div class="slide detail-slide" data-id="<?php echo $value['id'] ?>" data-to="<?php echo $value['to'] ?>">
						<div class="bg-img" style="background-image: url(<?php echo base_url('assets/lampiran/' . $value['path'] . '/' . $img[0]) ?>)">
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

			$('.detail-slide').click(function() {
				var id = $(this).data('id');
				var to = $(this).data('to');
				// alert(id);
				var url = "<?php echo site_url('menu/detail') ?>/" + id + "/" + to;
				window.location.href = url;
			})

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