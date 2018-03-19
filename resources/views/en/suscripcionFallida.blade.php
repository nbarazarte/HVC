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

                <h2><strong>Datos</strong> Duplicados</h2>
                                   
                <p style="">
                    
                    La dirección de correo electrónico ya se encuentra registrada en nuestros sistemas<br>

                    <a href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>

                </p>    
           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection