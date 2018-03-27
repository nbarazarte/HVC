@extends('app')

@section('content')

<?php

    //dd($datos);die();

    $flag = "false";

    if(!empty($datos)) {

        $flag = "true";

        foreach ($datos as $dato => $valor){

            $persona[$dato] = $valor;

        }    
    }
?>
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

                    @if($flag == "true")

                        @include('mensajes')    

                        {!! Form::open(['route' => 'reservar', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

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

                    @if (Auth::user())

                        <button name="send" value="sendform">
                            <a class="button"><span data-hover="Make a Reservation">Make a Reservation</span></a> 
                        </button>
                         
                    @else

                        Ud debe estar logueado

                    @endif                            



                            {!! csrf_field() !!} 

                        {!! Form::close() !!}

                        <h2><strong>Datos</strong> del pago</h2>

                        <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>

                            <table style="text-align: justify;">                                  

                                <tr>
                                    <td>
                                        <b>Nombre Impreso en la TDC:</b></td>
                                    <td>
                                        <input type='text' name='card_holder_name' value='' placeholder="Neil E Barazarte A" required />
                                    </td>
                                    <td>
                                        <b>Dirección 1:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='street_address' placeholder="123 Test Address" value='' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Ciudad:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='city' placeholder='Barquisimeto' value="" required />
                                    </td>
                                    <td>
                                        <b>Dirección 2:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='street_address2' placeholder="Suite 200" value='' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Estado/Provincia:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='state' placeholder="Lara" value='' required />
                                    </td>
                                    <td>
                                        <b>País:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='country' value='USA' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Código Postal:</b></td>
                                    <td>
                                        <input type='text' name='zip' placeholder="43228" value='' required />
                                    </td>
                                    <td>
                                        <b>Total a Pagar:</b>
                                    </td>
                                    <td>
                                        <b style="font-size: 18px">
                                            
                                            Bs. {{ number_format($persona['contact-totalPagar'], 2, ',', '.')   }}

                                        </b>
                                        <input type='hidden' name='li_0_price' value="{{ $persona['contact-totalPagar'] }}" />
                                    </td>
                                </tr>

                            </table>

                            <input type='hidden' name='email' value="{{ $persona['contact-email'] }}" />
                            <input type='hidden' name='phone' value="{{ $persona['contact-phone'] }}" />
                            <input type='hidden' name='li_0_name' value="{{ $persona['contact-habitacion'] }}" />
                            <input type='hidden' name='sid' value='901375053' />
                            <input type='hidden' name='mode' value='2CO' />
                            <input type='hidden' name='li_0_type' value='product' />
                             
                            <button name="send" value="sendform">
                                <a class="button"><span data-hover="Realizar Pago">Realizar Pago</span></a> 
                            </button>

                        </form>

                    @else

                        <p style="">
                            
                            No hay datos<br>

                            <a href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>

                        </p>  

                    @endif



            
           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection
