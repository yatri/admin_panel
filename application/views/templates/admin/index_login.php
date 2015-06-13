<?php echo doctype('html5') ?>
<html lang="en">
<head>

    <?php $this->load->view('templates/admin/partials/login_html_head') ?>
    
</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <div class="ibox-content">

                    <?php
                    $success_msg = $this->session->flashdata('success_msg');
                    if($success_msg != ''):
                    ?>
                    <div class="alert alert-success alert-dismissable">
                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $success_msg ?>
                    </div>
                    <?php endif; ?>
                    <?php
                    $error_msg = (validation_errors()) ? validation_errors() : $this->session->flashdata('error_msg');                   
                    if($error_msg != ''):
                    ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $error_msg ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php
                    $attributes = array(
                                    'class' => 'm-t',
                                    'role'  => 'form',
                                    'name'  => 'login_form',
                                    'id'    => 'login_form'
                                );
                    $action = site_url('login');
                    echo form_open($action, $attributes);
                    ?>
                        <div class="form-group">
                            <input type="text" name="identity" id="identity" class="form-control" placeholder="Username" required="">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
                        </div>

                        <div class="form-group">
                            <label> <input type="checkbox" name="rememberme" id="rememberme" class="i-checks"> &nbsp;&nbsp;&nbsp;Remember me </label>
                        </div>

                        <input type="submit" name="login_form_submit" id="login_form_submit" value="Login" class="btn btn-primary block full-width m-b">

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                    <?php echo form_close() ?>

                </div> <!-- box-content -->
            </div>

        </div><!-- row -->
        <hr/>
        <div class="row">
            <div class="col-md-2 col-md-offset-3">
               <small>&copy; 2015</small>
            </div>
            <div class="col-md-4 text-right">
                Example Company
            </div>
        </div>
    </div>

    <!--
        SCRIPTS
    -->
    <?php $this->load->view('templates/admin/partials/login_scripts') ?>

</body>

</html>
