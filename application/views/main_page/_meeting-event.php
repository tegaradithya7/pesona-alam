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
	<body class="master-body submenu-1 meetings">
		<?php include 'nav.php' ?>
		<!-- main -->
		<div class="fullwidth-master section-header slider-init">
			<div class="header" style="background-image: url(<?php echo base_url('main_assets/assets/images/ballroom-bg-2.jpg') ?>);">
				<div class="inner">
					<h1 class="title">Meeting & Events</h1>
					<p class="subtitle">We Have Just One Mission… Yours</p>
				</div>
			</div>
		</div>
		<div class="frame-master section-1">
			<img src="<?php echo base_url('main_assets/assets/images/accent-pine-cone.png') ?>" alt="" class="accent">
			<div class="inner">
				<div class="title-1">
					<span class="signature-title">Spaces</span>
					<div class="regular-title">

						refreshing change of scenery <br>
						<span>for corporate events</span>
					</div>
				</div>
				<div class="subtitle-1">
					The Puncak scenery offers a refreshing change for corporate <br>events from team-building to car launches, <br>brainstorm sessions to al fresco sunset BBQ and drinks receptions.
				</div>
				<div class="accordion-wrapper">
					<div class="accordion-title"></div>
					<div class="accordion-group">
	                  <div class="accordion">
	                    <div class="accordion-header all-caps" id="heading1">FACILITIES<i class="pull-right fas fa-chevron-down"></i></div>
	                    <div class="collapse" id="collapse1">
	                      <div class="accordion-body">
							<div class="row">
								<div class="col-6">
									<ul>
										<li>LCD Projector</li>
										<li>Screen</li>
										<li>Sound System</li>
										<li>Notepad &amp; Pencil</li>
									</ul>
								</div>
								<div class="col-6">
									<ul>
										<li>Flip Chart</li>
										<li>Meeting Toolkits</li>
										<li>Wearless Internet Connection</li>
										<li>Healthy Breaks</li>
									</ul>
								</div>
							</div>
	                      </div>
	                    </div>
	                  </div>
	                </div>
				</div>
				<div class="accordion-wrapper">
					<div class="accordion-title"></div>
					<div class="accordion-group">
	                  <div class="accordion">
	                    <div class="accordion-header all-caps" id="heading1">CAPACITIES<i class="pull-right fas fa-chevron-down"></i></div>
	                    <div class="collapse" id="collapse1">
	                      <div class="accordion-body">
							<div class="overflow-x">
								<table class="table table-striped table-hover">
									<thead class="thead-green">
										<tr>
											<th>No. </th>
											<th class="name">Room</th>
											<th>Total Square M2</th>
											<th>U-Shape</th>
											<th>Theatre</th>
											<th>Round Table</th>
											<th>Classroom</th>
											<th>Board</th>
											<th>Ceiling Height</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th rowspan="7" class="no">1.</th>
											<td class="name">KAYUMANIS 1</td>
											<td>25.1</td>
											<td>9</td>
											<td>20</td>
											<td>16</td>
											<td>12</td>
											<td>12</td>
											<td>2.8</td>
										</tr>
										<tr>
											<td class="name">KAYUMANIS 2</td>
											<td>84.0</td>
											<td>27</td>
											<td>70</td>
											<td>40</td>
											<td>42</td>
											<td>22</td>
											<td>2.8</td>
										</tr>
										<tr>
											<td class="name">KAYUMANIS 3</td>
											<td>65.5</td>
											<td>24</td>
											<td>50</td>
											<td>32</td>
											<td>30</td>
											<td>22</td>
											<td>2.8</td>
										</tr>
										<tr>
											<td class="name">KAYUMANIS 4</td>
											<td>65.5</td>
											<td>24</td>
											<td>50</td>
											<td>32</td>
											<td>30</td>
											<td>22</td>
											<td>2.8</td>
										</tr>
										<tr>
											<td class="name">KAYUMANIS 5</td>
											<td>65.5</td>
											<td>24</td>
											<td>50</td>
											<td>32</td>
											<td>30</td>
											<td>22</td>
											<td>2.8</td>
										</tr>
										<tr>
											<td class="name">KAYUMANIS 6</td>
											<td>42.6</td>
											<td>15</td>
											<td>30</td>
											<td>16</td>
											<td>24</td>
											<td>16</td>
											<td>2.8</td>
										</tr>
										<tr>
											<td class="name">KAYUMANIS 7</td>
											<td>49.2</td>
											<td>15</td>
											<td>30</td>
											<td>16</td>
											<td>24</td>
											<td>16</td>
											<td>2.8</td>
										</tr>
										<tr>
											<th rowspan="3" class="no">2.</th>
											<td class="name">KETAPANG 2</td>
											<td>62.2</td>
											<td>24</td>
											<td>20</td>
											<td>32</td>
											<td>30</td>
											<td>&nbsp;</td>
											<td>2.35</td>
										</tr>
										<tr>
											<td class="name">KETAPANG 3,4,5</td>
											<td>186.5</td>
											<td>80</td>
											<td>216</td>
											<td>80</td>
											<td>100</td>
											<td>&nbsp;</td>
											<td>2.35</td>
										</tr>
										<tr>
											<td class="name">KETAPANG 6</td>
											<td>44.6</td>
											<td>15</td>
											<td>30</td>
											<td>24</td>
											<td>24</td>
											<td>&nbsp;</td>
											<td>2.35</td>
										</tr>
										<tr>
											<th rowspan="4" class="no">3.</th>
											<td class="name">SAILENDRA</td>
											<td>614.5</td>
											<td>87</td>
											<td>500</td>
											<td>320</td>
											<td>204</td>
											<td>&nbsp;</td>
											<td>7.1</td>
										</tr>
										<tr>
											<td class="name">SAILENDRA 1</td>
											<td>204.82</td>
											<td>45</td>
											<td>144</td>
											<td>96</td>
											<td>96</td>
											<td>&nbsp;</td>
											<td>7.1</td>
										</tr>
										<tr>
											<td class="name">SAILENDRA 2</td>
											<td>204.82</td>
											<td>45</td>
											<td>144</td>
											<td>96</td>
											<td>96</td>
											<td>&nbsp;</td>
											<td>7.1</td>
										</tr>
										<tr>
											<td class="name">SAILENDRA 3</td>
											<td>204.82</td>
											<td>45</td>
											<td>144</td>
											<td>96</td>
											<td>96</td>
											<td>&nbsp;</td>
											<td>7.1</td>
										</tr>
									</tbody>
								</table>
							</div>
	                      </div>
	                    </div>
	                  </div>
	                </div>
				</div>
			</div>
			<!-- - - - - - - - SLIDE = = = START HERE - - - - - - - - -->
			<div class="slider" id="offer-1">
				<div class="slider-wrapper">
					<?php 
						$arr = array (
						    '1' => array(
					            'bg' => 'ballroom-bg-1.jpg',
					            'title' => 'Whatever the occasion, your event is in the right hand',
					        ),
					        '2' => array(
					        	'bg' => 'ballroom-bg-6.jpg',
					            'title' => 'Bring your employee to a new meeting scenery',
					        ),
					        '3' => array(
					            'bg' => 'ballroom-bg-4.jpg',
					            'title' => 'clean and fully functionized meeting room',
					        ),
					        '4' => array(
					            'bg' => 'ballroom-bg-5.jpg',
					            'title' => 'Large space, more audience to your new business launch',
					        ),
					        '5' => array(
					            'bg' => 'ballroom-bg-3.jpg',
					            'title' => 'espresso maker, for your coffee break time',
					        ),
						);
						// $arr = array('slide-bg-1.jpg', 'slide-bg-2.jpg', 'slide-bg-3.jpg', 'slide-bg-1.jpg', 'slide-bg-2.jpg', 'slide-bg-3.jpg',);
						// foreach ($arr as $value) {
						foreach($arr as $value) {
					?>
						<div class="slide">
							<div class="bg-img" style="background-image: url(<?php echo base_url('main_assets/assets/images/'.$value['bg']) ?>);">
								<div class="slide-info ai-start">
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
			<div class="inner btn-wrapper">
				<button class="btn form-inquiry">FORM INQUIRY</button>
				<button class="btn" onclick="window.open('<?php echo base_url('main_assets/assets/doc/Factsheet.pdf') ?>')">BROCHURE</button>
			</div>
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
		<div class="event-form">
			<div class="master-form">
				<span class="close-btn">
					<span id="span-1"></span>
					<span id="span-2"></span>
				</span>
				<form action="<?php echo site_url('send/send_email/meeting_event') ?>" method="post">
					<input class="input-type" type="text" name="name" id="cd-name" placeholder="Name." required="">
					<input class="input-type" type="text" name="email" id="cd-name" placeholder="Email Address" required="">
					<!-- <input class="input-type" type="text" name="cd-name" id="cd-name" placeholder="Mobile Phone" required=""> -->
					<!-- <div class="select-frame">
					  <select autocomplete="off" class="input-select">
					     <option value="1" disabled="" selected="">Customer Type</option>
					     <option value="2">Personal</option>
					     <option value="3">Company</option>
					  </select>
					</div> -->
					<input type="hidden" name="url" value="<?php echo site_url('menu/meeting') ?>">
					<textarea class="input-type" type="text" name="message" id="cd-name" placeholder="Your query ..." required=""></textarea>
					<br class="clear">
					<button class="input-submit">Submit</button>
				</form>
				<!-- type="submit" value="Submit" -->
				<br class="clear">
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







