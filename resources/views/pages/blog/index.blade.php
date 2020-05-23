@extends('layouts.pages')

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
				<div class="col-lg-9">

					@foreach ($posts as $post)
						<!-- /article -->
						<article class="blog wow fadeIn">
							<div class="row no-gutters">
								<div class="col-lg-7">
									<figure>
										<a href="#"><img src="{{ page_image($post->page_image) }}" alt="">
											<div class="preview"><span>Read more</span></div>
										</a>
									</figure>
								</div>
								<div class="col-lg-5">
									<div class="post_info">
										<small>{{ $post->published_at->format('F j, Y') }}</small>
										<h3>
											<a href="blog/{{ $post->slug }}">
												{{ $post->title }}
											</a>
										</h3>
										<!-- <h3><a href="#">LEAP OF FAITH</a></h3> -->
										<p>
											{{ substr($post->content_raw, 0, 160) }}
										</p>
										<ul>
											<li>
												<div>
													<a href="blog/{{ $post->slug }}">
						                            	<button id="submit" class="btn_1 rounded">Read More</button>
						                            </a>
						                        </div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</article>
						<!-- /article -->
					@endforeach

				</div>
				<!-- /col -->

				<aside class="col-lg-3">

					<div class="widget">
						<div class="widget-title">
							<h4>Recent Posts</h4>
						</div>
						<ul class="comments-list">
							@foreach ($posts as $post)
								<li>
									<small>{{ $post->published_at->format('F j, Y') }}</small>
									<h3><a href="blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
								</li>
								<hr>
							@endforeach
							
						</ul>
					</div>
				
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Popular Tags</h4>
						</div>
						<div class="tags">
							<!-- @foreach ($tags as $tag)
								<a href="{!! route('blog') !!}">Information tecnology</a>
							@endforeach -->
							@foreach ($posts as $post)
								@if ($post->tags->count())
					                {!! join(', ', $post->tagLinks()) !!}
					            @endif
				            @endforeach
							
							<!-- <a href="{!! route('blog') !!}">Growth</a> -->
						</div>
					</div>
					<!-- /widget -->

					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Dashboard Area</h4>
						</div>
						<div class="">						
							<p>
								<a href="/auth/login">Login Here</a>
							</p>
						</div>
					</div>
					<!-- /widget -->
				</aside>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

	</main>

@endsection