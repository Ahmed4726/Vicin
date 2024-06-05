@extends('layout.top')
@section('content')
		<!-- main of the page -->
		<main id="main">
			<!-- banner of the page -->
			<section class="banner bg-full overlay" style="background-image: url('{{ asset('images/img17.jpg') }}');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="main-heading3 text-uppercase">About US</h1>
							<nav class="breadcrumbs text-center">
								<ul class="list-unstyled">
									<li><a href="/">Home</a></li>
									<li>></li>
									<li>About US</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</section>
			<!-- abt sec of the page -->
			<section class="abt-sec style2 container">
				<div class="row holder">
					<div class="col-xs-12 col-sm-8 col-md-6">
						<h2 class="main-heading text-uppercase">We are the leader in the <br>construction.</h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia c. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. </p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="img-holder">
							<img src="{{ asset('images/img19.jpg') }}" alt="image description" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<h2 class="main-heading text-uppercase">COMPANY HISTORY</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
					</div>
				</div>
			</section>
			<!-- team sec of the page -->
			<section class="team-sec style2">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h3 class="main-heading text-uppercase">OUR TEAM</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<!-- team slider of the page -->
							<div class="team-slider">
								<!-- team of the page -->
								<div class="team">
									<img src="{{ asset('images/img40.jpg') }}" alt="image description" class="img-responsive">
									<div class="over">
										<strong class="title text-uppercase">Don Alexis</strong>
										<p>nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.</p>
										<ul class="socail-network list-unstyled">
											<li><a href="#" class="social_facebook"></a></li>
											<li><a href="#" class="social_linkedin"></a></li>
											<li><a href="#" class="social_twitter"></a></li>
											<li><a href="#" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
								<!-- team of the page -->
								<div class="team">
									<img src="{{ asset('images/img41.jpg') }}" alt="image description" class="img-responsive">
									<div class="over">
										<strong class="title text-uppercase">ANNA GREEN</strong>
										<p>nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.</p>
										<ul class="socail-network list-unstyled">
											<li><a href="#" class="social_facebook"></a></li>
											<li><a href="#" class="social_linkedin"></a></li>
											<li><a href="#" class="social_twitter"></a></li>
											<li><a href="#" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
								<!-- team of the page -->
								<div class="team">
									<img src="{{ asset('images/img42.jpg') }}" alt="image description" class="img-responsive">
									<div class="over">
										<strong class="title text-uppercase">Luis Philipe</strong>
										<p>nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.</p>
										<ul class="socail-network list-unstyled">
											<li><a href="#" class="social_facebook"></a></li>
											<li><a href="#" class="social_linkedin"></a></li>
											<li><a href="#" class="social_twitter"></a></li>
											<li><a href="#" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
								<!-- team of the page -->
								<div class="team">
									<img src="{{ asset('images/img43.jpg') }}" alt="image description" class="img-responsive">
									<div class="over">
										<strong class="title text-uppercase">Jamie</strong>
										<p>nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.</p>
										<ul class="socail-network list-unstyled">
											<li><a href="#" class="social_facebook"></a></li>
											<li><a href="#" class="social_linkedin"></a></li>
											<li><a href="#" class="social_twitter"></a></li>
											<li><a href="#" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
								<!-- team of the page -->
								<div class="team">
									<img src="{{ asset('images/img40.jpg') }}" alt="image description" class="img-responsive">
									<div class="over">
										<strong class="title text-uppercase">Jamie</strong>
										<p>nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.</p>
										<ul class="socail-network list-unstyled">
											<li><a href="#" class="social_facebook"></a></li>
											<li><a href="#" class="social_linkedin"></a></li>
											<li><a href="#" class="social_twitter"></a></li>
											<li><a href="#" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- promo box of the page -->
			<div class="promo-box">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-9">
							<p>WE PROVIDE FAST AND AFFORDABLE SERVICE FOR YOUR PROJECTS!</p>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="#" class="btn text-center text-uppercase">CALL US NOW</a>
						</div>
					</div>
				</div>
			</div>
		</main>
@endsection
