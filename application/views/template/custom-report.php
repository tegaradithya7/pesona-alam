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

	<div class="custom-wrapper">
		
		<div class="report-wrapper">
			<?php for($i = 1 ; $i <= 6 ; $i++) { ?>
			<button class="custom-btn btn">
				Nama Perusahaan
				<label class="toggleButton">
				  <input type="checkbox" class="input">
				  <div>
				      <svg viewBox="0 0 44 44">
				          <path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
				      </svg>
				  </div>
				</label>
			</button>
			<?php } ?>

			<div class="report-bottom">
				<button class="select-btn">Select</button>
			</div>
		</div>

	</div>

</body>

	<script type="text/javascript" src="../source/js/vendors/jquery-3.3.1.js">
	</script>
	<script type="text/javascript" src="../source/js/vendors/jquery-ui.js">
	</script>
	<script>
		$(document).ready(function() {
			$(".btn").click(function() {
			    $(this).find(".input").trigger('click');
			}); 
		})
	</script>
</html>