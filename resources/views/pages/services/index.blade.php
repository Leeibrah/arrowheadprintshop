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
                        <li class="active">Services Grid</li>
                    </ol>
                    <!-- PAGE TITLE -->
                    <h1 class="page-title bottom-line">List of Tillage Services</h1>
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
                    <div class="row">
                        <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="300">
                            <!-- SERVICES GRID -->
                            <div class="services-grid">
                                <a href="{!! route('services.accounting') !!}">
                                    <!-- IMG -->
                                    <img class="img-reponsive services-img" src="/images/services/accounting.png" alt="services-img">
                                </a>
                                <div class="services-desc">
                                    <!-- TITLE -->
                                    <h5 class="services-heading"><a href="{!! route('services.accounting') !!}">Accounting Services</a></h5>
                                    
                                    <a href="{!! route('services.accounting') !!}" class="typo-grey btn-link">More</a>
                                </div>
                            </div><!-- /. SERVICES GRID -->
                        </div>
                        <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="500">
                            <!-- SERVICES GRID -->
                            <div class="services-grid">
                                <a href="{!! route('services.payrollbureau') !!}">
                                    <!-- IMG -->
                                    <img class="img-reponsive services-img" src="/images/services/payroll-bureau.png" alt="services-img">
                                </a>
                                <div class="services-desc">
                                    <!-- TITLE -->
                                    <h5 class="services-heading"><a href="{!! route('services.payrollbureau') !!}">Payroll Bureau Services</a></h5>
                                    
                                    <a href="{!! route('services.payrollbureau') !!}" class="typo-grey btn-link">More</a>
                                </div>
                            </div><!-- /. SERVICES GRID -->
                        </div>
                        <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="700">
                            <!-- SERVICES GRID -->
                            <div class="services-grid">
                                <a href="{!! route('services.forensicinvestigation') !!}">
                                    <!-- IMG -->
                                    <img class="img-reponsive services-img" src="/images/services/forensic-investigation.png" alt="services-img">
                                </a>
                                <div class="services-desc">
                                    <!-- TITLE -->
                                    <h5 class="services-heading"><a href="{!! route('services.forensicinvestigation') !!}">Forensic & Investigation Services</a></h5>
                                    
                                    <a href="{!! route('services.forensicinvestigation') !!}" class="typo-grey btn-link">More</a>
                                </div>
                            </div><!-- /. SERVICES GRID -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="300">
                            <!-- SERVICES GRID -->
                            <div class="services-grid">
                                <a href="{!! route('services.tax') !!}">
                                    <!-- IMG -->
                                    <img class="img-reponsive services-img" src="/images/services/tax.png" alt="services-img">
                                </a>
                                <div class="services-desc">
                                    <!-- TITLE -->
                                    <h5 class="services-heading"><a href="{!! route('services.tax') !!}">Tax Services</a></h5>
                                    
                                    <a href="{!! route('services.tax') !!}" class="typo-grey btn-link">More</a>
                                </div>
                            </div><!-- /. SERVICES GRID -->
                        </div>
                        <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="500">
                            <!-- SERVICES GRID -->
                            <div class="services-grid">
                                <a href="{!! route('services.businessadvisory') !!}">
                                    <!-- IMG -->
                                    <img class="img-reponsive services-img" src="/images/services/business-advisory.png" alt="services-img">
                                </a>
                                <div class="services-desc">
                                    <!-- TITLE -->
                                    <h5 class="services-heading"><a href="{!! route('services.businessadvisory') !!}">Business Advisory Services</a></h5>
                                    
                                    <a href="{!! route('services.businessadvisory') !!}" class="typo-grey btn-link">More</a>
                                </div>
                            </div><!-- /. SERVICES GRID -->
                        </div>
                        <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="700">
                            <!-- SERVICES GRID -->
                            <div class="services-grid">
                                <a href="{!! route('services.auditassurance') !!}">
                                    <!-- IMG -->
                                    <img class="img-reponsive services-img" src="/images/services/audit.png" alt="services-img">
                                </a>
                                <div class="services-desc">
                                    <!-- TITLE -->
                                    <h5 class="services-heading"><a href="{!! route('services.auditassurance') !!}">Audit & Assurance Services</a></h5>
                                    
                                    <a href="{!! route('services.auditassurance') !!}" class="typo-grey btn-link">More</a>
                                </div>
                            </div><!-- /. SERVICES GRID -->
                        </div>
                    </div>
               
                </div>
                <!-- SIDEBAR -->
                <div class="sidebar col-md-3">
                    <!-- MENU WIDGET -->
                    @include('partials._services_menu')
                    <!-- /. MENU WIDGET -->
                    
                    <!-- CONTACT WIDGET -->
                    <div class="widget contact-widget">
                        <!-- WIDGET TITLE -->
                        <h6 class="widget-title">Need our services?</h6>
                        <!-- <p>Donec at cursus sem. Duis condimentum posuere purus.</p> -->
                        <a href="{!! route('contacts') !!}" class="btn btn-default">Request a Quote</a>
                    </div><!-- /. WIDGET -->
                    
                    
                </div><!-- /. SIDEBAR -->
            </div>      
        </div>  <!-- /.CONTAINER -->
    </div>
    <!-- /. PAGE CONTENT -->

@endsection