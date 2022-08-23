@extends('layouts.front')

@section('content')
	
	<!-- PAGE TITLE WRAPPER-->
	<div class="page-title-wrapper">
		<!-- CONTAINER -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 animated" data-animation="fadeInUp" data-animation-delay="300">
					<!-- BREADCRUMB -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">ABOUT US</li>
					</ol>
					<!-- PAGE TITLE -->
					<h1 class="page-title bottom-line">Team</h1>
				</div>
			</div>
		</div>	<!-- /.CONTAINER -->	
	</div><!-- /.PAGE TITLE WRAPPER-->
	
	<!-- PAGE CONTENT -->
	<div class="page-content">
		<!-- CONTAINER -->
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<!-- TITLE -->
							<h4 class="sub-title">Meet our team</h4>
						</div>
						<div class="col-sm-6">
							<!-- TEAM-GRID -->
							<div class="team-grid text-center">
								<!-- TEAM-IMG -->
								<img class="img-responsive team-img" src="images/about/profile.png" alt="team">
								<!-- TEAM NAME -->
								<p class="team-name"><a href="#">CPA Clement Edward Onyango</a></p>
								<!-- SOCIAL -->
								<ul class="team-social list-inline text-center">
									<li><a href="#" class="ion-social-facebook-outline"></a></li>
									<li><a href="#" class="ion-social-twitter-outline"></a></li>
									<li><a href="#" class="ion-social-instagram-outline"></a></li>
								</ul>
							</div><!-- /. TEAM-GRID -->
						</div>
						<div class="col-sm-6">
							<!-- TEAM-GRID -->
							<div class="team-grid text-center">
								<!-- TEAM-IMG -->
								<img class="img-responsive team-img" src="images/about/profile.png" alt="team">
								<!-- TEAM NAME -->
								<p class="team-name"><a href="#">CPA Mutuku Margaret Njeri</a></p>
								<!-- SOCIAL -->
								<ul class="team-social list-inline text-center">
									<li><a href="#" class="ion-social-facebook-outline"></a></li>
									<li><a href="#" class="ion-social-twitter-outline"></a></li>
									<li><a href="#" class="ion-social-instagram-outline"></a></li>
								</ul>
							</div><!-- /. TEAM-GRID -->
						</div>
						
					</div>
						
					
				</div>
				<!-- SIDEBAR -->
				<div class="sidebar col-md-3">
					<!-- MENU WIDGET -->
					@include('partials._about_menu')
					<!-- /. MENU WIDGET -->
					
					<!-- CONTACT WIDGET -->
					<div class="widget contact-widget">
						<!-- WIDGET TITLE -->
						<h6 class="widget-title">Need our help?</h6>
						<p>Please do not hesitate to get back to us at the time of your convinience. We are on call 24/7.</p>
						<a href="#" class="btn btn-default">Contact us</a>
					</div><!-- /. WIDGET -->
					
					
					
				</div><!-- /. SIDEBAR -->
			</div>		
		</div>	<!-- /.CONTAINER -->
	</div><!-- /. PAGE CONTENT -->

@endsection