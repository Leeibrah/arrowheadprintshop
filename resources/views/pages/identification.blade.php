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
							<h2>Identification Details</h2>
							<div class="separator"></div>
							<br/>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
								
							<!--Contact Form-->
							{!! Form::open(['route' => ['identification-post', $id]]) !!}
								{!! csrf_field() !!}
								<div class="row clearfix">

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