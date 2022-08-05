<?php
session_start();
define("ROW_PER_PAGE",4);
error_reporting(0);
include 'includes/dbconnect.php';
if (strlen($_SESSION['obcsuid']>0)) {


$uid=$_SESSION['obcsuid'];
$put= "<nav class='navbar navbar-fixed-top navbar-expand-lg navbar-light bg-ash'>
<div class='container-fluid'>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarTogglerDemo03' aria-controls='navbarTogglerDemo03' aria-expanded='true' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <a aria-current='page' class='navbar-brand active' href='.'>
        <img alt='brand' src='img/Photos/ico.jpg' style='height: 100px; max-width: 140px; margin-top: -10px;'>
    </a>
    <div class='navbar-collapse collapse show' id='navbarTogglerDemo03'>
        <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
            <li class='nav-item'>
                <a class='btn btn-primary-outline text-bold waves-effect waves-light' href='' target='_blank' rel='noopener noreferrer'>Connect via WhatsApp</a>
            </li>
            <li class='nav-item' style='margin-top: 5px;'>
                <a class='nav-link waves-effect waves-light' href='users'>
                    Users <span class='sr-only'></span>
                </a>
            </li>
        </ul>
        <ul class='navbar-nav mb-2 mb-lg-0'>
            <li class='nav-item'>
                <a class='nav-link waves-effect waves-light' href='.'>Home</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link waves-effect waves-light' href='about'>About</a>
            </li>
            <li class='nav-item'>
                <a href='#' class='nav-link waves-effect waves-light'>Contact</a>
            </li>
            <li class='nav-item'>
                <span class='navbar-text ml-auto white-text'>
                    <a class='nav-link line' href='client/profile' aria-current='page'>Dashboard</a>
                </span>
            </li>
            <li class='nav-item ml-2'>
                <a href='logout'>
                    <span class='ui red button' style='cursor: pointer; color: rgb(255, 255, 255);'>Signout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
</nav>";

  
}else {
    $out= "<nav class='navbar navbar-fixed-top navbar-expand-lg navbar-light bg-ash'>
    <div class='container-fluid'>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarTogglerDemo03' aria-controls='navbarTogglerDemo03' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <a aria-current='page' class='navbar-brand active' href='.'>
            <img alt='brand' src='img/Photos/ico.jpg' style='height: 100px; max-width: 140px; margin-top: -10px;'>
        </a>
        <div class='collapse navbar-collapse' id='navbarTogglerDemo03'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <a class='btn btn-primary-outline text-bold waves-effect waves-light' href='#' target='_blank' rel='noopener noreferrer'>Connect via WhatsApp</a>
                </li>
            </ul>
            <ul class='navbar-nav mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <a aria-current='page' class='nav-link line waves-effect waves-light' href='.'>Home</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link waves-effect waves-light' href='about'>About</a>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link waves-effect waves-light'>Contact</a>
                </li>
                <li class='nav-item ml-2'>
                    <div class='ui buttons'>
                        <a href='login'>
                            <button class='ui button'>Login</button>
                        </a>
                        <div class='or' data-text='or'></div>
                        <a href='signup'>
                            <button class='ui positive button'>Register</button>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#0E2F56">
        <meta name="description" content="FindMyBizz | Artisan Local Directory">
        <meta name="author" content="Brian">
        <link rel="manifest" href="manifest.json">
        <link rel="preload stylesheet" as="style" onload='this.onload=null,this.rel="stylesheet"' href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css"/>
        <link rel="preload stylesheet" as="style" onload='this.onload=null,this.rel="stylesheet"' href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="preload stylesheet" as="style" onload='this.onload=null,this.rel="stylesheet"'/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="preload stylesheet" as="style" onload='this.onload=null,this.rel="stylesheet"'/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="preload stylesheet" as="style" onload='this.onload=null,this.rel="stylesheet"'/>
        <link rel="preload stylesheet" as="style" onload='this.onload=null,this.rel="stylesheet"' href="https://cdn.jsdelivr.net/gh/masterkn48/1saved_css_old_projects/cdn/css/bootstrap.min.css"/>
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="gh/masterkn48/1saved_css_old_projects/cdn/css/bootstrap.min.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="css/sdb.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="css2a1f4.css?family=Open+Sans&amp;display=swap">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
    
        <link href="font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="css/styles.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link rel="icon" href="ico.ico">
        <title>FindMyBizz | Artisan Local Directory</title>
        <link href="static/css/main.bb8ea5ff.chunk.css" rel="stylesheet">
        <style type="text/css">
            /* Chart.js */
            @-webkit-keyframes chartjs-render-animation {
                from {
                    opacity: 0.99
                }

                to {
                    opacity: 1
                }
            }

            @keyframes chartjs-render-animation {
                from {
                    opacity: 0.99
                }

                to {
                    opacity: 1
                }
            }

            .chartjs-render-monitor {
                -webkit-animation: chartjs-render-animation 0.001s;
                animation: chartjs-render-animation 0.001s;
            }
        </style>
    </head>
    <body aria-busy="true">
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div id="root">
            <div id="main">
                <div>
                    <?php
                    if ($_SESSION['obcsuid']>0) {
                        echo $put;
                    }else {
                        echo $out;
                    }
                    
                    ?>
                </div>
                <div>
                    <section class="main-content bg-light py-4 mb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h2>About Us</h2>
                                                            <p>ABT MARKETING NIGERIA LTD is a firm registered with the Corporate Affairs Commission, with primary aim of growing businesses, trade and other commercial activities through the inevitable power of Contemporary Marketing, Media Participation, Trade And Business Connect, Real Estate Marketing, plus other Merchandise. We sell company's products and services to individuals, businesses and Government Organizations, Etc. While promoting the image of our clients to the general public through building a large customer base and sustaining the relationship with our relationship approach for future gains. Chains of our trades and services may be domestic and or international, starting with local and potential buyers in Nigeria and from across the west African region. findmybizz.com (is A product among many others of A.B.T Marketing Nigeria Limited) a Web page design as an advertising platform opportunities for Artisans and all business owners.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                 <div style="padding: 60px 0px;">
                    <section id="footer">
                        <div class="container">
                            <div class="row text-sm-left text-md-left">
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <h6 class="text-white text-start">FindMyBizz is a business directory designed to enable users find artisans and business owners within their location easily It provides skilled artisans and business owners the opportunity to be able to showcased to the world by offering free advertisement, artisans can post job ads and also advertise their products.</h6>
                                    
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <h5>Contact</h5>
                                    <p class="text-white text-bold text-start">
                                        <i class="fa fa-inbox"></i>
                                        <strong>Email:</strong>
                                        info@findmybizz.com
                                    </p>
                                    <p class="text-white text-bold text-start">
                                        <i class="fa fa-phone"></i>
                                        <strong>Telephone:</strong>
                                        08052959530
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3" style="padding-left: 5%;">
                                    <h5>Quick links</h5>
                                    <ul class="list-unstyled quick-links">
                                        <li>
                                            <a href=".">
                                                <i class="fa fa-angle-double-right"></i>
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about">
                                                <i class="fa fa-angle-double-right"></i>
                                                About
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faq">
                                                <i class="fa fa-angle-double-right"></i>
                                                FAQ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="">
                                                <i class="fa fa-angle-double-right"></i>
                                                Contact
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-double-right"></i>
                                                Disclaimer
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <h5>Recent Listing</h5>
                                    <ul class="list-unstyled quick-links">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-double-right"></i>
                                                One touch beauty
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-double-right"></i>
                                                Tim Donut Shop
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                                    <h5>2021 ©FindMyBizz. All right Reversed.</h5>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <script defer="defer" src="gh/masterkn48/1saved_css_old_projects/cdn/js/jquery-3.4.1.min.js"></script>
        <script defer="defer" src="gh/masterkn48/1saved_css_old_projects/cdn/js/popper.min.js"></script>
        <script defer="defer" src="gh/masterkn48/1saved_css_old_projects/cdn/js/bootstrap.min.js"></script>
        <script defer="defer" src="npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script defer="defer" src="js/scripts.js"></script>
        <script defer="defer" src="gh/masterkn48/1saved_css_old_projects/cdn/js/sdb.min.js"></script>
        <script src="static/js/3.4d37d3c6.chunk.js"></script>
        <script src="static/js/main.7a7640a2.chunk.js"></script>
        <div class="hiddendiv common"></div>
    </body>
</html>