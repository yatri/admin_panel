<div id="content">		
		
		<div id="contentHeader">
			<h1>Edit User</h1>
		</div> <!-- #contentHeader -->	
		
		<div class="container">
			
			
			<div class="grid-22">
			<?php echo form_open("auth/deactivate/".$user->id);?>

				  <p>
				  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
				    <input type="radio" name="confirm" value="yes" checked="checked" />
				    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
				    <input type="radio" name="confirm" value="no" />
				  </p>

				  <?php echo form_hidden($csrf); ?>
				  <?php echo form_hidden(array('id'=>$user->id)); ?>

				  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

			<?php echo form_close();?>			
				
								
			</div> <!-- .grid -->			
			
		</div> <!-- .container -->
		
	</div> <!-- #content -->
	
	<div id="topNav">
		 <ul>
		 	<li>
		 		
		 		
		 		
	 		</li>
		 	
		 	<li><a href="<?php echo site_url('auth/logout');?>">Logout</a></li>
		 </ul>
	</div> <!-- #topNav -->
	
	
	
	
</div> <!-- #wrapper -->