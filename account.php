<?php
include "conn_f34im02.php";
?>

<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Account | YesterdayTodayTomorrow.&#8482;</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/jquery.selectBoxIt.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="menu-collapse">
				<ul class="hidden-xs nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="shopping-cart.php" class="shop dropdown-toggle">shopping cart</a>
					</li>
				</ul>
			</div>

			<h1 class="logo hidden-xs"><a href="index.php"><img src="img/logo.png" alt="Logo"/></a></h1>
		</div>
	</nav>

	<section class="page-title container">
		<h1>Login or Create an account</h1>
		<hr>
	</section><!--/page-title -->

	<section class="account">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="box">
						<h3>Create new account</h3>
						<form role="form" class="row" action="welcome.php" method="POST">
							<div class="form-group">
								<label class="col-sm-2 control-label">Your Name*</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="username">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Email*</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="emailaddress" id="emailaddress">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="choose-password">Choose Password*</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password" id="password">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="confirm-password">Confirm Password*</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password2" id="password2">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Delivery Address*</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="deliveryaddress">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Postal Code*</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="postalcode">
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Contact Number*</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="contactnumber" id="phoneno">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-10">
										<button type="submit" name="submit">Submit</button>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>	<!--/create new account -->
				

				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="box">
						<h3>Login</h3>
						<form role="form" class="row" method=POST action="welcome_back.php">
							<div class="form-group">
								<label class="col-sm-2 control-label">Email*</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="emailaddress">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="password">Password*</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<button type="submit" name="submit">Sign in</button>
								</div>
							</div>
						</form>
					</div>
				</div><!--/login -->
			</div>
		</div><!--/container-->
	</section><!--/account-->

	<footer data-scroll-reveal="enter bottom and move 10px over 1s">
		<div class="container">
			<div class="row">
				<div class="contact col-lg-12 col-md-6 col-sm-6">
					<h4>Drop by and say hi!</h4>
					<ul class="list-unstyled">
						<li>
							YesterdayTodayTomorrow.&#8482;<br/>
							24 Nanyang Avenue, Singapore
						</li>
						<li>
							9759 7460 <br/>
							9765 1480
						</li>
						<li>hello@yesterdaytodaytomorrow.sg</li>
					</ul>
				</div>
			</div><!--/row-->
		</div><!--/container-->
	</footer><!--/footer-->

	<script src="js/vendor/jquery-1.10.1.min.js"></script>

	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/scrollReveal.min.js"></script>
	<script src="js/jquery.sidr.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/owl.carousel.improved.js"></script>
	<script src="js/vendor/jquery-ui.js"></script>
	<script src="js/vendor/jquery.selectBoxIt.min.js"></script>
	<script src="js/vendor/jquery.fitvids.js"></script>
	<script src="js/vendor/jquery.elevatezoom.js"></script>

	<script src="js/cusinfo.js"></script>
	<script src="js/cusinfo2.js"></script>

	<script src="js/main.js"></script>
</body>
</html>
