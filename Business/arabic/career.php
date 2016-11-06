<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Career | Grand Mills B2B | Abu Dhabi UAE</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">
<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/font-awesome.css" />
<link rel="shortcut icon" href="images/favicon.png">
 <script src="js/contact.js">
  </script>
  <!-- Contact form Script-->
    <script>
    $(document).ready(function(){
    
        $("#submit").click(function(){

                var first_name = $("#first_name").val();
                var last_name = $("#last_name").val();
                var user_email = $("#email_address").val();
                var user_mob = $("#mobile").val();
                var user_msg = $("#message").val();
                var rex = /[^a-z]/i;
                var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;           
                 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var email = document.getElementById('email_address');
                if((first_name && last_name && user_email && user_msg && user_mob) != '')
                {
                if (!filter.test(email.value)) {
                    alert("Please Enter Valid Email Address"); 

                }
                 else {          
            $.post("application_form.php",{first_name:first_name,last_name:last_name,email_address:user_email,mobile:user_mob,message:user_msg},function(data){
                
                 $("#message").html(data);  
                document.getElementById("cform").reset();
                 });
            }
        }
            else
                    {
                alert("Please Enter Valid data,data fields cannot be empty"); 
            }
            //$("#result3").load("update.php");
        });
               //$("#page").hide();
               //$("#detail_page").show();                                                   
    });
    </script>
</head>
<body>

<header class="page-header">
	<div class="container">
    	<div class="row">
        <div class="col-sm-2 text-center"><a href="index.php"><img src="images/logo.png" alt="" class="img-center"></a></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-6">
            	<a href="#" target="_blank" class="bakers"><img src="images/bakers-club.png" alt=""></a>
            	<ul class="top_links">
                	<li><img src="images/ico_phone.png"> 800-2474 ( AGRI )</li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/ico_cart.png"> <!---i class="fa fa-angle-down"></i---></a>
                    </li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="images/uae-flag.jpg"></a>
          				<!--<ul class="dropdown-menu">
                            <li><a href="#">Arabic</a></li>
          				</ul>-->
                    </li>
                </ul>
                <div class="clear"></div>
                <ul class="top_social">
                	<li><a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-bell fa-lg"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="clear"></div>
<nav class="navbar navbar-default">
	<div class="container">
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
      		</button>
    	</div>
    	<div class="collapse navbar-collapse" id="mobile-nav">
        	<ul class="nav navbar-nav">
            	<li><a href="index.php">Home</a></li>
        		<li><a href="grand-mills.php">GRAND MILLS</a>
                	<ul class="submenu" style="width:600px;">
                    	<li>
                        	<div class="media">
                            	<div class="media-left"><img src="images/menu-image-2.jpg" width="70" class="media-object"></div>
                                <div class="media-body">
                                    <h5 class="media-heading">Agthia </h5>
                                    <a href="grand-mills.php">AGTHIA BUSINESS DIVISION CONSUMER BUSINESS DIVISION</a>
                                   <!-- <a href="#">CONSUMER BUSINESS</a>
                                    <a href="#">DIVISION</a>-->
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="media">
                            	<div class="media-left"><img src="images/menu-image.jpg" width="70" class="media-object"></div>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="grand-mills-flour.php">Grand Mills Flour</a></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="beyond-flour.php">BEYOND FLOUR</a></li>
                <li><a href="#">OUR PRODUCTS</a>
                	<ul class="submenu">
                    	<li> 
                        	<div class="media">
                            	<div class="media-left"><img src="images/b2b.png" width="70" class="media-object"></div>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="products.php">B2B Range</a></h5>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="media">
                            	<div class="media-left"><img src="images/b2c.png" width="70" class="media-object"></div>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="../Consumer/products.html" target="_blank">B2C Range</a></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="field-to-fork.php">FROM FIELD TO FORK</a>
                	<ul class="submenu" style="width:500px;">
                    	<li>
                        	<div class="media">
                            	<div class="media-left"><img src="images/grains.jpg" width="70" class="media-object"></div>
                                <div class="media-body">
                                    <h5 class="media-heading">Beyond Quality</h5>
                                    <a href="grand-mills-quality-controls.php">Quality Controls</a>
                                    <a href="grand-mills-certification.php">Certifications</a>
                                    <a href="nutrition.php">Nutrition</a>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="media">
                            	<div class="media-left"><img src="images/grains.jpg" width="70" class="media-object"></div>

                                <div class="media-body">


                                    <h5 class="media-heading">Grand Mills Flour</h5>
                                    <a href="affiliated-bakeries.php">List of Affiliated Bakeries UAE</a>
                                    <a href="map-of-exports.php">Map of Exports</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="#">KNOW MORE</a>
                	<ul class="submenu">
                    	<li><a class="font_bold text_16">Media</a></li>
                        <li>&nbsp;</li>
                    	<li><a href="press-release.php">Press Release</a></li>
                        <li><a href="news-and-events.php">News & Events</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="social-media-feeds.php">Social Media Feeds</a></li>
                        <li><a href="download.php">Download Brochure</a></li>
                    </ul>
                </li>
                <li><a href="#">BAKERS' CLUB</a>
                	<ul class="submenu">
                    	<li><a href="how-it-work.php">How it Works</a></li>
                        <li><a href="benefit.php">Benefits</a></li>
                    </ul>
                </li>
      		</ul>
      	</div>
  	</div>
