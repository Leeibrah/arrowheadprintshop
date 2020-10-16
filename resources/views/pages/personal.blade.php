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
							<h2>Personal Details</h2>
							<div class="separator"></div>
							<br/>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
								
							<!--Contact Form-->
							{!! Form::model(new \App\Employee, ['route' => ['employee-enrollment-post'], 'enctype' => 'multipart/form-data', 'file' => true, 'id' => 'uploadForm']) !!}
								{!! csrf_field() !!}
								
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<label for="name">Full Name</label>
									<input type="text" name="name" id="name" value="" placeholder="Enter your Full Name" required="">
								</div>

								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<label for="phone">Kindly assist us with your number</label>
									<input type="text" name="phone" id="phone" value="" placeholder="Enter your Mobile Phone Number" required="">
								</div>

								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<label for="id_number">Kindly assist us with your National ID Number</label>
									<input type="text" name="id_number" id="id_number" value="" placeholder="Enter your ID Number" required="">
								</div>
								
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<label for="email">Email Address</label>
									<input type="email" name="email" id="email" value="" placeholder="Enter your Email" required="">
								</div>
								
								
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<button class="theme-btn btn-style-two" type="submit" name="submit-form">Next</button>
								</div>
							{!! Form::close() !!}
						</div>

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