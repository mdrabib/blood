<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $userdata=$this->session->get_userdata()['ud'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donor BD</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fontawesome/css/fontawesome-all.min.css') ?>">
    <!-- animation css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/animation/css/animate.min.css') ?>">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="<?= base_url('') ?>" class="b-brand">
                    <div><!--  class="b-bg" -->
                        <img src="<?= base_url('assets/images/logo.png') ?>" alt="" height="50px">
                        <!-- <i class="feather icon-trending-up"></i> -->
                    </div>
                    <span class="b-title">Donor BD</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <!-- <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li> -->
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="<?= base_url() ?>dashboard" class="nav-link "><span class="pcoded-micon"><img src="<?= base_url('assets/images/dashboard.png') ?>" alt="" style="height: 22px;"></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><img src="<?= base_url('assets/images/blood-donation.png') ?>" alt="" style="height: 22px;"></span><span class="pcoded-mtext">Donor</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="<?= base_url('donor') ?>">List</a></li>
                            <li><a href="<?= base_url() ?>donor/add">Add Donor</a></li>
                        </ul>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><img src="<?= base_url('assets/images/blood.png') ?>" alt="" style="height: 22px;"></span><span class="pcoded-mtext">Patient</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="<?= base_url('patient') ?>">List</a></li>
                        </ul>
                    </li>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active pcoded-hasmenu">
                        <a href="javascript:" class="nav-link"><span class="pcoded-micon"><img src="<?= base_url('assets/images/stock-remove.png') ?>" alt="" style="height: 30px; margin-left:-4px;"></span><span class="pcoded-mtext">Blood Stock</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="<?= base_url('stock') ?>">List</a></li>
                            <li><a href="<?= base_url() ?>stock/add">Store Blood</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
                        </li>
                        <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Components</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="bc_button.html" class="">Button</a></li>
                                <li class=""><a href="bc_badges.html" class="">Badges</a></li>
                                <li class=""><a href="bc_breadcrumb-pagination.html" class="">Breadcrumb & paggination</a></li>
                                <li class=""><a href="bc_collapse.html" class="">Collapse</a></li>
                                <li class=""><a href="bc_tabs.html" class="">Tabs & pills</a></li>
                                <li class=""><a href="bc_typography.html" class="">Typography</a></li>


                                <li class=""><a href="icon-feather.html" class="">Feather<span class="pcoded-badge label label-danger">NEW</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Forms & table</label>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                            <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form elements</span></a>
                        </li>
                        <li data-username="Table bootstrap datatable footable" class="nav-item">
                            <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Table</span></a>
                        </li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Chart & Maps</label>
                        </li>
                        <li data-username="Charts Morris" class="nav-item"><a href="chart-morris.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a></li>
                        <li data-username="Maps Google" class="nav-item"><a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a></li> -->
                    <li data-username="Disabled Menu" class="nav-item disabled">
                        <a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">Datta Able</span>
                </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
                <!-- style="background-image: url('assets/images/vein-blood-red-cell-biology-medical-vector-25337920.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;" -->
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <!-- <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown"> -->
                            <!-- <i class="icon feather icon-settings"></i> -->
                            <!-- </a> -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('upload/profile/'.$userdata->photo); ?>" class="img-radius" alt="User-Profile-Image" height="50px" width="50px">
                                <span><?= $userdata->name ?></span>
                            <!-- <a href="auth-signin.html" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a> -->
                            </a>
                            
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <ul class="pro-body">
                                <li><a href="<?= base_url('profile') ?>" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="<?= base_url('logout') ?>" class="dropdown-item"><i class="feather icon-log-out"></i> Logout</a></li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <?php $this->load->view($page); ?>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
                <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="<?= base_url('assets/js/vendor-all.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/pcoded.min.js') ?>">
</script>

</body>
</html>
