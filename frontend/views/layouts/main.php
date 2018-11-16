 <?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= Yii::$app->request->baseUrl?>/theme/images/favicon.ico">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
	<!-- Start of Whole Site Wrapper with mobile menu support -->
	<div id="whole" class="whole-site-wrapper fluid-layout">
		<!-- Start of Header -->
		<header class="header bgc-white header-type-3 main-nav-area">
			<div class="header-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-2">
							<div class="logo">
								<a href="index.html"><img
									src="<?= Yii::$app->request->baseUrl?>/theme/images/logo.png"
									alt="Logo" class="img-fluid"></a>
							</div>
						</div>
						<div
							class="col-12 order-3 col-sm-12 col-md-12 col-lg-12 col-xl-7 order-xl-2">
							<!-- Start of Main and Mobile Navigation -->
							<div class="bgc-transparent">
								<nav id="main_nav" class="stellarnav left-aligned">
									<ul>
										<li class="active"><a href="<?= Url::to(['/'])?>"><span>Home</span></a></li>
										<li><a href="<?= Url::to(['/site/store'])?>"><span>Store</span></a></li>										
										<li><a href="<?= Url::to(['/site/about'])?>"><span>About Us</span></a></li>
										<li><a href="<?= Url::to(['/site/contact'])?>"><span>Contact Us</span></a></li>
										<li><a href="<?= Url::to(['/site/signup'])?>"><span>Signup</span></a></li>
										<li><a href="<?= Url::to(['/site/login'])?>"><span>Login</span></a></li>
									</ul>
								</nav>
							</div>
							<!-- End of Main and Mobile Navigation -->
						</div>
						<div
							class="col-12 order-2 col-sm-12 col-md-12 col-lg-6 col-xl-3 order-xl-3">
							<div class="header-actions">
								<div class="header-search-area">
									<form action="#">
										<div class="input-group">
											<input type="text" class="form-control"
												placeholder="Search entire store here ...">
											<div class="input-group-append">
												<button class="header-search-btn" type="submit">
													<i class="pe-7s-search"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
								<!-- end of header-search-area -->
								<div class="header-cart-area">
									<div class="header-cart">
										<div class="btn-group">
											<button class="btn-link dropdown-toggle icon-cart">
												<i class="pe-7s-shopbag"></i> <span class="count-style">2</span>
											</button>
											<div class="dropdown-menu">
												<div class="shopping-cart-content">
													<ul class="list-unstyled">
														<li class="single-cart-item media">
															<div class="shopping-cart-img mr-4">
																<a href="#"> <img class="img-fluid" alt="Cart Item"
																	src="<?= Yii::$app->request->baseUrl?>/theme/images/cart/cart-1.jpg"> <span
																	class="product-quantity">1x</span>
																</a>
															</div>
															<div class="shopping-cart-title media-body">
																<h4>
																	<a href="#">Rival Field Messenger</a>
																</h4>
																<p class="cart-price">$120.00</p>
																<div class="product-attr">
																	<span>Size: S</span> <span>Color: Black</span>
																</div>
															</div>
															<div class="shopping-cart-delete">
																<a href="#"><i class="ion ion-md-close"></i></a>
															</div>
														</li>
														<li class="single-cart-item media">
															<div class="shopping-cart-img mr-4">
																<a href="#"> <img class="img-fluid" alt="Cart Item"
																	src="<?= Yii::$app->request->baseUrl?>/theme/images/cart/cart-2.jpg"> <span
																	class="product-quantity">2x</span>
																</a>
															</div>
															<div class="shopping-cart-title media-body">
																<h4>
																	<a href="#">Fusion Backpack</a>
																</h4>
																<p class="cart-price">$200.00</p>
																<div class="product-attr">
																	<span>Color: White</span> <span>Accessories: Yes</span>
																</div>
															</div>
															<div class="shopping-cart-delete">
																<a href="#"><i class="ion ion-md-close"></i></a>
															</div>
														</li>
													</ul>
													<div class="shopping-cart-total">
														<h4>
															Sub-Total : <span>$320.00</span>
														</h4>
														<h4>
															Total : <span>$320.00</span>
														</h4>
													</div>
													<div class="shopping-cart-btn">
														<a class="default-btn" href="cart.html">view cart</a> <a
															class="default-btn" href="checkout.html">checkout</a>
													</div>
												</div>
											</div>
										</div>
									</div>

									<ul class="list-inline">
										<li class="top-links list-inline-item">
											<div class="btn-group">
												<button class="btn-link dropdown-toggle">
													<i class="pe-7s-config"></i>
												</button>
												<div class="dropdown-menu">
													<ul>
														<li><a href="register.html">Register</a></li>
														<li><a href="login.html">Login</a></li>
														<li><a href="my-account.html">My Account</a></li>
														<li><a href="wishlist.html">Wishlist</a></li>
														<li><a href="checkout.html">Checkout</a></li>
														<li class="currency-menu">
															<h5>USD $</h5>
															<ul>
																<li><a href="#">Euro €</a></li>
																<li><a href="#" class="current">USD $</a></li>
															</ul>
														</li>
														<li class="language-menu">
															<h5>English</h5>
															<ul>
																<li><a href="#" class="current"><img
																		src="<?= Yii::$app->request->baseUrl?>/theme/images/icons/en-gb.png" alt="Icons">
																		English</a></li>
																<li><a href="#"><img src="<?= Yii::$app->request->baseUrl?>/theme/images/icons/fr-fr.png"
																		alt="Icons"> Français</a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- end of header-cart-area -->
							</div>
							<!-- end of header-actions -->
						</div>
					</div>
				</div>
				<!-- end of container -->
			</div>
			<!-- end of header-top -->
		</header>
		<!-- End of Header -->

		<div class="fixed-header-space"></div>
		<!-- empty placeholder div for Fixed Menu bar height-->

		<!-- Start of Main Content Wrapper -->
		<main id="content" class="main-content-wrapper">
			<?= $content ?>
		</main>

		<!-- Start of Footer -->
		<footer id="colophon" class="bgc-secondary pt-full">

			<!-- Footer Widgets Area -->
			<div class="footer-widgets-area">
				<div class="container">
					<div class="footer-inner">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-6 col-lg-4">
								<aside class="widget-container">
									<div class="widget-content">
										<div class="footer-logo mb-half">
											<img src="<?= Yii::$app->request->baseUrl?>/theme/images/footer-logo.png" alt="Footer Logo">
										</div>
										<p>We are a team of designers and developers that create high
											quality Magento, Prestashop, Opencart.</p>
										<div class="footer-contact">
											<p>
												<span>Address:</span>6688Princess Road, London, Greater
												London BAS 23JK, UK
											</p>
											<p>
												<span>Phone:</span><a href="#">(012) 800 456 789-987</a>
											</p>
											<p>
												<span>Email:</span><a href="#">support@example.com</a>
											</p>
										</div>
									</div>
									<!-- end of widget-content -->
								</aside>
								<!-- end of widget-container -->
							</div>

							<div
								class="col-12 col-sm-12 col-md-6 order-md-3 col-lg-2 order-lg-2">
								<aside class="widget-container">
									<h4 class="widgettitle">Products</h4>
									<div class="widget-content">
										<div class="widgetized-menu">
											<ul class="list-unstyled">
												<li><a href="#">Prices drop</a></li>
												<li><a href="#">New Products</a></li>
												<li><a href="#">Best Sales</a></li>
												<li><a href="#">Contact Us</a></li>
												<li><a href="#">Login</a></li>
											</ul>
										</div>
									</div>
									<!-- end of widget-content -->
								</aside>
								<!-- end of widget-container -->
							</div>

							<div
								class="col-12 col-sm-12 col-md-6 order-md-4 col-lg-2 order-lg-3">
								<aside class="widget-container">
									<h4 class="widgettitle">Our Company</h4>
									<div class="widget-content">
										<div class="widgetized-menu">
											<ul class="list-unstyled">
												<li><a href="#">About Us</a></li>
												<li><a href="#">Site Map</a></li>
												<li><a href="#">Stores</a></li>
												<li><a href="#">Terms &amp; Conditions</a></li>
												<li><a href="#">My Account</a></li>
											</ul>
										</div>
									</div>
									<!-- end of widget-content -->
								</aside>
								<!-- end of widget-container -->
							</div>

							<div
								class="col-12 col-sm-12 col-md-6 order-md-2 col-lg-4 order-lg-4">
								<aside class="widget-container">
									<h4 class="widgettitle">Sign up for our newsletter</h4>
									<div class="widget-content">
										<div class="newsletter-widget">
											<p>You may unsubscribe at any moment. For that purpose,
												please find our contact info in the legal notice.</p>
											<form class="mc-subscribe-form">
												<div class="input-group">
													<input type="email" autocomplete="off"
														placeholder="Your Email Address" required>
													<button class="default-btn" type="submit">Sign Up</button>
												</div>
											</form>
											<!-- end of form -->

											<div class="mailchimp-alerts">
												<div class="mailchimp-submitting"></div>
												<div class="mailchimp-success"></div>
												<div class="mailchimp-error"></div>
											</div>
											<!-- end of mailchimp-alerts -->
										</div>
									</div>
									<!-- end of widget-content -->
								</aside>
								<!-- end of widget-container -->

								<aside class="widget-container">
									<div class="widget-content">
										<div class="social-widget mt-half">
											<div
												class="socials d-flex align-items-center justify-content-center justify-content-md-start">
												<ul class="list-inline">
													<li class="list-inline-item"><a href="#"
														class="bg-facebook" title="Facebook" target="_blank"><i
															class="fa fa-facebook"></i></a></li>
													<li class="list-inline-item"><a href="#" class="bg-twitter"
														title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
													<li class="list-inline-item"><a href="#" class="bg-gplus"
														title="Google Plus" target="_blank"><i
															class="fa fa-google-plus"></i></a></li>
													<li class="list-inline-item"><a href="#"
														class="bg-pinterest" title="Pinterest" target="_blank"><i
															class="fa fa-pinterest"></i></a></li>
													<li class="list-inline-item"><a href="#"
														class="bg-instagram" title="Instagram" target="_blank"><i
															class="fa fa-instagram"></i></a></li>
													<li class="list-inline-item"><a href="#"
														class="bg-linkedin" title="Linked In" target="_blank"><i
															class="fa fa-linkedin"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- end of widget-content -->
								</aside>
								<!-- end of widget-container -->
							</div>
						</div>
						<!-- end of row -->
					</div>
					<!-- end of footer-inner -->
				</div>
				<!-- end of container -->
			</div>
			<!-- end of footer-widgets-area -->
			<!-- Footer Copyright -->
			<div class="footer-copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-sm-12 col-md-6 col-lg-6">
							<p class="copyright-text">
								Copyright © 2018 <a href="#" rel="nofollow">Pebona Themes</a>.
								All Right Reserved.
							</p>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6">
							<div class="footer-payment">
								<a href="#"><img src="<?= Yii::$app->request->baseUrl?>/theme/images/icons/payment.png"
									alt="Payment Icons"></a>
							</div>
						</div>
					</div>
					<!-- end of row -->
				</div>
				<!-- end of container -->
			</div>
			<!-- end of footer-copyright -->
		</footer>
		<!-- End of Footer -->
	</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
