@extends('layouts.front')

@section('content')

	<main>
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>About Vinestalk</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_default">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Why choose Vinestalk</h2>
				<p>
					We believe in what we do and that’s why we're committed to helping more people like you, every day. To make sure the process is as seamless as it can be.
				</p>
			</div>
			<div class="row">
				
				<div class="col-lg-6 col-md-6">
					<a class="box_feat" href="about.html#">
						<i class="pe-7s-target"></i>
						<h3>Mission</h3>
						<p>
							To initiate and sustain growth of our stakeholders as a whole, through inspiring and empowering them in their journey.
						</p>
					</a>
				</div>

				<div class="col-lg-6 col-md-6">
					<a class="box_feat" href="about.html#">
						<i class="pe-7s-rocket"></i>
						<h3>Vision</h3>
						<p>
							To be efficient and customer centric.
						</p>
						<br/>
					</a>
				</div>
			</div>
			<!--/row-->
		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_default">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Our Core values</h2>
					<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<figure>
							<img src="{{ URL::asset('img/core-values.png') }}" class="img-fluid" alt="">
						</figure>
					</div>

					<div class="col-lg-5">
						<strong>1. Integrity</strong>
						<p>Uphold honesty and ethical standards in all our operations.</p>
						<strong>2. Customer centric</strong>
						<p>Focus on the customers and treat them non-discriminatorily while serving them to the best of our ability.</p>
						<strong>3. Quality services</strong>
						<p>Disseminating our services efficiently and effectively.</p>
						<strong>4. Innovative</strong>
						<p>Being data driven to invent and innovate to improve and be the best at what we do</p>
					</div>
					<!-- <div class="col-lg-5">
						<p>Lorem ipsum dolor sit amet, homero erroribus in cum. Cu eos <strong>scaevola probatus</strong>. Nam atqui intellegat ei, sed ex graece essent delectus. Autem consul eum ea. Duo cu fabulas nonumes contentiones, nihil voluptaria pro id. Has graeci deterruisset ad, est no primis detracto pertinax, at cum malis vitae facilisis.</p>
						<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore <strong>percipitur definitiones</strong> ex, nihil utinam recusabo mel no. Dolores reprehendunt no sit, quo cu viris theophrastus. Sit unum efficiendi cu.</p>
						<p><em>CEO Marc Schumaker</em></p>
					</div> -->
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->

	</main>
	<!--/main-->

@endsection