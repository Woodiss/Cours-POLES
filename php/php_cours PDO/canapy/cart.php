<?php
require_once('lib/db.php');
require_once('lib/Cart.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (!empty($_POST)) {
	if (!empty($_POST['id_cart'])) {

		$cartDel = new Cart($db);
		$cartDel->delete($_POST['id_cart']);
	} else if (!empty($_POST['form'])) {

		$cartUpdate = new Cart($db);
		$cartUpdate->update($_POST);
	}
}

if (!empty($_SESSION)) {

	$cart = new Cart($db);
	$userCart = $cart->select($_SESSION['id']);
}

$totalPrice = 0;
?>

<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	<script src="js/cartupdate.js" defer></script>

</head>

<body>

	<!-- Start Header/Navigation -->
	<?php include('components/nav.php') ?>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>Cart</h1>
					</div>
				</div>
				<div class="col-lg-7">

				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->



	<div class="untree_co-section before-footer-section">
		<div class="container">
			<div class="row mb-5">
				<form class="col-md-12" method="post">
					<div class="site-blocks-table">
						<table class="table">
							<thead>
								<tr>
									<th class="product-thumbnail">Image</th>
									<th class="product-name">Product</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
									<th class="product-remove">Remove</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($_SESSION)) {
									require('components/cart.php');
								} ?>
							</tbody>
						</table>
					</div>
					<button type="submit" class="btn btn-black btn-sm btn-block" name="form" value="update">Update Cart</button>
				</form>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="row mb-5">
						<div class="col-md-6 mb-3 mb-md-0">
						</div>
						<div class="col-md-6">
							<button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label class="text-black h4" for="coupon">Coupon</label>
							<p>Enter your coupon code if you have one.</p>
						</div>
						<div class="col-md-8 mb-3 mb-md-0">
							<input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
						</div>
						<div class="col-md-4">
							<button class="btn btn-black">Apply Coupon</button>
						</div>
					</div>
				</div>
				<div class="col-md-6 pl-5">
					<div class="row justify-content-end">
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-12 text-right border-bottom mb-5">
									<h3 class="text-black h4 text-uppercase">Cart Totals</h3>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-md-6">
									<span class="text-black">Total des produits</span>
								</div>
								<div class="col-md-6 text-right">
									<strong class="text-black"><?= $totalPrice . " €" ?></strong>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col-md-6">
									<span class="text-black">Total actuel</span>
								</div>
								<div class="col-md-6 text-right">
									<strong id="totalprice" class="text-black"><?= $totalPrice . " €" ?></strong>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">

			<div class="sofa-img">
				<img src="images/sofa.png" alt="Image" class="img-fluid">
			</div>

			<div class="row">
				<div class="col-lg-8">
					<div class="subscription-form">
						<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

						<form action="#" class="row g-3">
							<div class="col-auto">
								<input type="text" class="form-control" placeholder="Enter your name">
							</div>
							<div class="col-auto">
								<input type="email" class="form-control" placeholder="Enter your email">
							</div>
							<div class="col-auto">
								<button class="btn btn-primary">
									<span class="fa fa-paper-plane"></span>
								</button>
							</div>
						</form>

					</div>
				</div>
			</div>

			<div class="row g-5 mb-5">
				<div class="col-lg-4">
					<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
					<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

					<ul class="list-unstyled custom-social">
						<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
					</ul>
				</div>

				<div class="col-lg-8">
					<div class="row links-wrap">
						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">About us</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Support</a></li>
								<li><a href="#">Knowledge base</a></li>
								<li><a href="#">Live chat</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Our team</a></li>
								<li><a href="#">Leadership</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Nordic Chair</a></li>
								<li><a href="#">Kruzo Aero</a></li>
								<li><a href="#">Ergonomic Chair</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
						</p>
					</div>

					<div class="col-lg-6 text-center text-lg-end">
						<ul class="list-unstyled d-inline-flex ms-auto">
							<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</footer>
	<!-- End Footer Section -->


	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>