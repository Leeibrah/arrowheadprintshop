@extends('layouts.front')

@section('content')

	<main>
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Services</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_default">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Vinestalk Services</h2>
				<p>
					We believe in what we do and that’s why we’re committed to helping more people like you, every day. Want to find out more about what we offer? Here’s everything you need to know.
				</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<a href="/services/product-loans" class="grid_item">
						<figure>
							<img src="img/services_1.png" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>Product</small>
								<h3>Loans</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6">
					<a href="/services/financial-literacy" class="grid_item">
						<figure>
							<img src="img/services_2.png" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>Financial</small>
								<h3>Literacy</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6">
					<a href="/services/management-accounting" class="grid_item">
						<figure>
							<img src="img/services_3.png" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>Financial</small>
								<h3>Consultancy & Accounting</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

	</main>

@endsection