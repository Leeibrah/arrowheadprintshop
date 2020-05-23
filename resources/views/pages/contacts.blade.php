@extends('layouts.front')

@section('content')

	<main>
		<section id="hero_in" class="contacts">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Contact Us</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4>Address</h4>
						<span>South B, LA ENZI Plaza (sanasana) <br>Nairobi - KENYA.</span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4>Email address</h4>
						<span><a href="#" class="__cf_email__">info@vinestalk.co.ke</a> <br><small>Monday to Friday 8am - 6pm</small></span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>Contacts info</h4>
						<span> 0782750451 / 0748839541 <br><small>Saturdays 9am - 2pm</small></span>
					</li>
				</ul>
			</div>
		</div>
		<!--/contact_info-->

		<div class="bg_color_1">
			<div class="container margin_default">
				<div class="row justify-content-between" style="margin-left: 35%;">
					<!-- <div class="col-lg-5">
						<div class="map_contact">
						</div>
					</div> -->
					<div class="" >
						<h4>Want to know more?</h4>
						<p>Get in Touch</p>
						<div id="message-contact"></div>
						<form method="post" action="http://www.ansonika.com/digitalcoin/assets/contact.php" id="contactform" autocomplete="off">
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="name_contact" name="name_contact">
										<label class="input_label">
											<span class="input__label-content">Your Name</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="lastname_contact" name="lastname_contact">
										<label class="input_label">
											<span class="input__label-content">Last name</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="email" id="email_contact" name="email_contact">
										<label class="input_label">
											<span class="input__label-content">Your email</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="phone_contact" name="phone_contact">
										<label class="input_label">
											<span class="input__label-content">Your telephone</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<span class="input">
									<textarea class="input_field" id="message_contact" name="message_contact" style="height:150px;"></textarea>
									<label class="input_label">
										<span class="input__label-content">Your message</span>
									</label>
							</span>
							<span class="input">
									<input class="input_field" type="text" id="verify_contact" name="verify_contact">
									<label class="input_label">
									<span class="input__label-content">Are you human? 3 + 1 =</span>
									</label>
							</span>
							<p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact"></p>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
@endsection