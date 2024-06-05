@extends('layout.top')
@section('content')
		<!-- main of the page -->
		<main id="main">
			<!-- banner of the page -->
			<section class="banner bg-full overlay" style="background-image: url('{{ asset('images/img17.jpg') }}');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="main-heading3 text-uppercase">Projects</h1>
							<!-- breadcrumbs of the page -->
							<nav class="breadcrumbs text-center">
								<ul class="list-unstyled">
									<li><a href="/">Home</a></li>
									<li>></li>
									<li>Projects</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</section>
			<!-- project sec of the page -->
			<div class="project-sec style2">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<!-- project list of the page -->
							<ul class="filter-list list-unstyled text-center">
								<li class="active"><a href="#">All</a></li>
								<li><a href="#" data-filter=".building">Building</a></li>
								<li><a href="#" data-filter=".roof">Roof Repair</a></li>
								<li><a href="#" data-filter=".plumber">Plumber</a></li>
								<li><a href="#" data-filter=".design">Design</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<!-- project holder of the page -->
							<div class="project-holder">
								<!-- col of the page -->
								<div class="col overlay building">
									<img src="{{ asset('images/img58.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col overlay roof">
									<img src="{{ asset('images/img59.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col col2 overlay building">
									<img src="{{ asset('images/img60.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col overlay plumber">
									<img src="{{ asset('images/img61.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col overlay design">
									<img src="{{ asset('images/img62.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col col2 overlay building">
									<img src="{{ asset('images/img63.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col overlay plumber">
									<img src="{{ asset('images/img64.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col overlay roof">
									<img src="{{ asset('images/img65.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col col2 overlay building">
									<img src="{{ asset('images/img66.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col overlay plumber">
									<img src="{{ asset('images/img67.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col overlay roof">
									<img src="{{ asset('images/img68.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
								<!-- col of the page -->
								<div class="col col2 overlay design">
									<img src="{{ asset('images/img69.jpg') }}" alt="image description" class="img-responsive">
									<div class="over text-center">
										<strong class="title text-uppercase"><a href="project-detail2.html">Model House</a></strong>
										<span class="sub-title">Interdior Design</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<a href="#" class="read-more text-uppercase">Load more</a>
						</div>
					</div>
				</div>
			</div>
		</main>
@endsection
