@extends('app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Contáctanos</span>
                <span class="tagline">Innovando para ti</span></h1>
            </div>
        </div>
    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
            <!-- Contact Form | START -->
        	<div id="contact">
            	<img src="{{ asset('base-hotel/preview/images/contacto.jpg') }}" width="1200" height="400" alt="" />
                                <form name="contact" action="contact.php.html" method="post">
                	                    <div class="col">
                        <div class="field mandatory"><input name="contact-name" type="text" placeholder="Your Name" id="contact-name" value="" /></div>
                        <div class="field mandatory"><input name="contact-email" type="text" placeholder="Email Address" id="contact-email" value="" /></div>
                        <div class="field mandatory"><input name="contact-phone" type="text" placeholder="Phone Number" id="contact-phone" value="" /></div>
                    </div>
                    <div class="col">
                        <div class="field calendar"><input name="contact-arrival" type="text" placeholder="Arrival Date" id="contact-arrival" value="" readonly /><i class="fa fa-calendar-o"></i></div>
                        <div class="field calendar"><input name="contact-departure" type="text" placeholder="Departure Date" id="contact-departure" value="" readonly /><i class="fa fa-calendar-o"></i></div>
                        <div class="select">
                        	<select name="contact-rooms" id="contact-rooms" class="infants">
                                <option  value="1">1 Room</option>
                                <option  value="2" >2 Rooms</option>
                                <option  value="3" >3 Rooms</option>
                            </select>
                            <select name="contact-adults" id="contact-adults" class="adults">
                                <option  value="1" >1 Adult</option>
                                <option  value="2">2 Adults</option>
                                <option  value="3" >3 Adults</option>
                                <option  value="4" >4 Adults</option>
                                <option  value="5" >5 Adults</option>
                            </select>
                            <select name="contact-children" id="contact-children" class="children">
                                <option selected value="0">0 Children</option>
                                <option  value="1" >1 Child</option>
                                <option  value="2" >2 Children</option>
                                <option  value="3" >3 Children</option>
                                <option  value="4" >4 Children</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="field"><textarea name="contact-message" placeholder="Message" id="contact-message"></textarea></div>
                    </div>
                    <!-- Honeypot (for bot spam) --><input name="contact-email2" type="text" placeholder="Email Address" autocomplete="false" class="honeypot" value="" />
                    <button name="send" value="sendform"><span data-hover="Enviar Reservación">Enviar Reservación</span></button>
                </form>
            </div>
            <!-- Contact Form | END -->

            <h2 style="margin:0;"><strong>+58 (295) 331.13.23</strong></h2>
            <p style="margin:0;">
                <a href="mailto:reservaciones1@hippocampus.com.ve">reservaciones1@hippocampus.com.ve</a><br />
                <i class="fa fa-map-marker"></i>  Calle El Cristo, edifc. Complejo Hippocampus, sector La Caranta.<br />Isla de Margarita. Venezuela            
            </p>        

            <p>

                <h2 style="margin:0;"><strong>Frente a la Hermosa Bahía de Pampatar</strong></h2>

            </p>

            <p style="margin:0;">
              
                Nuestra ubicación privilegiada nos situa a solo cinco minutos del casco histórico de Pampatar, donde se puede disfrutar de diversas atracciones turísticas como el Castillo San Carlos de Borromeo, la iglesia del Cristo del Buen Viaje y algunas playas. Además, la ciudad de pampatar cuenta con una amplia zona gastronómica para todos los gustos, así como bares, discotecas y restaurantes muy cercanos a nuestras instalaciones.
            </p>

            <p style="margin:0;">
                Nos encontramos a 10 minutos de los principales centros comerciales de la isla y aproximadamente a 50 y 60 minutos del aeropuerto y terminal de ferry, respectivamente.

            </p>
        </div>
        <!-- Google Map | START -->
        <script>
			function initialize() {
			
            var latlng = new google.maps.LatLng(10.997358,-63.7885197,17);
           
			var myOptions = {
			zoom: 16,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false
			};
			var map = new google.maps.Map(document.getElementById('googlemap'), myOptions);
			var marker = new google.maps.Marker({
			position: latlng, 
			map: map,
			//icon: "base-hotel/system/images/point.png"
            icon: none
			});
			}
			function loadScript() {
			var script = document.createElement('script');
			script.type = 'text/javascript';
			//script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&'+'callback=initialize';
            script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDjmZLW0uvX7_G6SivOVcvg9wW9X3PJ9QU&callback=initialize';
			document.body.appendChild(script);
			}
			window.onload = loadScript;
		</script>
    	<div id="map">
            <div id="googlemap"></div>
        </div>
        <!-- Google Map | END -->
    </main>
    <!-- Content | END -->

@endsection