@extends('en.app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Reservation Data</span>
                <span class="tagline">Innovando para ti</span></h1>
            </div>
        </div>

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->

            <div id="content">

                <h2><strong>Datos</strong> del huésped</h2>

                    <?php

                        $datos = Session::get('datos');

                        $flag = "false";

                        if(!empty($datos)) {

                            $flag = "true";

                            //dd($datos[0]);

                            foreach ($datos[0] as $dato => $valor){

                                $persona[$dato] = $valor;

                            }
                    }

                    ?>

                        @if($flag == "true")

                            <table style="text-align: justify;">

                                <tr>
                                    <td><b>Huésped:</b> {{ $persona['contact-name'] }}</td>
                                    <td><b>Correo Electrónico:</b> {{ $persona['contact-email'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>N° Teléfono:</b> {{ $persona['contact-phone'] }}</td>
                                    <td><b>Llegada:</b> {{ $persona['contact-arrival'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Habitación:</b> {{ $persona['contact-habitacion'] }}</td>
                                    <td><b>Salida:</b> {{ $persona['contact-departure'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Niños:</b> {{ $persona['contact-ninos'] }}</td>
                                    <td><b>Adultos:</b> {{ $persona['contact-adultos'] }}</td>
                                </tr>

                                <tr>
                                    <td colspan="2"><b>Comentarios:</b>  {{ $persona['contact-message'] }}</td>
                                </tr>

                            </table>

                        <div id="content">

                            <h2><strong>Datos</strong> del pago</h2>

                            <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>

                                <table style="text-align: justify;">                                  

                                    <tr>
                                        <td><b>Nombre Impreso en la TDC:</b></td>

                                        <td>
                                            <input type='text' name='card_holder_name' value='' placeholder="Neil E Barazarte A" required />
                                        </td>
                                        <td><b>Dirección 1:</b></td>
                                        <td>
                                            <input type='text' name='street_address' placeholder="123 Test Address" value='' required />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Ciudad:</b></td>
                                        <td>
                                            <input type='text' name='city' placeholder='Barquisimeto' value="" required />
                                        </td>
                                        <td><b>Dirección 2:</b></td>
                                        <td>
                                            <input type='text' name='street_address2' placeholder="Suite 200" value='' required />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Estado/Provincia:</b></td>
                                        <td>
                                            <input type='text' name='state' placeholder="Lara" value='' required />
                                        </td>
                                        <td><b>País:</b></td>
                                        <td>
                                            <input type='text' name='country' value='USA' required />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Código Postal:</b></td>
                                        <td>
                                            <input type='text' name='zip' placeholder="43228" value='' required />
                                        </td>
                                        <td><b>Total a Pagar:</b></td>
                                        <td>
                                            <b style="font-size: 18px">$25.99</b>
                                            <input type='hidden' name='li_0_price' value='25.99' />
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

                        </div>
 
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
