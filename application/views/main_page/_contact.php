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

			.master-body.submenu-1 .frame-master.section-1 .slider-wrapper .slide .slide-info {
				padding-bottom: 25px !important;
			}

			.master-body.submenu-1 .frame-master.section-1 .slider-wrapper .slide .slide-info .info-title {
				line-height: 1.5 !important;
				font-size: 20px !important;
			}

			.accordion-wrapper {
				margin-top: 25px !important;
			}

			/*.map-wrapper {
				height: calc(500px - 0px);
			    padding: 0;
			    padding-left: 0;
			    padding-right: 0;
			    margin: 0 auto 150px !important;
			    position: relative;
			    max-width: 1200px !important;
			}

			.map-wrapper #contact-map {
				width: 100%;
				height: 100%;
			}*/
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
		<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script><link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
		<link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
		
	</head>
	<body class="master-body submenu-1 contact">
		<?php include 'nav.php' ?>
		<!-- main -->
		<div class="fullwidth-master section-header slider-init">
			<div class="header" style="background-image: url(<?php echo base_url('main_assets/assets/images/activity-bg-1.jpg') ?>);">
				<div class="inner">
					<h1 class="title">Contact Us</h1>
					<p class="subtitle">Stay Connected with Pesona Alam Resort</p>
				</div>
			</div>
		</div>
		<div class="frame-master section-1">
			<img src="<?php echo base_url('main_assets/assets/images/accent-pine-cone.png') ?>" alt="" class="accent">
			<div class="inner map-wrapper">
				<div id="contact-map"></div>
				<div class="contact-info">
					<div class="info-item">
						<span class="circle"></span>
						<span class="text">
							Pesona Alam Resort & Spa <br>
							Jalan Taman Safari No. 101, Kp. Baru Tegal. Desa Cibeureum <br>
							Cisarua, Bogor, Indonesia <br>
						</span>
					</div>
					<div class="info-item">
						<span class="circle"></span>
						<span class="text">
							<span class="link">T 0251 821 7111</span> <br>
							<span class="link">info-pesonaalam@tauzia.com</span> <br>
							<span class="link">res1-pesonaalam@tauzia.com</span>
						</span>
					</div>
				</div>
			</div>
			<div class="inner">
				<div class="row">
					<div class="col-6">
						<div class="title-1">
							<span class="signature-title">Letters</span>
							<div class="regular-title">
								Send us letters<br>
								<span>through this form</span>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="master-form">
							<form action="<?php echo site_url('send/send_email/contact') ?>" method="post">
								<input class="input-type" type="text" name="name" id="cd-name" placeholder="Name." required="">
								<input class="input-type" type="text" name="email" id="cd-name" placeholder="Email Address" required="">
								<input class="input-type" type="text" name="phone" id="cd-name" placeholder="Mobile Phone" required="">
								<div class="select-frame">
								  <select autocomplete="off" class="input-select" name="customer_type">
								     <option value="1" disabled="" selected="">Customer Type</option>
								     <option value="2">Personal</option>
								     <option value="3">Company</option>
								  </select>
								</div>
								<textarea class="input-type" type="text" name="message" id="cd-name" placeholder="Your query ..." required=""></textarea>
								<input type="hidden" name="url" value="<?php echo site_url('menu/contact') ?>">
								<br class="clear">
								<button class="input-submit">Submit</button>
								<!-- type="submit" value="Submit" -->
								<br class="clear">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php' ?>
		<!-- main - - - END -->
		<script>
			mapboxgl.accessToken = "pk.eyJ1IjoiZ2xhbnRpbm9wdXRyYSIsImEiOiJjanNsa3ZjNHgxd2Q0NDRrNnByczExdHlmIn0.IFpiWi3P1wxDnRbVAXJ47w";
			 
			/* Map: This represents the map on the page. */
			var map = new mapboxgl.Map({
			container: "contact-map",
			style: "mapbox://styles/mapbox/streets-v11",
			zoom: 13.6,
			center: [106.951433, -6.703246]
			});

			map.scrollZoom.disable();
			map.on("load", function () {
			/* Image: An image is loaded and added to the map. */
			map.loadImage("<?php echo base_url('main_assets/assets/images/location-marker.png') ?>", function(error, image) {
			if (error) throw error;
			map.addImage("custom-marker", image);
			/* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
			map.addLayer({
			id: "markers",
			type: "symbol",
			/* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
			source: {
			type: "geojson",
			data: {
			type: 'FeatureCollection',
			features: [
			{
			type: 'Feature',
			properties: {},
			geometry: {
			type: "Point",
			coordinates: [106.951433, -6.703246]
			}
			}
			]
			}
			},
			layout: {
			"icon-image": "custom-marker",
			}
			});
			});
			});
		</script>
	</body>
</html>







