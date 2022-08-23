@extends('layouts.front')

@section('css')
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
@endsection

@section('content')
	
	<section class="grey-bg">
        <!-- CONTAINER -->
        <div class="container">
            <!-- SIDE TITLE -->
            <div class="row">
                <div class="col-md-6">
                    <!-- SECTION TITLE -->
                    <div class="section-title clearfix animated" data-animation="fadeInUp" data-animation-delay="300">
                        <h3>{{ $message }}</h3>
                    </div>
                </div>
            
            </div>
            
        </div>
        <!-- /. CONTAINER -->
    </section>
	

@endsection

@section('js')
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAnk4otf8yOr8vEE4fbBBVZtFTTCLC28rU&callback=GmapInit" async defer></script>
@endsection