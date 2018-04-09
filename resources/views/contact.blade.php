@extends('app')

@section('content')
    
    <?php

        if($_POST){

            $arrival = $datos['arrival'];
            $departure = $datos['departure'];
            $habitacion = $datos['habitacion'];
            $adultos = $datos['adultos'];
            $ninos = $datos['ninos'];

        }else{

            $arrival = "";
            $departure = "";
            $habitacion = "";
            $adultos = "";
            $ninos = "";

        }

    ?>

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

                    @include('mensajes')
            
                    {!! Form::open(['route' => 'contact', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false', 'onsubmit' => 'diferencia()']) !!} 

                	<div class="col">
                        <div class="field mandatory"><input name="contact-name" type="text" placeholder="Nombre y Apellido" id="contact-name" value="" required/></div>
                        <div class="field mandatory"><input name="contact-email" type="email" placeholder="Correo Electrónico" id="contact-email" value="" required/></div>
                        <div class="field mandatory"><input name="contact-phone" type="text" placeholder="N° de Teléfono" id="contact-phone" value="" required/></div>
                    </div>
                    <div class="col">
                        <div class="field calendar"><input name="contact-arrival" type="text" placeholder="Fecha de Llegada" id="contact-arrival" required value="<?=$arrival?>"  /><i class="fa fa-calendar-o"></i></div>
                        <div class="field calendar"><input name="contact-departure" type="text" placeholder="Fecha de Salida" id="contact-departure" required value="<?=$departure?>"  /><i class="fa fa-calendar-o"></i></div>
                        <div class="select">

                        	<select name="contact-habitacion" id="contact-habitacion" class="infants" required>

                                <option value="">Tipo Hab.</option>

                                @foreach ($habitaciones as $hab)

                                    <option value="{{ $hab->str_habitacion }}" @if($hab->str_habitacion == $habitacion) selected="selected" @endif >{{ $hab->str_habitacion }}</option>

                                @endforeach

                            </select>

                            <select name="contact-adultos" id="contact-adultos" class="adults" required>

                                <option value="">Adultos</option>
                                
                                <?php

                                    for ($i=1; $i < 10; $i++) { ?>

                                        <option value="{{ $i }}" @if($i == $adultos) selected="selected" @endif >{{ $i }} @if($i > 1) Adultos @else Adulto @endif</option>
                            
                                <?php }?>
                    
                            </select>

                            <select name="contact-ninos" id="contact-ninos" class="children" required>

                                <option value="">Niños</option>                              

                                <?php

                                    for ($i=0; $i < 3; $i++) { ?>
                                    
                                        <option value="{{ $i }}" @if($i == $ninos) selected="selected" @endif >{{ $i }} @if($i > 1) Niños @else Niño @endif</option>

                                <?php }?>

                            </select>

                        </div>
                    </div>
                    <div class="col">
                        <input type="hidden" id="cant-dias" name="cant-dias" value="">

                        <input type="hidden" id="contact-llegada" name="contact-llegada" value="">
                        <input type="hidden" id="contact-salida" name="contact-salida" value="">

                        <div class="field"><textarea name="contact-message" placeholder="Mensaje" id="contact-message"></textarea></div>
                    </div>
                    <!-- Honeypot (for bot spam) --><input name="contact-email2" type="text" placeholder="Email Address" autocomplete="false" class="honeypot" value="" />

                    

                    <button name="send" value="sendform"><span data-hover="Buscar Disponibilidad">Buscar Disponibilidad</span></button>


                    
                   {!! csrf_field() !!} 

                {!! Form::close() !!}

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

            <p style="text-align: justify;">
              
                Nuestra ubicación privilegiada nos situa a solo cinco minutos del casco histórico de Pampatar, donde se puede disfrutar de diversas atracciones turísticas como el Castillo San Carlos de Borromeo, la iglesia del Cristo del Buen Viaje y algunas playas. Además, la ciudad de pampatar cuenta con una amplia zona gastronómica para todos los gustos, así como bares, discotecas y restaurantes muy cercanos a nuestras instalaciones.
            <br>
                Nos encontramos a 10 minutos de los principales centros comerciales de la isla y aproximadamente a 50 y 60 minutos del aeropuerto y terminal de ferry, respectivamente.

            </p>
        </div>
        <!-- Google Map | START -->
        <script>

            function diferencia(){

                var llegada = $("#contact-arrival").val();
                var salida = $("#contact-departure").val();
                var date1 = new Date(llegada);
                var date2 = new Date(salida);
                var timeDiff = Math.abs(date2.getTime() - date1.getTime());
                var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 

                if(diffDays == 0){

                    var diffDays = 1;

                }

                $("#cant-dias").val(diffDays);

                var months = ["01", "02", "03", "04", "05", "06", "07", "08","09", "10", "11", "12"];

                var fe = new Date(llegada);
                var fs = new Date(salida);

                var namedMonth1 = months[fe.getMonth()];
                var namedMonth2 = months[fs.getMonth()];

                if (fe.getDate() <10) {

                    var fecha_entrada = "0"+ fe.getDate();

                }else{

                    var fecha_entrada = fe.getDate();
                }

                if (fs.getDate() <10) {

                    var fecha_salida = "0"+ fs.getDate();

                }else{

                    var fecha_salida = fs.getDate();

                }

                $("#contact-llegada").val(fe.getFullYear()+"-"+namedMonth1+"-"+ fecha_entrada);
                $("#contact-salida").val(fs.getFullYear()+"-"+namedMonth2+"-"+ fecha_salida);

            }

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
			icon: "base-hotel/system/images/point.png"
            //icon: none
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