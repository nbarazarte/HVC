@extends('app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>RCI</span>
                <span class="tagline">Disfrute de las vacaciones de su vida</span></h1>
            </div>
        </div>

        @include('reservacion-rci')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->
        	<div id="slideshow">
                <div class="slider">
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-56.jpg') }}" width="1200" height="600" /></div>
                   
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

            <div id="content">
                <h2><strong>RCI</strong></h2>
                <p style="align: center"="">
                    RCI es una de las  empresas de Intercambios Vacacionales más grandes a nivel mundial.  RCI funciona como un Banco de espacios donde usted puede Depositar su semana vacacional, si no desea usarla en su Resort, siempre y cuando esté vigente en su año y al día con el Condominio, e Intercambiarla por otra a través de ellos con las mismas características de la suya. No se depositará semanas de años anteriores y una vez depositada su semana no se podrá reversar.
                </p>

                <p style="align: center"="">
                    Su afiliación a RCI a través de su Resort Hippocampus Vacation Club será hasta dos años gratuitos por la compra de su contrato. Luego de pagar todos sus gastos administrativos se le enviara por correo electrónico en un lapso no mayor de 45 días hábiles su código de afiliación para disfrutar de los beneficios de ser miembro de tan prestigiosa cadena de intercambio.
                </p>

                <p style="align: center"="">
                    De esta manera usted podrá hacer Intercambios Vacacionales con otros  Hoteles y Resort afiliados a RCI dentro y fuera de Venezuela, en la misma temporada según la disponibilidad y capacidad que usted tiene en Hippocampus, mediante el pago previo a RCI de una Cuota de Intercambio. La tasa de intercambio se pagara en bolívares a RCI si el intercambio es nacional y en caso de hacer intercambio internacional la tasa será pagada en dólares.
                </p>

                <p style="align: center"="">                   
                    El Certificado de Semana Bono entregado al momento de la compra tiene validez de un año a partir de la afiliación a RCI y tiene restricciones de temporada y destinos, los cuales están descritos al reverso del mismo. La semana bono no genera pago de cuota de condominio ya que es una semana adicional, sin embargo para realizar el intercambio debe cancelar la cuota indicada por RCI para su uso.
                </p>

                <p style="align: center"="">
                    La solicitud de depósito de semana la podrá solicitar desde los 01 de octubre de cada año cuando realice el pago de su condominio y estar al día con todas las obligaciones del contrato. Recuerde  que  al  realizar  su  solicitud  con  anticipación  son  mayores  las posibilidades  de contar con las opciones vacacionales más solicitadas dependiendo su destino a visitar.
                </p>

                <p style="align: center"="">
                    Cuando usted decida hacer el depósito de su semana deberá solicitarlo  a través del correo: <strong>atencionalsocio@hippocampus.com.ve.</strong><br> Para mayor información puede contactarnos a través de nuestro número Master <strong>+58 (295) 331.13.50.</strong>
    
                    <br> De igual modo para saber más sobre la cadena de Intercambio RCI (Resort Condominios International, se pueden comunicar únicamente por teléfono fijo CANTV a través del siguiente teléfono <strong>0800-1003853.</strong>
                </p>
            
                <h2 style="margin:0;"><strong>+58 (295) 331.13.50</strong></h2>
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