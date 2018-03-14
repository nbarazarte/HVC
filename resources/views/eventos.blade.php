@extends('app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Eventos Sociales y Corporativos</span>
                <span class="tagline">Organice sus reuniones y eventos con nosotros</span></h1>
            </div>
        </div>

        @include('reservacion-rci')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->
        	<div id="slideshow">
                <div class="slider">
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/HH_Salón_01.jpg') }}" width="1200" height="600" /></div>
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/HH_Salón_05.jpg') }}" width="1200" height="600" /></div>
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/HH_Salón_10.jpg') }}" width="1200" height="600" /></div>
                   
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

            <div id="content">
                <h2><strong>Eventos Sociales </strong>y Corporativos</h2>
                <p>
                    Celebra junto a la gran familia de <strong>Hippocampus Vacation Club</strong>, eventos sociales y corporativos con un toque de elegancia, originalidad y buen gusto.<br>
                    Queremos ser parte de momentos inolvidables, llenos de creatividad, que hagan sentir a tus invitados en un ambiente ameno y confortable.
                </p>
            
                <h2 style="margin:0;"><strong>+58 (295) 331.13.00</strong></h2>
                <p style="margin:0;">
                    
                    <i class="fa fa-map-marker"></i>  Calle El Cristo, edifc. Complejo Hippocampus, sector La Caranta.<br />Isla de Margarita. Venezuela            
                </p>  

                <br>

            </div>
        </div>  

    </main>
    <!-- Content | END -->

@endsection