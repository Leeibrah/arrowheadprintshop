@extends('layouts.front')

@section('content')
    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
                    <span><a href="index.html">Home</a> <i class="fa-solid fa-chevron-right"></i> Contact</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- Contact Section -->
    <section class="contact_us_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_info_aria">
                        <h5>Contact Informations</h5>
                        <div class="contact_info">
                            <div class="single_info">
                                <img src="assets/img/icon/contact/contact.svg" alt="">
                                
                                <p>
                                    <b>Office Location:</b><br/>
                                    Senteu Plaza, Galana Rd, Kilimani
                                    <br>
                                    Nairobi, Kenya
                                </p>
                            </div>
                            <div class="single_info">
                                <img src="assets/img/icon/contact/contact_2.svg" alt="">
                                
                                <p>
                                    <b>Phone Numbers:</b><br/>
                                    +254 704 734 897 <br>
                                    +254 714 019 079
                                </p>
                            </div>
                            <div class="single_info">
                                <img src="assets/img/icon/contact/contact_3.svg" alt="">

                                <p>
                                    <b>Email:</b><br/>
                                    info@mdigital.co.ke
                                </p>
                            </div>

                            <div class="single_info">
                                <img src="assets/img/icon/contact/contact_3.svg" alt="">
                                <br/><br/><br/><br/><br/><br/>
                                <p>
                                    <b>Social Media Pages:</b>
                                    <br/><br/>
                                    <a href="https://www.facebook.com/medixadigital" style="color: #fff" target="_blank"><i class="fa-brands fa-facebook-f fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="https://www.instagram.com/medixadigital" style="color: #fff" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="https://www.twitter.com/medixadigital" style="color: #fff" target="_blank"><i class="fa-brands fa-twitter fa-2x"></i></a>
                                </p>
                            </div>

                     
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_us_form">
                        
                        <form method="post" action="{!! route('contactsPost') !!}" id="contact-form">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="name" class="form-control input" placeholder="Full name">
                                </div>
                                
                                <div class="col-lg-6">
                                    <input type="tel" name="phone" class="form-control input" placeholder="Phone Number">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" class="form-control input" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="text" name="subject" class="form-control input" placeholder="Subject" required>    
                            </div>
                            <div class="col-lg-12">
                                <textarea type="text" name="message" class="form-control input textarea" rows="3" placeholder="Enter your message" required="required"></textarea>
                            </div>
                            <!-- <textarea name="message" id="message" class="form-control input textarea">Message</textarea> -->
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-text form-group">
                                            <label>Enter the characters below:<span class="text-color">*</span></label><br/>
                                            <img src="images/cap.png" width="30%">
                                            <input type="text" name="answer" class="input-name form-control" placeholder="Enter characters" required/>
                                        </div>
                                    </div>
                                </div>
                            <!-- <input type="button" value="Submit Now" class="min_btn"> -->
                            <div>
                                <button class="min_btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <!-- Map Section -->
    <section class="map">
        <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 100%">
            <iframe src="https://maps.google.com/maps?q=nairobi&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0"
                allowfullscreen></iframe>
        </div>
    </section>
    <!-- Map Section -->

@endsection