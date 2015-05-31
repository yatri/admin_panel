<?php

/* Variable Initialization and validation */

// site title
$site_title = isset($site_title) ? $site_title : 'Android App/Game Challenge - Khudkila';

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- 
	// SITES GENERAL
	-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Puncoz Nepal">

    <!-- 
	// FAVICON
	-->
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url() ?>assets/sites/images/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/sites/images/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/sites/images/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>assets/sites/images/favicons/apple-icon-144x144.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>assets/sites/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/sites/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo base_url() ?>assets/sites/images/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url() ?>assets/sites/images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/sites/images/favicons/favicon.ico">

    <!-- 
	// TITLE
	-->
    <title><?php echo $site_title ?></title>

    <!-- 
	// STYLESHEETS
	-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/public/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Theme Core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/public/theme/css/style.css">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/public/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/public/vendor/animate.css">

    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/public/custom/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>assets/public/vendor/html5shiv.min.js"></script>
      <script src="<?php echo base_url() ?>assets/public/vendor/respond.min.js"></script>
    <![endif]-->
</head>