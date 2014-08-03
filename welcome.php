<?php
include "conn_f34im02.php";
?>

<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Welcome! | YesterdayTodayTomorrow.&#8482;</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="refresh" content="4; url = /f34im02/shopping-cart.php?name=<?php echo urlencode($_POST['username'])?>">

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
		<?php //welcome.php
		if (isset($_POST['submit'])){
			if(empty($_POST['username'])||empty($_POST['password'])||empty($_POST['password2'])||empty($_POST['emailaddress'])||empty($_POST['deliveryaddress'])||empty($_POST['postalcode'])||empty($_POST['contactnumber'])){
				echo "<h1>Please fill in all the fields!<h1>";
				exit;
			} 
			else {
				$username = $_POST['username'];
				$password = $_POST['password'];
				$password2= $_POST['password2'];
				$emailaddress = $_POST['emailaddress'];
				$deliveryaddress = $_POST['deliveryaddress'];
				$postalcode = $_POST['postalcode'];
				$contactnumber = $_POST['contactnumber'];

				//echo ("$username"."<br />"."$password2"."<br/>");
				if($password!=$password2){
					echo "<h1>Your passwords do not match!<h1>";
					exit;
				}

				//int ereg ( string $pattern , string $string [, array &$regs ] )
				//$pattern = "^([\w.-]+@[\w.-]+\.[A-Za-z]{2,6})";
				//if (!(ereg ($pattern, $emailaddress, $regs))) {
				//echo "<h1>Invalid email format: $emailaddress<h1>";
				//exit;
				// }

				$query=mysql_query("SELECT * FROM usersdata WHERE UserName='".$username."'");
				$numrows=mysql_num_rows($query);
				if($numrows!=0) {
					echo "<h1>Sorry, but someone has already taken that username.<h1>";
					exit;
				}

				//echo $password;
				$sql = "INSERT INTO usersdata(UserEmail, UserPassword, UserName, UserPostal, UserPhone, UserAddress)
				VALUES ('$emailaddress','$password', '$username', '$postalcode', '$contactnumber', '$deliveryaddress')";
				//echo "<br>".$sql."<br>";
				$result = mysql_query($sql);

				if(!$result) {
					echo "<h1>Your query failed.</h1>";
				} else {
					echo "<h1>Welcome ".$username.".<h1>";
					echo "<h1>Thanks for registering with us!</h1>";
					echo "<div class='group-links'><h3>Don't forget to check your inbox for a confirmation email from us!<br/></h3></div>";
					echo "<div class='group-links'><h3><i>(redirecting you to your checkout page...)</i><br/>&nbsp;</h3>
					</div>";
				}
			}
		} else { // Page Access Permissions
			header("Location: index.php"); 
			die();
		}
		?>

		<?php
		$to ='f34im02@localhost';
		$subject = 'Registration successful';
		$message = 'Thank you! Your registration is successful.';
		$headers = 'From: myself@localhost '."\r\n".
		'Reply-to: f34im02@localhost'."\r\n".
		'X-Mailer: PHP/' .phpversion();
		mail($to, $subject, $message, $headers, '-ff34im02@localhost');
		?>

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
	<script src="js/cusinfo2.js"></script>
	<script src="js/vendor/jquery-ui.js"></script>
	<script src="js/vendor/jquery.selectBoxIt.min.js"></script>
	<script src="js/vendor/jquery.fitvids.js"></script>
	<script src="js/vendor/jquery.elevatezoom.js"></script>

	<script src="js/cusinfo.js"></script>

	<script src="js/main.js"></script>
</body>