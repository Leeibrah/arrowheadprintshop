@extends('layouts.pages', [
  'title' => $post->title,
  'meta_description' => $post->meta_description ?: config('blog.description'),
])


@section('content')

	<main>
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Blog</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_default">
			<div class="row">
				<div class="col-lg-12">
					<div class="bloglist singlepost">
						
						<h1>{{ $post->title }}</h1>
						
						<!-- /post meta -->
						<div class="post-content">
							<p>
										<!-- <img alt="" class="img-fluid" src="img/blog/found-it.png"> -->
								<img class="img-fluid" src="{{ page_image($post->page_image) }}" width="100%" alt="Image"/>
							</p>
							<div class="dropcaps">

								{!! $post->content_html !!}
								
							</div>

							<p>

							</p>
						</div>
						<!-- /post -->
					</div>
					<!-- /single-post -->

					
				</div>
				<!-- /col -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

	</main>

@endsection