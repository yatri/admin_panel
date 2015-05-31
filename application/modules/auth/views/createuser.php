<div id="content">		
		
		<div id="contentHeader">
			<h1>Create User</h1>
		</div> <!-- #contentHeader -->	
		
		<div class="container">
		<?php  if(@$message){ ?>
			<div class="notify notify-error">
						
				<a class="close" href="javascript:;">×</a>
				
				<h3>Error Notifty</h3>
				
				<p><?php echo $message;?></p>
			</div>			
		<?php } ?>
			<div class="grid-22">
				
				
				<?php echo form_open("auth/create_user");?>

		      <p>	<label>Center Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      		<input type="text" value="<?php echo @$name; ?>" id = "cname" name="cname">
		            
		      </p>

		      <p>	<label>Contect Person</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      		<input type="text" value="<?php echo @$contact_person; ?>" id = "contactperson" name="contactperson">		            
		      </p>

		      <p>	<label>Telephone</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      		<input type="text" value="<?php echo @$telephone; ?>" id = "telephone" name="telephone">		            
		      </p>

		      <p>	<label>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      		<input type="text" value="<?php echo @$email; ?>" id = "email" name="email">		            
		      </p>

		      <p>	<label>Mobile</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      		<input type="text" value="<?php echo @$mobile; ?>" id = "mobile" name="mobile">	            
		      </p>

		      <p>	<label>Discrict</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      		<input type="text" value="<?php echo @$district; ?>" id = "district" name="district">	            
		      </p>

		      <p>	<label>VDC/MUN</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      		<input type="text" value="<?php echo @$vdc; ?>" id = "vdc" name="vdc">	            
		      </p>

		       <p>	<label>Ward</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      		<input type="text" value="<?php echo @$ward; ?>" id = "ward" name="ward">	            
		       </p>
		        <p>	<label>User_id</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		       		<input type="text" value="<?php echo @$user_id; ?>" id = "user_id" name="user_id">	            
		        </p>
		         <p>	<label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		       		<input type="password" value="<?php echo @$password; ?>" id = "password" name="password">	            
		        </p>
		        <p>	<label>Confirm Password</label>&nbsp;&nbsp;&nbsp;&nbsp;
		       		<input type="password" value="<?php echo @$password_confirm; ?>" id = "password_confirm" name="password_confirm">	            
		        </p>


		      <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

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