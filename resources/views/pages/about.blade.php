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
					<h1 class="page-title bottom-line">Who We Are</h1>
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
							
							<!-- <h6 class="typo-light text-color">								
								Tillage Business Solutions is a Limited liability partnership, with the business trading its guns to possible scaling-up to the East African regions in the near future.
							</h6> -->

							<h4 class="sub-title">Our vision</h4>
							<p>
								Our vision is to be regarded as long-term trusted advisers who make a difference to our clients, our teams and our communities by providing high-calibre audit, accounting, 
								tax and advisory services in a personal and professional way. 
							</p>
							<p>
								Whether serving public sector organizations, owner managed businesses, private companies / individuals and public companies, 
								indeed our mission is to provide our clients with professional services of the highest quality to help them meet the challengesthey face every day.
							</p>
							
						</div>

						<div class="col-md-12">
							
							<h4 class="sub-title">Our Objective</h4>
							<p>
								To consider the future and guide our clients into making the right strategic decisions. 
							</p>
							<p>
								To provide Subcontracting & Outsourcing Services for none core activities in the following areas:-
							</p>
							<ul class="icon-list">
								<li>
									Accounting & Outsourcing
								</li>
								<li>
									Tax
								</li>
								<li>
									Payroll
								</li>
								<li>
									Audit
								</li>
								<li>
									Advisory
								</li>
								<li>
									Corporate Secretarial
								</li>
								<li>
									Corporate Training
								</li>
								<li>
									System Review and Implementation
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- TITLE -->
							<h4 class="sub-title">Some facts about us</h4>
						</div>
						<div class="col-md-4">
							<div class="pic-shape">
								<img class="img-responsive shadow-block" src="images/about/facts.png" alt="about">
							</div>
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-sm-6">
									<!-- COUNTER WRAPPER -->
									<div class="counter-wrapper clearfix">
										<!-- COUNTER NUMBER -->
										<h3 data-count="1" class="number-counter text-color">2</h3>
										<!-- COUNTER TITLE -->
										<h4 class="counter-title">Awards Won</h4>
										<!-- COUNTER DESC -->
										<p>Best Financial Inclusion Award</p>
									</div>
								</div>
								<div class="col-sm-6">
									<!-- COUNTER WRAPPER -->
									<div class="counter-wrapper clearfix">
										<!-- COUNTER NUMBER -->
										<h3 data-count="8" class="number-counter text-color">120</h3>
										<!-- COUNTER TITLE -->
										<h4 class="counter-title">Satisfied Clients</h4>
										<!-- COUNTER DESC -->
										<p>Number of satisfied clients we have worked with.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<!-- COUNTER WRAPPER -->
									<div class="counter-wrapper clearfix">
										<!-- COUNTER NUMBER -->
										<h3 data-count="6" class="number-counter text-color">6</h3>
										<!-- COUNTER TITLE -->
										<h4 class="counter-title">Service Packages</h4>
										<!-- COUNTER DESC -->
										<p>We currently have 6 service packages for you.</p>
									</div>
								</div>
								<div class="col-sm-6">
									<!-- COUNTER WRAPPER -->
									<div class="counter-wrapper clearfix">
										<!-- COUNTER NUMBER -->
										<h3 data-count="22" class="number-counter text-color">150</h3>
										<!-- COUNTER TITLE -->
										<h4 class="counter-title">Projects Completed</h4>
										<!-- COUNTER DESC -->
										<p>Number of projects completed since we started.</p>
									</div>
								</div>
							</div>
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
						<a href="{!! route('contacts') !!}" class="btn btn-default">Contact us</a>
					</div><!-- /. WIDGET -->
					
					<!-- TESTIMONIAL WIDGET -->
					<div class="widget testimonial-widget">
						<!-- TESTI WRAPPER -->
						<div class="testimonial-wrapper testimonial-md">
							<!-- TESTI CMT -->
							<div class="testimonial-cmt grey-bg">
								<p>
									Tillage keeps me informed and on track. They explains when I don’t understand. And I love the holistic approach Tillage provides. 
									They understands my financial goals as a whole, treats me with the utmost respect, and takes our lives and finances seriously.  I know I am in good hands.”
								</p>
								<div class="cmt-arrow"></div>
							</div>
							<!-- TESTI DETAILS -->
							<div class="media">
								<div class="media-left testi-img-block">
									<a href="#">
										<!-- IMG -->
										<img class="media-object img-circle" src="images/about/lee-ibrahim.png" alt="lee-img">
									</a>
								</div>
								<div class="media-body testi-details-block">
									<!-- NAME -->
									<p class="testi-name typo-black">Lee Ibrahim</p>
									<!-- DESC -->
									<p class="testi-designation">Founder and CEO of <span><a href="https://resavi.com" target="_blank" style="color: #E14343">Resavi.com</a></span></p>
								</div>
							</div><!-- /. SERVICES SLIDE -->
						</div><!-- /. TESTI WRAPPER -->
					</div><!-- /. TESTIMONIAL WIDGET -->
					
					<!-- BROCHURES WIDGET -->
					<!-- <div class="widget brochures-widget">
						<h6 class="widget-title">Brochures</h6>
						<ul>
							<li><a href="#"><span class="text-color">finance-magazine</span>.pdf<span class="pull-right file-type fa fa-file-pdf-o"></span></a></li>
							<li><a href="#"><span class="text-color">investment-guide</span>.doc<span class="pull-right file-type fa fa-file-word-o"></span></a></li>
						</ul>
					</div> -->
					<!-- /. BROCHURES WIDGET -->
					
				</div><!-- /. SIDEBAR -->
			</div>		
		</div>	<!-- /.CONTAINER -->
	</div><!-- /. PAGE CONTENT -->

@endsection