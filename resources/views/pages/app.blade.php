@extends('layouts.pages')

@section('content')
    
    <!-- Video Section -->
    <section class="video-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--Video Box-->
                        <div class="video-box">
                                <img src="images/gallery/phone-2.png" alt="" width="60%">
                            <!-- <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><i class="play-now flaticon-play-button"></i></a> -->
                        </div>
                    </div>
                </div>
                
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>Download our App</h2>
                            <div class="separator"></div>
                        </div>

                        <div>
                            <h3>The most convinient way to access our Salary Advance services</h3>
                        </div>

                        <br>

                        <a class="download-button" href="/release/SaloHub.apk" onclick="ga('send', 'event', 'Click', 'Android APP Download', 'App Link');" target="_self">
                            Download APK Now
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Video Section -->
    
@endsection