</nav>
<div class="clear"></div>

<div class="banner"><img src="images/slider/career.jpg"><h1>CAREERS</h1></div>
<div class="clear pad-20"></div>

<div class="container">
	<div class="row">
    	<div class="col-sm-6">
            <div class="bg_wht pad-20">
            	<h3>Join Grand Mills</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                
                <p>nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
            </div>
            <div class="clear pad-15"></div>
        </div>
        <div class="col-sm-6">
                    <div class="bg_wht pad-30">
                        <div style="text-align:left;padding-bottom: 100px;">
                            <h2>Application Form</h2>
                            <p style="position: absolute;top: 6%;right:0%;padding-right: 56px;color: #b5b5b5;">*= Mandatory Fields</p>
                            <form>
                                <input style="width:100%; height:38px; padding-left: 10px; margin-bottom: 5px;" type="text" id="first_name" name="first_name"  size="30" placeholder="First Name">
                                <input style="width:100%; height:38px; padding-left: 10px; margin-bottom: 5px;" type="text" id="last_name"  name="last_name" size="30" placeholder="Last Name">
                                
                                <input style="width:100%; height:38px; padding-left: 10px; margin-bottom: 5px;" type="text" id="email_address" name="email_address" size="30" placeholder="Email Address">
                                <input style="width:100%; height:38px; padding-left: 10px; margin-bottom: 5px;" type="text" id="mobile" name="mobile" size="30" placeholder="Mobile Number">
                                <textarea style="width: 100%;padding-left: 10px; margin-bottom: 15px;" rows="4" name="message" placeholder="Describe Yourself" id="message"></textarea>
                                <input style="position: absolute;
                                       bottom: 135px;
                                       width: 83px;
                                       height: 35px;
                                       background-color: rgb(158, 158, 158);
                                       color: white;
                                       right: 7.9%;" type="file" name="attachment"/>
                                <input style="width: 84%;
                                       height: 35px;
                                       padding-left: 10px;
                                       margin-bottom: 5px;" type="text" value="Attach your CV with cover letter">
                                
                                
                                <p style="position: relative;bottom: -35px;float: left;">PDF,DOC or JPG less than 5 MB.</p>
                                <button style="position: relative;
                                        bottom: -30px;
                                        float: right;
                                        width: 100px;" type="button" id="submit" name="submit" class="btn btn-success">Submit</button>
                                <button style="position: relative;
                                        bottom: -30px;
                                        float: right;
                                        margin-right: 10px;
                                        width: 100px;" type="reset" class="btn btn-success">Reset</button>
                                
                          </form>
                        </div>
                         <div id="message"></div>
                    </div>
        </div>
    </div>
</div>

<div class="clear pad-15"></div>

<footer>
	<div class="container">
    	<div class="row">
        	<div class="col-sm-6">
                <ul class="foot_social">
                	<li><a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-bell fa-lg"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-6">
            	<ul class="foot_menu">
                	<li><a href="index.php">Home</a></li>
                    <li><a href="about-grand-mills.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li class="active"><a href="career.php">Career</a></li>
                    <li><a href="affiliated-bakeries.php">Affiliated Bakeries</a></li>                    
                    <li><a href="news.html">News / FAQ</a></li>
                    <li><a href="sitemap.html">Sitemap</a></li>                    
                    <li><a href="terms.html">Terms of Use | Privacy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear pad-15"></div>
    <div class="copy">
    	<div class="container">
        	<div class="row">
        		<div class="col-lg-12">(C) Copyrights 2016, All rights reserved</div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
