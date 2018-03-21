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

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->

            <div id="content">

                <h2><strong>Realizar</strong> Pago</h2>

                    <?php

                        $datos = Session::get('datos');

                        //dd($datos[0]);

                        foreach ($datos[0] as $dato => $valor){

                            $persona[$dato] = $valor;

                        }

                    ?>


                            <table style="text-align: justify;">
                                <tr>
                                    <th>Datos de la Reservación</th>
                                </tr>
                                <tr>
                                    <td><b>Nombre y Apellido:</b> {{ $persona['contact-name'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Correo Electrónico:</b> {{ $persona['contact-email'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>N° Teléfono:</b> {{ $persona['contact-phone'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Llegada:</b> {{ $persona['contact-arrival'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Salida:</b> {{ $persona['contact-departure'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Habitación:</b> {{ $persona['contact-habitacion'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Adultos:</b> {{ $persona['contact-adultos'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Niños:</b> {{ $persona['contact-ninos'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Mensaje:</b>  {{ $persona['contact-message'] }}</td>
                                </tr>                                                                                                
                            </table>

                    <hr>





<form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>

    <input type='text' name='email' value="{{ $persona['contact-email'] }}" />
    
    <input type='text' name='phone' value="{{ $persona['contact-phone'] }}" />

    <input type='text' name='li_0_name' value="{{ $persona['contact-habitacion'] }}" />

    <input type='text' name='li_0_price' value='25.99' />


    <input type='text' name='card_holder_name' value='' placeholder="Nombre Tarjeta de Crédito" />

    <input type='text' name='street_address' value='123 Test Address' />
    <input type='text' name='street_address2' value='Suite 200' />
    <input type='text' name='city' value='Columbus' />
    <input type='text' name='state' value='OH' />
    <input type='text' name='zip' value='43228' />
    <input type='text' name='country' value='USA' />

    


<input type='hidden' name='sid' value='901375053' />
<input type='hidden' name='mode' value='2CO' />
<input type='hidden' name='li_0_type' value='product' />





<input name='submit' type='submit' value='Pagar Habitación' />
</form>








                                

           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection
