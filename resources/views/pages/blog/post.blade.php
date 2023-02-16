
@extends('layouts.pages', [
  'title' => $post->title,
  'meta_description' => $post->meta_description ?: config('blog.description'),
])


@section('content')

	<!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{!! $post->title !!}</h2>
                    <span><a href="{!! route('blog') !!}">Home</a> <i class="fa-solid fa-chevron-right"></i> Blog</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->
    <!-- End medical blog list area -->
    <section class="medical_blog_details_area sec_pad">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_single_info">
                        <!-- <img class="mb_50" src="assets/img/blog/blog_10.png" alt="" width="100%"> -->
                        <!-- POST THUMB -->
	                    <div class="post-thumbnail">
	                        <img src="{!! page_image($post->page_image) !!}" class="img-responsive" alt="post-img" width="100%">
	                    </div>
	                    <!-- POST DATE -->
                        <div class="media_blog_content">
                            {!! $post->content_html !!}
                            <div class="post_bottom">
                                <div class="social_icon">
                                    Share
                                    <ul class="list-unstyled">
                                        <li><a href="https://www.facebook.com/"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="https://www.pinterest.com/"><i
                                                    class="fa-brands fa-pinterest-p"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i
                                                    class="fa-brands fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                           
                            </div>
            
                        </div>
                 
                    </div>
                </div>


                <!-- SIDEBAR -->
                    @include('partials._blog_sidebar')
                <!-- /. SIDEBAR -->
            </div>
        </div>
    </section>
    <!-- End medical blog list area -->

@endsection