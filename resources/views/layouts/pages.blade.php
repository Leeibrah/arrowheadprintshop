<!DOCTYPE html>
<html lang="en">

<head>
    <!-- @include('partials._meta') -->

    <title>{!! $page_title !!}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/icon_fonts/css/all_icons.min.css') }}">

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet"> -->

    <!-- SPECIFIC CSS -->
    <!-- <link href="layerslider/css/layerslider.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="{{ URL::asset('layerslider/css/layerslider.css') }}"> -->

    <!-- YOUR CUSTOM CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">

    <link href="{{ asset("css/custom.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/blog.css") }}" rel="stylesheet" type="text/css" />
    <!-- <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/blog.css" rel="stylesheet"> -->

</head>

<body>
        
    <div id="page">
        
    <header class="header menu_2">
        <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
        <div id="logo">
            <a href="/"><img src="../img/vinestalk.png" width="192" height="42" data-retina="true" alt=""></a>
        </div>
        <ul id="top_menu">
            <!-- <li><a href="login.html" class="login">Login</a></li> -->
            <!-- <li><a href="#" class="search-overlay-menu-btn">Search</a></li> -->
            <!-- <li class="hidden_tablet"><a href="services.html" class="btn_1 rounded">Borrow Today</a></li> -->
        </ul>
        <!-- /top_menu -->
        
        @include('partials._body_header')
        
        <!-- Search Menu -->
        <div class="search-overlay-menu">
            <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
            <form id="searchform" method="get">
                <input value="" name="q" type="search" placeholder="Search..." />
                <button type="submit"><i class="icon_search"></i>
                </button>
            </form>
        </div><!-- End Search Menu -->
    </header>
    <!-- /header -->
    
    @yield('content')

    @include('partials._footer')
    <!--/footer-->
    </div>
    <!-- page -->
    
    <!-- COMMON SCRIPTS -->
    <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script> -->
    <script src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/common_scripts.js"></script>
    <script src="../js/main.js"></script>
    <script src="../assets/validate.js"></script>
    
</body>
</html>