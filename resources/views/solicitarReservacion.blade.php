@extends('app')

@section('content')

    @foreach ($datos[0][0]['datos'] as $dato => $valor)

    <?php

        $persona[$dato] = $valor; 
        
    ?>    

    @endforeach

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Solicitar Reservación</span>
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

            <div id="content">

                <h2><strong>Habitación</strong> {{ $persona['contact-habitacion'] }}</h2>

                    @include('mensajes')    

                <p style="text-align: justify;">
                    Estimado Cliente: <br>
                    En <strong>HIPPOCAMPUS VACATION CLUB</strong> nos sentimos complacidos por su futura visita y esperamos que su estadía con nosotros sea placentera e inolvidable.
                </p>

                <p style="text-align: justify;">
                    A continuación le enviaremos por correo electrónico la cotización de la reserva solicitada. <br>
                    La reserva incluye alojamiento y desayuno, para el número de personas indicadas en la cotización.
                </p>


                        {!! Form::open(['route' => 'reservar', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

                            <table id="myTable" style="text-align: justify;">

                                <tr style="text-align: center;">
                                    <th colspan="5">
                                        Datos de la reservación
                                    </th>
                                </tr>

                                <tr>
                                    <td>
                                        <b>Nombre y Apellido:</b><br>
                                        {{ $persona['contact-name'] }}
                                    </td>
                                    <td>
                                        <b>Correo Electrónico:</b><br>
                                        {{ $persona['contact-email'] }}
                                    </td>

                                    <td>
                                        <b>Teléfono:</b><br>
                                        {{ $persona['contact-phone'] }}

                                    </td>
                                    <td>
                                        <b>Precio:</b><br>
                                        Bs. {{ number_format($persona['contact-precioHabitacion'], 2, ',', '.')   }}
                                    </td>

                                    <td>
                                        <b>Días:</b><br>
                                        {{ $persona['cant-dias'] }}                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Total:</b><br>
                                        Bs. {{ number_format($persona['contact-totalPagar'], 2, ',', '.')   }}
                                    </td>
     
                                    <td>
                                        <b>Llegada:</b><br>
                                        {{ $persona['contact-arrival'] }}
                                    </td>

                                    <td>
                                        <b>Salida:</b><br>
                                        {{ $persona['contact-departure'] }}
                                    </td>                                    

                                    <td>
                                        <b>Adulto(s):</b><br>
                                        {{ $persona['contact-adultos'] }}
                                    </td>

                                    <td>
                                        <b>Niño(s):</b><br>
                                        {{ $persona['contact-ninos'] }}
                                    </td>
   
                                </tr>

                                <tr style="text-align: center;">
                                    <th colspan="5">
                                        Datos de los Acompañantes
                                    </th>
                                </tr>

                                <tr>
                                    <td>
                                        <b>Nombre y Apellido:</b><br>
                                    </td>
                                    <td>
                                        <b>Cédula/Pasaporte:</b><br>
                                    </td>
                                    <td>
                                        <b>Adulto/Niño</b>
                                    </td>
                                    <td>
                                       <b>País</b>
                                    </td>

                                    <td>
                                        <input class="button" type="button" onclick="myFunction()" name="" value="Añadir">
                                    </td>
                                </tr> 

                                <tr>
                                    <td colspan="5"><b>Comentarios:</b> <br>
                                        {{ $persona['contact-message'] }}        
                                    </td>                                    
                                </tr>

                            </table>
     

                <script>
                    function myFunction() {
                        var table = document.getElementById("myTable");
                        var row = table.insertRow(5);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                        
                        cell1.innerHTML = '<input style="width: 100%; height: 45px; padding: 0 15px; letter-spacing: .4px; border: none; box-sizing: border-box;font: 14px/20px \'Open Sans\', sans-serif; z-index: 2;position: relative;"  name="acompanante-name[]" type="text" placeholder="Nombre y Apellido" id="acompanante-name" value="" required/>';
                        cell2.innerHTML = '<input style="width: 100%; height: 45px; padding: 0 15px; letter-spacing: .4px; border: none; box-sizing: border-box;font: 14px/20px \'Open Sans\', sans-serif; z-index: 2;position: relative;" name="acompanante-cedula[]" type="number" placeholder="Cédula/Pasaporte" id="acompanante-cedula" value="" required/>';
                        cell3.innerHTML= '<select name="acompanante-tipo[]" id="acompanante-tipo" style="width: 100%; height: 45px; padding: 0 15px; letter-spacing: .4px; border: none; box-sizing: border-box;font: 14px/20px \'Open Sans\', sans-serif; z-index: 2;position: relative;" required><option value="">Seleccione</option>@foreach ($tipoPersona as $tipo)<option value="{{ $tipo->id}}">{{ $tipo->str_descripcion}}</option>@endforeach</select>';
                        cell4.innerHTML= '<select name="acompanante-pais[]" id="acompanante-pais" style="width: 100%; height: 45px; padding: 0 15px; letter-spacing: .4px; border: none; box-sizing: border-box;font: 14px/20px \'Open Sans\', sans-serif; z-index: 2;position: relative;" required><option value="">Seleccione</option> @foreach ($paises as $pais)<option value="{{ $pais->id}}">{{ $pais->str_paises}}</option>@endforeach</select>';
                        cell5.innerHTML= '<input class="button" type="button" onclick="deleteRow(this)" name="" value="Quitar">';

                    }

                    function deleteRow(r) {
                        var i = r.parentNode.parentNode.rowIndex;
                        document.getElementById("myTable").deleteRow(i);
                    }                   
                </script>                               

                        <button name="send" value="sendform">
                            <a class="button"><span data-hover="Hacer la Reservación">Hacer la Reservación</span></a> 
                        </button>    

                         
                            <input type="hidden" name="contact-totalPagar" readonly value="{{ $persona['contact-totalPagar'] }}">                     

                            <input type="hidden" name="contact-name" readonly value="{{ $persona['contact-name'] }}">                                        
                            <input type="hidden" name="contact-email" readonly value="{{ $persona['contact-email'] }}">
                            <input type="hidden" name="contact-phone" readonly value="{{ $persona['contact-phone'] }}">                                        
                            <input type="hidden" name="contact-habitacion" readonly value="{{ $persona['contact-habitacion'] }}">
                            <input type="hidden" name="contact-idHabitacion"  value="{{ $persona['contact-idHabitacion'] }}">                                    
                            <input type="hidden" name="contact-precioHabitacion" readonly value="{{ $persona['contact-precioHabitacion'] }}">
                            <input type="hidden" name="contact-adultos" readonly value="{{ $persona['contact-adultos'] }}">
                            <input type="hidden" name="contact-ninos" readonly value="{{ $persona['contact-ninos'] }}">
                            <input type="hidden" name="contact-arrival"  value="{{ $persona['contact-arrival'] }}">
                            <input type="hidden" name="contact-llegada"  value="{{ $persona['contact-llegada'] }}"> 
                            <input type="hidden" name="contact-departure"  value="{{ $persona['contact-departure'] }}">
                            <input type="hidden" name="contact-salida"  value="{{ $persona['contact-salida'] }}">
                            <input type="hidden" name="cant-dias" readonly value="{{ $persona['cant-dias'] }}">
                            <input type="hidden" name="contact-message" readonly value="{{ $persona['contact-message'] }}">

                            {!! csrf_field() !!} 

                        {!! Form::close() !!}

            </div>
        </div>

    </main>
    <!-- Content | END -->



   <!-- Content | START -->
    <main>
        <div class="centre">
            <!-- Contact Form | START -->
            <div id="contact">

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


    </main>
    <!-- Content | END -->

@endsection
