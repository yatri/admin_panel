<div id="content">		
		
		<div id="contentHeader">
			<h1>User Management</h1>
		</div> <!-- #contentHeader -->	
		
		<div class="container">
			<?php //var_dump($users); die();?>
			
			<div class="grid-22">
				
				<div class="widget widget-table">
					
					<div class="widget-header">
						
					</div> <!-- .widget-header -->
					
					<div class="widget-content">
						<table class="table table-bordered table-striped data-table">
						<thead>
							<tr>
								<th>User_ID</th>
								<th>Center Name</th>
								<th>Contact Person</th>
								<th>Telephone</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>District</th>
								<th>VDC/MUN</th>
								
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $user):?>
								<tr>
									<td><?php echo $user->username;?></td>
									<td><?php echo $user->center_name;?></td>
									<td><?php echo $user->contact_person;?></td>
									<td><?php echo $user->phone;?></td>
									<td><?php echo $user->email;?></td>
									<td><?php echo $user->mobile;?></td>
									<td><?php echo $user->district;?></td>
									<td><?php echo $user->vdc;?></td>									
									<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
									<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
							</tr>
						<?php endforeach;?>														
						</tbody>
					</table>	

						
					</div> <!-- .widget-content -->
					
				</div> <!-- .widget -->	
				<!-- <p class="btn btn-success"><?php echo anchor('auth/create_user', lang('index_create_user_link'))?></p>
				<p class="btn btn-success"><?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p> -->
								
			</div> <!-- .grid -->			
			
			
			
			
			
		</div> <!-- .container -->
		
	</div> <!-- #content -->
	
	<div id="topNav">
		 <ul>
		 	<li>
		 		
		 		
		 		<div id="menuProfile" class="menu-container menu-dropdown">
					<div class="menu-content">
						<ul class="">
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;">Edit Settings</a></li>
							<li><a href="javascript:;">Suspend Account</a></li>
						</ul>
					</div>
				</div>
	 		</li>
		 	
		 	<li><a href="<?php echo site_url('auth/logout');?>">Logout</a></li>
		 </ul>
	</div> <!-- #topNav -->
	
	
	
	
</div> <!-- #wrapper -->