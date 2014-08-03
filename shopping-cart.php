<?php
include "conn_f34im02.php";
?>

<?php
if(isset($_POST["submit"])){
	// $productid = $_GET['id'];
	// echo "$productid";
if(empty($_POST['amount'])){
				echo "<h1>Your input cant be none<h1>";
				exit;
}

?>

<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>My Cart | YesterdayTodayTomorrow.&#8482;</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial scale=1.0, maximum-scale=1.0, user-scalable=no">

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
			<h1 class="logo hidden-xs"><a href="index.php"><img src="img/logo.png" alt="Logo"/></a></h1>
		</div>
	</nav>

	<section class="page-title container">
		<h1>My Shopping Cart</h1>
		<hr>
	</section><!--/page-title -->

	<section class="shopping-cart">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="main-board">
						<table class="table hidden-xs">
							<thead>
								<tr>
									<th>product name</th>
									<th class="text-center">Unit price</th>
									<th class="text-center">Quantity</th>
									<th class="text-center">Subtotal</th>
									<th class="text-center">Delete</th>
								</tr>
							</thead>

							<?php
							$total = 0;
							//echo $_SESSION['cart'][];
							for ($i = 0; $i < count($_SESSION['cart']); $i++) { 
								echo '<tr>';
								echo '<td>'.$items[$_SESSION['cart'][$i]].'</td>';
								echo '<td align="right">$';
								echo number_format($prices[$_SESSION['cart'][$i]],2);
								echo '<td>';
								echo '</tr>';		
								$total = $total + $prices[$_SESSION['cart'][$i]];
							}
							?>
						</table><!--/table hidden xs -->

						<table class="visible-xs">
							<tbody>
								<tr>
									<td>
										<a href="product.php"><img src="http://placehold.it/191x168" alt="Shopping Cart"/></a>
										<a href="product.php"><p>Very tasty special meal</p></a>
									</td>
									<td>
										<span>Unit Price</span>
										<span>$212.79</span>
									</td>
									<td>
										<span>Quantity</span>
										<span><input type="text" value="1"></span>
									</td>
									<td>
										<span>Subtotal</span>
										<span>$212.79</span>
									</td>
									<td><span><a href="#">x</a></span></td> 
								</tr>
								<tr>
									<td>
										<a href="product.php"><img src="http://placehold.it/191x168" alt="Shopping Cart"/></a>
										<a href="product.php"><p>Another great product that needs two rows to fit</p></a>
									</td>
									<td>
										<span>Unit Price</span>
										<span>$168.79</span>
									</td>
									<td>
										<span>Quantity</span>
										<span><input type="text" value="2"></span>
									</td>
									<td>
										<span>Subtotal</span>
										<span>$337.58</span>
									</td>
									<td><span><a href="#">x</a></span></td> 
								</tr>
							</tbody>
						</table>
					</div><!--/main-board -->
				</div>
			</div><!--/row -->

			<div class="row">
				<div class="cart-box col-lg-12 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="box">
								<h3>Total Amount</h3>

							<p><?php echo '$'.$total = $total + $prices[$_SESSION['cart'][$i]];?></p>
								<div class="col-lg-4 col-md-4 col-sm-4"></div>
								<div class="col-lg-4 col-md-4 col-sm-4">
		<?php		
									session_start();
									if(empty($_SESSION['valid_user'])){
										echo "<a href='account.php'>Login to your account &raquo;</a>";
									}
									else{
										echo "<a href='thankyou.php'>Proceed to checkout &raquo;</a>";
									}							
									?>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4"></div>
							</div><!--/box-->
						</div>					
					</div><!--/row -->
				</div><!--/cart-box -->
			</div><!--/row -->

		</div><!--/container-->
	</section><!--/shopping-cart-->

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
