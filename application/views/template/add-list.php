<!DOCTYPE html>
<html lang="en">
<head>
    <title>Z - A</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../source/scss/main.css" />
    <!-- <link rel="stylesheet" href="assets/css/vendors/jquery-ui.css" /> -->
    <link rel="stylesheet" href="../source/vendors/font-awesome/css/all.css" />

    <style>
	
	</style>
</head>
<body>

	<div class="list-wrapper">
		<ul>
			<li class="list">
				<div class="name">
					PT Firmusindo Infotama
				</div>
				<div class="item">
					Rp. 300.000.000
				</div>
				<div class="item">
					<a href="#" class="add-button add-js">
						<span class="icon"><i class="fa fa-plus"></i></span>
						<span id="fold_p">Tambah Vendor</span>
					</a>
				</div>
			</li>
		</ul>
	</div>

	<script type="text/javascript" src="../source/js/vendors/jquery-3.3.1.js">
	</script>
	<script type="text/javascript" src="../source/js/vendors/jquery-ui.js">
	</script>
	<!-- <script type="text/javascript" src="../source/js/app.js"></script> -->
	<script>
		$(document).ready(function() {

		  var width = $('.team-slider-item').width();
		  var height = $('.team-slider-item').height();
		  $('.team-slider').css({'overflow':'hidden','height':height});
		  
		  $('.back').click(function(){
		  $('.team-slider-item:first-child').appendTo('.team-slider');    
		  });
		  
		    $('.forward').click(function(){
		  $('.team-slider-item:last-child').prependTo('.team-slider');    
		  });
		//   parallax
		  $(window).scroll(function() {
		    
		    var pheight = $(this).scrollTop();
		    console.log(pheight);
		    $('.team').css('transform' , 'translate(pheight)');
		    
		   }); 

			$('.add-js').click(function() {
			  $('.list').toggleClass('added');
			}) 

			$(".add-js").click(function () {
		        $("#fold_p").fadeOut(function () {
		            $("#fold_p").text(($("#fold_p").text() == 'Tambah Vendor') ? 'Hapus Vendor' : 'Tambah Vendor').fadeIn();
		        });
		        $('.fa').toggleClass('fa-plus');
		        $('.fa').toggleClass('fa-minus');
		    })
		  
		});
	</script>

</body>
</html>