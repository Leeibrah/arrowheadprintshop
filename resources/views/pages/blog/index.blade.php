@extends('layouts.pages')

@section('content')

	<!-- PAGE TITLE WRAPPER-->
	<div class="page-title-wrapper">
		<!-- CONTAINER -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 animated" data-animation="fadeInUp" data-animation-delay="300">
					<!-- BREADCRUMB -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Blog List</li>
					</ol>
					<!-- PAGE TITLE -->
					<h1 class="page-title bottom-line">Blog List</h1>
				</div>
			</div>
		</div>	<!-- /.CONTAINER -->	
	</div>
	<!-- /.PAGE TITLE WRAPPER-->
	
	<!-- PAGE CONTENT -->
	<div class="page-content">
		<!-- CONTAINER -->
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<!-- ARTICLE -->
					@foreach ($posts as $post)
						<article class="post post-list media hv-wrapper animated" data-animation="fadeInUp" data-animation-delay="300">
							<div class="media-left">
								<!-- POST THUMB -->
								<div class="post-thumbnail overlay-container">
									<!-- POST IMG -->
									<a href="blog/{!! $post->slug !!}">
										<div class="dark-overlay"><span class="ion-ios-plus-outline"></span></div>
										<img src="{!! page_image($post->page_image) !!}" class="media-object-2" alt="post-img">
									</a>
								</div>
							</div>
							<div class="media-body">
								<!-- POST DATE -->
								<p class="post-date">
									{!! $post->published_at->format('F j, Y') !!}
								</p>
								<!-- POST TITLE -->
								<h6 class="post-title">
									<a href="blog/{!! $post->slug !!}">
										{!! $post->title !!}
									</a>
								</h6>
								<!-- POST DESC -->
								<p class="post-desc">
									{!! substr($post->content_raw, 0, 160) !!} ...
								</p>
								<!-- READ MORE LINK -->
								<a href="blog/{!! $post->slug !!}" class="btn-link">More</a>
							</div>
						</article>
					@endforeach
					<!-- /. ARTICLE -->


					<!-- <div class="row">
						<div class="col-md-12">
							<nav class="text-center">
								<ul class="pagination">
									<li><a href="#" aria-label="Previous"><span aria-hidden="true"><span class="ion-ios-arrow-thin-left"></span></span></a></li>
									<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#" aria-label="Next"><span aria-hidden="true"><span class="ion-ios-arrow-thin-right"></span></span></a></li>
								</ul>
							</nav>
						</div>
					</div> -->
				</div>
				<!-- SIDEBAR -->
				@include('partials._blog_sidebar')
				<!-- /. SIDEBAR -->
			</div>		
		</div>	<!-- /.CONTAINER -->
	</div>
	<!-- /. PAGE CONTENT -->

@endsection