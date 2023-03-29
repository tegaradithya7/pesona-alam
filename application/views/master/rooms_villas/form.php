<div class="mg-lg-12">

	<div class="block">

		<?php
		if ($action == 'add') {
			$url = 'save';
		} else {
			$url = 'update';
		}
		?>

		<div>
			<form action="<?php echo base_url('master/rooms_villas/preview/' . $url . '/' . $id) ?>" method="POST" enctype="multipart/form-data" id="tableGenerator">

			</form>
		</div>



	</div>

</div>