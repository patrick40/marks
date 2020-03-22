<?php
require_once ("../functions/session.php");
require_once ("../functions/db_connection.php");
require_once ("../functions/functions.php");
require_once ("functions/functions.php");

if(!isset($_SESSION['user_id'])){
    header("Location: functions/logout.php");
}

?>
<!doctype html>
<html class="no-js" lang="en">

<?php require_once ("public/layout/head.php"); ?>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <?php require_once ("public/layout/side_menu.php"); ?>
        <div class="main-content">
            <?php require_once ("public/layout/top_menu.php"); ?>
            <div class="main-content-inner">
                <div class="row">
                    <?php require_once ("url_controller.php"); ?>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-area">
                <p>© Copyright <?php echo date('Y'); ?>. All right reserved.</p>
            </div>
        </footer>
    </div>

    <script src="../styles/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../styles/assets/js/popper.min.js"></script>
    <script src="../styles/assets/js/bootstrap.min.js"></script>
    <script src="../styles/assets/js/owl.carousel.min.js"></script>
    <script src="../styles/assets/js/metisMenu.min.js"></script>
    <script src="../styles/assets/js/jquery.slimscroll.min.js"></script>
    <script src="../styles/assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script> -->
    <!-- start highcharts js -->
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
    <!-- start zingchart js -->
    <!-- <script src="https://cdn.zingchart.com/zingchart.min.js"></script> -->
    <!-- <script> -->
    <!-- zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/"; -->
    <!-- ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"]; -->
    <!-- </script> -->
    <!-- all line chart activation -->
    <!-- <script src="../styles/assets/js/line-chart.js"></script> -->
    <!-- all pie chart -->
    <!-- <script src="../styles/assets/js/pie-chart.js"></script> -->
    <!-- others plugins -->
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="../styles/assets/js/plugins.js"></script>
    <script src="../styles/assets/js/scripts.js"></script>
</body>

</html>
