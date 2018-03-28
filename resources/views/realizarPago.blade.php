@extends('app')

@section('content')

@foreach ($datos as $dato)

@endforeach



	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Pagar Reservación</span>
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

 
                        <h2><strong>Datos</strong> del pago</h2>

                        <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>

                            <table style="text-align: justify;">                                  

                                <tr>
                                    <td>
                                        <b>Nombre Impreso en la TDC:</b></td>
                                    <td>
                                        <input type='text' name='card_holder_name' value='' placeholder="Pedro Pérez" required />
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
                                            
                                            Bs. {{ number_format($dato->dbl_precio, 2, ',', '.')   }}

                                        </b>
                                        <input type='text' name='li_0_price' value="{{ $dato->dbl_precio }}" />
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                		<b>Correo Electrónico:</b>
                                	</td>

                                	<td>
                                		<input type='text' name='email' value="" placeholder="usuario@correo.com" required />
                                	</td>

                                	<td>
                                		<b>Teléfono:</b>
                                	</td>

                                	<td>
                                		<input type='text' name='phone' value="" placeholder="+584141112233" required />
                                	</td>
                                </tr>                                                                  

                            </table>

                            
                            
                            <input type='text' name='li_0_name' value="habitacion" />




                            <input type='hidden' name='sid' value='901375053' />
                            <input type='hidden' name='mode' value='2CO' />
                            <input type='hidden' name='li_0_type' value='product' />
                             
                            <button name="send" value="sendform">
                                <a class="button"><span data-hover="Realizar Pago">Realizar Pago</span></a> 
                            </button>

                        </form>





            
           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection
