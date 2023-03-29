<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>


<html lang="en">

<head>

	<meta charset="utf-8">

	<title>CMS PESONA ALAM</title>

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

	<link rel="stylesheet" href="<?php echo base_url('assets/js/jquery-ui/jquery-ui.css'); ?>" type="text/css" media="screen"/>

	<link rel="stylesheet" href="<?php echo base_url('assets/styles/base.css'); ?>" type="text/css" media="screen"/>

	 <link rel="stylesheet" href="<?php echo base_url('assets/styles/scss/main.min.css'); ?>" type="text/css" media="screen"/>
     
	 
</head>

<body>



<div id="container">

	<nav class="navbar">

		<div class="navbar-brand">
			
			<div class="navbar-item logo">

                <img src="<?php echo base_url('assets/images/logo-colored.png')?>">
				<!-- <img src="<?php echo base_url('assets/images/logo_pesona.png')?>"> -->

			</div>

		</div>

		<div class="navbar-menu">

			<div class="navbar-start">
				
				<div class="navbar-item">
					<?php if (!$this->session->userdata('user')) { ?>
						<!-- <div class="search-bar">
						<span class="icon">
							<i class="fa fa-search"></i>
						</span>
						<input type="text" name="vendor" class="input" placeholder="Search..">
						<div class="searchOption">
							
						</div>
					</div> -->
					<?php } ?>
				</div>

			</div>

			<div class="navbar-end">

				<div class="navbar-item account has-dropdown">

					<img src="<?php echo base_url('assets/images/Man-Avatar.png')?>" alt="" height="45px">

          			<p>{user}</p>

          			<span class="icon spin"><i class="fa fa-angle-down"></i></span>

          			<div class="navbar-dropdown is-dropdown">
					<?php if ($this->session->userdata('user')) { ?>
		            	<a href="<?php echo site_url('vendor/pass_change') ?>" class="navbar-item">

		              		<span class="icon"><i class="fas fa-cog"></i></span>

		              		Edit Account

		            	</a>
		            <?php }  ?>

		            	<a href="<?php echo site_url('main/logout')?>" class="navbar-item">

		              		<span class="icon"><i class="fas fa-sign-out-alt"></i></span>

		              		Logout

		            	</a>

		          	</div>

				</div>

			</div>

		</div>

	</nav>

	<section class="contentWrap">

		<div class="hbox">

			<div class="sidebar">

				{sideMenu}

				<?php 
					if($this->session->userdata('user')){
						if($this->session->userdata('user')['vendor_status']==0){
							?>
							<div class="waitBtn"><a href="<?php echo site_url('dashboard/to_waiting_list');?>" class="waitingList btn btn-warning"><i class="fas fa-paper-plane"></i>&nbsp; Submit Data</a></div>
							<?php
						}
					}
					
				?>
			</div>

			<div class="main">

				<div class="mainWrapper">

					<?php

						if($this->session->userdata('alert'))

					?>

					{breadcrumb}

					<?php

						echo $this->session->userdata('msg');

					?>

					<h1 class="page-heading">{header}</h1>

					<div class="row">
						{content}
						<br>
						<br>
						<?php if (!$this->session->userdata('admin')) { ?>
							<div style="margin-left: 400px;">
								Download user manual : <a href="<?php echo base_url('open/file/'.base64_encode('assets/user_manual/user_manual.pdf')) ?>" target="blank"><i class="fa fa-download"></i><span class="icon-text"> User Manual</span></a>
							</div>
						<?php } ?>
						
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
	<!-- <script type="text/javascript" src="<?php echo base_url('assets/js/countdown/jquery.countdown.js')?>"></script> -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/date.format.js')?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/fullcalendar/fullcalendar.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/tinymce/js/tinymce/tinymce.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/clockpicker/src/clockpicker.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/common.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/simple.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/template.js');?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.number.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/numeral.min.js');?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/daterangepicker/jquery.comiseo.daterangepicker.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui/ui/jquery.ui.tooltip.min.js');?>"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/utility.js');?>"></script>
	{script}
	<script type="text/javascript">
		$(function(){
		$('.search-bar input[name="vendor"]').donetyping(function() {
				_self = $(this);
				_parent = _self.closest('.input');
				_resultWrapper = $('.searchOption');
				_resultWrapper.empty();

				$.ajax({
						url : '<?php echo site_url('dashboard/search_vendor')?>',
						data : {
							search : _self.val()
						},
						method : 'POST',
						beforeSend : function(){
							$(_self).addClass('loading');
							_resultWrapper.empty();
						},
						success : function(xhr){
							
							setTimeout(function(){
								$(_self).removeClass('loading');
								
								var total = 0;
								$.each($.parseJSON(xhr), function(key, value){
									total++;
								});
								if(total>0){
									var html = '<ul>';
										$.each( $.parseJSON(xhr), function(key, value){
											html += '<li data-id="'+key+'">'+value+'</li>';
										});
									html += '</ul>';
								}
								
								
								_resultWrapper.html(html);

								// $('ul li', _resultWrapper).on('click', function(e){

								// 	id = $(this).data('id');
								// 	// alert(id);
								// 	$('.modal input[name="id_vendor"] ').val(id);
								// 	// id_komag_field.val(id);
								// 	$(_self).val($(this).data('name'));
								// 	_resultWrapper.empty();
								// });
							}, 1000);
							
						}	
					});
			})
	})
	</script>
</html>
