<?php echo doctype('html5') ?>
<html lang="en">
<head>

    <?php $this->load->view('templates/admin/partials/dashboard_html_head') ?>
    
</head>
<body>

    <div id="wrapper">

        <!--
            SIDE NAVIGATION BAR
        -->
        <?php $this->load->view('templates/admin/partials/dashboard_side_nav') ?>

        <div id="page-wrapper" class="gray-bg">
            
            <!--
                TOP NAVIGATION BAR
            -->
            <div class="row border-bottom">                
                <?php $this->load->view('templates/admin/partials/dashboard_top_nav') ?>
            </div>

            <!--
                MAIN CONTENT
            -->
            <?php echo $main_content_page ?>

            <!--
                FOOTER
            -->
            <?php $this->load->view('templates/admin/partials/dashboard_footer') ?>

        </div>
    </div>

    <!--
        SCRIPTS
    -->
    <?php $this->load->view('templates/admin/partials/dashboard_scripts') ?>

</body>

</html>
