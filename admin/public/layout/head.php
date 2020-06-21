<?php
$variable = array();
//URL Variable
$variable = explode("/", $_SERVER['QUERY_STRING']);

//Logged in User details
$userDetails = user($_SESSION['user_id'], $_SESSION['usertype']);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>University of Rwanda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="images/layout/favicon.ico">
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
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <style>
        select.form-control:not([size]):not([multiple]) {
            height: calc(2.25rem + 8px);
        }
    </style>
</head>