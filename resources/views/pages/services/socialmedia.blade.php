@extends('layouts.pages')

@section('content')

    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        Social Media Management
                    </h2>
                    <span>
                    	<a href="{!! route('home') !!}">
                    		Home
                    	</a> 
                    	<i class="fa-solid fa-chevron-right"></i>
                    	Social Media Management
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
                                Drive Traffic and Leads to Your Website Through Social Media.
                            </span>
                            <br/><br/>
     
                            <p>
                                
								Social media is massive and continues to become more ingrained in our daily lives. 
								The amount of engagement happening on various platforms is astounding, but that means there’s also a lot of noise.
								<br/><br/>
								Standing out from the crowd and cutting through the noise to reach your target audience on each platform is incredibly difficult. 
								It requires a great deal of analysis, strategizing, and consistent content creation and engagement, 
								which is why so many businesses are outsourcing their social media management and marketing efforts.
								<br/>
								This is where Medixa Digital come in.
                            </p>
                        </div>
                        <a href="{!! route('contacts') !!}" class="min_btn">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="/images/services/social-media.png" alt="">
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
                        <img src="/images/services/social-media-management-01.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <!-- <span class="sub_title">Our Services</span> -->
                            <h5>
                            	<b>The Benefits of Investing in Social Media Marketing</b>
                            </h5>
                            <div class="service_list">
 
                                <h5>
                                	<span>01.</span>
                                </h5>
                                <p>
                                    Boosting brand awareness in targeted areas.
                                </p>
                            </div>
                            <div class="service_list">
                                <h5>
                                	<span>02.</span>                                	
                                </h5>
                                <p>
                                    Driving website traffic with backlinks.
                                </p>
                            </div>
                            <div class="service_list">
                                <h5>
                                	<span>03.</span>                                	
                                </h5>
                                <p>                                    
                                    Collaborating with valuable influencers.
                                </p>
                            </div>
                            <div class="service_list">
                                <h5>
                                	<span>04.</span>                                	
                                </h5>
                                <p>
                                    Generating new leads through subscriptions, sign-ups for events, etc.
                                </p>
                            </div>
                            <div class="service_list">
                                <h5>
                                	<span>05.</span>                                	
                                </h5>
                                <p>                                    
                                    Increasing sales through targeted messaging.
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