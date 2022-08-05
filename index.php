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
                    <div>
                        <header class="masthead">
                            <div class="container position-relative">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6">
                                        <div class="text-center text-white">
                                            <h1 class="mb-5">Find Artisan and other businesses around you by using the Listings Button below</h1>
                                            <section class="search-sec">
                                                <div class="container">
                                                    <form action="listing" method="get">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                                                                        <button class="btn btn-warning wrn-btn m-0" type="submit">View Listings</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <section class="features-icons bg-light text-center">
                            <h2 class="mb-5">How it Works</h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                            <div class="features-icons-icon d-flex">
                                                <i class="bi bi-person m-auto text-warning"></i>
                                            </div>
                                            <h3>Locate and Hire an artisan</h3>
                                            <p class="lead mb-0">Find and connect with skilled artisans around you. </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                            <div class="features-icons-icon d-flex">
                                                <i class="bi bi-person-dash m-auto text-warning"></i>
                                            </div>
                                            <h3>Register your skill or business </h3>
                                            <p class="lead mb-0">Are you an artisan? <a href="signup.html"> Sign up </a>for free to register here.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                            <div class="features-icons-icon d-flex">
                                                <i class="bi-terminal m-auto text-warning"></i>
                                            </div>
                                            <h3>Advertise your products</h3>
                                            <p class="lead mb-0">Are you a business owner? And you need better outreach. Then register your business/products here for more reach out.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="features-icons bg-light text-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                            <div class="features-icons-icon d-flex">
                                                <i class="bi bi-layout-text-sidebar-reverse m-auto text-warning"></i>
                                            </div>
                                            <h3>Review listing services</h3>
                                            <p class="lead mb-0">Do you want to gain customer's trust and be seen by clients? Get customers rating and reviews to encourage people to interact with your business.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                            <div class="features-icons-icon d-flex">
                                                <i class="bi-terminal m-auto text-warning"></i>
                                            </div>
                                            <h3>Get a handyman Job or recruit someone today for your business.</h3>
                                            <p class="lead mb-0">Find job posts by skillful artisans here, or follow up with any other recruitment you like</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-grid gap-2">
                                            <a class="btn btn-primary" href="signup">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- row-per-page-starts -->
                        <div class="container">
                             <style type="text/css">
                            .try{
                                 width:300px;
                                font-family:arial;
                                letter-spacing:1px;
                                line-height:20px;
                                display: flex;
                            }
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
#keyword{border: #CCC 1px solid; 
    border-radius: 4px;
     padding: 7px;
     background:url("demo-search-icon.png") no-repeat center right 7px;
     width: 300%;
 }
.btn-page{margin-right:10px;padding:5px 10px; border: #CCC 1px solid; background:#FFF; border-radius:4px;cursor:pointer;}
.btn-page:hover{background:#F0F0F0;}
.btn-page.current{background:#F0F0F0;}
                        </style>
                        <!-- php code to search starts-->

<?php   
    $search_keyword = '';
    if(!empty($_POST['search']['keyword'])) {
        $search_keyword = $_POST['search']['keyword'];
    }
    $sql = 'SELECT * FROM post WHERE business_name LIKE :keyword OR lga LIKE :keyword OR category LIKE :keyword OR post_by LIKE :keyword ORDER BY id DESC ';
/* Pagination Code starts */
    $per_page_html = '';
    $page = 1;
    $start=0;
    if(!empty($_POST["page"])) {
        $page = $_POST["page"];
        $start=($page-1) * ROW_PER_PAGE;
    }
    $limit=" limit " . $start . "," . ROW_PER_PAGE;
    $pagination_statement = $dbh->prepare($sql);
    $pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pagination_statement->execute();

    $row_count = $pagination_statement->rowCount();
    if(!empty($row_count)){
        $per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
        $page_count=ceil($row_count/ROW_PER_PAGE);
        if($page_count>1) {
            for($i=1;$i<=$page_count;$i++){
                if($i==$page){
                    $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
                } else {
                    $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
                }
            }
        }
        $per_page_html .= "</div>";
    }
    

    $query = $sql.$limit;
    $look = $dbh->prepare($query);
    $look->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $look->execute();
    $result = $look->fetchAll();
?>

                        <!-- ends -->

                            <h2 class="mb-5 text-center">Featured Listing</h2>
                            <div class="container">
                                 <!-- view-all-post -->
                         <form name='frmSearch' action='' method='post'>
<div class="try" style='text-align:right;margin:20px 0px;'>
    <input type='text' name='search[keyword]' placeholder="Search for a particular Business or City" value="<?php echo $search_keyword; ?>" id='keyword' maxlength='25'>
</div>
                       
                            <!-- view-all-post -->
                       
<div class="row">
    <?php
    if(!empty($result)) { 
        foreach($result as $row) {
    ?>
<div class="col-md-4 mb-2">
<div class="card h-100">
<div class="card-body">
<img src="<?php echo 'client/upload/'.$row['image_name'];?>" alt="not-found" class="mg-fluid mb-3" style="height: 200px; width: 100%; background-color: rgb(14, 47, 86);">
<h5 class="card-title"><?php echo $row['business_name'];?></h5>
<p class="card-text">
</p><a href="listing" style="text-decoration:none;"><p><?php echo $row['category'];?></p></a>
<p></p>
<div class="card-text">
    <p>
        Contact: 
        <a class="btn btn-success waves-effect waves-light" href="https://api.whatsapp.com/send?phone=<?php echo $row['wnum'];?>" target="__blank">
            <img src="client/upload/whatsapp.png" width="20" height="20" alt="whatsapp">
        </a>
    </p>
    <p><?php echo $row['address'].' '.$row['LGA'].' '.$row['wnum'];?></p>
</div>
</div></div></div>

<?php
        }
    }
    ?>

<!-- new-card -->

</div>
<!-- code to display data from database of Stored listings -->
  <?php echo $per_page_html; ?>
  </form>
</div>
                            </div>
                            <!-- row-per-page-end -->



                        </div>
                    </div>
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
                                            <a href="contact" target="__blank">
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
                                  <?php   
    $search_keyword = '';
    if(!empty($_POST['search']['keyword'])) {
        $search_keyword = $_POST['search']['keyword'];
    }
    $sql = 'SELECT * FROM post WHERE business_name LIKE :keyword OR content LIKE :keyword OR post_by LIKE :keyword ORDER BY id DESC ';
     $page = 1;
    $start=0;
    if(!empty($_POST["page"])) {
        $page = $_POST["page"];
        $start=($page-1) * ROW_PER_PAGE;
    }
    $limit=" limit " . $start . "," . ROW_PER_PAGE;
$query = $sql.$limit;
    $look = $dbh->prepare($query);
    $look->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $look->execute();
    $result = $look->fetchAll();
?>
                                    <h5>Recent Listing</h5>
                                     <?php
    if(!empty($result)) { 
        foreach($result as $row) {
    ?>
                                    <ul class="list-unstyled quick-links">
                                        <li>
                                            <a href="post?viewid=<?php echo $row['ID'];?>">
                                                <i class="fa fa-angle-double-right"></i>
                                                 <?php echo $row['business_name'] ?>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php
        }
    }
    ?>
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
