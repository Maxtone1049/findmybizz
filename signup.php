<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');

if(isset($_POST['submit']))
  {
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


    $ret="select Email from tbluser where Email=:email";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':email', $Email, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{
$sql="Insert Into tbluser(Name,Email,username,phone,address,lga,city,category,whatsapp_number,password)Values(:company,:email,:username,:phonenum,:adds,:lga,:city,:category,:wnum,:pass)";
$query = $dbh->prepare($sql);
$query->bindParam(':company',$Name,PDO::PARAM_INT);
$query->bindParam(':email',$Email,PDO::PARAM_STR);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':phonenum',$phonenum,PDO::PARAM_STR);
$query->bindParam(':adds',$adds,PDO::PARAM_STR);
$query->bindParam(':lga',$lga,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':category',$category,PDO::PARAM_STR);
$query->bindParam(':wnum',$whatsapp_number,PDO::PARAM_STR);
$query->bindParam(':pass',$password,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId){

    $msg=" Registration Successful!! wait..to login";
    echo("<script type='text/javascript'>  
 setTimeout(function(){
    window.location.href = 'login';
 }, 5000);
</script>");
}
else
{

    $msg="Something went wrong.Please try again";
}
}
 else
{

    $msg= "This Email already exist. Please try again";
}
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
        <meta name="description" content="FindmyBizz | Artisan Local Directory">
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
                <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-ash">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a aria-current="page" class="navbar-brand active" href=".">
                            <img alt="brand" src="img/Photos/ico.jpg" style="height: 100px; max-width: 140px; margin-top: -10px;">
                        </a>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="btn btn-primary-outline text-bold waves-effect waves-light" href="#" target="_blank" rel="noopener noreferrer">Connect via WhatsApp</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href=".">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-light" href="about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact" class="nav-link waves-effect waves-light">Contact</a>
                                </li>
                                <li class="nav-item ml-2">
                                    <div class="ui buttons">
                                        <a href="login">
                                            <button class="ui button">Login</button>
                                        </a>
                                        <div class="or" data-text="or"></div>
                                        <a href="signup" class="active" aria-current="page">
                                            <button class="ui positive button">Register</button>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container" style="margin-top: 1vh; padding: 5vw;">
                    <div class="container w-75 w-sm-100">
                        <div class="card cloudy-knoxville-gradient">
                            <h4 class="card-header info-color white-text text-center py-4">
                                <strong>Sign up</strong>
                            </h4>
                            <div class="alert alert-danger" style="display: none;"></div>
                            <div class="alert alert-info" style="display: none;">
                                New account is created. Please <a href="login">Signin</a>
                            </div>
                            <p style="font-size:15px; border-radius:12px;color:#fff; width:70%; margin:auto; text-align:center; margin-bottom:30px; background-color:red;"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                            <div class="card-body px-lg-5 pt-0">
                                <form class="text-center" method="post" style="color: rgb(117, 117, 117);">
                                    <p></p>
                                    <div class="form">
                                        <div class="md-form">
                                            <label for="materialRegisterFormLastName">Company Name</label>
                                            <input name="company" type="text" required="" id="materialRegisterFormLastName" class="form-control" value="">
                                            
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="md-form mt-0">
                                        <label for="materialRegisterFormEmail">E-mail</label>
                                        <input name="email" type="email" required="" id="materialRegisterFormEmail" class="form-control" value="">
                                        
                                    </div>
                                    <p></p>
                                    <div class="md-form mt-0">
                                        <label for="materialRegisterFormUsername">Username</label>
                                        <input name="username" type="text" required="" id="materialRegisterFormUsername" class="form-control" value="">
                                        
                                    </div>
                                    <p></p>
                                    <div class="md-form mt-0">
                                        <label for="materialRegisterFormPhoneNumber">Phone Number</label>
                                        <input name="phonenum" type="text" required="" id="materialRegisterFormPhoneNumber" class="form-control" value="">
                                        
                                    </div>
                                    <p></p>
                                    <div class="md-form mt-0">
                                        <label for="materialRegisterFormAddress">Address</label>
                                        <input name="adds" type="text" required="" id="materialRegisterFormAddress" class="form-control" value="">
                                        
                                    </div>
                                    <p></p>
                                    <div class="md-form mt-0">
                                        <label for="materialRegisterFormLGA">LGA</label>
                                        <input name="lga" type="text" required="" id="materialRegisterFormLGA" class="form-control" value="">
                                        
                                    </div>
                                    <p></p>
                                    <div class="md-form mt-0">
                                        <label for="materialRegisterFormCity">City</label>
                                        <input name="city" type="text" required="" id="materialRegisterFormCity" class="form-control" value="">
                                        </div>
                                        <p></p>
                                    <div class="md-form mt-3">
                                        <label for="materialRegisterFormCategory">Category</label>
                                        <select name="category" required="" id="materialRegisterFormCategory" class="form-control" >
                                            <option>All Categories</option>
                                            <option value="Arts and entertainment">Arts and entertainment</option>
                                            <option value="Automobiles">Automobiles</option>
                                            <option value="Beauty and Spas">Beauty and Spas</option>
                                            <option value="Branding">Branding</option>
                                            <option value="Catering and Drinks">Catering and Drinks</option>
                                            <option value="Cleaning Services">Cleaning Services</option>
                                            <option value="Computing and Gadget Repairs">Computing and Gadget Repairs</option>
                                            <option value="Electronics Repairs">Electronics Repairs</option>
                                            <option value="Electrical and Wiring servicies">Electrical and Wiring servicies</option>
                                            <option value="Engineering Services">Engineering Services</option>
                                            <option value="Facility and Household Maintenance Services">Facility and Household Maintenance Services</option>
                                            <option value="Fashion and Clothing Services">Fashion and Clothing Services</option>
                                            <option value="Household services">Household services</option>
                                            <option value="Installations">Installations</option>
                                            <option value="Jewellries and Accessories Maintenance Services">Jewellries and Accessories Maintenance Services</option>
                                            <option value="Lighting Services">Lighting Services</option>
                                            <option value="Logistics and Courier Services">Logistics and Courier Services</option>
                                            <option value="Pet Management Services">Pet Management Services</option>
                                            <option value="Photography and Media Services">Photography and Media Services</option>
                                            <option value="Printing Services">Printing Services</option>
                                            <option value="Proof Reading Services">Proof Reading Services</option>
                                            <option value="Technicains">Technicains</option>
                                            <option value="Tutoring Services">Tutoring Services</option>
                                            <option value="Welding Services">Welding Services</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        
                                    </div>
                                    <p></p>
                                    <div class="md-form mt-0">
                                        <label for="materialRegisterFormWhatsapp">Whatsapp Phone Number</label>
                                        <input name="wnum" type="text" required="" id="materialRegisterFormWhatsapp" class="form-control" value="">
                                                                        </div>
                                    <div class="md-form">
                                        <p></p>
                                        <label for="materialRegisterFormPassword">Password</label>
                                        <input name="pass" type="password" autocomplete="current-password" required="" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" value="">
                                        
                                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mt-4 mb-4">At least 8 characters and 1 digit</small>
                                    </div>
                                    <button name="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign up</button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 60px 0px;">
                    <section id="footer">
                        <div class="container">
                            <div class="row text-sm-left text-md-left">
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <h6 class="text-white text-start">FindMyBizz is a business directory designed to enable users find artisans and business owners within their location easily It provides skilled artisans and business owners the opportunity to be showcased to the world by offering free advertisement, artisans can post job ads and also advertise their products.</h6>
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
