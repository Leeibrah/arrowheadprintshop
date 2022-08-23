@extends('layouts.pages', [
  'title' => $post->title,
  'meta_description' => $post->meta_description ?: config('blog.description'),
])


@section('content')

	<!-- PAGE TITLE WRAPPER-->
	<div class="page-title-wrapper">
	    <!-- CONTAINER -->
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12 animated" data-animation="fadeInUp" data-animation-delay="300">
	                <!-- BREADCRUMB -->
	                <ol class="breadcrumb">
	                    <li>
	                        <a href="#">Home</a>
	                    </li>
	                    <li>
	                        <a href="#">Blog</a>
	                    </li>
	                    <li class="active">{!! $post->title !!}</li>
	                </ol>
	                <!-- PAGE TITLE -->
	                <h1 class="page-title bottom-line">
	                	{!! $post->title !!}
	                </h1>
	            </div>
	        </div>
	    </div>
	    <!-- /.CONTAINER -->
	</div>
	<!-- /.PAGE TITLE WRAPPER-->

	<!-- PAGE CONTENT -->
	<div class="page-content">
	    <!-- CONTAINER -->
	    <div class="container">
	        <div class="row">
	            <div class="col-md-9">
	                <!-- ARTICLE -->
	                <article class="post post-single hv-wrapper">
	                    <!-- POST THUMB -->
	                    <div class="post-thumbnail">
	                        <img src="{!! page_image($post->page_image) !!}" class="img-responsive" alt="post-img">
	                    </div>
	                    <!-- POST DATE -->
	                    <p class="post-date">
	                    	{!! $post->published_at->format('F j, Y') !!}
	                    </p>
	                    <!-- POST TITLE -->
	                    <h4 class="post-title">
	                    	{!! $post->title !!}
	                    </h4>
	                    <!-- POST DESC -->
	                    <div class="post-content clearfix">
	                        {!! $post->content_html !!}
	                    </div>
	                    <!-- READ MORE LINK -->
	                </article>
	                <!-- /. ARTICLE -->

	            	<!-- AUTHOR WRAPPER -->
							<div class="author-wrapper media">
														
								<div class="media-body author-content">
									<h6>
										Post by: {!! $post->author !!}
									</h6>
									<p>
										Department: {!! $post->department !!}
									</p>
								</div>
							</div><!-- /. AUTHOR WRAPPER -->

	            </div>
	            <!-- SIDEBAR -->
				{{-- @include('partials._blog_sidebar') --}}
	            <!-- /. SIDEBAR -->

	        </div>
	    </div>
	    <!-- /.CONTAINER -->
	</div>
	<!-- /. PAGE CONTENT -->

@endsection