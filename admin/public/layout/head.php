<?php
$variable = array();
function base(){
    echo str_replace("index.php","",$_SERVER['PHP_SELF']);
}
$variable = explode("/", $_SERVER['QUERY_STRING']);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin board</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../styles/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../styles/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../styles/assets/css/metisMenu.css">
    <link rel="stylesheet" href="../styles/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../styles/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../styles/assets/css/typography.css">
    <link rel="stylesheet" href="../styles/assets/css/default-css.css">
    <link rel="stylesheet" href="../styles/assets/css/styles.css">
    <link rel="stylesheet" href="../styles/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../styles/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>