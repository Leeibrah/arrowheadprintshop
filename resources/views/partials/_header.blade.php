<header>
    <!-- NAV TOP -->
    <div class="nav-top">
        <!-- CONTAINER -->
        <div class="container">
            <!-- TOGGLE -->
            <div class="top-toggle-btn">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu" aria-expanded="false">
                    <span class="ion-android-remove"></span>
                </button>
            </div>
            <!-- COLLAPSE -->
            <div class="collapse navbar-collapse" id="top-menu">
                <ul class="menu-inline navbar-left">
                    <li class="welcom-text"> Audit, Tax Consultancy, Accountancy </li>
                </ul>
                <ul class="menu-inline navbar-right">
                    <li class="contact-info">Contact us: <a class="text-color" href="tel:+254722295634">+254 722 295 634</a>
                    </li>
                    <li class="contact-info">Write to us: <a class="text-color" href="email:yoursay@tillage.co.ke">yoursay@tillage.co.ke</a>
                    </li>
                    <!-- <li><a href="#">Extras</a></li> -->
                    <!-- <li><a href="#">Theme documentation</a></li> -->
                </ul>
            </div>
        </div>
        <!-- ./ CONTAINER -->
    </div>
    <!-- NAVIGATION -->
    <nav id="sticker" class="navbar navbar-default">
        <!-- CONTAINER -->
        <div class="container">
            <!-- NAVBAR HEADER -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="ion-android-menu"></span>
                </button>
                <!-- LOGO -->
                <a class="navbar-brand" href="{!! route('home') !!}">
                    <img class="img-responsive" alt="logo" src="/images/tillage-logo.png" width="100px">
                </a>
            </div>
            <!-- NAVBAR COLLAPSE -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav menu-inline navbar-right">
                    <!-- HOME -->
                    <li>
                        <a href="{!! route('home') !!}">Home</a>
                    </li>

                    <li>
                        <a href="{!! route('about') !!}">About Us</a>
                    </li>
                    
                    <!-- <li class="dropdown">
                        <a href="#">About Us</a>
                        <span data-toggle="dropdown" class="dropdown-toggle">
                            <i class="ion-arrow-down-b"></i>
                        </span>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{!! route('about') !!}">
                                    Who We Are
                                </a>
                            </li>
                            <li>
                                <a href="{!! route('team') !!}">
                                    The Team
                                </a>
                            </li>
                        </ul>
                    </li> -->

                    <li class="dropdown">
                        <a href="{!! route('services.index') !!}">Services</a>
                        <span data-toggle="dropdown" class="dropdown-toggle">
                            <i class="ion-arrow-down-b"></i>
                        </span>
                        <!-- DROPDOWN MENU -->
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{!! route('services.accounting') !!}">
                                    Accounting
                                </a>
                            </li>
                            <li>
                                <a href="{!! route('services.payrollbureau') !!}">
                                    Payroll Bureau
                                </a>
                            </li>
                            <li>
                                <a href="{!! route('services.forensicinvestigation') !!}">
                                    Forensic Investigation
                                </a>
                            </li>
                            <li>
                                <a href="{!! route('services.tax') !!}">
                                    Tax Services
                                </a>
                            </li>
                            <li>
                                <a href="{!! route('services.businessadvisory') !!}">
                                    Business Advisory
                                </a>
                            </li>
                            <li>
                                <a href="{!! route('services.auditassurance') !!}">
                                    Audit and Assurance
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{!! route('blog') !!}">Blog</a>
                    </li>
                    <li>
                        <a href="{!! route('contacts') !!}">Contact Us</a>
                    </li>
                    <li>
                        <a href="{!! route('contacts') !!}" class="btn btn-default">Request a quote</a>
                    </li>
                </ul>
            </div>
            <!-- /.COLLAPSE -->
        </div>
        <!-- /.CONTAINER -->
    </nav>
    <!-- /. NAVIGATION MENU -->
</header>
