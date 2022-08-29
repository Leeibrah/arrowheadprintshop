@extends('layouts.pages')

@section('content')

    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Email Marketing</h2>
                    <span><a href="{!! route('home') !!}">Home</a> <i class="fa-solid fa-chevron-right"></i> Email Marketing</span>
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
                            <span class="sub_title">Email Marketing</span>
                            <br/><br/>
     
                            <p>
                                Email marketing is a proven content marketing strategy for increasing brand awareness, 
                                growing website traffic, generating leads and promoting products and services. 
                                An email marketing service are professionals who know how to get the job done.
                                <br/><br/>
                                Whether you’re looking to overhaul your email marketing program, are in search of a 
                                marketing automation agency or simply want to maximize the results of your email marketing 
                                efforts, Medixa Digital is on hand to assist every step of the way.
                            </p>
                        </div>
                        <a href="{!! route('contacts') !!}" class="min_btn">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="/images/services/email.png" alt="">
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
                        <img src="/images/services/email-marketing.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <!-- <span class="sub_title">Our Services</span> -->
                            <h2>We Provided Best <br>
                                Email Marketing Services</h2>
                            <div class="service_list">
                                <h5><span>01.</span>Email campaign tips</h5>
                                <p>
                                    We give you tips on how to write your emails for a better reach when communicating with clients and customers.
                                </p>
                            </div>
                            <div class="service_list">
                                <h5><span>02.</span>Email templates</h5>
                                <p>
                                    We do email design templates for your email signatures, weekly newsletters and email letter-heads.
                                </p>
                            </div>
                            <div class="service_list">
                                <h5><span>03.</span>Email Marketing System </h5>
                                <p>
                                    At Medixa Digital we provide for you an email system which can keep track of all current and past emails. 
                                    We also customize an email system to what you need.
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