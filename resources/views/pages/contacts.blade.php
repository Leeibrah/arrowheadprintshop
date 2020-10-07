@extends('layouts.pages')

@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/14.png);">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
			<div class="text">Salohub Contact Us.</div>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->

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
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Info Column -->
				<div class="info-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>We’re Happy to Hear from You and Answer any Question</h2>
						<ul>
							<li><span>Address</span>Bishop Magua Centre <br> Nairobi, Kenya</li>
							<li><span>Email</span>info@salohub.com</li>
							<li><span>Phone</span>(+254) 734 579 329</li>
						</ul>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<h2>Let’s Start <br> The Conversation.</h2>
							<div class="separator"></div>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
								
							<!--Contact Form-->
							<form method="post" action="{!! route('contactsPost') !!}" id="contact-form">
							<!-- <form method="post" action="sendemail.php" id="contact-form"> -->
								{!! csrf_field() !!}
								<div class="row clearfix">
								
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="name" id="name" value="" placeholder="Full Name" required="">
										<!-- <input type="text" name="username" placeholder="Your Name" required> -->
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="email" id="email" value="" placeholder="Email" required="">
										<!-- <input type="text" name="email" placeholder="Email" required> -->
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="phone" id="phone" value="" placeholder="Phone Number" required="">
										<!-- <input type="text" name="phone" placeholder="Phone Number" required> -->
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="subject" id="subject" value="" placeholder="Subject" required="">
										<!-- <input type="text" name="subject" placeholder="Subject" required> -->
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" id="message" placeholder="Message" required=""></textarea>
										<!-- <textarea name="message" placeholder="Message"></textarea> -->
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button class="theme-btn btn-style-two" type="submit" name="submit-form">Submit Now</button>
									</div>
									
								</div>
							</form>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->
	
	<section class="map-section">
		<div class="map-outer">
			<div class="map-canvas"
				data-zoom="15"
				data-lat="-1.299195"
				data-lng="36.791006"
				data-type="roadmap"
				data-hue="#ffc400"
				data-title="Envato"
				data-icon-path="images/icons/map-marker.png"
				data-content="Bishop Magua Centre, Nairobi, Kenya<br><a href='mailto:info@salohub.com'>info@salohub.com</a>">
			</div>
		</div>
	</section>
@endsection