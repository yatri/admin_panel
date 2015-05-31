<div id="content">		
		
		<div id="contentHeader">
			<h1>Edit User</h1>
		</div> <!-- #contentHeader -->	
		
		<div class="container">
			
			
			<div class="grid-22">
				<?php echo form_open(current_url());?>

			      <p>
			            <?php echo lang('create_group_name_label', 'group_name');?> <br />
			            <?php echo form_input($group_name);?>
			      </p>

			      <p>
			            <?php echo lang('edit_group_desc_label', 'description');?> <br />
			            <?php echo form_input($group_description);?>
			      </p>

			      <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>

			<?php echo form_close();?>

				
				
								
			</div> <!-- .grid -->			
			
		</div> <!-- .container -->
		
	</div> <!-- #content -->
	
	<div id="topNav">
		 <ul>
		 	<li>
		 		
		 		
		 		<div id="menuProfile" class="menu-container menu-dropdown">
					
				</div>
	 		</li>
		 	
		 	<li><a href="<?php echo site_url('auth/logout');?>">Logout</a></li>
		 </ul>
	</div> <!-- #topNav -->
	
	
	
	
</div> <!-- #wrapper -->