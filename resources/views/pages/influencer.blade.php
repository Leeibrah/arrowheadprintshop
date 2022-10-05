@extends('layouts.front')

@section('content')
    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Influencer Enrollment</h2>
                    <span><a href="index.html">Home</a> <i class="fa-solid fa-chevron-right"></i> Influencer Enrollment</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- Influencer Enrollment Section -->
    <section class="contact_us_aria">
        <div class="container custom_container">
            <div class="row">

                <h2>Fill in the Influencer Enrollment Form</h2>
            
                <div class="col-lg-6">
                    <div class="contact_us_form">
                        <hr>
                        <form method="post" action="{!! route('influencerPost') !!}" id="contact-form">
                            {!! csrf_field() !!}
                            <div class="row">
                                
                                <h3>Personal Information</h3>
                                <div class="col-lg-12">
                                    <!-- <input type="text" name="name" class="form-control input" placeholder="First name" required /> -->
                                    <input type="text" name="first_name" class="form-control input" placeholder="First Name" required/>
                                </div>

                                <div class="col-lg-12">
                                    <input type="text" name="last_name" class="form-control input" placeholder="Last Name" required />
                                </div>
                                
                                <div class="col-lg-12">
                                    <input type="tel" name="phone" class="form-control input" placeholder="Phone Number" required />
                                </div>

                                <div class="col-lg-12">
                                    <input type="email" name="email" class="form-control input" placeholder="Email" required />
                                </div>
                            </div>

                            <br/>
                            <div class="row">
                                
                                <h3>Social Media Accounts</h3>
                                <div class="col-lg-12">
                                    <input type="text" name="facebook" class="form-control input" placeholder="Facebook Page URL">
                                </div>

                                <div class="col-lg-12">
                                    <input type="text" name="twitter" class="form-control input" placeholder="Twitter Page URL">
                                </div>
                                
                                <div class="col-lg-12">
                                    <input type="text" name="instagram" class="form-control input" placeholder="Instagram Page URL">
                                </div>

                                <div class="col-lg-12">
                                    <input type="text" name="tiktok" class="form-control input" placeholder="Tiktok Page URL">
                                </div>

                                <div class="col-lg-12">
                                    <input type="text" name="youtube" class="form-control input" placeholder="Youtube Page URL">
                                </div>
                                
                                <div class="col-lg-12">
                                    <input type="text" name="other" class="form-control input" placeholder="Other Pages URL">
                                </div>

                            </div>

                            <br/>
                            <div class="row">
                                
                                <h3>Content Niche / Genre / sports involved in</h3>
                                <div class="col-lg-12">
                                    <textarea type="text" name="niche" class="form-control input textarea" rows="3" placeholder="What are you involved in?" required="required"></textarea>
                                </div> 

                            </div>

                            <br/>
                            <div class="row">
                                
                                <h3>Type of Advertisement / partnership interested in</h3>
                                <div class="col-lg-12">
                                    <textarea type="text" name="partnership" class="form-control input textarea" rows="3" placeholder="What partnership are you interested with?" required="required"></textarea>
                                </div> 

                            </div>

                            <br/>
                            <div class="row">
                                
                                <h3>Availability</h3>
                                <div class="col-lg-12">
                                    <textarea type="text" name="availability" class="form-control input textarea" rows="3" placeholder="How tight is your schedule? Are you available in time of need?" required="required"></textarea>
                                </div> 

                            </div>
                            <!-- <div class="col-lg-12">
                                <input type="text" name="subject" class="form-control input" placeholder="Subject" required>    
                            </div>
                            <div class="col-lg-12">
                                <textarea type="text" name="message" class="form-control input textarea" rows="3" placeholder="Enter your message" required="required"></textarea>
                            </div> -->
                            
                            <br/>
                            <div class="row">
                                    <h3>Are you Human?</h3>
                                    <div class="col-md-12">
                                        <div class="input-text form-group">
                                            <label>Enter the characters below:<span class="text-color">*</span></label><br/>
                                            <img src="images/cap.png" width="30%">
                                            <input type="text" name="answer" class="input form-control" placeholder="Enter characters" required/>
                                        </div>
                                    </div>
                                </div>
                            <div>
                                <button class="min_btn" type="submit">Sign Up as an Influencer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->


@endsection