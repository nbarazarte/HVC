@extends('en.app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Social and Corporate Events</span>
                <span class="tagline">ORGANIZE YOUR MEETINGS AND EVENTS WITH US</span></h1>
            </div>
        </div>

        @include('en.reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->
        	<div id="slideshow">
                <div class="slider">
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/Reinauguracion Hippocampus (04).jpg') }}" width="1200" height="600" /></div>
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/HH_Salón_01.jpg') }}" width="1200" height="600" /></div>                    
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

            <div id="content">
                <h2><strong>Social and </strong>Corporate Events</h2>
                <p style="text-align: justify;">
                    Celebrate together with the <strong>Hippocampus Vacation Club</strong> family, your social and corporate events with a touch of elegance, originality and good taste.<br>
                    We offer live music, entertainment shows and various activities in seasons such as end of the year parties. We want to be part of unforgettable moments, full of creativity, that make your guests feel in a pleasant and comfortable environment.                                       
                </p>
            
                <h2 style="margin:0;"><strong>+58 (295) 331.13.00</strong></h2>
                <p style="margin:0;">
                    
                    <i class="fa fa-map-marker"></i> El Cristo Street, Hippocampus Complex building, La Caranta sector.<br>Margarita Island. Venezuela
                </p>  

                <br>

            </div>
        </div>  

    </main>
    <!-- Content | END -->

@endsection