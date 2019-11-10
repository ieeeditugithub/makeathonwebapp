<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<!-- <h6>Need Help</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">12345678099</li>
					</ul> -->
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.html">
							<?=$title?></a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
								<a href="checkout.php">
								<button class="top_googles_cart"  value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
								</a>
						</li>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<?php if(!$user){ ?>
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="" method="post">
									<div class="form-group">
										<label class="mb-2">Username</label>
										<input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="" required="" name="username">
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="password" placeholder="" required="" name="password">
									</div>
									<button type="submit" class="btn btn-primary submit mb-4" name="login">Sign In</button>
									<div class="form-group">
										<label class="mb-2"><?=$error?></label>
									</div>
								</form>
							</div>
							<?php }else{ ?>
							<h5 class="text-center mb-4">Hello, Team <?=$user['name']?></h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<div class="form-group">
									<label class="mb-2">Wallet:	<?=$user['balance']?></label>
									</div>
									<a href="logout.php"><button type="submit" class="btn btn-primary submit mb-4" name="login">Logout</button>
							</div>
							<?php } ?>
							<!---->
						</div>
					</div>
					<!---->
				</div>
			</div>
		</header>