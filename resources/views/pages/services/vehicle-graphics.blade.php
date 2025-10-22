@extends("layouts.front")

@section("title")
    {{ app_name() }}
@endsection


@section("content")

    <!-- details-area-start -->
    <div class="tp-project__details-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-project__details-wrapper">
                        <div class="tp-project__details-thumb mb-55">
                            <img class="w-100" src="/assets/img/service/vehicle-banner.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="tp-project__details-content-box">
                        <div class="tp-project__details-content mb-65">
                            <h5 class="tp-project__details-title">
                                Vehicle Graphics
                            </h5>
                            <p>
                                On average a busy vehicle can be seen by up to 3000 people every hour so why not utilise the space. We consider the process of vehicle livery design and application to be a very important aspect of your companies advertising potential. With the advent of recent technologies vehicle graphic capabilities are limitless and provide an excellent way to reach out to new customers and also show-off your companies identity. 
                                <br/><br/>
                                We provide vehicle liveries for all sizes of vans, lorries, curtain sided vehicles, and buses and have the full range of commercial vehicles on file you give us the design idea or let us design your vehicle graphics. See the design on your vehicle before you decide with a full colour to-scale proof and work along side our designers in the studio. Be it a simply logo application or a full vehicle wrap the same emphasis on customer satisfaction is applied to ensure that you will not only come back time after time but will recommend our service to colleagues and friends alike. 
                                <br/><br/>
                                Your vehicle graphics can be fitted in our workshop or at your premises (providing facilities are capable). We also specialise in accident damaged vehicles and body shop repair work, so if you are looking for a match on an old livery whether produced by us originally or not, we have the equipment in place to cater to all autobody livery repairs and replacement, we already service many local garages throughout the Midlands including, Autofix Derby, TC Harrison, Paramount Derby, ADR Repair Centre (Derby & Notts) & Just Car Clinics.
                            </p>
                        </div>
                        <!-- <div class="tp-project__details-content mb-40">
                            <h5 class="tp-project__details-title">DIGITAL MARKETING</h5>
                            <p class="pb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi?  perspiciatis <br>
                                accusamus soluta perferendis, ad illum, nesciunt, reiciendis iusto et cupidit Repudiandae provident to <br>
                                consectetur, sapiente, libero iure necessitatibus corporis nulla voluptate, quisquam aut perspiciatis? <br>
                                Fugiat labore aspernatur eius, perspiciatis ut molestiae, delectus rem.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulv <br>
                                inar dapibus leo. Ut enim ad minim veniam. when an unknown printer took a galley of type and scrambled <br>
                                it to make a type specimen book.
                                </p>
                            <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <br>
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat. There are many variations of passages.</p>    
                        </div>
                        <div class="tp-project__details-list-box">
                            <span>This event will allow participants to:</span>
                            <ul>
                                <li><i class="fas fa-check"></i>Business's managers, leaders</li>
                                <li><i class="fas fa-check"></i> Downloadable lectures, code and design assets for all projects</li>
                                <li><i class="fas fa-check"></i>Anyone who is finding a chance to get the promotion</li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                
                @include("partials._sidebar")

                <div class="col-xl-12 col-lg-12">
                    <div class="tp-project__details-slider">
                        <h5 class="tp-project__details-title pb-15">Related Work</h5>
                        <div class="tp-project__wrapper p-relative">
                            <div class="swiper-container tp-project__details-active">
                                <div class="swiper-wrapper">
                  
                                    <div class="swiper-slide">
                                        <div class="tp-project__item">
                                            <div class="tp-project__thumb p-relative">
                                                <img class="w-100" src="/assets/img/service/vehicle-01.png" alt="">
                                                <div class="tp-project__shape">
                                                    <img  src="/assets/img/team/shape-1-1.png" alt="">
                                                </div>
                                            </div>
                                            <!-- <div class="tp-project__content">
                                                <h5 class="tp-project__title">Ceremony Worthy Of Time</h5>
                                                <span>UI/UX & Development</span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-project__item">
                                            <div class="tp-project__thumb p-relative">
                                                <img class="w-100" src="/assets/img/service/vehicle-02.png" alt="">
                                                <div class="tp-project__shape">
                                                    <img  src="/assets/img/team/shape-1-1.png" alt="">
                                                </div>
                                            </div>
                                            <!-- <div class="tp-project__content">
                                                <h5 class="tp-project__title">Ceremony Worthy Of Time</h5>
                                                <span>UI/UX & Development</span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-project__details-arrow-box">
                                <div class="slider-next">
                                    <button>
                                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.7412 5.59976L13.093 0.252091C13.0141 0.175506 12.9179 0.114293 12.8107 0.0723807C12.7034 0.0304685 12.5874 0.00878155 12.4701 0.00869966C12.3528 0.00861777 12.2368 0.0301427 12.1295 0.0719051C12.0222 0.113667 11.9259 0.174747 11.8469 0.251221C11.6808 0.412803 11.5887 0.623101 11.5886 0.841249C11.5884 1.0594 11.6802 1.26981 11.8461 1.43163L15.9877 5.35164L0.88579 5.3411C0.646493 5.35626 0.422587 5.45076 0.25909 5.6056C0.0955923 5.76045 0.00462529 5.96417 0.00447755 6.17579C0.00432981 6.38741 0.0950123 6.59124 0.258294 6.74632C0.421575 6.90139 0.645348 6.99621 0.884624 7.0117L15.984 7.02224L11.837 10.9387C11.6709 11.1002 11.5788 11.3105 11.5786 11.5287C11.5785 11.7468 11.6703 11.9573 11.8362 12.1191C11.9151 12.1957 12.0112 12.2569 12.1185 12.2988C12.2257 12.3407 12.3417 12.3624 12.459 12.3625C12.5763 12.3625 12.6923 12.341 12.7997 12.2993C12.907 12.2575 13.0032 12.1964 13.0822 12.1199L18.7404 6.79116C18.9101 6.62894 19.0043 6.41636 19.0045 6.19564C19.0046 5.97493 18.9107 5.76222 18.7412 5.59976Z" fill="white"/>
                                         </svg>                                                
                                    </button>                   
                                </div>
                           </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- details-area-end -->

@endsection