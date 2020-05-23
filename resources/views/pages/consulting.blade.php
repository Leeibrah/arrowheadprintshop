@extends('layouts.pages')

@section('content')

	<main>
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Consulting</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		<div class="bg_color_1">
        	<div class="container margin_default">
            	<div class="row justify-content-between">
                	<div class="col-lg-5">
                    	<h3 class="main_title_left">Vinestalk Consulting</h3>
                        <p class="lead">Consult with us.</p>
                        <ul class="list_features">
							<li>
								<i class="icon_genius"></i>
								<h4>Review</h4>
								<p>Find your best version.</p>
							</li>
							<li>
								<i class="icon_desktop"></i>
								<h4>Coaching</h4>
								<p>Further your Skills.</p>
							</li>
							<li>
								<i class="icon_piechart"></i>
								<h4>Strategy</h4>
								<p>Plan for Success.</p>
							</li>
							<!-- <li>
								<i class="icon_archive_alt"></i>
								<h4>Illud singulis indoctum ad sed</h4>
								<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
							</li> -->
						</ul>
                    </div>
                    <div class="col-lg-6">
               			<div id="quote_wp">
                        	<h4>Fill out the form</h4>
							<p>Ask us anything.</p>
							<div id="message-quote"></div>
                                <form method="post" action="http://www.ansonika.com/digitalcoin/assets/quote.php" id="quoteform">
                                    <div class="row">
                                        <div class="col-md-6">
											<span class="input">
												<input class="input_field" type="text" id="name_quote" name="name_quote">
												<label class="input_label">
													<span class="input__label-content">First name</span>
												</label>
											</span>
                                        </div>
										<div class="col-md-6">
											<span class="input">
												<input class="input_field" type="text" id="lastname_quote" name="lastname_quote">
												<label class="input_label">
													<span class="input__label-content">Last name</span>
												</label>
											</span>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-md-6">
											<span class="input">
												<input class="input_field" type="email" id="email_quote" name="email_quote">
												<label class="input_label">
													<span class="input__label-content">Email</span>
												</label>
											</span>
                                        </div>
										<div class="col-md-6">
											<span class="input">
												<input class="input_field" type="text" id="phone_quote" name="phone_quote">
												<label class="input_label">
													<span class="input__label-content">Phone number</span>
												</label>
											</span>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
											<span class="input">
												<textarea class="input_field" id="message_quote" name="message_quote" style="height:150px;"></textarea>
												<label class="input_label">
													<span class="input__label-content">Your message</span>
												</label>
											</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
											<span class="input">
												<input class="input_field" type="text" id="verify_quote" name="verify_quote">
												<label class="input_label">
													<span class="input__label-content">Are you human? 3 + 1 =</span>
												</label>
											</span>
                                            <input type="submit" value="Submit" class="btn_1 rounded" id="submit-quote">
                                        </div>
                                    </div>
                                </form>
                        </div><!--/quote_wp-->
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </div><!--/bg_color_1-->
	<!--/main-->
	</main>
@endsection