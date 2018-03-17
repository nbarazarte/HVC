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

            	    @if(Session::has('message'))

            	    	<h2><strong>Datos</strong> Inconsistentes</h2>
                                           
		                <p style="">
		                    
		                	{{Session::get('message')}} <br>

							<a href="{{route('home')}}"> Regresar al Inicio</a>

		                </p>                          

                    @else

		                <h2><strong>Error</strong> 404</h2>
		                <p style="">
		                    
		                	La página solicitada no existe <br>

							<a href="{{route('home')}}"> Regresar al Inicio</a>

		                </p>                    	

                    @endif   
           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection