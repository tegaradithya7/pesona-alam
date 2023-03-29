<!DOCTYPE html>
<html lang="en">
<head>
    <title>CMS PESONA ALAM</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="<?php echo base_url('assets/font/fontawesome-free-5.3.1-web/css/all.css'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url('assets/styles/normalize.css'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url('assets/font/font-awesome/css/font-awesome.min.css'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url('assets/styles/base.css'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url('assets/styles/scss/main.min.css'); ?>" type="text/css" media="screen"/>

</head>

<body class="bg-image body-login-wrapper">
	<div class="bg">
		
	</div>
	<section class="main-content"> 
	    <div class="wrapper is-centered login-wrapper">
	      <div class="col col-8">
			<!-- <div class="initialize-after">	 -->
				<div class="form-login">
					<div class="group-start">
						<h1>Content Management System <br> <span>Pesona Alam</span></h1>
						<!-- <p>Vendor Management System | e-Auction</p> -->
					</div>
					<div class="group-end">
						<div class="panel">
							<div class="field">
								<div class="title">
									<img src="<?= base_url().'assets/images/logo_pesona.png' ?>" alt="" style="height: 95px">
								</div>
								<div class="form" id="login-form"> </div>
								<p id="demo"></p>
								<!-- <div class="control is-centered">
									<p><a href="<?= site_url('lupa_password') ?>">Lupa Password?</a></p>
								</div>
								<div class="control signup-link is-centered">
									<p>atau <a href="<?= site_url('regis_vendor') ?>">Daftar Vendor Baru</a></p>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			<!-- </div> -->
	      </div>
	    </div>
	</section>
	<!-- <img class="bg-shape" src="<?php echo base_url('assets/images/bg.png');?>" alt="">
	<section class="main-content"> 

	    <div class="wrapper is-centered">

	      <div class="col col-6">
	      	
			<div class="initialize-after">
				
				<div class="form-login">
					<div class="group-start">
						<img src="<?php echo base_url('assets/images/PGN_logo.png'); ?>" alt="">
					</div>
					<div class="group-end">
						<div class="field">
							<div class="title">
								<h1>Sistem Management Penyedia Barang/Jasa</h1>
							</div>
							<div class="form" id="login-form"> </div>
                            atau
                            <a href="<?= site_url('regis_vendor') ?>">Daftar Baru Sebagai Vendor</a>
						</div>
					</div>
				</div>

			</div>

	      </div>

	    </div>

	</section> -->
	<script>
	    var base_url = "<?php echo base_url()?>";
	    var site_url = "<?php echo site_url()?>";
	</script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.imask.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/form.js');?>"></script>
	<script type="text/javascript">
	    $(document).ready(function(e) {
	        var data = $('#login-form').form({
	            url: '<?php echo site_url('main/check'); ?>',
	            form: [{
	                field: 'username',
	                type: 'text',
	                placeholder: 'Username'
	            }, {
	                field: 'password',
	                type: 'password',
	                placeholder: 'Password'
	            }],
	            button: [{
	                type: 'submit',
	                label: 'LOGIN',
	                field: 'submit',
	                class: 'buttonBlock is-expand'
	            }],
	            onError: function(xhr) {
	            	if (xhr.url != '') {
	            		window.location = xhr.url
	            	}
	                this.errorMessage = xhr.message;
	            },
	            onSuccess: function(xhr) {
	            	
	                this.successMessage = xhr.message;
	                window.location = xhr.url;
	            }
	        });
	    })
	</script>
	<script>
  		$(document).ready(function() {
  			var lFollowX = 0,
			    lFollowY = 0,
			    x = 0,
			    y = 0,
			    friction = 1 / 30;

			function moveBackground() {
			  x += (lFollowX - x) * friction;
			  y += (lFollowY - y) * friction;
			  
			  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

			  $('.bg').css({
			    '-webit-transform': translate,
			    '-moz-transform': translate,
			    'transform': translate
			  });

			  window.requestAnimationFrame(moveBackground);
			}

			$(window).on('mousemove click', function(e) {

			  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
			  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
			  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
			  lFollowY = (10 * lMouseY) / 100;

			});

			moveBackground();
  		})
  	</script>	
</body>
</html>

