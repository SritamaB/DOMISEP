<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Smart Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/register.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
		<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><p></P></a>
					<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
					<li><a href="index.html">Home</a></li>
						<li><a href="login.php">Login</a></li>
						<li class="active"><a href="signup.php">Sign-Up</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
<div class="container">
<div class="col-md-offset-3 col-md-6">
<form action="adduser.php" method="post" onclick="adduser.php">
  <div class="container">
  <div class=" col-md-6">
  <h2>SIGN-UP</h2>
  <hr />
  
    <p><b>First Name:</b></p>
    <input type="text"  name="First_Name" required>
    <p><b>Last Name:</b></p>
      
    <input type="text"  name="Last_Name" required>
       <p><b>Username:</b></p>
    <input type="text"  name="user" required>
	<p><b>Password:</b></p>
    <input type="password"  name="Password" required>
	<p><b>Confirm Password:</b></p>
    <input type="password" name="pass" required>
    <p>Birthday:</p>
  <p><input type="date" name="Date_0f_Birth"></p>
    <p><b>Gender:</b></p>
    <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
	<p><b>Email:</b></p>
    <input type="text"  name="Email" required>
	<p><b>Phone Number:</b></p>
    <input type="tel"  name="phone" required>
	<p><b>Address:</b></p>
    <input type="text"  name="Address" required>
      
    
    <select>
    <option value="FR">France</option>
    <option value="US">United States</option>
    <option value="GB">United Kingdom</option>
    </select>
    <select>
    <option value="">Paris</option>
    <option value="">Lyon</option>
    <option value="">Nice</option>
    </select>
       <p><b>Product_id:</b></p>
    <input type="text"  name="product" required>
    						
	<br>
	<br>
	<br>
    <div class="clearfix">
      <button type="submit" class="btn btn-success btn-md col-md-3 pull-right">SIGN-UP</button>
    </div>
	<br>
	<br>
	<br>
	<br>
	<br>
  </div>
  </div>
</form>
</div>
</div>
 	
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
				<center>
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>xxxxxxxxxxxxxxxxx,</strong><br>
					xxxxxxxxxxxxxxxx,<br>
					 xxxxxxxxxxxxxxxxxxxx</address>
					<p>
						<i class="icon-phone"></i>xxxxxxxxxxxx<br>
						<i class="icon-envelope-alt"></i>xxxxxxxxxxxxxxxx@xxxxxxxx.xxx
					</p>
					</center>
				</div>
			</div>
			<div class="col-lg-3">
				<!--<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>-->
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<!--<h5 class="widgetheading">Latest posts</h5>-->
					<!--<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>-->
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<!--<h5 class="widgetheading">Recent News</h5>-->
					<!--<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>-->
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; smart home@2017 All right reserved.</span><a href="" target="_blank"></a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer></html>