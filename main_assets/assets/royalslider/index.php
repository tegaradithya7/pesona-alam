<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Menara Thamrin Building</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" type="image/x-icon" href="asset/images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="asset/style.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="asset/css/animation.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="asset/css/weather-icons.min.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="asset/royalslider/royalslider.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="asset/css/weather-icons-wind.min.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="asset/css/keyboard-dark.css" media="all"/>
		<link rel="stylesheet" href="asset/css/font-awesome.min.css">
		<script src="asset/js/jquery-1.9.1.js"></script>
		<script src="asset/js/jquery.keyboard.js"></script>
		<script src="asset/js/jquery-ui.js"></script>
		<script src="asset/js/thamrin-master.js"></script>
		<script src="asset/js/jquery.bxslider.min.js"></script>
		<script src="asset/royalslider/jquery.royalslider.min.js"></script>
	</head>
	<body onload="StartTimers();" onmousemove="ResetTimers();" onclick="ResetTimers();">
		<!-- W A T C H O U T -->

		<div class="md-modal md-effect-16" id="modal-1">
			<div class="md-content">
				<div id="md-content-title">
					<span id="small">traffic</span> maps <i class="fa fa-arrow-circle-down"></i>
					<div id="icon">
						<img src="asset/images/icon1-2.png">
					</div>
				</div>
				<div id="traffic-map"></div>
				<div class="md-close">
					<i class="fa fa-times"></i>
				</div>
				<div id="md-block-bar"></div>
				<div id="md-map-info">
					<div id="left">fast</div>
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
					<div id="right">slow</div>	
				</div>
			</div>
		</div>

		<div id="tenant-list-fullscreen">
			<div id="content">
				<div id="content-title">
					<span id="small">tenant</span> list
				</div>
				<div id="close">
					CLOSE <i class="fa fa-times-circle"></i> 
				</div>
				<div id="master-content">
					<div id="inner">
						<div id="inner-inner">
							<?php include('tenant-list.php'); ?>
							<?php include('tenant-list.php'); ?>
						</div>
					</div>	
				</div>
			</div>
		</div>

		<?php include('building-facilities.php'); ?>

		<div id="search-overlay">
			<div id="inner">
				<input id="search-overlay-box" type="text" placeholder=" Search Company Name...">
				<div id="close-button">
					<i class="fa fa-times"></i>
				</div>
			</div>
		</div>		

		<div class="md-overlay"></div>	

		<!-- W A T C H O U T . S T A R T H O M E -->
		<!--
		<div id="background-master">
			
			<video poster="" controls="controls" muted="muted" preload="auto" loop="true" autoplay="true">
				<source type="video/mp4" src="asset/movie-done 2.mp4">
			</video>
			
		</div>
		-->
		<div class="home-master">
			<div id="frame-left-master">

				<!-- T E N A N T - L I S T -->
			
				<div id="tenant-list-master">
					<div id="title">
						<div id="fullscreen-icon">
							<i class="fa fa-arrows-alt"></i>
						</div>
						<div id="icon">
							<i class="fa fa-list-ol"></i>
						</div>
						<div id="text">
							TENANT <span>list</span>
						</div>
					</div>
					<div id="master-content">
						<?php include('tenant-list.php'); ?>
					</div>
				</div>


				<!-- F R A M E - F L O O R -->

				<div id="frame-floor">

					<div id="passive-inner">
						<div id="passive-header">
							<div id="name-box">
								Tenant <span>Name</span>
							</div>
							<div id="floor-box">
								Floor
							</div>
						</div>					
						<div id="passive-content">
							<div class="royalSlider">
								<div class="rsContent">
									<div id="table-frame">
										<table id="passive-table" cellpadding="0" border="0" cellspacing="0">
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
										</table>
									</div>	
								</div>
								<div class="rsContent">
									<div id="table-frame">
										<table id="passive-table" cellpadding="0" border="0" cellspacing="0">
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
											<tr>
												<td>PT Testing Testing Testing Testing Tbk.</td>
												<td>12</td>
											</tr>
										</table>
									</div>	
								</div>
							</div>		
						</div>
					</div>
					<!--
						<div style="width:130px;height:100px;float:left"></div>
						<div class="floor-box" id="boxlist-a-trigger">
							<div id="font-background">A</div>
							<div id="font-top">A</div>
						</div>
						<div class="floor-box" id="boxlist-b-trigger">
							<div id="font-background">B</div>
							<div id="font-top">B</div>
						</div>
						<div class="floor-box" id="boxlist-c-trigger">
							<div id="font-background">C</div>
							<div id="font-top">C</div>
						</div>
						<div class="floor-box" id="boxlist-d-trigger">
							<div id="font-background">D</div>
							<div id="font-top">D</div>
						</div>
						<div class="floor-box" id="boxlist-e-trigger">
							<div id="font-background">E</div>
							<div id="font-top">E</div>
						</div>
						<div class="floor-box" id="boxlist-f-trigger">
							<div id="font-background">F</div>
							<div id="font-top">F</div>
						</div>
						<div class="floor-box" id="boxlist-g-trigger">
							<div id="font-background">G</div>
							<div id="font-top">G</div>
						</div>
						<div class="floor-box" id="boxlist-h-trigger">
							<div id="font-background">H</div>
							<div id="font-top">H</div>
						</div>
						<div class="floor-box" id="boxlist-i-trigger">
							<div id="font-background">I</div>
							<div id="font-top">I</div>
						</div>
						<div class="floor-box" id="boxlist-j-trigger">
							<div id="font-background">J</div>
							<div id="font-top">J</div>
						</div>
						<div class="floor-box" id="boxlist-k-trigger">
							<div id="font-background">K</div>
							<div id="font-top">K</div>
						</div>
						<div class="floor-box" id="boxlist-l-trigger">
							<div id="font-background">L</div>
							<div id="font-top">L</div>
						</div>
						<div class="floor-box" id="boxlist-m-trigger">
							<div id="font-background">M</div>
							<div id="font-top">M</div>
						</div>
						<div class="floor-box" id="boxlist-n-trigger">
							<div id="font-background">N</div>
							<div id="font-top">N</div>
						</div>
						<div class="floor-box" id="boxlist-o-trigger">
							<div id="font-background">O</div>
							<div id="font-top">O</div>
						</div>
						<div class="floor-box" id="boxlist-p-trigger">
							<div id="font-background">P</div>
							<div id="font-top">P</div>
						</div>
						<div class="floor-box" id="boxlist-q-trigger">
							<div id="font-background">Q</div>
							<div id="font-top">Q</div>
						</div>
						<div class="floor-box" id="boxlist-r-trigger">
							<div id="font-background">R</div>
							<div id="font-top">R</div>
						</div>
						<div class="floor-box" id="boxlist-s-trigger">
							<div id="font-background">S</div>
							<div id="font-top">S</div>
						</div>
						<div class="floor-box" id="boxlist-t-trigger">
							<div id="font-background">T</div>
							<div id="font-top">T</div>
						</div>
						<div class="floor-box" id="boxlist-u-trigger">
							<div id="font-background">U</div>
							<div id="font-top">U</div>
						</div>
						<div class="floor-box" id="boxlist-v-trigger">
							<div id="font-background">V</div>
							<div id="font-top">V</div>
						</div>
						<div class="floor-box" id="boxlist-w-trigger">
							<div id="font-background">W</div>
							<div id="font-top">W</div>
						</div>
						<div class="floor-box" id="boxlist-x-trigger">
							<div id="font-background">X</div>
							<div id="font-top">X</div>
						</div>
						<div class="floor-box" id="boxlist-y-trigger">
							<div id="font-background">Y</div>
							<div id="font-top">Y</div>
						</div>
						<div class="floor-box" id="boxlist-z-trigger">
							<div id="font-background">Z</div>
							<div id="font-top">Z</div>
						</div>
						<div id="floor-box-sign">
							<div id="inner">
								<span id="big">touch tile to<br><span>view tenant info</span></span><br>
							</div>
							<div id="arrow">
								<i class="fa fa-arrow-circle-up"></i>
							</div>
						</div>

						<div id="master-logo">
							<div id="inner">
								search <span>tenant</span><Br>
							</div>	
							<i class="fa fa-search"></i>
						</div>
					-->	
				</div>

				<!-- V A C A N T - I N F O -->

				<div id="vacant-info-master">
					<div id="title">
						<div id="icon">
							<i class="fa fa-building-o"></i>
						</div>
						<div id="text">
							vacant<span> info</span>
						</div>
					</div>
					<div id="master-content">
						<div id="title-content">
							<i class="fa fa-chevron-down" id="icon-big"></i>
							<span id="big">for building contact</span><br><br>
							<span id="small">
								<table cellpadding="0" border="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">
											<span id="bip">PT. MENARA THAMRIN<br>
											Menara Thamrin<br> 3rd Floor<br></span>
										</td>
										<td width="60%">
											<table cellpadding="0" border="0" cellspacing="0" width="100%">
												<tr>
													<td width="28%">
														<i class="fa fa-phone"></i>Phone
													</td>
													<td width="2%">
														:
													</td>
													<td width="70%">
														(62-21) – 2302800
													</td>
												</tr>
												<tr>
													<td>
														<i class="fa fa-fax"></i>Facsimile
													</td>
													<td>
														:
													</td>
													<td>
														(62-21) – 2302310
													</td>
												</tr>
												<tr>
													<td>
														<i class="fa fa-globe"></i>Website
													</td>
													<td>
														:
													</td>
													<td>
														www.menarathamrin.com
													</td>
												</tr>
												<tr>
													<td>
														<i class="fa fa-envelope-o"></i>Email
													</td>
													<td>
														:
													</td>
													<td>
														admin@menarathamrin.com
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</span>
						</div>
						asdasdad
					</div>
				</div>
			</div>
			<div id="frame-right-title">
				<div id="inner">
					<span id="small">menara thamrin</span><br>
					<font>smart </font>building directory<Br>
					<div id="small-2">layar sentuh informatif <i class="fa fa-arrow-circle-down"></i></div>
					<img src="asset/images/logo.png">
				</div>	
			</div>
			<div id="right-frame-master">
				<div id="video-box">
					<video poster="" muted="muted" preload="auto" loop="true" autoplay="true">
						<source type="video/mp4" src="asset/Wonderful Indonesia - Jakarta- Indonesia's National and Business Capital.mp4">
					</video>
					<div id="button-frame">
						<ul>
							<li>
								<div id="image">
									<?php include('clock-content.php'); ?>
									<div id="time-date">
										<span id="date-number"></span>
										<span id="date"></span><br>
									</div>	
								</div>	
							</li>
							<li class="md-trigger" data-modal="modal-1">
								<div id="image">
									<img src="asset/images/icon1.png"><br>Traffic Maps
								</div>	
							</li>
						<ul>
					</div>
					<script>
						function initMap() {
							var customMapType = new google.maps.StyledMapType([
							      {
							        elementType: 'labels',
							        stylers: [{visibility: 'on'}]
							      }
							    ], {
							      name: 'Custom Style'
							  });
							  var customMapTypeId = 'custom_style';
							var position = new google.maps.LatLng(-6.184360, 106.822884)
						  	var map = new google.maps.Map(document.getElementById('traffic-map'), {
							    zoom: 14,
							    center : position,
							    disableDefaultUI: true,
							    scrollwheel: false,
							    mapTypeIds: [google.maps.MapTypeId.ROADMAP, "Edited"]
						 	});
						  
							var marker = new google.maps.Marker({
							    map: map,
								position: position,
							    draggable: false
							});

						  var trafficLayer = new google.maps.TrafficLayer();
						  trafficLayer.setMap(map);
						  map.mapTypes.set(customMapTypeId, customMapType);
	  					  map.setMapTypeId(customMapTypeId);
						}
					</script>
					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByAL6X5uCEtdcSQZ1nBf3XoXXkUQWy8u8&callback=initMap&signed_in=false" async defer>
					</script>
				</div>
				<div id="bottom-right-frame">
					<div id="box-kurs">
						<div id="kurs-header">
							<b>exchange</b> rate
						</div>
						<div id="inner">
							<ul class="bxslider">
								<li>
									<div id="kurs-slide">
										<div id="currency">USD</div>
										<div id="value">
											12.800,00<br>
											13.300,00
										</div>	
									</div>
								</li>	
								<li>
									<div id="kurs-slide">
										<div id="currency">SGD</div>
										<div id="value">
											9.498,72<br>
											9.478,72
										</div>	
									</div>
								</li>	
								<li>
									<div id="kurs-slide">
										<div id="currency">EUR</div>
										<div id="value">
											12.800,00<br>
											14.499,84
										</div>	
									</div>
								</li>		
							</ul>	
							<div id="kurs-slide-text">
								<i class="fa fa-arrow-circle-up"></i> sell :<br>
								<i class="fa fa-arrow-circle-down"></i> buy  :  
							</div>
							<!--
							<table id="kurs-table" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td width="20%"></td>
									<td width="40%">buy</td>
									<td width="40%">sell</td>
								</tr>
								<tr>
									<td>USD</td>
									<td>12.800,00</td>
									<td>13.300,00</td>
								</tr>
								<tr>
									<td>SGD</td>
									<td>9.498,72</td>
									<td>9.478,72</td>
								</tr>
								<tr>
									<td>EUR</td>
									<td>12.800,00</td>
									<td>13.300,00</td>
								</tr>
								<tr>
									<td>AUD</td>
									<td>14.599,84</td>
									<td>14.499,84</td>
								</tr>
							</table>	
							-->
						</div>
					</div>


					<div id="box-1">
						<div id="bottom">
							<span>building</span><br>facilities
						</div>
						<div id="background">
							<div id="overlay"></div>
							<ul class="bxslider2">
							  	<li>
							  		<img src="asset/images/image1.png">
							  	</li>	
							  	<li>
							  		<img src="asset/images/image2.png">
							  	</li>	
							  	<li>
							  		<img src="asset/images/image3.png">
							  	</li>
							  	<li>
							  		<img src="asset/images/image4.png">
							  	</li>
							  	<li>
							  		<img src="asset/images/image5.png">
							  	</li>
							  	<li>
							  		<img src="asset/images/image6.png">
							  	</li>	
							</ul>
						</div>	
					</div>
					

					<div id="box-2">
						<div id="weather-days">
							<ul>
								<li>
									<i class="wi wi-day-sunny"></i>
									<div id="text">
										wed
									</div>
								</li>
								<li>
									<i class="wi wi-day-windy"></i>
									<div id="text">
										thu
									</div>
								</li>
								<li>
									<i class="wi wi-day-cloudy"></i>
									<div id="text">
										fri
									</div>
								</li>
							</ul>
						</div>
						<div id="weather-header">
							<div id="inner">
								<i class="wi wi-day-cloudy"></i>
								<span id="weather-number">28</span>
								<img src="asset/images/celcius.png" height="28"><br>
							</div>	
						</div>
						<div id="location-frame">
							<div id="icon-big">
								<i class="fa fa-map-marker"></i>
							</div>
							<div id="border"></div>
							<div id="text">
								 Jakarta
							</div>
						</div>
					</div>
					<div id="box-3">
						<div class="icon" id="icon">
							<i class="fa fa-list-ol"></i>
						</div>
						<div class="icon" id="close-icon">
							<i class="fa fa-close"></i>
						</div>
						<div class="box" id="top">
							<div id="text">
								Tenant <span>list</span>
							</div>
						</div>

						<!-- icon 2 -->
						
						<div class="icon" id="icon2">
							<i class="fa fa-building-o"></i>
						</div>
						<div class="icon" id="close-icon2">
							<i class="fa fa-close"></i>
						</div>
						<div class="box" id="bottom">
							<div id="text">
								Vacant <span>Info</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- W A T C H O U T -->

			<?php include('floor-info.php'); ?>

			<!-- W A T C H O U T -->

			<div id="news-bar">
				<marquee>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et <i class="fa fa-circle-o"></i>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et <i class="fa fa-circle-o"></i>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et <i class="fa fa-circle-o"></i>
				</marquee>	
			</div>
			
			<!-- W A T C H O U T -->

	    </div>   
	    <div id="pointer-mark">
	    	<div id="circle">
	    		<div id="inner"></div>
	    	</div>
	    </div>
	    <script>
			jQuery(document).ready(function($) {
				$(".royalSlider").royalSlider({
					slidesSpacing : 0,
					slidesOrientation : 'vertical',
					imageScalePadding : 0,
					keyboardNavEnabled: true,
					autoPlay: {
						stopAtAction : false,
						enabled: true,
						pauseOnHover: false,
						delay : 4000
					}					
				});  
			});
		</script>
	    <script src="asset/js/classie.js"></script>
	    <script src="asset/js/thamrin-scrolleffect.js"></script>
		<script src="asset/js/modalEffects.js"></script>
	</body>
</html>

