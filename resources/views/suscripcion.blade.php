@extends('app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Hippocampus Vacation Club</span>
                <span class="tagline">Innovando para ti</span></h1>
            </div>
        </div>

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->

            <div id="content">

                <h2><strong>Gracias por</strong> Suscribirse</h2>
                                   
                <p style="">
                    
                    ¡Pronto recibirá nuestros boletines informativos! <br>

                    <a href="{{route('home')}}"> Regresar al Inicio</a>

                </p>    
           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection