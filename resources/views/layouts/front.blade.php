<!DOCTYPE html>
<!--
    Theme Name: TILLAGE - Audit, Tax Consultancy, Accountancy
    Description: HTML/CSS 
    Author: Glory Themes 
    Designed & Coded by Lee Ibrahim
    -->
<html lang="en">
    <!-- HEAD -->
        @include('partials._head')
    <!-- /. HEAD -->

    <body>
        <!-- PAGE LOADER -->
        <div id="pageloader">
            <img src="images/loader.gif" class="img-responsive" alt="loader" height="128" width="128">
        </div>
        <!-- PAGE WRAPPER -->
        <div class="page-wrapper">
            
            <!-- HEADER -->
            @include('partials._header')
            <!-- /. HEADER -->

            @yield('content')

            
            <!-- FOOTER -->
            @include('partials._footer')
            <!-- /. FOOTER -->

        </div>
        <!-- /. PAGE WRAPPER -->
        <!-- COLOR PANEL -->
        <!-- <div class="color-panel"><ul class="panel-icons"><li class="panel-color-list"><a href="#" class="switcher-icon ion-tshirt-outline" data-toggle="tooltip" data-placement="left" title="Theme Skins"></a><ul class="panel-colors"><li><a title="color" class="switcher" style="background: #13599F;"></a></li><li><a title="green" class="switcher" style="background: #4CAF50;"></a></li><li><a title="pink" class="switcher" style="background: #E91E63;"></a></li><li><a title="yellow" class="switcher" style="background: #ECC116;"></a></li><li><a title="brown" class="switcher" style="background: #795548;"></a></li></ul></li><li><a href="#" class="purchase-icon ion-bag" data-toggle="tooltip" data-placement="left" title="Purchase Tradingblock"></a></li></ul></div> -->
        <!-- /. COLOR PANEL -->
        <!-- JQUERY -->
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <!-- BOOTSTRAP -->
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="/js/revolution-extension.js"></script>
        <!-- THEME JS -->
        <script type="text/javascript" src="/js/theme.js"></script>
        <!-- CAROUSEL JS -->
        <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
        <!-- CUSTOM JS -->
        <script type="text/javascript" src="/js/custom.js"></script>
    </body>
</html>