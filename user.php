<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');
if (strlen($_SESSION['obcsuid']==0)) {
  header('location:logout.php');
  } else{

$uid=$_SESSION['obcsuid'];
$sql=" SELECT * FROM  tbluser where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{  $cnt=$cnt+1;}
}             
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
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="gh/masterkn48/1saved_css_old_projects/cdn/css/bootstrap.min.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="css/sdb.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="css2a1f4.css?family=Open+Sans&amp;display=swap">
        <link href="cssea9f.css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="css/styles.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link rel="icon" href="../ico.ico">
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
                <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-ash">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="true" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a aria-current="page" class="navbar-brand active" href="../.">
                            <img alt="brand" src="../img/Photos/ico.jpg" style="height: 100px; max-width: 140px; margin-top: -10px;">
                        </a>
                        <div class="navbar-collapse collapse show" id="navbarTogglerDemo03" style="">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="btn btn-primary-outline text-bold waves-effect waves-light" href="#" target="_blank" rel="noopener noreferrer">Connect via WhatsApp</a>
                                </li>
                                <li class="nav-item" style="margin-top: 5px;">
                                    <a class="nav-link waves-effect waves-light" href="../users">
                                        Users <span class="sr-only"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-light" href="../.">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-light" href="../about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact" class="nav-link waves-effect waves-light">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <span class="navbar-text ml-auto white-text">
                                        <a class="nav-link line" href="client/profile" aria-current="page">Dashboard</a>
                                    </span>
                                </li>
                                <li class="nav-item ml-2">
                                  <a href="../logout">  <span class="ui red button" style="cursor: pointer; color: rgb(255, 255, 255);">Signout</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="m-4">
                    <div class="container">
                        <h2 class="mt-5 mb-5">FindMyBizz Dashboard</h2>
                        <p>Profile</p>
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-thumbnail" src="<?php echo 'upload/'.$row->imagename?>" alt="Tech Stud" style="height: 200px; width: auto;">
                            </div>
                            <div class="col-md-8">
                                <div class="lead mt-2">
                                    <p>Hello <?php echo $row->Name?></p>
                                    <p>
                                        <strong class="text-black text-bold">Email:</strong>
                                        <?php echo $row->Email?>
                                    </p>
                                    <p>
                                        <strong class="text-black text-bold">Phone Number:</strong>
                                        <?php echo $row->phone?>
                                    </p>
                                    <p>
                                        <strong class="text-black text-bold">Address:</strong><?php echo $row->address?>
                                        <strong class="text-black text-bold">LGA:</strong><?php echo $row->lga?> 
                                        <strong class="text-black text-bold">City:</strong><?php echo $row->city?>
                                    </p>
                                    <p>
                                        <strong class="text-black text-bold">Business Category:</strong>
                                        <?php echo $row->category?>
                                    </p>
                                    <p>
                                        <strong class="text-black text-bold">Whatsapp Phone number:</strong>
                                        <?php echo $row->whatsapp_number?>
                                    </p>
                                    <p>Joined <?php echo $row->DateReg?></p>
                                </div>
                                <div class="d-inline-block">
                                    <a class="btn btn-raised btn-info mr-5" href="create/post">Follow</a>
                                    </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col md-12 mt-5 mb-5">
                                <hr>
                                <p class="lead"><?php echo $row->about?></p>
                                <hr>
                                <div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="text-primary">0 Jobs for you</h3>
                                            <hr>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="text-primary">0 Message</h3>
                                            <hr>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="text-primary">1 Service List</h3>
                                            <hr>
                                            <div>
                                                <div>
                                                    <a href="#">
                                                        <div>
                                                            <p class="lead"><?php echo $row->about?></p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>
                 <div style="padding: 60px 0px;">
                    <section id="footer">
                        <div class="container">
                            <div class="row text-sm-left text-md-left">
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <h6 class="text-white text-start">FindMyBizz Bizconnect is a business directory designed to enable users find artisans and business owners within their location easily. It provides skilled artisans and business owners the opportunity to be showcased to the world.</h6>
                                 </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <h5>Contact</h5>
                                    <p class="text-white text-bold text-start">
                                        <i class="fa fa-inbox"></i>
                                        <strong>Email:</strong>
                                        info@abtbizconnect.com
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
                                            <a href="../.">
                                                <i class="fa fa-angle-double-right"></i>
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../about">
                                                <i class="fa fa-angle-double-right"></i>
                                                About
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../faq">
                                                <i class="fa fa-angle-double-right"></i>
                                                FAQ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../contact">
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
                                    <img src="../img/Photos/ico.jpg" width="100" height="100">
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
        <script src="gh/masterkn48/1saved_css_old_projects/cdn/js/jquery-3.4.1.min.js"></script>
        <script src="gh/masterkn48/1saved_css_old_projects/cdn/js/popper.min.js"></script>
        <script src="gh/masterkn48/1saved_css_old_projects/cdn/js/bootstrap.min.js"></script>
        <script src="npm/bootstrap%405.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="gh/masterkn48/1saved_css_old_projects/cdn/js/sdb.min.js"></script>
        <script src="static/js/3.4d37d3c6.chunk.js"></script>
        <script src="static/js/main.7a7640a2.chunk.js"></script>
        <div class="hiddendiv common"></div>
    </body>
</html>

