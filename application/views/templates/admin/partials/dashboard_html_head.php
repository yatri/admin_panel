<!-- 
    Basic Site's Information
-->
<meta charset="utf-8">
<?php echo meta('viewport', 'width=device-width, initial-scale=1.0'); ?>
<title><?php echo $page_info['title'] ?></title>
<?php
$metaData = array(
            array(
                'name'      => 'robots',
                'content'   => 'noindex, nofollow'
            ),
            array(
                'name'      => 'keywords',
                'content'   => $page_info['meta_keywords']
            ),
            array(
                'name'      => 'description',
                'content'   => $page_info['meta_description']
            ),
            array(
                'name'      => 'application-name',
                'content'   => 'admin-panel'
            ),
            array(
                'name'      => 'author',
                'content'   => 'Puncoz Nepal [http://www.puncoz.com]'
            )
        );
echo meta($metaData);
?>

<!-- 
    FAVICON
-->
<?php echo link_tag('assets/admin/custom/img/favicon.ico', 'shortcut icon', 'image/icon') ?>

<!-- 
    Style Sheets
-->
<?php
    echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css');
    echo link_tag('assets/vendor/font-awesome/css/font-awesome.min.css');
    echo link_tag('assets/vendor/animate.css');
    echo link_tag('assets/admin/theme/css/style.css');
    echo link_tag('assets/admin/custom/stylesheets/style.css');
?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="<?php echo base_url() ?>assets/vendor/html5shiv.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/respond.min.js"></script>
<![endif]-->