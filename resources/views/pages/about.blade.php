@extends('layouts.front')

@section('content')
	
	<!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About Us</h2>
                    <span><a href="index.html">Home</a> <i class="fa-solid fa-chevron-right"></i> About</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- Seo Section -->
    <section class="seo_aria home_2 about">
        <div class="container custom_container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="images/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <span class="sub_title">Get the best</span>
                            <h2>We help you achieve your goals <br>
                                </h2>
                            <p>
                            	We are a digital marketing, communication, advertising and creative agency. 
                            	We create unique short-term digital campaigns as well as long-term strategies for companies 
                            	whose mandate it is to create a positive impact in society. 
                            	<br/> <br/>
                            	We incorporate the latest best practises in social media marketing, marketing strategy, mobile marketing, 
                            	search engine marketing (SEM), search engine optimization (SEO), website development, content creation 
                            	and conversion optimization, to help progressive companies achieve their objectives in the most cost-effective way.
                            </p>
                        </div>
                        <a href="{!! route('contacts') !!}" class="min_btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seo Section -->

    <!-- Info Section -->
    <section class="info_box_aria about">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <span class="sub_title">Customers</span>
                        <h2>Who we work with</h2>
                    </div>
                </div>
            </div>
            <div class="info_box_items text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="images/icons/companies.svg" alt="">
                            <div class="content">
                                <h4>Companies</h4>
                                <p>
                                	Each Company has a different set of goals and objectives. 
                                	We create communication and marketing strategies to help 
                                	you make the maximum impact in the most efficient and creative way.
                                </p>
                                <!-- <a href="service.html" class="btn_2">Learn more</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="images/icons/institutions.svg" alt="">
                            <div class="content">
                                <h4>Institutions</h4>
                                <p>
                                	Either private, public or government, institutions have a lot of stakeholders. 
                                	We help you achieve your communication and marketing objectives with a 
                                	unique set of blended strategies to cater to all.
                                </p>
                                <!-- <a href="service.html" class="btn_2">Learn more</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="images/icons/startups.svg" alt="">
                            <div class="content">
                                <h4>Startups</h4>
                                <p>
									We facilitate startups with the ideas they require from wealth of input support, 
									access and knowledge. We help ease these processes through data-driven people oriented strategies.
                                </p>
                                <!-- <a href="service.html" class="btn_2">Learn more</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="/assets/img/shape/info_box_3.png" alt="" class="one_op2">
        </div>
    </section>
    <!-- Info Section -->


    <!-- Info Box Section Two -->
    <section class="info_box_aria two">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <span class="sub_title">Our Services</span>
                        <h2>Services We Provide</h2>
                    </div>
                </div>
            </div>
            <div class="info_box_items style_2 text-center">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <div class="icon">
                                <img src="images/icons/communications.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Communication Strategy</h4>
                                <p>
									We work hand in hand with organizations like yours to come up with a strategy designed to reach their specific goals.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <div class="icon">
                                <img src="images/icons/seo.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Web Design & SEO</h4>
                                <p>
									We help you build your website and optimize it for user experience (UX) and search engines (SEO).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <div class="icon">
                                <img src="images/icons/envelope.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Email Management</h4>
                                <p>
									We manage your email database ensuring your audience gets just the right amount of fresh engaging content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <div class="icon">
                                <img src="images/icons/lock.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Content Creation</h4>
                                <p>
									Content creation services include; Graphic Design, Videography, Photography, Podcast Production & Blogging.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <div class="icon">
                                <img src="images/icons/user.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Influencer Marketing</h4>
                                <p>
									We bring to you marketing through the very athletes we love and adore in our communities and the sports fraternity.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <div class="icon">
                                <img src="images/icons/social.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Social Media Management</h4>
                                <p>
									We manage your social media channels ensuring your audience gets just the right amount of fresh engaging content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Box Section Two -->

@endsection