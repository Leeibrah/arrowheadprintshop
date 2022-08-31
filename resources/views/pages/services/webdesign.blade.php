@extends('layouts.pages')

@section('content')

    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        Web Design and Development
                    </h2>
                    <span>
                        <a href="{!! route('home') !!}">
                            Home
                        </a> 
                        <i class="fa-solid fa-chevron-right"></i> Web Design and Development
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
                                Crafting Websites For Powerful Brands
                            </span>
                            <br/><br/>
     
                            <p>
                                Your website is the center of your digital presence. It’s one of the few places on 
                                the internet where you can deliver your brand’s message free of distortion or distraction. 
                                Medixa’s web development services are perfect for brands at any stage.
                                <br/><br/>
                                Our web development team can help you build your brand's website from the ground up. 
                                We specialize in building websites that tell a unique brand story while meeting the 
                                expectations of today's most discerning consumers.
                                <br/><br/>
                                If your website is already built but doesn't meet expectations, we can develop a case 
                                study and work with you to improve site architecture, design, and responsiveness as 
                                this comes under website maintenance. 
                            </p>
                        </div>
                        <a href="{!! route('contacts') !!}" class="min_btn">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="/images/services/web-design.png" alt="">
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
                        <img src="/images/services/web-dev.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <!-- <span class="sub_title">Our Services</span> -->
                            <h2>
                                How we do it
                            </h2>
                            <div class="service_list">
                                <h5><span>01.</span>Site Architecture</h5>
                                <p>
                                    We start with creating a user centric site architecture. This maximises the long term marketing and SEO potential of your website.
                                </p>
                            </div>
                            <div class="service_list">
                                <h5><span>02.</span>Design & Content</h5>
                                <p>
                                    We go into the depths of your business, your brand story, your products/ services and then translate them into compelling content with smart design.
                                </p>
                            </div>
                            <div class="service_list">
                                <h5><span>03.</span>Development</h5>
                                <p>
                                    To maximise the RoI on your future marketing efforts, we create responsive websites with clean code. It keeps your website fast and improves uptime.
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