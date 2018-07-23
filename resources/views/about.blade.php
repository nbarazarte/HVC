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

        @include('reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->
        	<div id="slideshow">
                <div class="slider">
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/Reinauguracion Hippocampus (09).jpg') }}" width="1200" height="600" /></div>                    

                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div id="content">
                <h2><strong>Atención de Servicio</strong> y Calidad</h2>
                <p style="text-align: justify;">
                    Hippocampus Vacation Club, C.A. desde 1992 se convirtió en una organización de servicios turísticos (Hotelero & Tiempo Compartido), con una excelente ubicación en la Isla de Margarita y capacidad de dar respuestas de calidad a sus clientes. Con más de <?=$ano = date('Y') - 1992 ?> años de experiencia y grandes aprendizajes en el área, nuestro norte es mantener a nuestra organización dentro de la preferencia del turista nacional e internacional, enfocando y orientando nuestros esfuerzos a la plena satisfacción de las expectativas que cada uno de nuestros usuarios al momento de planificar sus vacaciones y elegir como destino la Isla de Margarita.
                </p>

                <p style="text-align: justify;">
                    Nuestra misión es ser la opción de preferencia para las familias en el momento de planificar sus vacaciones en la Isla de Margarita, caracterizada por nuestra orientación a la satisfacción de las expectativas de nuestros clientes, brindándoles buen servicio y atención de calidad.
                </p>

                <p style="text-align: justify;">
                    Tenemos la visión de convertirnos en la mejor organización turística de la Isla de Margarita, sinónimo y garantía de vacaciones inolvidables y gratas experiencias enmarcadas en el acogedor ambiente de sus instalaciones y servicios, dirigidos a la plena satisfacción.
                </p>

                <p style="text-align: justify;">                    
                    Con la mejor ubicación frente a la bahía de Pampatar y a pocos minutos de los centros comerciales y a la ciudad de Porlamar <strong>HIPPOCAMPUS VACATION CLUB</strong> cuenta con las siguientes facilidades a sus huéspedes:
                </p>

                <ul class="tags">
                    <li>Habitaciones Confortables</li>
                    <li>Caja de Seguridad</li>
                    <li>Servicio de WI-FI</li>
                    <li>Desayuno Tipo Buffet</li>
                    <li>2 Piscinas Panorámicas + Jacuzzi</li>
                    <li>Tumbonas y Sombrillas</li>
                    <li>Terraza Panorámica</li>                    
                    <li>Restaurante</li>
                    <li>Actividades de Entretenimiento</li>
                    <li>Salón para Reuniones</li>
                    <li>Línea de Taxi</li>
                    <li>Spa</li>
                    <li>Minimarket</li>
                    <li>Salón de Internet</li>
                    <li>Estacionamiento Techado</li>
                </ul>
                <!-- Stats | START -->
                <section id="stats">
                	<h3>Last Month at Base Hotel</h3>
                    <figure>
                    	<strong>266</strong><br />
                        <span>Guests Stayed</span>
                    </figure>
                    <figure>
                    	<strong>478</strong><br />
                        <span>Meals Served</span>
                    </figure>
                    <figure>
                    	<strong>93</strong><br />
                        <span>Tours Booked</span>
                    </figure>
                    <figure>
                    	<strong>122</strong><br />
                        <span>Spa Treatments</span>
                    </figure>
                </section>
                <!-- Stats | END -->
            </div>
        </div>
        <!-- Instagram | START -->
        <div id="instagram">
            <p>
                @HippocampusVC 
                <a href="https://twitter.com/HippocampusVC" target="_blank"> <i class="fa fa-twitter"></i> Twitter</a> 
                <a href="https://www.instagram.com/hippocampusvc/" target="_blank"> <i class="fa fa-instagram"></i> Instagram</a> 
            </p>
            <p>
                Hippocampus Vacation Club 
                <a href="https://es-la.facebook.com/Hippocampus-Vacation-Club-210418352330415/" target="_blank"> <i class="fa fa-facebook"></i> Facebook</a> 
            </p>            
        </div>
        <!-- Instagram | END -->

        <!-- Feature List | START -->
        <section id="featurelist">
        	<div class="centre">
            	<h2>Hippocampus Vacation Club</h2>
                
                <!-- Video | START -->
                <div id="video">
                    <div class="embed-container"><iframe src="http://player.vimeo.com/video/258211037?title=0&portrait=0" width="1200" height="675" allowfullscreen></iframe></div>
                </div>
                <!-- Video | END -->

            </div>
        </section>
        <!-- Feature List | END -->

    </main>
    <!-- Content | END -->

@endsection