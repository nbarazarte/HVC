@extends('app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Servicios Especiales</span>
                <span class="tagline">Tiendas, Spa, Restaurante e Internet</span></h1>
            </div>
        </div>
        
        @include('reservacion')

    </header>
    <!-- Header | END -->
    <!-- Specials | START -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
            <div class="special">
                <div class="img">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/knela-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                    <h2>Tienda<br />
                    <span></span></h2>
                        <p align="justify">
                            En nuestra tienda te asesoramos con el traje de baño perfecto para lucir durante tu estadía en el hotel Hippocampus Vacation Club. <br>
                            Tenemos una variedad de accesorios para damas y próximamente para caballeros.<br>
                            ¿Llegaste a Hippocampus Vacation Club y no tienes traje de baño? Despreocúpate, aquí encontrarás lo que necesites.
                        </p>

                </div>
            </div>
            <div class="special">
                <div class="img">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/joe-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                    <h2>Restaurante<br />
                    <span></span></h2>
                    <p align="justify">
                        Un Lugar lleno de magia y fusiones de sabores.<br>
                        ¡Visitanos! Aquí todo es ¡Siempre Delicioso!
                    </p>

                    <!-- Instagram | START -->
                    <!--
                    <div id="instagram">
                        <p>
                            @JoesGrilMargarita 
                            
                            <a href="https://www.instagram.com/joesgrilmargarita/" target="_blank"> <i class="fa fa-instagram"></i> Instagram</a> 
                        </p>
                      
                    </div>
                    -->
                    <!-- Instagram | END -->                    
                    
                    <a href="{{ route('restaurant') }}" class="button"><span data-hover="Ver más">Ver más</span></a>
                    

                </div>
            </div>                     
        	<div class="special">
            	<div class="img">
                	<div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/biothai-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                	<h2>BioThai<br />
                    <span>Center C.A.</span></h2>
                    <p align="justify">
                        
                        En BioThai Center somos un oasis ubicado en el corazón de Pampatar.<br>
                        Un espacio de bienestar y cuidado personal para hombres y mujeres, diseñado para mejorar tanto la salud física como emocional del cuerpo y olvidarte del estrés de la ciudad.

                    </p>
        
                    <!-- Instagram | START -->
                    <div id="instagram">
                        <p>
                            @Biothaispa 
                            
                            <a href="https://www.instagram.com/biothaispa/" target="_blank"> <i class="fa fa-instagram"></i> Instagram</a> 
                        </p>
                      
                    </div>
                    <!-- Instagram | END -->                            

                </div>
            </div>

            <div class="special">
                <div class="img">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/ciber-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                    <h2>Sala de Internet<br />
                    <span>HVC</span></h2>
                    <p align="justify">
                        Además de ofrecer a nuestros huéspedes el servicio de Wi-Fi, también contamos con un área exclusiva para acceder a internet las 24 horas del día durante su estancia en el hotel.<br>
                        Manténgase conectado con el mundo cuando usted lo necesite.
                    </p>                    

                </div>
            </div>            

        </div>
    </main>
    <!-- Content | END -->

@endsection