<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Thank You! | YesterdayTodayTomorrow.&#8482;</title>
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

		<?php
		session_start();

		if(isset($_SESSION['valid_user'])){
			echo "<h1>Thanks for shopping with us!</h1><hr>";

			$to ='f34im02@localhost';
			$subject = 'Order successful';
			$message = 'Thank you! Your order is successful.';
			$headers = 'From: myself@localhost '."\r\n".
			'Reply-to: f34im02@localhost'."\r\n".
			'X-Mailer: PHP/' .phpversion();
			mail($to, $subject, $message, $headers, '-ff34im02@localhost');
			echo "<div class='group-links'>
			<h3>A confirmation email has been sent to you, and your meal will be arriving shortly.<br/>
			<br/>We hope to hear from you again soon!<br/></h3></div>";

		} else { // Page Access Permissions
			header("Location: index.php");
			die();
		}

		?>
		
		<div class="group-links">
			<a href="index.php">Go Home</a>
			<a href="#">&nbsp;|</a>
			<a href="logout.php">Log out</a>
		</div>
	</section><!--/page-title -->

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

	<script src="js/main.js"></script>
</body>
</html>
