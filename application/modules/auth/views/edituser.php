<div id="content">		
		
		<div id="contentHeader">
			<h1>Edit User</h1>
		</div> 
		<!-- #contentHeader -->	
		<?php  if(@$message){ ?>
			<div class="notify notify-error">
						
				<a class="close" href="javascript:;">×</a>
				
				<h3>Error Notifty</h3>
				
				<p><?php echo $message;?></p>
			</div>			
		<?php } ?>
		
		<div class="container">
			<?php //print_r($user); ?>
			
			<div class="grid-22">
				<?php echo form_open(uri_string()); foreach($user as $user){ ?>

		      <p>	<label>Center Name</label>
		      	<input type="text" value="<?php echo $user->center_name; ?>" id = "cname" name="cname">		            
		      </p>

		      <p>	<label>Contect Person</label>
		      		<input type="text" value="<?php echo $user->contact_person; ?>" id = "contactperson" name="contactperson">		            
		      </p>

		      <p>	<label>Telephone</label>
		      		<input type="text" value="<?php echo $user->phone; ?>" id = "telephone" name="telephone">		            
		      </p>

		      

		      <p>	<label>Mobile</label>
		      		<input type="text" value="<?php echo $user->mobile; ?>" id = "mobile" name="mobile">	            
		      </p>

		      <p>	<label>Discrict</label>
		      		<input type="text" value="<?php echo $user->district; ?>" id = "district" name="district">	            
		      </p>

		      <p>	<label>VDC/MUN</label>
		      		<input type="text" value="<?php echo $user->vdc; ?>" id = "vdc" name="vdc">	            
		      </p>

		       <p>	<label>Ward</label>
		      		<input type="text" value="<?php echo$user->ward; ?>" id = "ward" name="ward">	            
		       </p>
		        
		         <p>	<label>Password</label>
		       		<input type="password"  id = "password" name="password">	            
		        </p>
		        <p>	<label>Confirm Password</label>
		       		<input type="password"  id = "password_confirm" name="password_confirm">

		       	</p>
					 <h3><?php echo lang('edit_user_groups_heading');?></h3>
					<?php foreach ($groups as $group):?>
					<label class="checkbox">
					<?php
						$gID=$group['id'];
						$checked = null;
						$item = null;
						foreach($currentGroups as $grp) {
							if ($gID == $grp->id) {
								$checked= ' checked="checked"';
							break;
							}
						}
					?>
					<input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
					<?php echo $group['name'];?>
					</label>
					<?php endforeach?>

				      <?php echo form_hidden('id', $user->id);?>
				      <?php echo form_hidden($csrf); ?>

				      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>

				<?php echo form_close(); } ?>

				
				
								
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