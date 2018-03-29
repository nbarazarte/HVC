@extends('en.app')

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
                <h1><span>Request Reservation</span>
                <span class="tagline">Innovating for you</span></h1>
            </div>
        </div>

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->

            <div id="content">

                <h2><strong>Reservation</strong> Data</h2>


                        @include('mensajes')    

                        {!! Form::open(['route' => 'reservarIngles', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

                            <table style="text-align: justify;">

                                <tr>
                                    <td>
                                        <b>Name:</b>
                                    </td>
                                    <td>
                                        {{ $persona['contact-name'] }}
                                        <input type="hidden" name="contact-name" readonly value="{{ $persona['contact-name'] }}">
                                    </td>
                                    <td>
                                        <b>Email:</b>
                                    </td>
                                    <td>
                                        {{ $persona['contact-email'] }}
                                        <input type="hidden" name="contact-email" readonly value="{{ $persona['contact-email'] }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Phone Number:</b>
                                    </td>
                                    <td>
                                        {{ $persona['contact-phone'] }}
                                        <input type="hidden" name="contact-phone" readonly value="{{ $persona['contact-phone'] }}">
                                    </td>
                                    <td>
                                        <b>Accommodation:</b>
                                    </td>
                                    <td>
                                        {{ $persona['contact-habitacion'] }}
                                        <input type="hidden" name="contact-habitacion" readonly value="{{ $persona['contact-habitacion'] }}">
                                        <input type="hidden" name="contact-idHabitacion"  value="{{ $persona['contact-idHabitacion'] }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Children:</b>
                                    </td>
                                    <td>
                                        {{ $persona['contact-ninos'] }}
                                        <input type="hidden" name="contact-ninos" readonly value="{{ $persona['contact-ninos'] }}">
                                    </td>
                                    <td>
                                        <b>Price of the Room:</b>
                                    </td>
                                    <td>
                                        Bs. {{ number_format($persona['contact-precioHabitacion'], 2, ',', '.')   }}
                                        <input type="hidden" name="contact-precioHabitacion" readonly value="{{ $persona['contact-precioHabitacion'] }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Adults:</b>
                                    </td>
                                    <td>
                                        {{ $persona['contact-adultos'] }}
                                        <input type="hidden" name="contact-adultos" readonly value="{{ $persona['contact-adultos'] }}">
                                    </td>
                                    <td>
                                        <b>Arrival Date:</b>
                                    </td>
                                    <td>
                                        {{ $persona['contact-arrival'] }}
                                        <input type="hidden" name="contact-arrival"  value="{{ $persona['contact-arrival'] }}">
                                        <input type="hidden" name="contact-llegada"  value="{{ $persona['contact-llegada'] }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Total Days:</b>
                                    </td>
                                    <td>                                    
                                        {{ $persona['cant-dias'] }}
                                        <input type="hidden" name="cant-dias" readonly value="{{ $persona['cant-dias'] }}">
                                    </td>
                                    <td>
                                        <b>Departure Date:</b>
                                    </td>
                                    <td>
                                         {{ $persona['contact-departure'] }}
                                         <input type="hidden" name="contact-departure"  value="{{ $persona['contact-departure'] }}">
                                         <input type="hidden" name="contact-salida"  value="{{ $persona['contact-salida'] }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"><b>Message:</b>  {{ $persona['contact-message'] }}
                                        <input type="hidden" name="contact-message" readonly value="{{ $persona['contact-message'] }}">
                                    </td>                                    
                                </tr>

                            </table>

                        <button name="send" value="sendform">
                            <a class="button"><span data-hover="Make a Reservation">Make a Reservation</span></a> 
                        </button>                          



                            {!! csrf_field() !!} 

                        {!! Form::close() !!}






            
           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection
