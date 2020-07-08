@extends('layouts.pages')

@section('content')


	<!--Page Title-->
    <!-- <section class="page-title">
    	<div class="auto-container">
        	
        </div>
    </section> -->

	<hr>

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
    </div>
    @endif

	<!-- Contact Page Section -->
	<section class="contact-page-section" style="padding-top: 50px;">
		<div class="auto-container">
			<div class="row clearfix">
							
				<div class="form-column col-lg-3">
				</div>
				<!-- Form Column -->
				<div class="form-column col-lg-9 col-md-9 col-sm-9" style="margin-left: 10%">
					<div class="inner-colum">
						<!-- Sec Title -->
						<div class="sec-title">
							<h2>Employer Enrollment Registration</h2>
							<div class="separator"></div>
							<br/>
							<div>
								This Form will help us know more about you & your organization for our scoring & grading purposes
							</div>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
								
							<!--Contact Form-->
							<form method="post" action="{!! route('employer-enrollment-post') !!}" id="contact-form">
							<!-- <form method="post" action="sendemail.php" id="contact-form"> -->
								{!! csrf_field() !!}
								<div class="row clearfix">
								
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="name">Full Name</label>
										<input type="text" name="name" id="name" value="" placeholder="Enter your Full Name" required="">
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="email">Email Address</label>
										<input type="email" name="email" id="email" value="" placeholder="Enter your Email" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="phone">Kindly assist us with your number</label>
										<input type="text" name="phone" id="phone" value="" placeholder="Enter your Mobile Phone Number" required="">
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="organization">Name of Organization</label>
										<input type="text" name="organization" id="organization" value="" placeholder="Name of Organization" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="sector">Which Sector is your organization working in?</label>
										<input type="text" name="sector" id="sector" value="" placeholder="Which Sector is your organization working in" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="location">Where is your Organization located?</label>
										<input type="text" name="location" id="location" value="" placeholder="Where is your Organization located?" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="number">Kindly select number of Employees</label>
										<div class="form-group">
						                    <select name="number" class="select-css" required="">
		            							<option value="None">Select Answer</option>
		            							<option value="0 - 15 Employees">0 - 15 Employees</option>
		            							<option value="16 - 35 Employees">16 - 35 Employees</option>
		            							<option value="35 - 50 Employees">35 - 50 Employees</option>
		            							<option value="50 - 100 Employees">50 - 100 Employees</option>
					              				<option value="100 + Employees">100 + Employees</option>
					            			</select>
					                    </div>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button class="theme-btn btn-style-two" type="submit" name="submit-form">Submit Now</button>
									</div>
									
								</div>
							</form>
						</div>
						
					</div>
				</div>
				<div class="form-column col-lg-3">
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->
	
@endsection