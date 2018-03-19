@extends('en.app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Eventos Sociales y Corporativos</span>
                <span class="tagline">Organice sus reuniones y eventos con nosotros</span></h1>
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
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/HH_Salón_01.jpg') }}" width="1200" height="600" /></div>
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/IMG-20180308-WA0021.jpg') }}" width="1200" height="600" /></div>         
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/DSC02477.jpg') }}" width="1200" height="600" /></div>
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

            <div id="content">
                <h2><strong>Eventos Sociales </strong>y Corporativos</h2>
                <p style="text-align: justify;">
                    Celebra junto a la familia de <strong>Hippocampus Vacation Club</strong>, tus eventos sociales y corporativos con un toque de elegancia, originalidad y buen gusto.<br>
                    De la mano de nuestro gran aliado <strong>JOE'S</strong> ofrecemos música en vivo, shows de entretenimiento y diversas actividades en temporadas como fiestas de fin de año.
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