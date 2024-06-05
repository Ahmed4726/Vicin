<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vicin | Multipurpose Construction & Plumbing HTML Template</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css">

	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Arizonia%7COpen+Sans:300,300i,400,400i,600,700,800%7CRoboto:300,400,500,700" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/plugins.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/colors.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header of the page -->
		<header id="header" class="style2">
			<!-- header area of the page -->
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<ul class="contact-list list-unstyled">
								<li><i class="icon fa fa-clock-o"></i> Opening Hours: Mon-Fri: 9am-6pm; Sat-Sun: 10am - 1pm</li>
							</ul>
							<ul class="sign-up list-unstyled">
								<li><a href="#popup1" class="lightbox">log in</a></li>
								<li>|</li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- header holder of the page -->
			<div class="header-holder">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- logo of the page -->
							<div class="logo">
								<a href="/"><img src="{{ asset('images/logo-f.png') }}" alt="VICIN" class="img-responsive"></a>
							</div>
							<a href="#" class="nav-opener text-center md-round"><i class="fa fa-bars"></i></a>
							<!-- nav of the page -->
							<nav id="nav">
								<ul class="list-unstyled">
									<li class="active">
										<a href="/">Home</a>
										{{-- <ul class="list-unstyled drop-down">
											<li><a href="#">Homepage 1</a></li>
											<li><a href="#">Homepage 2</a></li>
											<li><a href="#">Homepage 3</a></li>
											<li><a href="#">Homepage 4</a></li>
										</ul> --}}
									</li>
									<li><a href="/about">About us</a></li>
									<li>
										<a href="/services">services</a>
										{{-- <ul class="list-unstyled drop-down">
											<li><a href="#">Services List</a></li>
											<li><a href="#">Services Details</a></li>
										</ul> --}}
									</li>
									<li>
										<a href="/projects">projects</a>
										{{-- <ul class="list-unstyled drop-down">
											<li><a href="#">projects 1</a></li>
											<li><a href="#">projects 2</a></li>
											<li><a href="#">projects Details 1</a></li>
											<li><a href="#">projects Details 2</a></li>
										</ul> --}}
									</li>
									{{-- <li>
										<a href="#">pages</a>
										<ul class="list-unstyled drop-down">
											<li><a href="#">404 page</a></li>
											<li><a href="#">faq</a></li>
											<li><a href="#">login</a></li>
											<li><a href="#">Checkout</a></li>
											<li><a href="#">Cart</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Shop</a>
										<ul class="list-unstyled drop-down">
											<li><a href="#">Shop List</a></li>
											<li><a href="#">Shop Details</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Blog</a>
										<ul class="list-unstyled drop-down">
											<li><a href="#">Blog List</a></li>
											<li><a href="#">Blog Details</a></li>
										</ul>
									</li> --}}
									<li><a href="/contact">contact us</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
    @yield('content')
<!-- footer of the page -->
<footer id="footer">
    <!-- footer holder of the page -->
    <div class="footer-holder">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h3 class="text-uppercase">About us</h3>
                    <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h3 class="text-uppercase">Get in Touch</h3>
                    <!-- Contact list of the page -->
                    <ul class="list-unstyled contact-list">
                        <li>
                            <span class="icon ti-location-pin"></span>
                            <address>1600 Amphitheatre Parkway <br>Mountain View CA 94043</address>
                        </li>
                        <li>
                            <span class="icon ti-email"></span>
                            <a href="mailto:&#105;&#110;&#102;&#111;&#046;&#100;&#101;&#101;&#114;&#099;&#114;&#101;&#097;&#116;&#105;&#118;&#101;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">&#105;&#110;&#102;&#111;&#046;&#100;&#101;&#101;&#114;&#099;&#114;&#101;&#097;&#116;&#105;&#118;&#101;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a>
                        </li>
                        <li>
                            <span class="icon ti-headphone-alt"></span>
                            <a href="tel:18005596580">+1 800 559 6580</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h3 class="text-uppercase">Opening Hours</h3>
                    <!-- Hour list of the page -->
                    <ul class="list-unstyled hour-list">
                        <li>Our support  24 / 7</li>
                        <li>Monday – Friday: 9am-6pm</li>
                        <li>Saturday: 10am-4pm</li>
                        <li>Sunday: 10am-1pm</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h3 class="text-uppercase">Subscribe</h3>
                    <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                    <!-- Subscribe form of the page -->
                    <form action="#" class="subscribe-form">
                        <fieldset>
                            <input type="email" class="form-control" placeholder="your email here">
                            <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area of the page -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>Copyrights © 2017 All Rights Reserved.</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <!-- Socail network of the page -->
                    <ul class="socail-network list-unstyled">
                        <li><a href="#" class="social_facebook"></a></li>
                        <li><a href="#" class="social_linkedin"></a></li>
                        <li><a href="#" class="social_twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="social_pinterest"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- back top of the page -->
<span id="back-top" class="text-center md-round fa fa-caret-up"></span>
<!-- loader of the page -->
<div id="loader" class="loader-holder">
  <div class="block"><img src="images/svg/hearts.svg" width="100" alt="loader"></div>
</div>
</div>
<div class="popup-holder">
<div id="popup1" class="lightbox">
    <form action="#" class="signup-form text-center">
        <fieldset>
            <h2>Sign in to <span class="clr">Vicin</span></h2>
            <p>Enter your details below.</p>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="EMAIL ADDRESS">
                <input type="password" class="form-control" placeholder="PASSWORD">
            </div>
            <button type="submit" class="btn text-center text-uppercase">SIGN IN</button>
            <a href="#">forgot your password?</a>
        </fieldset>
    </form>
</div>
</div>
<script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDfI624nPMEKE1g3DBAHiiFOD5pb2NB5Sk"></script>
<!-- include jQuery -->
<script src="js/jquery.js"></script>
<!-- include jQuery -->
<script src="js/plugins.js"></script>
<!-- include jQuery -->
<script src="js/jquery.main.js"></script>
</body>
</html>
