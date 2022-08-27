<!DOCTYPE html>
<!--
    Theme Name: Medixa Digital - Digital Marketing Agency
    Description: HTML/CSS 
    Author: Lee Ibrahim
    Designed & Coded by Lee Ibrahim
-->

<html lang="en">
    <!-- HEAD -->
        @include('partials._head')
    <!-- /. HEAD -->

    <body>
        
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

        <!-- jQuery Libraary -->
        <script src="js/jquery.min.js"></script>
        <!-- Popper - Js For Bootstrap -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap - jS  -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Waypoints Js For Counter Up -->
        <script src="js/waypoints.min.js"></script>
        <!-- Counter Up - Js -->
        <script src="js/jquery.counterup.js"></script>
        <!-- Magnific Popup -Js -->
        <script src="js/magnific-popup.min.js"></script>
        <script src="js/easypiechart.js"></script>
        <!-- Wow - Js -->
        <script src="js/wow.min.js"></script>
        <!-- Parallax - Js -->
        <script src="js/parallax.min.js"></script>
        <!-- Slick-Slidr-js -->
        <script src="js/slick.min.js"></script>
        <!-- Main Js -->
        <script src="js/main.js"></script>
    </body>
</html>