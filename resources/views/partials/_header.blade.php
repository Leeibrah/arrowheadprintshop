
<header class="header_aria">
    <nav class="navbar navbar-expand-lg fixed-top bg-transfarent">
        <div class="container custom_container">
            <a class="navbar-brand" href="{!! route('home') !!}">
                <img src="/images/mdigital-white-logo.png" width="60%" alt>
                <img src="/images/mdigital-logo.png" width="60%" alt>
            </a>
            <!-- <div class="search d-lg-none">
                <a class="search-btn" href="javascript:void(0);"><i class="fas fa-search"></i></a>
                <form action="#" method="get" class="search-form">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search...">
                        <button type="submit"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{!! route('home') !!}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{!! route('about') !!}">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <i class="fa-solid fa-angle-down mobile_dropdown_icon"></i>
                        <ul class="dropdown-menu">
                            <!--
                            <li>
                                <a class="dropdown-item" href="{!! route('services.digitalmarketing') !!}">
                                    Digital Marketing
                                </a>
                            </li>
                            -->
                            <li>
                                <a class="dropdown-item" href="{!! route('services.socialmedia') !!}">
                                    Social Media Management
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{!! route('services.emailmarketing') !!}">
                                    Email Marketing
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{!! route('services.webdesign') !!}">
                                    Web Design & Development
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{!! route('services.contentcreation') !!}">
                                    Content Creation
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{!! route('services.seo') !!}">
                                    Search Engine Marketing
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{!! route('services.influencermarketing') !!}">
                                    Influencer Marketing
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Our Work
                        </a>
                        <i class="fa-solid fa-angle-down mobile_dropdown_icon"></i>
                        <ul class="dropdown-menu">
            
                            <li>
                                <a class="dropdown-item" href="{!! route('work') !!}">
                                    Case Studies
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{!! route('portfolio') !!}" target="_blank">
                                    Design Portfolio
                                </a>
                            </li>
                
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{!! route('contacts') !!}">Contact Us</a></li> 
                </ul>
                
            </div>
        </div>
    </nav>
</header>
