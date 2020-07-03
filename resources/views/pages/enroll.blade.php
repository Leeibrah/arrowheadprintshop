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
	<section class="pricing-section" class="page-title" style="background-image:url(images/background/3.png); height: 450px;">

		<div class="auto-container">
			<div class="row clearfix">
				
				
				<!-- Title Column -->
				<div class="title-column col-lg-12 col-md-12 col-xs-12">
					<!-- <div class="inner-column"> -->
						<!-- Sec Title -->
						<div class="sec-title light" >
							<h2 style="color: #3bb2b8;">Enroll Today</h2>
							<div class="separator"></div>

							<h2>Choose your enrollment Plan</h2>

							<div class="row">
							  	<div class="col-6" style="margin-top: 50px;">
							  		<div>
										<div>
											<a href="{!! route('employer-enrollment') !!}" class="theme-btn btn-style-one">
												Enrollment as an Employer
											</a>
										</div>
									</div>
							  	</div>
							  	<div class="col-6" style="margin-top: 50px;">
							  		<div>
										<div>
											<a href="{!! route('employee-enrollment') !!}" class="theme-btn btn-style-one">
												Enrollment as an Employee
											</a>
										</div>
									</div>
							  	</div>
							</div>

							<!-- <div style="margin-top: 20px;">
								<div>
									<a class="download-button" href="/release/SaloHub.apk" onclick="ga('send', 'event', 'Click', 'Android APP Download', 'App Link');" target="_self">
				                        Download APK Now
				                    </a>
								</div>
							</div>

							<div class="col-lg-6" style="margin-top: 20px;">
								<div>
									<a class="download-button" href="/release/SaloHub.apk" onclick="ga('send', 'event', 'Click', 'Android APP Download', 'App Link');" target="_self">
				                        Download APK Now
				                    </a>
								</div>
							</div> -->
							<!-- <div class="text">Excepteur sint occaecat cupidatat proident sunt culpa officia desernt mollit anim est.</div> -->
						</div>
					<!-- </div> -->
				</div>
				
				
			</div>
		</div>
	</section>
	
	

@endsection