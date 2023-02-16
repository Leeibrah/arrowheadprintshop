@extends('layouts.pages')

@section('content')

    
    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        Blog
                    </h2>
                    <span>
                        <a href="{!! route('home') !!}">
                            Home
                        </a> 
                        <i class="fa-solid fa-chevron-right"></i>
                        Blog
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->
   
   <!-- End medical blog list area -->
    <section class="blog_list_area sec_pad">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_main">
                        @foreach ($posts as $post)
                        <article class="blog_post_item zoom_in_effect">
                            <div class="post_media">
                        
                                
                                    <a href="/blog/{!! $post->slug !!}">
                                        <img src="/uploads/{!! $post->page_image !!}" alt="Blog">
                                    </a>
                                
                                <div class="post_date">
                                    <span>
                                        {!! $post->published_at->format('F j, Y') !!}
                                    </span>
                                </div>
                            </div>
                            <div class="media_blog_content">
                                <a href="/blog/{!! $post->slug !!}">
                                    <h2 class="blog_title">{!! $post->title !!}</h2>
                                </a>
                                <p>
                                    {!! substr($post->content_raw, 0, 160) !!} ... 
                                </p>
                                <div class="post_bottom">
                                    <a href="blog-single.html" class="learn_btn_two">Read More</a>
                                </div>
                            </div>
                        </article>
                        @endforeach

                        <!-- <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </nav> -->
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