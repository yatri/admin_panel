<?php

/* Variable Initialization and validation */

// Path to the public templates and path
$partial_path = 'templates/public/partials/';

// view of individual module
$module_view = isset($module_view) ? $module_view : show_404();

?>
<?php $this->load->view($partial_path.'html_head') ?>
<body>

	<!-- 
	// TOP NAVIGATION
	-->
	<?php $this->load->view($partial_path.'navbar') ?>

	<!-- 
	// MAIN WRAPPER
	-->
	<div class="wrapper">
		
		<!-- 
		// PAGE SPECIFIC VIEW
		-->
		<?php $this->load->view($module_view) ?>

		<!-- 
		// SPONSORS
		-->
		<?php $this->load->view($partial_path.'sponsors') ?>

		<!-- 
		// QUOTES
		-->
		<?php $this->load->view($partial_path.'quotes') ?>

	</div><!-- wrapper -->

	<!-- 
	// FOOTER
	-->
	<?php $this->load->view($partial_path.'footer') ?>

	<!-- 
	// SCRIPTS
	-->
	<?php $this->load->view($partial_path.'scripts') ?>

</body>
</html>