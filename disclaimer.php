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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#0E2F56">
        <meta name="description" content="FindmyBiz | Artisan Local Directory">
        <meta name="author" content="Brian">
        <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="gh/masterkn48/1saved_css_old_projects/cdn/css/bootstrap.min.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="css/sdb.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="https://fonts.googleapis.com/css2?family=Open+Sans&amp;display=swap">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="css/styles.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link rel="icon" href="ico.ico">
        <title>FindMyBizz | Artisan Local Directory</title>
        <link href="static/css/main.bb8ea5ff.chunk.css" rel="stylesheet">
        <script data-dapp-detection="">
            !function() {
                let e = !1;
                function n() {
                    if (!e) {
                        const n = document.createElement("meta");
                        n.name = "dapp-detected",
                        document.head.appendChild(n),
                        e = !0
                    }
                }
                if (window.hasOwnProperty("ethereum")) {
                    if (window.__disableDappDetectionInsertion = !0,
                    void 0 === window.ethereum)
                        return;
                    n()
                } else {
                    var t = window.ethereum;
                    Object.defineProperty(window, "ethereum", {
                        configurable: !0,
                        enumerable: !1,
                        set: function(e) {
                            window.__disableDappDetectionInsertion || n(),
                            t = e
                        },
                        get: function() {
                            if (!window.__disableDappDetectionInsertion) {
                                const e = arguments.callee;
                                e && e.caller && e.caller.toString && -1 !== e.caller.toString().indexOf("getOwnPropertyNames") || n()
                            }
                            return t
                        }
                    })
                }
            }();
        </script>
        <link rel="stylesheet" type="text/css" href="static/css/5.2a04f3b8.chunk.css">
        <script charset="utf-8" src="static/js/5.1484a742.chunk.js"></script>
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
        <script charset="utf-8" src="static/js/9.99848f61.chunk.js"></script>
        <script charset="utf-8" src="static/js/11.bdea9503.chunk.js"></script>
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
              <div><div class="container"><h3 class="text-center">Disclaimer for ABT Integrated services ltd</h3><p>If you require any more information or have any questions about our site's disclaimer, please feel free to contact us by email at akokotaj@gmail.com .</p><h2>Disclaimers for A.B.T BizConnect</h2><p>All the information on this website - abtbizconnect.com - is published in good faith and for general information purpose only. A.B.T BizConnect does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (A.B.T BizConnect), is strictly at your own risk. A.B.T BizConnect will not be liable for any losses and/or damages in connection with the use of our website.</p><p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.</p><p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</p><h2>Consent</h2><p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p><h2>Update</h2><p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p></div></div>
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
                                            <a href="disclaimer">
                                                <i class="fa fa-angle-double-right"></i>
                                                Disclaimer
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <h5>Recent Listing</h5>
                                    <ul class="list-unstyled quick-links">
                        <?php 
                        $find="SELECT * FROM post";
                        $query = $dbh->prepare($find);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                         $cnt=1;
                        if ($query->rowCount()<=3) {
                            foreach($results as $row)
                        {?> 
                                                                                   <li>
                                            <a href="#">
                                                <i class="fa fa-angle-double-right"></i>
                                                <?php echo $row->business_name;?>
                                            </a>
                                        </li><?php $cnt=$cnt+1;}} ?>
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