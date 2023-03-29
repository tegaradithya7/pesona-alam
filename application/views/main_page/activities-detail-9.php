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
		<title>Pesona Alam - Activities</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
		<link rel="stylesheet" type="text/css" href="styles/main.css" media="all"/>
		<link rel="stylesheet" href="assets/fontawesome5.6.3/css/all.css" type="text/css" media="screen">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
		<link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>

		<!-- css and js for shape-morph -->
		<!-- <link rel="stylesheet" type="text/css" href="assets/shape-morph/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/shape-morph/css/demo4.css" />
		<link rel="stylesheet" type="text/css" href="assets/shape-morph/pater/pater.css" />

		<script src="assets/shape-morph/js/anime.min.js"></script>
		<script src="assets/shape-morph/js/demo.js"></script>
		<script src="assets/shape-morph/js/demo4.js"></script> -->
		<!-- css and js for shape-morph - - - END -->

		<script src="js/jquery-3.3.1.js"></script>
		<script src="js/main-master.js"></script>
		<script src="assets/EaseScroll/jquery.easeScroll.js"></script>
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
		<script type="text/javascript" src="assets/slick/slick.min.js"></script>
		<!-- Global site tag (gtag.js) - Google Ads: 966540489 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-966540489"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'AW-966540489');
        </script>
		
	</head>
	<body class="master-body submenu-1 activities">
		<?php include 'nav.php' ?>
		<!-- main -->
		<div class="fullwidth-master section-header slider-init">
			<div class="header" style="background-image: url(assets/images/activity-bg-10.jpg);">
				<div class="inner">
					<h1 class="title">Team Building</h1>
					<p class="subtitle">fill yourself with excitement every time</p>
				</div>
			</div>
		</div>
		<div class="frame-master section-1">
			<img src="assets/images/accent-pine-cone.png" alt="" class="accent">
			<div class="inner d-flex ai-center fd-col">
				<div class="title-1 ta-center">
					<span class="signature-title">Enjoy</span>
					<div class="regular-title">
						United we stand <br>
						<span>divorced we fell apart</span>
					</div>
				</div>
				<div class="subtitle-1 ta-center">
					You are team because you respect, you trust and you care for each other, this Team Building activity will turn your team into a rock solid trust working mechine. Let's we keep it up, and let the game begin!
				</div>
			</div>
			<div class="slider">
				<div class="slider-wrapper">
					<?php 
						$arr = array (
						    '1' => array(
					            'bg' => 'activity-bg-1.jpg',
					            'title' => 'Wedding Pars',
					            'subtitle' => 'Promises a totally satisfying experience for body and mind, a complete remise-en-forme'
					        ),
					        '2' => array(
					            'bg' => 'activity-bg-2.jpg',
					            'title' => 'Berembun Spa',
					            'subtitle' => 'Promises a totally satisfying experience for body and mind, a complete remise-en-forme'
					        ),
					        '3' => array(
					            'bg' => 'activity-bg-3.jpg',
					            'title' => 'Outbound',
					            'subtitle' => 'Promises a totally satisfying experience for body and mind, a complete remise-en-forme'
					        ),
					        '4' => array(
					            'bg' => 'activity-bg-1.jpg',
					            'title' => 'Wedding Pars',
					            'subtitle' => 'Promises a totally satisfying experience for body and mind, a complete remise-en-forme'
					        ),
					        '5' => array(
					            'bg' => 'activity-bg-2.jpg',
					            'title' => 'Berembun Spa',
					            'subtitle' => 'Promises a totally satisfying experience for body and mind, a complete remise-en-forme'
					        ),
					        '6' => array(
					            'bg' => 'activity-bg-3.jpg',
					            'title' => 'Outbound',
					            'subtitle' => 'Promises a totally satisfying experience for body and mind, a complete remise-en-forme'
					        ),
						);
						// $arr = array('slide-bg-1.jpg', 'slide-bg-2.jpg', 'slide-bg-3.jpg', 'slide-bg-1.jpg', 'slide-bg-2.jpg', 'slide-bg-3.jpg',);
						// foreach ($arr as $value) {
						foreach($arr as $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(assets/images/<?php echo $value['bg'] ?>);">
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







