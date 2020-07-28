@extends('layouts.pages')

@section('content')

	<!--Page Title-->
    <!-- <section class="page-title">
    	<div class="auto-container">
        	<h1></h1>
			<div class="text">
				This Form will help us know more about you & your organization for our scoring & grading purposes
			</div>
        </div>
    </section> -->
    
    <!--Breadcrumb-->
    <!-- <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Register for a Salary Advance</li>
            </ul>
        </div>
    </div> -->
    <!--End Page Title-->

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
				<div class="form-column col-lg-9 col-md-9 col-sm-9" style="margin-left: 10%;">
					<div class="inner-colum">
						<!-- Sec Title -->
						<div class="sec-title">
							<h2>Employee Enrollment Registration</h2>
							<div class="separator"></div>
							<br/>
							<div>
								This Form will help us know more about you & your organization for our scoring & grading purposes
							</div>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
								
							<!--Contact Form-->
							<!-- <form method="post" action="{!! route('employee-enrollment-post') !!}" id="contact-form"> -->
							{!! Form::model(new \App\Employee, ['route' => ['employee-enrollment-post'], 'enctype' => 'multipart/form-data', 'file' => true, 'id' => 'uploadForm']) !!}
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
										<label for="sector">Which Sector are you currently working in?</label>
										<input type="text" name="sector" id="sector" value="" placeholder="Enter your work sector" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="employer">Name of Employer?</label>
										<input type="text" name="employer" id="employer" value="" placeholder="Enter your employer name" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="salary">Are you a Salaried Employee with Payslip evidence?</label>
										<div class="form-group">
						                    <select name="salary" class="select-css" required="">
		            							<option value="None">Select Answer</option>
		            							<option value="Yes">Yes</option>
		            							<option value="No">No</option>
			            					</select>
					                    </div>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="amount">How much would you need monthly for your Salary advance?</label>
										<div class="form-group">
						                    <select name="amount" class="select-css" required="">
		            							<option value="None">Select Answer</option>
		            							<option value="1000 - 10000">KES 1,000 - 10,000</option>
		            							<option value="10000 - 20000">KES 10,000 - 20,000</option>
		            							<option value="20000 - 30000">KES 20,000 - 30,000</option>
		            							<option value="31000 and above">KES 31,000 and above</option>
					              
					            			</select>
					                    </div>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="ready">Is your organization ready to sign up for Salary advances?</label>
										<div class="form-group">
						                    <select name="ready" class="select-css" required="">
		            							<option value="None">Select Answer</option>
		            							<option value="Yes">Yes</option>
		            							<option value="No">No</option>
		            							<option value="Maybe">Maybe</option>
					            			</select>
					                    </div>
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="idnumber">Kindy assist us with your ID number</label>
										<input type="text" name="idnumber" id="idnumber" value="" placeholder="Enter your ID Number" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="krapin">Kindy assist us with your KRA PIN</label>
										<input type="text" name="krapin" id="krapin" value="" placeholder="Enter your KRA PIN" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="nssf">Kindy assist us with your NSSF number</label>
										<input type="text" name="nssf" id="nssf" value="" placeholder="Enter your NSSF Number" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="nhif">Kindy assist us with your NHIF number</label>
										<input type="text" name="nhif" id="nhif" value="" placeholder="Enter your NHIF Number" required="">
									</div>
									

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="phone">Kindly assist us with your number</label>
										<input type="text" name="phone" id="phone" value="" placeholder="Enter your Mobile Phone Number" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="phone">Upload you copy of ID (Size should be less than 2MB): </label>
										<input type="file" name="id_document" id="id_document" value="" placeholder="Upload your ID Document" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="file">Upload a copy of your latest payslip (Size should be less than 2MB): </label>
										<input type="file" name="payslip_document" id="payslip_document" value="" placeholder="Upload your Payslip Document" required="">
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
			                            <span class="button-checkbox">
			                                <!-- <button type="button" class="btn" data-color="info" tabindex="7" value="0" name="agreement">I Agree</button> -->
			                                <input type="checkbox" name="checkbox" id="checkbox" value="1">
			                            </span>
			                            I agree to Salohub's <a href="{!! route('terms') !!}">Terms and Conditions</a> and <a href="{!! route('privacy') !!}">Privacy Policy</a> by filling this form.
				                    </div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button class="theme-btn btn-style-two" type="submit" name="submit-form" onclick="upload_image();">Submit Now</button>
									</div>

									<!-- <div id="loader-icon" style="display:none;"><img src="/images/LoaderIcon.gif" /></div> -->
									<!-- <div id="progress-div"><div id="progress-bar"></div></div>
									<div id="targetLayer"></div> -->
									
								</div>
							<!-- </form> -->
							{!! Form::close() !!}
						</div>

						<div class='progress' id="progress_div">
						<div class='bar' id='bar1'></div>
						<div class='percent' id='percent1'>0%</div>
						</div>
						<div id='output_image'>
						
						
					</div>
				</div>
				<div class="form-column col-lg-3">
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->
	
@endsection


@section('js')
	
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

	<script src="/js/upload_progress.js" type="text/javascript"></script>
@endsection