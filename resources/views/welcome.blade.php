@extends('layouts.front')

@section('content')

   <main>

        <!-- Slider -->
        <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:800px;">
                <!-- first slide -->
                <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                    <img src="img/slides/slide_4.png" class="ls-bg" alt="Slide background">
                    <h1 class="ls-l slide_typo" style="top: 50%; left: 50%; text-shadow: 2px 2px #000; font-size: 30px;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                        <!-- Start <strong>Earning</strong> with Bitcoin -->
                        <strong>Vinestalk Loans, Financial Literacy, Strategic Financial Consulting & Accounting</strong>
                    </h1>
                    <!-- <h4 class="ls-l slide_typo_2" style="top:56%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                        When you need financial support, fresh ideas and sound advice, turn to us and we’ll be there every step of the way!
                    </h4> -->
                    <p class="ls-l slide_typo_2" style="color: #000; text-shadow: 1px 1px #fff; top: 58%; left: 50%; font-variant: small-caps;">
                        When you need financial support, fresh ideas and sound advice, turn to us and we’ll be there every step of the way!
                    </p>
                    <a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='https://portal.vinestalk.co.ke/login' target="_blank">Sign Up</a>
                </div>
                <!-- second slide -->
                <div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
                    <img src="img/slides/slide_5.png" class="ls-bg" alt="Slide background">
                    <h5 class="ls-l slide_typo" style="top: 50%; left: 50%; text-shadow: 2px 2px #000; font-size: 30px;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                        <strong>Vinestalk Loans, Financial Literacy, Strategic Financial Consulting & Accounting</strong>
                    </h5>
                    <p class="ls-l slide_typo_2" style="color: #000; text-shadow: 1px 1px #fff; top: 58%; left: 50%; font-variant: small-caps;">
                        When you need financial support, fresh ideas and sound advice, turn to us and we’ll be there every step of the way!
                    </p>
                    <a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='https://portal.vinestalk.co.ke/login' target="_blank">Sign Up</a>
                </div>
                <!-- second slide -->
                <div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
                    <img src="img/slides/slide_6.png" class="ls-bg" alt="Slide background">
                    <h6 class="ls-l slide_typo" style="top: 50%; left: 50%; text-shadow: 2px 2px #000; font-size: 30px;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                        <strong>Vinestalk Loans, Financial Literacy, Strategic Financial Consulting & Accounting</strong>
                    </h6>
                    <p class="ls-l slide_typo_2" style="color: #000; text-shadow: 1px 1px #fff; top: 58%; left: 50%; font-variant: small-caps;">
                        When you need financial support, fresh ideas and sound advice, turn to us and we’ll be there every step of the way!
                    </p>
                    <a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='https://portal.vinestalk.co.ke/login' target="_blank">Sign Up</a>
                </div>
            </div>
        </div>

        <!-- End layerslider -->


        <!-- <div id="form_container">
            <div class="wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="intro_title_header">
                                <h3>Loans, Financial Literacy,</h3>
                                <h3>Strategic Financial Consulting</h3>
                                <h3>& Accounting</h3>
                                <p style="text-shadow: 2px 2px #788e39;">
                                    When you need financial support, fresh ideas and sound advice, turn to us and we’ll be there every step of the way!
                                </p>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> -->

        <div class="features clearfix">
            <div class="container">
                <p>
                    Vinestalk Kenya Ltd is a Non-bank, Non-deposit taking financial services company that offers:- 
                </p>
                <ul>
                    <li><i class="pe-7s-wallet"></i>
                        <h4>Credit</h4><span>Credit services to individuals and SMEs.</span>
                        <div>
                            <a href="/services/product-loans" class="read-more">Read More</a>
                        </div>
                    </li>
                    <li><i class="pe-7s-credit"></i>
                        <h4>Financial Literacy</h4><span>Financial literacy to the community </span>
                        <div class="tags">
                            <a href="/services/financial-literacy" class="read-more">Read More</a>
                        </div>
                    </li>
                    <li><i class="pe-7s-graph3"></i>
                        <h4>Consultancy & Accounting</h4><span>Financial management and accounting services</span>
                        <div>
                            <a href="/services/management-accounting" class="read-more">Read More</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /features -->

        <!-- <div class="container margin_default">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>How it works</h2>
                <p>Buy and Sell Cryptocurrencies in 3 easy steps.</p>
            </div>
            <div class="row how_home">
                <div class="col-lg-4">
                    <figure>
                        <a href="https://vimeo.com/231518882" class="video"><i class="arrow_triangle-right"></i><span>Play Video</span></a>
                        <img src="img/mobile.png" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-8">
                    <ul>
                        <li><strong>1</strong><h4>Sign up</h4><p>Sign up for a free Wallet on web, iOS or Android and go through our easy verification.</p></li>
                        <li><strong>2</strong><h4>Deposit Money</h4><p>Select your preferred deposit method and deposit money into your Wallet.</p></li>
                        <li><strong>3</strong><h4>Buy Bitcoin or other Cryptocurrencies</h4><p>Buy Bitcoin or other Cryptocurrencies! We also make sure it’s stored safely.</p></li>
                    </ul>
                    <p><a href="register.html" class="btn_1 rounded">Sign up Now</a><br></p>
                    <p>* With no obligations or hidden fees.</p>
                </div>
            </div>
        </div> -->
        <!-- /container -->
        
        <div class="bg_color_1">
        <div class="container margin_default">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>What makes us Different</h2>
                <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="box_feat">
                        <img src="img/read.png" alt="" width="20%">
                        <h3>Our Story</h3>
                        <p>
                            Like all great things, we started small. We took a few like-minds with a shared vision—and ran with it. And Today, the story is still being written by you and I 
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="box_feat">
                        <img src="img/power.png" alt="" width="20%">
                        <h3>Our Motivation</h3>
                        <p>
                            Our work is our purpose, our driving force. It's the reason we get up every day and do what we do. Most importantly, it keeps pushing us to achieve bigger and better things with each new challenge.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="box_feat">
                        <img src="img/group.png" alt="" width="20%">
                        <h3>Our Team</h3>
                        <p>
                            We’re more than a bunch of experts. We’re a family of like-minded people, using our passion and our skills to make a difference.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="box_feat">
                        <img src="img/cash.png" alt="" width="20%">
                        <h3>Our clients</h3>
                        <p>
                            Because we're experienced, reliable, and focused on results, we've had the privilege of working with a host of fantastic clients.
                        </p>
                    </div>
                </div>
                
                
            
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
        
        <!-- <div class="container margin_default">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>What makes us Different</h2>
            </div>
            <div class="row justify-content-center">
                    <div class="content_area_main">
                        <div class="col-sm-12">
                            <div class="content_item1 content_item1_first wow bounceInLeft" data-wow-offset="150">
                                <div class="content_pic">
                                    <img src="img/1.png" alt="img">
                                </div>
                                <div class="content_item_txt">
                                    <p>April 2017</p>
                                    <h3>$1,435.2</h3>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="content_item2 wow bounceInRight" data-wow-offset="150">
                                <div class="content_pic2">
                                    <img src="img/2.png" alt="img">
                                </div>
                                <div class="content_item_txt2">
                                    <p>Our clients</p>
                                    <div>
                                        Because we're experienced, reliable, and focused on results, we've had the privilege of working with a host of fantastic clients. Among them ;
                                        
                                    </div>
                                    <ul>
                                            <li>youth & the unemployed</li>
                                    </ul>
                                    <ul>
                                            <li>youth & the unemployed</li>
                                    </ul>
                                    <ul>
                                            <li>youth & the unemployed</li>
                                    </ul>
                                    <ul>
                                            <li>youth & the unemployed</li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="content_item1 wow bounceInLeft" data-wow-offset="150">
                                <div class="content_pic">
                                    <img src="img/3.png" alt="img">
                                </div>
                                <div class="content_item_txt">
                                    <p>August 2017</p>
                                    <h3>$4,718.2</h3>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="content_item2 wow bounceInRight" data-wow-offset="150">
                                <div class="content_pic2">
                                    <img src="img/4.png" alt="img">
                                </div>
                                <div class="content_item_txt2">
                                    <p>October 2017</p>
                                    <h3>$6,458.3</h3>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="middle_line"></div>
                    </div>
                </div>
            <p class="text-center"><a href="register.html" class="btn_1 rounded">Start Earning</a> <a href="services.html" class="btn_1 rounded outline">View Services</a></p>
        </div> -->
        <!-- /container -->

        <!-- <div class="call_section">
            <div class="container clearfix">
                <div class="col-lg-5 col-md-7 float-right">
                    <div class="box_1">
                        <h3>Cryptocurrency Calculator</h3>
                        <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ad vis ignota virtute definitiones.</p>
                        <script src="js/calc_widget.js"></script>
                        <a href="register.html" class="btn_1 rounded">Start Earning Now</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!--/call_section-->
        
        <!-- <div class="bg_color_1">
            <div class="container margin_default">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Latest News</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a class="box_news" href="blog.html">
                            <figure><img src="img/news_home_1.jpg" alt="">
                            </figure>
                            <ul>
                                <li>Mark Twain</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Pri oportere scribentur eu</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="box_news" href="blog.html">
                            <figure><img src="img/news_home_2.jpg" alt="">
                            </figure>
                            <ul>
                                <li>Jhon Doe</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Duo eius postea suscipit</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="box_news" href="blog.html">
                            <figure><img src="img/news_home_3.jpg" alt="">
                            </figure>
                            <ul>
                                <li>Luca Robinson</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Elitr mandamus cu has</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="box_news" href="blog.html">
                            <figure><img src="img/news_home_4.jpg" alt="">
                            </figure>
                            <ul>
                                <li>Paula Rodrigez</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Id est adhuc ignota</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                </div>
                <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
            </div>
        </div> -->
        
        <!-- <div class="container">
            <div id="reccomended" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="img/currency_icon_1.svg" alt="">
                    <h5>Bitcoin</h5>
                </div>
                <div class="item">
                    <img src="img/currency_icon_2.svg" alt="">
                    <h5>Ethereum</h5>
                </div>
                <div class="item">
                    <img src="img/currency_icon_3.svg" alt="">
                    <h5>Monero</h5>
                </div>
                <div class="item">
                    <img src="img/currency_icon_4.svg" alt="">
                    <h5>Ripple</h5>
                </div>
                <div class="item">
                    <img src="img/currency_icon_5.svg" alt="">
                    <h5>Bytecoin</h5>
                </div>
                <div class="item">
                    <img src="img/currency_icon_6.svg" alt="">
                    <h5>Zcash</h5>
                </div>
                <div class="item">
                    <img src="img/currency_icon_7.svg" alt="">
                    <h5>Litecoin</h5>
                </div>
                <div class="item">
                    <img src="img/currency_icon_8.svg" alt="">
                    <h5>Dash</h5>
                </div>
            </div>
        </div> -->
        <!-- /container -->
    </main>
    <!-- /main -->
@endsection
