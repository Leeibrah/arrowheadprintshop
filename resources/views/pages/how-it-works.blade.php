@extends('layouts.front')

@section('content')

	<!--Page Title-->
    <!-- <section class="page-title" style="background-image:url(images/background/14.png);">
    	<div class="auto-container">
        	<h1>How It Works</h1>
			<div class="text">How It Works SaloHub.</div>
        </div>
    </section>
    
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>How It Works</li>
            </ul>
        </div>
    </div> -->


    <!-- Pricing Section -->
	<section class="pricing-section" class="page-title" style="background-image:url(images/background/3.png)">

		<div class="auto-container">
			<div class="row clearfix">
				
				
				<!-- Title Column -->
				<div class="title-column col-lg-4 col-md-12 col-xs-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title light">
							<h2 style="color: #3bb2b8;">How It Works</h2>
							<div class="separator"></div>

							<h2>Download<br> our Android App</h2>
							<div class="separator"></div>
							<div>
								<div>
									<a class="download-button" href="/release/SaloHub.apk" onclick="ga('send', 'event', 'Click', 'Android APP Download', 'App Link');" target="_self">
				                        Download APK Now
				                    </a>
								</div>
							</div>
							<!-- <div class="text">Excepteur sint occaecat cupidatat proident sunt culpa officia desernt mollit anim est.</div> -->
						</div>
					</div>
				</div>
				
				<!-- Price Column -->
				<div class="price-column col-lg-8 col-md-12 col-xs-12">
					<div class="inner-column">
						<div class="row clearfix">
							
							<!-- Price Block -->
							<div class="price-block col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<img src="images/gallery/phone-1.png" alt="" title="">
								</div>
							</div>
							
							<!-- Price Block -->
							<div class="price-block col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<img src="images/gallery/phone-2.png" alt="" title="">
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- <section class="page-title" style="background-image:url(images/background/14.png);">
    	<div class="auto-container">
        	<h1>How It Works</h1>
			<div class="text">How It Works SaloHub.</div>
        </div>
    </section> -->

    <!-- Steps Section -->
	<section class="steps-section">
		<!-- Pattern Layer -->
		<div class="pattern-layer" style="background-image:url(images/icons/pattern-7.png)"></div>
		<div class="auto-container">
			<!--Sec Title-->
			<div class="sec-title centered">
				<h2>We Complete Every Simple Step <br> Very Carefully</h2>
				<div class="separator"></div>
			</div>
			
			<div class="row clearfix">
				
				<div class="step-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">
							<span class="number">01</span>
						</div>
						<!-- <h3><a href="#">Collect Idea</a></h3>
						<div class="text">Lorem ipsum dolor sit amet constur adipelit sed do eiusm</div> -->
					</div>
				</div>

				<div class="step-block col-lg-8 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- <div class="number-box">
							<span class="number">01</span>
						</div> -->
						<h3><a href="#">Salo Hub & Employer Agreement</a></h3>
						<div class="text" style="font-size: 16px; color: #000;">
							Employer signs check-off agreement with Salo Hub Loan repayments due are repaid via direction deduction from payroll
						</div>
					</div>
				</div>

			</div>

			<div class="sec-title centered">
				<div class="separator"></div>
			</div>

			<div class="row clearfix">
				
				<div class="step-block col-lg-8 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- <div class="number-box">
							<span class="number">01</span>
						</div> -->
						<h3><a href="#">Employer Provides Employee Data</a></h3>
						<div class="text" style="font-size: 16px; color: #000;">
							Employer provides information on salary and other relevant information to be used for determining an employee’s salary advance loan limit
						</div>
					</div>
				</div>

				<div class="step-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">
							<span class="number">02</span>
						</div>
						<!-- <h3><a href="#">Collect Idea</a></h3>
						<div class="text">Lorem ipsum dolor sit amet constur adipelit sed do eiusm</div> -->
					</div>
				</div>

			</div>

			<div class="sec-title centered">
				<div class="separator"></div>
			</div>

			<div class="row clearfix">
				
				<div class="step-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">
							<span class="number">03</span>
						</div>
						<!-- <h3><a href="#">Collect Idea</a></h3>
						<div class="text">Lorem ipsum dolor sit amet constur adipelit sed do eiusm</div> -->
					</div>
				</div>

				<div class="step-block col-lg-8 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- <div class="number-box">
							<span class="number">01</span>
						</div> -->
						<h3><a href="#">Salary Advance Limits Availed</a></h3>
						<div class="text" style="font-size: 16px; color: #000;">
							Employees are set up in the Salo Hub database with pre-approved salary advance limits. Employee borrow any time by dialing a USSD code and following the prompts. The loan is disbursed immediately into their mobile money account
						</div>
					</div>
				</div>

			</div>
			
		</div>
	</section>
	<!-- End Steps Section -->

	

	<br>
	
	<!-- Services Section Five -->
	<section class="services-section-five">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h2>Sign Up Today and Join Us!</h2>
						<div class="separator"></div>
					</div>
					<div class="pull-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="margin-top: -5%;">
						<a href="/employee-enrollment" class="theme-btn btn-style-two">Register Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	

@endsection