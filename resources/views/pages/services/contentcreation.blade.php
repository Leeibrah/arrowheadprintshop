@extends('layouts.pages')

@section('content')

    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        Content Creation
                    </h2>
                    <span>
                        <a href="{!! route('home') !!}">
                            Home
                        </a> 
                        <i class="fa-solid fa-chevron-right"></i>
                        Content Creation
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- Seo Section -->
    <section class="seo_aria home_2 about service email_marketing">
        <div class="container custom_container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <span class="sub_title">
                                Content Creation
                            </span>
                            <br/><br/>
     
                            <p>
                                Content is the king of today’s marketing environment. The most successful brands in the 
                                world have developed detailed content strategies that help them inspire, entertain, and 
                                educate their target audiences.
                                <br/><br/>
                                At Medixa Ventures we specialize in helping our clients plan, produce, and promote content 
                                that drives audience engagement and conversions. Our full suite of content services includes:
                                <br/>
                                
                                <ul style="color: #7C789D">
                                    <li>Product Recommendation</li>
                                    <li>Advanced Cart</li>
                                    <li>Facebook and Google Ads</li>
                                    <li>Order Nofications</li>
                                    <li>Landing Pages</li>
                                </ul>                                
                            

                            </p>
                        </div>
                        <a href="{!! route('contacts') !!}" class="min_btn">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="/images/services/content-creation.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seo Section -->



@endsection