
@extends('layout.main')
@section('content')
<!-- main of the page -->
		<main id="main">
			<!-- main slider of the page -->
			<section class="main-slider">
				<!-- slide of the page -->
				<div class="slide bg-full overlay" style="background-image: url('{{ asset('images/img01.jpg') }}');">
					<div class="caption text-center">
						<span class="title text-uppercase">Fast And reliable</span>
						<h1 class="text-uppercase">Construction <br>industry</h1>
						<div class="btn-holder">
							<a href="#" class="btn active text-center text-uppercase">Our project</a>
							<a href="#" class="btn text-center text-uppercase">Get a quote</a>
						</div>
					</div>
				</div>
				<!-- slide of the page -->
				<div class="slide bg-full overlay" style="background-image: url('{{ asset('/images/img18.jpg') }}');">
					<div class="caption text-center">
						<span class="title text-uppercase">Fast And reliable</span>
						<h1 class="text-uppercase">Construction <br>industry</h1>
						<div class="btn-holder">
							<a href="#" class="btn active text-center text-uppercase">Our project</a>
							<a href="#" class="btn text-center text-uppercase">Get a quote</a>
						</div>
					</div>
				</div>
				<!-- slide of the page -->
				<div class="slide bg-full overlay" style="background-image: url('{{ asset('/images/img44.jpg') }}');">
					<div class="caption text-center">
						<span class="title text-uppercase">Fast And reliable</span>
						<h1 class="text-uppercase">Construction <br>industry</h1>
						<div class="btn-holder">
							<a href="#" class="btn active text-center text-uppercase">Our project</a>
							<a href="#" class="btn text-center text-uppercase">Get a quote</a>
						</div>
					</div>
				</div>
			</section>
			<!-- service sec of the page -->
			<section class="service-sec box-shadow bg-light-grey">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4">
							<!-- service of the page -->
							<div class="service overlay">
								<img src="{{ asset('/images/img02.jpg') }}" alt="image description" class="img-responsive">
								<div class="over text-center">
									<h2 class="text-uppercase">EXTERIOR DESIGN</h2>
									<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.</p>
									<a href="service-detail.html" class="read-more text-uppercase">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<!-- service of the page -->
							<div class="service overlay">
								<img src="{{ asset('/images/img03.jpg') }}" alt="image description" class="img-responsive">
								<div class="over text-center">
									<h2 class="text-uppercase">HOME BUILDING</h2>
									<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.</p>
									<a href="service-detail.html" class="read-more text-uppercase">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<!-- service of the page -->
							<div class="service overlay">
								<img src="{{ asset('/images/img04.jpg') }}" alt="image description" class="img-responsive">
								<div class="over text-center">
									<h2 class="text-uppercase">BUILDING RENOVATION</h2>
									<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.</p>
									<a href="service-detail.html" class="read-more text-uppercase">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- project sec of the page -->
			<section class="project-sec bg-full pad-t" style="background-image: url('{{ asset('/images/img05.jpg') }}');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h3 class="main-heading text-uppercase">Our Projects</h3>
						</div>
					</div>
				</div>
				<!-- col of the page -->
				<div class="col overlay">
					<img src="{{ asset('/images/img06.jpg') }}" alt="image description" class="img-responsive">
					<div class="over text-center">
						<strong class="title text-uppercase"><a href="">Dream House</a></strong>
						<span class="sub-title">Exterior Design</span>
					</div>
				</div>
				<!-- col of the page -->
				<div class="col overlay">
					<img src="{{ asset('/images/img07.jpg') }}" alt="image description" class="img-responsive">
					<div class="over text-center">
						<strong class="title text-uppercase"><a href="project-detail1.html">Dream House</a></strong>
						<span class="sub-title">Exterior Design</span>
					</div>
				</div>
				<!-- col of the page -->
				<div class="col overlay">
					<img src="{{ asset('/images/img08.jpg') }}" alt="image description" class="img-responsive">
					<div class="over text-center">
						<strong class="title text-uppercase"><a href="project-detail1.html">Dream House</a></strong>
						<span class="sub-title">Exterior Design</span>
					</div>
				</div>
				<!-- col of the page -->
				<div class="col overlay">
					<img src="{{ asset('/images/img09.jpg') }}" alt="image description" class="img-responsive">
					<div class="over text-center">
						<strong class="title text-uppercase"><a href="project-detail1.html">Dream House</a></strong>
						<span class="sub-title">Exterior Design</span>
					</div>
				</div>
			</section>
			<!-- choose sec of the page -->
			<section class="choose-sec container pad-t">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h3 class="main-heading">WHY CHOOSE US</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="img-holder">
							<img src="{{ asset('/images/img10.jpg') }}" alt="image desciption" class="img-responsive">
						</div>
						<div class="img-holder">
							<div class="img-col">
								<img src="{{ asset('/images/img11.jpg') }}" alt="image description" class="img-responsive">
							</div>
							<div class="img-col">
								<img src="{{ asset('/images/img12.jpg') }}" alt="image description" class="img-responsive">
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<ul class="list-unstyled choose-list">
							<li>
								<span class="icon"><i class="fa fa-thumbs-o-up"></i></span>
								<div class="txt-holder">
									<h4 class="text-uppercase">Reliability</h4>
									<p>We trust in our employees because we choose smart, experienced, and hard working professionals.</p>
								</div>
							</li>
							<li>
								<span class="icon"><i class="fa fa-clock-o"></i></span>
								<div class="txt-holder">
									<h4 class="text-uppercase">Expertise</h4>
									<p>We trust in our employees because we choose smart, experienced, and hard working professionals.</p>
								</div>
							</li>
							<li>
								<span class="icon"><i class="fa fa-diamond"></i></span>
								<div class="txt-holder">
									<h4 class="text-uppercase">Quality</h4>
									<p>We trust in our employees because we choose smart, experienced, and hard working professionals.</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- help  sec of the page -->
			<section class="help-sec bg-full" style="background-image: url('{{ asset('/images/img05.jpg') }}');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="holder">
								<h3 class="main-heading text-uppercase">We are always ready <br>to help you</h3>
								<p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
								<a href="project1.html" class="btn active text-center text-uppercase">Our project</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="img-holder">
								<img src="{{ asset('/images/img13.png') }}" alt="image description" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- blog sec of the page -->
			<section class="blog-sec container pad-t">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h3 class="main-heading text-uppercase">Latest Blogs</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<!-- blog of the page -->
						<div class="blog">
							<div class="img-holder">
								<img src="{{ asset('/images/img14.jpg') }}" alt="image description" class="img-responsive">
								<div class="over">
									<a href="#"><span></span></a>
								</div>
							</div>
							<div class="txt-holder">
								<h3 class="text-uppercase"><a href="#">Tips for Redesigning Your Bathroom</a></h3>
								<ul class="list-unstyled comment-nav">
									<li><time datetime="2017-02-03 20:00">Posted 08.17.2017</time></li>
									<li>|</li>
									<li><a href="#">Construction</a></li>
								</ul>
								<p>Designing a bathroom can easily become a truly daunting task, especially if space and cost are of concern.</p>
								<a href="#" class="read-more text-uppercase">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<!-- blog of the page -->
						<div class="blog">
							<div class="img-holder">
								<img src="{{ asset('/images/img15.jpg') }}" alt="image description" class="img-responsive">
								<div class="over">
									<a href="#"><span></span></a>
								</div>
							</div>
							<div class="txt-holder">
								<h3 class="text-uppercase"><a href="#">Tips for Redesigning Your Bathroom</a></h3>
								<ul class="list-unstyled comment-nav">
									<li><time datetime="2017-02-03 20:00">Posted 08.17.2017</time></li>
									<li>|</li>
									<li><a href="#">Plumber</a></li>
								</ul>
								<p>Designing a bathroom can easily become a truly daunting task, especially if space and cost are of concern.</p>
								<a href="#" class="read-more text-uppercase">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<!-- blog of the page -->
						<div class="blog">
							<div class="img-holder">
								<img src="{{ asset('/images/img16.jpg') }}" alt="image description" class="img-responsive">
								<div class="over">
									<a href="#"><span></span></a>
								</div>
							</div>
							<div class="txt-holder">
								<h3 class="text-uppercase"><a href="#">Tips for Redesigning Your Bathroom</a></h3>
								<ul class="list-unstyled comment-nav">
									<li><time datetime="2017-02-03 20:00">Posted 08.17.2017</time></li>
									<li>|</li>
									<li><a href="#">Repair Roof</a></li>
								</ul>
								<p>Designing a bathroom can easily become a truly daunting task, especially if space and cost are of concern.</p>
								<a href="#" class="read-more text-uppercase">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- testimonail sec of the page -->
			<div class="testimonail-sec bg-full overlay" style="background-image: url('{{ asset('/images/img17.jpg') }}');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- testimonail slider of the page -->
							<div class="testimonail-slider">
								<!-- slide of the page -->
								<blockquote class="slide text-center">
									<q>“ I've been happy with the services provided by Vincin. Luis Philipe has been wonderful! He has returned my calls quickly, and he answered all my questions. This is required when, for example, the final text is not yet available. ”</q>
									<cite class="text-uppercase">Alex Sanches</cite>
									<span>Managing Partner</span>
								</blockquote>
								<!-- slide of the page -->
								<blockquote class="slide text-center">
									<q>“ I've been happy with the services provided by Vincin. Luis Philipe has been wonderful! He has returned my calls quickly, and he answered all my questions. This is required when, for example, the final text is not yet available. ”</q>
									<cite class="text-uppercase">Alex Sanches</cite>
									<span>Managing Partner</span>
								</blockquote>
								<!-- slide of the page -->
								<blockquote class="slide text-center">
									<q>“ I've been happy with the services provided by Vincin. Luis Philipe has been wonderful! He has returned my calls quickly, and he answered all my questions. This is required when, for example, the final text is not yet available. ”</q>
									<cite class="text-uppercase">Alex Sanches</cite>
									<span>Managing Partner</span>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- client sec of the page -->
			<div class="client-sec container">
				<div class="row">
					<div class="col-xs-12 line-box">
						<!-- client logo of the page -->
						<ul class="list-unstyled client-logo line">
							<li><a href="#"><img src="{{ asset('/images/logo01.png') }}" alt="logo" class="img-responsive"></a></li>
							<li><a href="#"><img src="{{ asset('/images/logo02.png') }}" alt="logo" class="img-responsive"></a></li>
							<li><a href="#"><img src="{{ asset('/images/logo03.png') }}" alt="logo" class="img-responsive"></a></li>
							<li><a href="#"><img src="{{ asset('/images/logo04.png') }}" alt="logo" class="img-responsive"></a></li>
							<li><a href="#"><img src="{{ asset('/images/logo05.png') }}" alt="logo" class="img-responsive"></a></li>
							<li><a href="#"><img src="{{ asset('/images/logo01.png') }}" alt="logo" class="img-responsive"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</main>
@endsection
