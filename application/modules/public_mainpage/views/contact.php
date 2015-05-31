<!-- 
// TOPIC HEADER
-->
<div class="topic">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h1>Contact Us</h1>
			</div>
			<div class="col-sm-8">
				<ol class="breadcrumb pull-right hidden-xs">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li class="active">Contact Us</li>
				</ol>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div>
<!-- topic header -->

<div id="coming-soon">
	<div class="container">
		<div class="row">
			
			<!-- title -->
			<div class="col-sm-12">
				<h1 class="title-lg">
					<span>Website Coming Soon</span>
				</h1>
			</div><!-- title col -->				

		</div><!-- row -->
	</div><!-- container -->
</div>
<!-- News Updates -->

<!-- 
// REGISTRATION FORM
-->
<div id="registraion-form">
	<div class="container">
		<div class="row">

			<!-- title -->
			<div class="col-sm-12">
				<h1 class="title-lg">
					<span>Write a message</span>
				</h1>
				<?php 
				$success_msg = $this->session->flashdata('success_msg');
				if($success_msg != '' || ! empty($success_msg)):
				?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Success!</strong> <?php echo $success_msg ?>
				</div>
				<?php endif; ?>
				<?php 
				$error_msg = $this->session->flashdata('error_msg');
				if($error_msg != '' || ! empty($error_msg)):
				?>
				<div class="alert alert-warning alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Warning!</strong> <?php echo $error_msg ?>
				</div>
				<?php endif; ?>
			</div><!-- title col -->
			
			<form role="form" class="form-alt" method="post" action="<?php echo site_url('contact/message_submit') ?>">
				
				<div class="col-sm-6">
					<div class="form-group">
						<label for="team_name">Full Name <span class="text-red">*</span>
							<i class="fa fa-info-circle tooltips" data-toggle="tooltip" data-placement="right" title="Full Name."></i>
						</label>
						<input type="text" class="form-control" id="full_name" name="full_name" required>
					</div>
					<div class="form-group">
						<label for="team_name">Email <span class="text-red">*</span>
							<i class="fa fa-info-circle tooltips" data-toggle="tooltip" data-placement="right" title="Valid Email Address"></i>
						</label>
						<input type="text" class="form-control" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="team_name">Subject <span class="text-red">*</span>
							<i class="fa fa-info-circle tooltips" data-toggle="tooltip" data-placement="right" title="Subject"></i>
						</label>
						<input type="text" class="form-control" id="subject" name="subject" required>
					</div>

					<div class="form-group">
						<label for="team_name">Message <span class="text-red">*</span>
							<i class="fa fa-info-circle tooltips" data-toggle="tooltip" data-placement="right" title="Message"></i>
						</label>
						<textarea id="message" name="message" class="form-control" rows="9" required></textarea>
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Submit"/>
					</div>
				</div>

			</form>

		</div><!-- row -->
	</div><!-- container -->
</div>
<!-- registration form -->
