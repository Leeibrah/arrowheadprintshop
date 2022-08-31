@extends('layouts.pages')

@section('content')

    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        Influencer Marketing
                    </h2>
                    <span>
                        <a href="{!! route('home') !!}">Home</a> 
                        <i class="fa-solid fa-chevron-right"></i> 
                        Influencer Marketing
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
                                Influencer Marketing
                            </span>
                            <br/><br/>
     
                            <p>
                                Your customers trust someone for advice – whether on Instagram or Youtube. These are 
                                potential influencers for your business. We have a network of such influencers with 
                                whom we collaborate to create impactful content for your brand.
                                <br/><br/>
                                
                            </p>
                        </div>
                        <a href="{!! route('contacts') !!}" class="min_btn">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="/images/services/influencer-marketing.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seo Section -->

    <!-- Seo Style Two -->
    <section class="seo_aria home_2 about style_two">
        <div class="container custom_container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="/images/services/mike.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <span class="sub_title">Our Process</span>
                            <h2>Powerful Content + Targeted Influencers = <span style="color: #fe4c1c">Magic!</span></h2>
                            <div class="service_list">
                                <h5><span>01.</span>Product Reviews</h5>
                                <p>
                                    Purchase decisions of customers are heavily influenced by reviews on Instagram, Youtube and such platforms. 
                                    We drive real, positive reviews for your products to build trust, conversions and loyalty.
                                </p>
                            </div>
                            <div class="service_list">
                                <h5><span>02.</span>Experiential Reviews</h5>
                                <p>
                                    It’s an age old practice to recommend restaurants, salons, spas and travel experiences to friends and family. 
                                    While word-of-mouth was local earlier, it’s now global with social media.
                                </p>
                            </div>
                            <div class="service_list">
                                <h5><span>03.</span>Bespoke Campaigns</h5>
                                <p>
                                    Powerful associations with influencers establish your brand amongst the target audience. 
                                    We craft tailor made campaigns with handpicked influencers to achieve your brand goals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seo Style Two -->


@endsection