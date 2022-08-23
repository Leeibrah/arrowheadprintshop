@extends('layouts.front')

@section('content')

    <!-- PAGE TITLE WRAPPER-->
    <div class="page-title-wrapper">
        <!-- CONTAINER -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 animated" data-animation="fadeInUp" data-animation-delay="300">
                    <!-- BREADCRUMB -->
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li class="active">{{ $page_title }}</li>
                    </ol>
                    <!-- PAGE TITLE -->
                    <h1 class="page-title bottom-line">{{ $page_title }}</h1>
                </div>
            </div>
        </div>  <!-- /.CONTAINER -->    
    </div>
    <!-- /.PAGE TITLE WRAPPER-->
    
    <!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- CONTAINER -->
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!-- ARTICLE -->
                    <article class="project project-single hv-wrapper">
                        
                        <!-- POST DESC -->
                        <div class="post-content clearfix">

                            <h6>Audit and Assurance Services we offer:</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    
                                    <ul class="icon-list">
                                        <li>
                                            Risk and governance assurance
                                        </li>
                                        <li>
                                            Internal controls & process assurance
                                        </li>
                                        <li>
                                            Regulatory and ethical compliance assurance
                                        </li>
                                        <li>
                                            Assurance on capital market transactions
                                        </li>
                                        <li>
                                            Non-statutory audits
                                        </li>
                                        <li>
                                            Internal audit services
                                        </li>
                                        <li>
                                            Technology and systems assurance
                                        </li>
                                        <li>
                                            Pensions audit
                                        </li>
                                        <li>
                                            Co-operative societies’ audits
                                        </li>
                                        <li>
                                            Audit of limited companies
                                        </li>
                                        <li>
                                            NGO audits
                                        </li>
                                        <li>
                                            Schools audits
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <!-- PIE CHART WRAPPER -->
                                    <div class="project-thumbnail">
                                        <img src="/images/services/audit.png" class="img-responsive" alt="post-img">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- READ MORE LINK -->
                    </article><!-- /. ARTICLE -->
                </div>
                <!-- SIDEBAR -->
                <div class="sidebar col-md-3">
                    <!-- MENU WIDGET -->
                    @include('partials._services_menu')
                    <!-- /. MENU WIDGET -->
                    
                    <!-- CONTACT WIDGET -->
                    <div class="widget contact-widget">
                        <!-- WIDGET TITLE -->
                        <h6 class="widget-title">Need our {{ $page_title }}?</h6>
                        
                        <a href="{!! route('contacts') !!}" class="btn btn-default">Request a Quote</a>
                    </div><!-- /. WIDGET -->
                  
                    
                </div><!-- /. SIDEBAR -->
            </div>      
        </div>  <!-- /.CONTAINER -->
    </div>
    <!-- /. PAGE CONTENT -->

@endsection