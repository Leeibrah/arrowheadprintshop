@extends('layouts.front')

@section('css')
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
@endsection



@section('content')

    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Notification Us</h2>
                    <span><a href="index.html">Home</a> <i class="fa-solid fa-chevron-right"></i> Notification</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <section class="seo_aria home_2 about">
        <div class="container custom_container">
            <div class="row align-items-center">
    
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <span class="sub_title">Message Notification</span>
                            <h2>{{ $message }} <br>
                                </h2>
                    
                        </div>
                        <a href="{!! route('home') !!}" class="min_btn">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	

	

@endsection

@section('js')
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAnk4otf8yOr8vEE4fbBBVZtFTTCLC28rU&callback=GmapInit" async defer></script>
@endsection