<?php 
	include("include/common_config.php");
	$user = $_SESSION['user'];
	$cart = $_SESSION['cart'];
	$error = "";
		echo "<pre>";
	if(isset($_POST['login']))  {

		$myusername = $db->quote($_POST['username']);
		$myusername = $_POST['username'];
		$mypassword= md5($_POST['password']);

		$sql = "SELECT * FROM ".USER." WHERE username = '$myusername' and password ='$mypassword'";
			//$result = $conn->query($sql);
			
		$result = $db->select($sql);
		if(count($result) == 1) {
			$_SESSION['user'] = $result[0];
			$user = $_SESSION['user'];
		}else{				
			$error = "Your Username or Password is invalid<hr>";
		}
	}elseif (isset($_POST['item'])) {
		if(!isset($cart)){
			$cart = array();
		}

		$itemId = $_POST['item-id'];
		if(in_array($itemId, $cart))
			echo  "<script>alert('Item already added in cart, please vist your cart to change quantity.')</script>";
		else{
			array_push($cart,$itemId);
			$_SESSION['cart'] = $cart;
		}
	}
		echo "</pre>";
	$items =  getAllItems($db);
	$title="Make-A-Thon 1.0";
?>
		
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Make-A-Thon 1.0 | Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Makeathon - Shop" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>
<?php include "navbar.php" ?>

		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
					<!-- <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> -->
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active"><a href="https://codingblocks.com/"></a>
						<!-- <div class="carousel-caption text-center">
							<h3>Men’s eyewear
								<span>Cool summer sale 50% off</span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div> -->
					</div>
					<div class="carousel-item item2"><a href="https://rees52.com/"></a>
						<!-- <div class="carousel-caption text-center">
							<h3>Women’s eyewear
								<span>Want to Look Your Best?</span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div> -->
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="background-color: black">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="background-color: black">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
	</div>
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">Items </h3>
				<div class="row">
					<?php foreach($items as $key => $value) { ?>
					<div class="col-md-3 col-sm-6 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="<?=$value['image']?>" class="img-fluid" alt="">
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4>
													<a><?=$value['name']?> x<?=$value['qty']?> </a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">₹<?=$value['price']?></span>
												</div>
											</div>
										</div>
										<div class="googles single-item hvr-outline-out">
											<form method="post">
												<input type="hidden" name="item-id" value=<?=$value['id']?>>
												<button type="submit" name="item" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus" ></i>
												</button>
											</form>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">

							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Event ends in</h3>
							<div class="simply-countdown-custom" id="simply-countdown-custom"></div>

						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
<?php include "footer.php"; ?>