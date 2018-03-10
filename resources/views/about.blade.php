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
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-56.jpg') }}" width="1200" height="600" /></div>
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-21.jpg') }}" width="1200" height="600" /></div>
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div id="content">
                <h2><strong>Atención de Servicio</strong> y Calidad</h2>
                <p>
                    Hippocampus Vacation Club, C.A. desde 1992 se convirtió en una organización de servicios turísticos (Hotelero & Tiempo Compartido), con una excelente ubicación en la Isla de Margarita y capacidad de dar respuestas de calidad a sus clientes. Con más de 22 años de experiencia y grandes aprendizajes en el área, nuestro norte es mantener a nuestra organización dentro de la preferencia del turista nacional e internacional, enfocando y orientando nuestros esfuerzos a la plena satisfacción de las expectativas que cada uno de nuestros usuarios al momento de planificar sus vacaciones y elegir como destino la Isla de Margarita.
                </p>

                <p>
                    Nuestra misión es ser la opción de preferencia para las familias en el momento de planificar sus vacaciones en la Isla de Margarita, caracterizada por nuestra orientación a la satisfacción de las expectativas de nuestros clientes, brindándoles buen servicio y atención de calidad.
                </p>

                <p>
                    Tenemos la visión de convertirnos en la mejor organización turística de la Isla de Margarita, sinónimo y garantía de vacaciones inolvidables y gratas experiencias enmarcadas en el acogedor ambiente de sus instalaciones y servicios, dirigidos a la plena satisfacción.
                </p>

                <p>                    
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
                    <li>Restaurante Guanabana</li>
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
                <a href="https://twitter.com/HippocampusVC"> <i class="fa fa-twitter"></i> Twitter</a> 
                <a href="https://www.instagram.com/hippocampusvc/"> <i class="fa fa-instagram"></i> Instagram</a> 
            </p>
            <p>
                Hippocampus Vacation Club 
                <a href="https://es-la.facebook.com/Hippocampus-Vacation-Club-210418352330415/"> <i class="fa fa-facebook"></i> Facebook</a> 
            </p>            
        </div>
        <!-- Instagram | END -->
        <!-- Feature List | START -->
        <section id="featurelist">
        	<div class="centre">
            	<h2>Message from the Manager</h2>
                <div class="featurelist">
                    <div class="feature">
                        <img alt="" src="{{ asset('base-hotel/system/images/logohvc.png') }}" width="120" height="120" class="thumb" />
                        <div class="details">
                            <h3>John Smith</h3>
                            <p>Base Hotel General Manager<br /><br />
                            <a href="about.html#"><i class="fa fa-external-link"></i> Contact John</a><br />
                            <a href="about.html#"><i class="fa fa-external-link"></i> Linked In</a></p>
                        </div>
                        <div class="copy">
                        	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh.</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat.</p>
                            <p><img alt="" src="{{ asset('base-hotel/preview/images/signature.png') }}" /></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature List | END -->
    </main>
    <!-- Content | END -->

@endsection