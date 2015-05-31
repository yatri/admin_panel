




<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

  <title>InfoDev CMS Login</title>

  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="author" content="" />   
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/reset.css" type="text/css" media="screen" title="no title" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/text.css" type="text/css" media="screen" title="no title" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/buttons.css" type="text/css" media="screen" title="no title" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-default.css" type="text/css" media="screen" title="no title" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/login.css" type="text/css" media="screen" title="no title" />
</head>

<body>

<div id="login">
  <br><br><br><br>
  <div id="login_panel">
  <?php echo form_open("auth/login");?>
      
      <div class="login_fields">
        <h4 style="color:red"><?php echo @$message ?></h4>
        <div class="field">
          <?php echo lang('login_identity_label', 'identity');?>
            <?php echo form_input($identity);?>
        </div>
        
        <div class="field">
          <?php echo lang('login_password_label', 'password');?>
            <?php echo form_input($password);?>
        </div>
        
          
          <?php echo lang('login_remember_label', 'remember');?>
            <div class="compress" style="margin-left:-40px;margin-top:-20px;"><?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?></div>
        
      </div> <!-- .login_fields -->
      
      <p  style="margin-left:15px;"><?php echo form_submit('submit', lang('login_submit_btn'));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <!-- <a class = "btn btn-small" href="forgot_password"><?php //echo lang('register_user');?></a> -->
      </p>

      <!-- <p style="margin-left:15px;"><a  href="forgot_password"><?php //echo lang('login_forgot_password');?></a></p> -->
      <?php echo form_close();?>
  </div> <!-- #login_panel -->    
</div> <!-- #login -->

<script src="javascripts/all.js"></script>
</body>
</html>