
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Mandala</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<!--[if IE 6]>
		<script src="js/DD_belatedPNG-min.js" type="text/javascript" charset="utf-8"></script>
	<![endif]-->
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Inner -->
		<div class="inner">
			<!-- Begin Header -->
			<div id="header">
				<div class="header-inner">
					<!-- Begin Shell -->
					<div class="shell">
						<h1 id="logo"><a class="notext" href="index.php">Mandala</a></h1>
						<div id="account">
							<a class="view-account" title="View Account" href="order.html">Your Shopping Cart</a>
							<span>Articles: 0</span><span>Cost: <strong>Rs.00.0</strong></span>
							<div class="cl">&nbsp;</div>
						</div>
						<!-- Begin Navigation -->
						<div id="navigation">
							<ul>
								<li><a href="index.php" title="Home Page"><span>Home</span></a></li>
								<li><a href="store.php" title="Store page"><span>The store</span></a></li>
								<li><a href="order.php" title="Order page"><span>Order now</span></a></li>
								<li><a href="contact.php" title="Contact Page"><span>Contact</span></a></li>
								<li><a href="about.php" title="Admin page"><span>About Us</span></a></li>
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
						<!-- End Navigation -->
						<div class="cl">&nbsp;</div>
					</div>
					<!-- End Shell -->
				</div>
			</div>
			<!-- End Header -->
			<!-- Begin Shell -->
			<div class="shell">
				<!-- Begin Main -->
				<div id="main">
					
					<!-- Begin Container -->
					<div class="container">
						<header>
							<center><u><h1>T-shirt Ordering Admin Login Page </h1></u></center>
							
						</header>
								<section>				
									<div id="container_demo" >
										<a class="hiddenanchor" id="tologin"></a>
										<form action="login.php" method="post">
										<div id="wrapperr">
											<div id="login" class="animate form">
												<form  action="mysuperscript.php" autocomplete="on"> 
													<h1>Admin Login</h1> 
													<p> 
														<label for="username" class="uname">Admin Username</label>
														<input id="username" name="username" required="required" type="text"/>
													</p>
													<p> 
														<label for="password" class="youpasswd">password </label>
														<input id="password" name="password" required="required" type="password"/> 
													</p>
													
													<p class="login button"> 
														<input type="submit" name="button" value="Login" /> 
													</p>
													<?php
													if ($msg!=""){
														echo"<label>".$msg."</label>";
													}
													?>
>
													
												</form>
											</div>
										</div>
									</div>  
								</section>
					</div>
					
					<!-- End Container -->
					<div class="cl">&nbsp;</div>
					
					
				</div>
				<!-- End Main -->
				<!-- Begin Footer -->
				<div id="footer2">
					<p class="bottom-menu"><a href="index.php" title="Home Page">Home</a><span>|</span><a href="store.php" title="Support Page">The store</a><span>|
					</span><a href="order.php" title="My Account Page">Order Now</a><span>|</span><a href="contact.php" title="Store Page">Contact</a><span>|
					</span><a href="about.php" title="Store Page">About us</a><span>|</span><a href="Admin login.php" title="Contact Page">Admin Login</a></p>
					<p>©2015 Mandala. All rights reserved.| Terms and condition</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Footer -->
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Inner -->
	</div>
	<!-- End Wrapper -->
</body>
</html>