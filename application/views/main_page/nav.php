<nav class="nav">
	<div class="row">
		<div class="col-4 d-flex ai-center">
			<div class="nav-menu fullmenu-toggle">
				<span class="top"></span>
				<span class="middle"></span>
				<span class="middle"></span>
				<span class="bottom"></span>
			</div>
		</div>
		<div class="col-4 d-flex jc-center">
			<img src="<?php echo base_url('main_assets/assets/images/logo.png') ?>" alt="" class="nav-logo" onclick="location.href='<?php echo base_url() ?>'">
		</div>
		<div class="col-4 d-flex ai-center">
			<div class="nav-booking ml-auto" onclick="window.open('https://www.discoverasr.com/en/others/indonesia/pesona-alam-resort-spa', '_blank')">
				<span>book now</span>
			</div>
		</div>
	</div>
</nav>

<div class="fullmenu">
	<img src="<?php echo base_url('main_assets/assets/images/logo.png') ?>" alt="" class="fullmenu-logo">
	<div class="logo-group">
		<img src="<?php echo base_url('main_assets/assets/images/logo-all-sedayu.png') ?>" alt="" class="">
		<img src="<?php echo base_url('main_assets/assets/images/logo-tauzia.png') ?>" alt="" class="">
	</div>
	<div class="inner">
		<div class="fullmenu-item" onclick="location.href='<?php echo base_url() ?>'">
			<span>home</span>
		</div>
		<div class="fullmenu-item" onclick="location.href='<?php echo site_url('menu/news') ?>'">
			<span>news</span>
		</div>
		<div class="fullmenu-item" onclick="location.href='<?php echo site_url('menu/facilities') ?>'">
			<span>facilities</span>
		</div>
		<div class="fullmenu-item" onclick="location.href='<?php echo site_url('menu/rooms_villas') ?>'">
			<span>rooms & villas</span>
		</div>
		<div class="fullmenu-item" onclick="location.href='<?php echo site_url('menu/meeting') ?>'">
			<span>meeting & events</span>
			<!-- <div class="submenu">
				<div class="submenu-item">meeting</div>
				<div class="submenu-item">event</div>
			</div> -->
		</div>
		<div class="fullmenu-item long-title" onclick="location.href='<?php echo site_url('menu/activities') ?>'">
			<span>Activities</span>
		</div>
		<!-- <div class="fullmenu-item">
			<span>gallery</span>
		</div> -->
		<div class="fullmenu-item" onclick="location.href='<?php echo site_url('menu/offers') ?>'">
			<span>offers</span>
		</div>
		<div class="fullmenu-item" onclick="location.href='<?php echo site_url('menu/contact') ?>'">
			<span>contact</span>
		</div>
		<div class="fullmenu-item" onclick="location.href='<?php echo site_url('main/login') ?>'">
			<span>login to cms</span>
		</div>
	</div>
</div>

<div class="book-now">
	<div class="toggle-button">
		<span>book a room</span>
	</div>
	<div class="content">
		<div class="row">
			<div class="col-3">
				<div class="form-control">
					<label for="">arrival</label>
					<input type="date">
				</div>
			</div>
			<div class="col-3">
				<div class="form-control">
					<label for="">departure</label>
					<input type="date">
				</div>
			</div>
			<div class="col-3">
				<div class="form-control">
					<label for="">promo code</label>
					<input type="text" placeholder="EX: SUNDAY01">
				</div>
			</div>
			<div class="col-3">
				<div class="button-wrapper">
					<input type="submit" value="book now">
				</div>
				<p>Amend/Cancel Reservation</p>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://ibooking.superghs.com/tauzia/widget.legacy.js?client=tauzia&layout=2&destination=false&property=pesona-alam&format=d/M/Y"></script>
<style type="text/css">
	#ibooking-widget .ibooking-form .ibooking-row .ibooking-col-2 button {
		z-index: 2;
	}
</style>
<div id="ibooking-widget" class=""></div>
<div id="ibooking-widget-toggle" onclick="window.open('https://www.discoverasr.com/en/others/indonesia/pesona-alam-resort-spa', '_blank')"></div>