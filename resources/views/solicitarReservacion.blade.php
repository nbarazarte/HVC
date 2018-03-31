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

                        {!! Form::open(['route' => 'reservar', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

                            <table style="text-align: justify;">

                                <tr>
                                    <td>
                                        <b>Nombre:</b><br>
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
                                <tr>
                                    <td colspan="5"><b>Comentarios:</b> <br>
                                        {{ $persona['contact-message'] }}        
                                    </td>                                    
                                </tr>

                            </table>

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


@endsection
