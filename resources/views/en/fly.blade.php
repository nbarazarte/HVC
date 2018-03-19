@extends('app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Fly & Buy</span>
                <span class="tagline">Descubra las ventajas de ser nuestro socio</span></h1>
            </div>
        </div>

        @include('reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->
        	<div id="slideshow">
                <div class="slider">
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/wing-221526_1280.jpg') }}" width="1200" height="600" /></div>

                   
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

            <div id="content">
                <h2><strong>Fly & Buy</strong></h2>
                <p style="align: center"="">
                    <strong>Hippocampus Vacation Club</strong> le ofrece la oportunidad de disfrutar de un fin de semana en familia a través de su Programa <strong>Fly & Buy</strong> el cual le permitirá descubrir y conocer las ventajas de ser nuestro socio.
                </p>


                <p>
                    Infórmese sobre nuestros paquetes promocionales por los números:
                </p>


                <h2 style="margin:0;"><strong>+58 (295) 331.13.80</strong></h2>
                <p style="margin:0;">
                    <a href="mailto:atencionalsocio@hippocampus.com.ve">atencionalsocio@hippocampus.com.ve</a><br />
                    <i class="fa fa-map-marker"></i>  Calle El Cristo, edifc. Complejo Hippocampus, sector La Caranta.<br />Isla de Margarita. Venezuela            
                </p>  

                <br>

            </div>
        </div>  

    </main>
    <!-- Content | END -->

@endsection