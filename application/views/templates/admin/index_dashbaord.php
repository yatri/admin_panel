<?php $this->load->view('templates/admin/partials/html_head') ?>

<body>

    <div id="wrapper">

        <!-- Dashboard Side Nav -->
        <?php $this->load->view('templates/admin/partials/dashboard_side_nav') ?>

        <div id="page-wrapper" class="gray-bg">
            
            <!-- Dashboard Top Nav -->
            <div class="row border-bottom">                
                <?php $this->load->view('templates/admin/partials/dashboard_top_nav') ?>
            </div>

            <!-- Main Content -->
            <?php echo $main_content_page ?>

            <!-- Footer -->
            <?php $this-> ?>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>


</body>

</html>
