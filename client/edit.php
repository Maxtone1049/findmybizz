<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
if (strlen($_SESSION['obcsuid']==0)) {
    header('location:logout.php');
    } else{
        $uid=$_SESSION['obcsuid'];

      if(isset($_POST['submit'])){
        $target= "upload/".basename($_FILES['file']['name']);
//storing the data in your database 
      $uid=$_SESSION['obcsuid'];
      $Name=$_POST['company'];
      $Email=$_POST['email'];
      $username=$_POST['username'];
      $phonenum=$_POST['phonenum'];
      $adds=$_POST['adds'];
      $lga=$_POST['lga'];
      $city=$_POST['city'];
      $category=$_POST['category'];
      $whatsapp_number=$_POST['wnum'];
      $password=$_POST['pass']; 
      $file = $_FILES['file']['name'];
      $about=$_POST['abt'];
      
    $sql="UPDATE tbluser set Name=:company,Email=:email,phone=:phonenum,address=:adds,lga=:lga,city=:city,category=:category,whatsapp_number=:wnum,password=:pass,imagename=:file,image=:file,about=:abt where ID=:uid";
      
    $query = $dbh->prepare($sql);

    $query->bindParam(':company',$Name,PDO::PARAM_STR);
       $query->bindParam(':email',$Email,PDO::PARAM_STR);
       $query->bindParam(':phonenum',$phonenum,PDO::PARAM_STR);
       $query->bindParam(':adds',$adds,PDO::PARAM_STR);
       $query->bindParam(':lga',$lga,PDO::PARAM_STR);
       $query->bindParam(':city',$city,PDO::PARAM_STR);
       $query->bindParam(':category',$category,PDO::PARAM_STR);
       $query->bindParam(':wnum',$whatsapp_number,PDO::PARAM_STR);
       $query->bindParam(':pass',$password,PDO::PARAM_STR);
       $query->bindParam(':file',$file,PDO::PARAM_STR);
       $query->bindParam(':abt',$about,PDO::PARAM_STR);
       $query->bindParam(':uid',$uid,PDO::PARAM_STR);
  $query->execute();
  if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    echo '<script>alert("Profile has been updated")</script>';
    echo "<script>window.location.href ='profile'</script>";
 }else {
    $msg="Error updating Profile, try again!";
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
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="../gh/masterkn48/1saved_css_old_projects/cdn/css/bootstrap.min.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="../css/sdb.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="../npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <link rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;" href="../css2a1f4.css?family=Open+Sans&amp;display=swap">
        <link href="cssea9f.css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="../font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="../npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link href="../css/styles.css" rel="stylesheet" as="style" onload="this.onload=null,this.rel=&quot;stylesheet&quot;">
        <link rel="icon" href="../ico.ico">
        <title>FindMyBizz | Artisan Local Directory</title>
        <link href="../static/css/main.bb8ea5ff.chunk.css" rel="stylesheet">
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
                        <a aria-current="page" class="navbar-brand active" href="../index">
                            <img alt="brand" src="../img/Photos/ico.jpg" style="height: 100px; max-width: 140px; margin-top: -10px;">
                        </a>
                        <div class="navbar-collapse collapse show" id="navbarTogglerDemo03" style="">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="btn btn-primary-outline text-bold waves-effect waves-light" href="" target="_blank" rel="noopener noreferrer">Connect via WhatsApp</a>
                                </li>
                                <li class="nav-item" style="margin-top: 5px;">
                                    <a class="nav-link waves-effect waves-light" href="../users">
                                        Users <span class="sr-only"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-light" href="../index">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-light" href="../about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact" class="nav-link waves-effect waves-light">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <span class="navbar-text ml-auto white-text">
                                        <a class="nav-link line" href="profile" aria-current="page">Dashboard</a>
                                    </span>
                                </li>
                                <li class="nav-item ml-2">
                                    <a href="../logout">
                                        <span class="ui red button" style="cursor: pointer; color: rgb(255, 255, 255);">Signout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <?php
$uid=$_SESSION['obcsuid'];
$sql="SELECT * from  tbluser where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{?>

                <!-- Edit-form-here -->
                <div class="container" style="margin-top: 1vh; padding: 5vw;">
                    <div class="card cloudy-knoxville-gradient">
                        <h5 class="card-header info-color white-text text-center py-4">
                            <strong>Edit Profile</strong>
                        </h5>
                        <div class="card-body px-lg-5 pt-0">
                            <form enctype="multipart/form-data" class="text-center" style="color: rgb(117, 117, 117);" method="post">
                                <div class="form">
                                    <div class="md-form">
                                        <input type="file" required="" class="form-control" name="file" id="imageUpload">
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="md-form">
                                    <label for="materialRegisterFormLastName">Full Name</label>
                                        <input autocapitalize="true" autocomplete="username" type="text" required="" id="materialRegisterFormLastName" class="form-control" value="<?php echo $row->Name?>" name="company">
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="md-form">
                                    <label for="email">Email</label>
                                        <input autocomplete="email" type="email" required="" id="email" class="form-control" value="<?php echo $row->Email?>" name="email">
                                </div>
                                </div>
                                <div class="form">
                                    <div class="md-form">
                                    <label for="phoneNumber">Mobile Phone Number</label>
                                        <input autocomplete="phoneNumber" type="text" required="" id="phoneNumber" class="form-control" value="<?php echo $row->phone?>" name="phonenum"> 
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="md-form">
                                    <label for="adress">Address</label>
                                        <input autocomplete="address" type="tex" required="" id="address" class="form-control" value="<?php echo $row->address?>" name="adds">
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="md-form">
                                    <label for="lga">Local Government Area</label>
                                        <input autocomplete="lga" name="lga" type="text" required="" id="lga" class="form-control" value="<?php echo $row->lga?>">
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="md-form">
                                    <label for="city">City</label>
                                        
                                   <input autocomplete="city" name="city" type="text" required="" id="city" class="form-control" value="<?php echo $row->city?>">
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="md-form">
                                    <label for="category">Category</label>
                                        <input autocomplete="category" type="text" name="category" id="category" class="form-control" value="<?php echo $row->category?>">
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="md-form">
                                    <label for="username">Username</label>
                                        <input autocomplete="username" type="text" disabled="" id="username" class="form-control" value="<?php echo $row->username?>">
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="md-form">
                                    <label for="whatsappNumber">Whatsapp Phone Number</label>
                                        <input autocomplete="whatsappNumber" name="wnum" type="text" required="" id="whatsappNumber" class="form-control" value="<?php echo $row->whatsapp_number?>">
                                    </div>
                                </div>
                                <div class="md-form">
                                <label for="materialRegisterFormPassword">Password</label>
                                    <input value="<?php echo $row->password?>" autocomplete="current-password" type="password" name="pass" required="" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                                    
                                    <button class="btn btn-info mt-4">Show Password</button>
                                    <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">Atleast 6 chars and 1 digit</small>
                                </div>
                                <div class="md-form">
                                    <textarea id="materialContactFormMessage" class="form-control md-textarea" name="abt" rows="3"></textarea>
                                    <label for="materialContactFormMessage">About</label>
                                </div>
                                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Update</button>
                            </form>
                            <?php $cnt=$cnt+1;}} ?>
                        </div>
                    </div>
                </div>
                <!-- Edit-form-here -->
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
                                            <a href="index.html">
                                                <i class="fa fa-angle-double-right"></i>
                                                Home
                                            
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about.html">
                                                <i class="fa fa-angle-double-right"></i>
                                                About
                                            
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faq.html">
                                                <i class="fa fa-angle-double-right"></i>
                                                FAQ
                                            
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html" target="__blank">
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
        <script src="../gh/masterkn48/1saved_css_old_projects/cdn/js/jquery-3.4.1.min.js"></script>
        <script src="../gh/masterkn48/1saved_css_old_projects/cdn/js/popper.min.js"></script>
        <script src="../gh/masterkn48/1saved_css_old_projects/cdn/js/bootstrap.min.js"></script>
        <script src="../npm/bootstrap%405.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../js/scripts.js"></script>
        <script src="../gh/masterkn48/1saved_css_old_projects/cdn/js/sdb.min.js"></script>
        <script src="../static/js/3.4d37d3c6.chunk.js"></script>
        <script src="../static/js/main.7a7640a2.chunk.js"></script>
        <div class="hiddendiv common"></div>
    </body>
</html>
<?php }?>