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
							<h2>Employment Details</h2>
							<div class="separator"></div>
							<br/>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
								
							<!--Contact Form-->
							{!! Form::open(['route' => ['employment-post', $id]]) !!}
								{!! csrf_field() !!}
								<div class="row clearfix">
								
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
										<button class="theme-btn btn-style-two" type="submit" name="submit-form">Next</button>
									</div>
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