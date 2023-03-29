<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manajemen Penyedia Barang/Jasa</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
   <!-- <link rel="stylesheet" href="<?php echo base_url('assets/styles/normalize.css'); ?>" type="text/css" media="screen"/> -->

	<link rel="stylesheet" href="<?php echo base_url('assets/font/font-awesome/css/font-awesome.min.css'); ?>" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/font/font/flaticon.css'); ?>" type="text/css" media="screen"/>

	<link rel="stylesheet" href="<?php echo base_url('assets/js/fullcalendar/fullcalendar.min.css'); ?>" type="text/css" media="screen"/>

	<link rel="stylesheet" href="<?php echo base_url('assets/js/datepicker/jquery.datetimepicker.css'); ?>" type="text/css" media="screen"/>

	<link rel="stylesheet" href="<?php echo base_url('assets/js/clockpicker/src/clockpicker.css'); ?>" type="text/css" media="screen"/>

	<link rel="stylesheet" href="<?php echo base_url('assets/js/clockpicker/dist/jquery-clockpicker.css'); ?>" type="text/css" media="screen"/>
	 <link rel="stylesheet" href="<?php echo base_url('assets/font/fontawesome-free-5.3.1-web/css/all.min.css'); ?>" type="text/css" media="screen" />
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/js/daterangepicker/jquery.comiseo.daterangepicker.css'); ?>" type="text/css" media="screen"/>

	<link rel="stylesheet" href="<?php echo base_url('assets/js/jquery-ui/jquery-ui.min.css'); ?>" type="text/css" media="screen"/>

	<link rel="stylesheet" href="<?php echo base_url('assets/styles/base.css'); ?>" type="text/css" media="screen"/>

	 <link rel="stylesheet" href="<?php echo base_url('assets/styles/scss/main.min.css'); ?>" type="text/css" media="screen"/>

</head>
<body>
  
  <nav class="navbar">

		<div class="navbar-brand">
			
			<div class="navbar-item logo">
				<img src="<?php echo base_url('assets/images/img/Logo PGN A member of Pertamina_Full Color.png')?>">


			</div>

		</div>

	</nav>

	<section class="contentWrap">

		<div class="hbox">

			<div class="main">

				<div class="mainWrapper">

					<?php

						if($this->session->userdata('alert'))

					?>

					<?php

						echo $this->session->userdata('msg');

					?>

					<h1 class="page-heading">{header}</h1>

					<div class="row">

						{content}

					</div>
					
				</div>

			</div>

		</div>

	</section>

</div>



</body>
	 <script type="text/javascript">
  var google_captcha_key = '<?php echo GOOGLE_RECAPTCHA_SITE_KEY ?>';
  var base_url = "<?php echo base_url()?>";
  var site_url = "<?php echo site_url()?>";
  
  </script>

  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
  
  <script type="text/javascript" src="<?php echo base_url('assets/js/moment-with-locales.js');?>"></script>

  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.imask.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/form.js');?>"></script>
  
  <script type="text/javascript" src="<?php echo base_url('assets/js/filter.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/tableGenerator_v2.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/folder_generator.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/formWizard.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/modal.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/datepicker/build/jquery.datetimepicker.full.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/countdown/jquery.countdown.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/date.format.js')?>"></script>

  <script type="text/javascript" src="<?php echo base_url('assets/js/fullcalendar/fullcalendar.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/tinymce/js/tinymce/tinymce.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/clockpicker/src/clockpicker.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/common.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/simple.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/template.js');?>"></script>

  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.number.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/numeral.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/utility.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/daterangepicker/jquery.comiseo.daterangepicker.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui/ui/jquery.ui.tooltip.min.js');?>"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
</html>
