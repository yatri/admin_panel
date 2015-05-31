<?php

/* Variable Initialization and validation */

// page type from uri segment, array
$uri_segments = $this->uri->segment_array();
$uri_segments_1 = isset($uri_segments[1]) ? $uri_segments[1] : '';

?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/sites/images/khudkila-android-challenge.png" alt="Android App/Game Challenge"></a>
		</div><!-- navbar-header -->
		<div class="collapse navbar-collapse">
			<a class="navbar-btn btn btn-success pull-right hidden-sm hidden-xs" href="<?php echo site_url('register') ?>">Register Now</a>
			<ul class="nav navbar-nav navbar-right">
				<li 
					<?php echo ($uri_segments_1 == 'home' || $uri_segments_1 == '') ? 'class="active"' : '' ?>
					>
					<a href="<?php echo base_url() ?>">Home</a>
				</li>
				<li 
					<?php echo ($uri_segments_1 == 'about') ? 'class="active"' : '' ?>
					>
					<a href="<?php echo site_url('about') ?>">About</a>
				</li>
				<li 
					<?php echo ($uri_segments_1 == 'rules') ? 'class="active"' : '' ?>
					>
					<a href="<?php echo site_url('rules') ?>">Rules</a>
				</li>
				<li 
					<?php echo ($uri_segments_1 == 'contact_us') ? 'class="active"' : '' ?>
					>
					<a href="<?php echo site_url('contact') ?>">Contact</a>
				</li>
			</ul>
		</div><!-- navbar-collapse -->
	</div><!-- container -->
</nav><!-- navbar -->