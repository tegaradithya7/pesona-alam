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
		<!-- Global site tag (gtag.js) - Google Ads: 966540489 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-966540489"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'AW-966540489');
        </script>
		
	</head>
	<body class="master-body submenu-1 offers">
		<?php include 'nav.php' ?>
		<!-- main -->
		<div class="fullwidth-master section-header slider-init">
			<div class="header" style="background-image: url(<?php echo base_url('main_assets/assets/images/offers-bg-1.jpg') ?>);">
				<div class="inner">
					<h1 class="title">Offers</h1>
					<p class="subtitle">we always have something for you</p>
				</div>
			</div>
		</div>
		<div class="frame-master section-1">
			<img src="<?php echo base_url('main_assets/assets/images/accent-pine-cone.png') ?>" alt="" class="accent">
			<div class="inner">
				<div class="title-1">
					<span class="signature-title">Offers</span>
					<div class="regular-title">
						Special Holiday offers <br>
						<span>& Many more</span>
					</div>
				</div>
				<div class="subtitle-1">
					Whether you are booking a family holiday or a honeymoon package in <br>Pesona Alam, our special offers ensure a memorable holiday with <br>world-class dining, recreation and pampering <br>
				</div>
			</div>
			<!-- - - - - - - - OFFERS 1 = = = START HERE - - - - - - - - -->
			<div class="slider-title">Room Offers</div>
			<div class="slider" id="offer-1">
				<div class="slider-wrapper">
					<?php  
						foreach($accomodation as $key => $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo site_url('assets/lampiran/accomodation_file/'.$value['accomodation_file']) ?>);" id="<?php echo $value['id']; ?>" data-id="accomodation">
								<div class="slide-info ai-start">
									<div class="info-tag <?php echo $value['type'] ?>">
										<?php echo $value['type'] ?>
									</div>
									<div class="info-title">
										<?php echo $value['title'] ?>
									</div>
								</div>
							</div>
						</div>
					<?php 
						} 
					?>
				</div>
			</div>
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- - - - - - - - OFFERS 2 = = = START HERE - - - - - - - - -->
			<div class="slider-title">Events</div>
			<div class="slider" id="offer-2">
				<div class="slider-wrapper">
					<?php  
						foreach($spa as $key => $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo site_url('assets/lampiran/spa_file/'.$value['spa_file']) ?>);" id="<?php echo $value['id']; ?>" data-id="spa">
								<div class="slide-info ai-start">
									<div class="info-tag <?php echo $value['type'] ?>">
										<?php echo $value['type'] ?>
									</div>
									<div class="info-title">
										<?php echo $value['title'] ?>
									</div>
								</div>
							</div>
						</div>
					<?php 
						} 
					?>
				</div>
			</div>
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- - - - - - - - OFFERS 3 = = = START HERE - - - - - - - - -->
			<div class="slider-title">F&B Offers</div>
			<div class="slider">
				<div class="slider-wrapper">
					<?php  
						foreach($dining as $key => $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo site_url('assets/lampiran/dining_file/'.$value['dining_file']) ?>);" id="<?php echo $value['id']; ?>" data-id="dining">
								<div class="slide-info ai-start">
									<div class="info-tag <?php echo $value['type'] ?>">
										<?php echo $value['type'] ?>
									</div>
									<div class="info-title">
										<?php echo $value['title'] ?>
									</div>
								</div>
							</div>
						</div>
					<?php 
						} 
					?>
				</div>
			</div>
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			</div>
		</div>
		<?php include 'footer.php' ?>
		<!-- main - - - END -->
		<script>
			$(document).ready(function() {

				$('.slide .bg-img').click(function() {
					var id = $(this).attr('id');
					var type = $(this).data('id');
					// alert(type);
					var url = "<?php echo site_url('menu/detail') ?>/"+id+"/"+type;
					window.location.href=url;
					console.log(url);
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







