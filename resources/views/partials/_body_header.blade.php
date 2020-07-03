<!--Main Header -->
<header class="main-header">

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '570487846988548');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
        src="https://www.facebook.com/tr?id=570487846988548&ev=PageView
        &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!--Header Top-->
    <div class="header-top" style="background-image:url(images/background/1.jpg)">
        <div class="auto-container clearfix">
            <div class="top-left clearfix">
                <!-- Social Links -->
                <ul class="social-links">
                    <!-- <li class="google"><a href="#"><span class="fab fa-google-plus-g"></span></a></li> -->
                    <li class="facebook"><a href="https://www.facebook.com/salohub" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                    <li class="twitter"><a href="https://twitter.com/salo_hub" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/salo_hub/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                    <!-- <li class="vimeo"><a href="#"><span class="fab fa-vimeo-v"></span></a></li> -->
                </ul>
            </div>
            <div class="top-right clearfix">
                <!-- Info List -->
                <ul class="info-list clearfix">
                    <!-- <li><a href="#"><span class="icon far fa-clock"></span> Mon - Sat  9.00 AM - 5.00 PM</a></li> -->
                    <!-- <li><a href="#"><span class="icon flaticon-phone-receiver"></span> (254) 720 202234</a></li> -->
                </ul>
                <!-- Button box -->
                <div class="btn-box">
                    <a href="{!! route('employer-enrollment') !!}" class="theme-btn btn-style-one">Employer Enrollment</a>
                    <a href="{!! route('employee-enrollment') !!}" class="theme-btn btn-style-one">Employee Enrollment</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container">
            <div class="auto-container clearfix">
                <!--Info-->
                <div class="logo-outer">
                    <div class="logo"><a href="/"><img src="images/main-logo.png" alt="" title=""></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>
                        
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">

                                <li><a href="/">Home</a></li>
                                <li><a href="about">About Us</a></li>
                                <li><a href="/how-it-works">How it Works?</a></li>
                                <li><a href="/app">Download App</a></li>
                                <li><a href="/contacts">Contact Us</a></li>

                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!--Search Btn-->
                        <div class="search-box-btn"><span class="icon fa fa-search"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="/" title=""><img src="images/logo-small.png" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="/">Home</a></li>
                            <li><a href="about">About Us</a></li>
                            <li><a href="/how-it-works">How it Works?</a></li>
                            <li><a href="/app">Download App</a></li>
                            <li><a href="/contacts">Contact Us</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
<!-- End Main Header