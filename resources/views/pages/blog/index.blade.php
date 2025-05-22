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


    <!-- Info Section -->
    <section class="info_box_aria about">
        <div class="container custom_container">

            <div class="info_box_items text-center">
                <div class="row">

                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6" style="margin-top: 3%">
                            <div class="single_item">
                                
                                <a href="/blog/{!! $post->slug !!}">
                                    <img 
                                        src="/uploads/{!! $post->page_image !!}" 
                                        alt="{!! $post->title !!}" 
                                        style="height: 180px;"
                                    >
                                </a>

                                <div class="content">
                                    <h4>{!! $post->title !!}</h4>
                                    <p>
                                        {!! $post->published_at->format('F j, Y') !!}
                                    </p>
                                    <!-- <a href="service.html" class="btn_2">Learn more</a> -->
                                </div>

                                <div class="post_bottom">
                                    <a href="/blog/{!! $post->slug !!}" class="learn_btn_two">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="shape">
            <img src="/assets/img/shape/info_box_3.png" alt="" class="one_op2">
        </div>
    </section>
    <!-- Info Section -->
   

@endsection