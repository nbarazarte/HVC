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



                <table>
                    
                    <tr>
                        <td>
                            
                            <table style="text-align: justify;">
                                <tr>
                                    <th>Datos de la Reservación</th>
                                </tr>
                                <tr>
                                    <td><b>Nombre y Apellido:</b> {{ $_POST['contact-name'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Correo Electrónico:</b> {{ $_POST['contact-email'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>N° Teléfono:</b> {{ $_POST['contact-phone'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Llegada:</b> {{ $_POST['contact-arrival'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Salida:</b> {{ $_POST['contact-departure'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Habitación:</b> {{ $_POST['contact-habitacion'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Adultos:</b> {{ $_POST['contact-adultos'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Niños:</b> {{ $_POST['contact-ninos'] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Mensaje:</b>  {{ $_POST['contact-message'] }}</td>
                                </tr>                                                                                                
                            </table>

                        </td>

                        <td>
                            
                            {!! Form::open(['route' => 'pago', 'method'=>'PUT', 'id' => 'myCCForm', 'name' => 'myCCForm', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

                            <input id="token" name="token" type="hidden" value="">
                            <div>
                                <label>
                                    <span>Card Number</span>
                                </label>
                                <div class="field mandatory">
                                    <input id="ccNo" type="text" size="20" value="" autocomplete="off" required />
                                </div>
                            </div>
                            <div>
                                <label>
                                    <span>Expiration Date (MM/YYYY)</span>
                                </label>
                                <input type="text" size="2" id="expMonth" required />
                                <span> / </span>
                                <input type="text" size="2" id="expYear" required />
                            </div>
                            <div>
                                <label>
                                    <span>CVC</span>
                                </label>
                                <input id="cvv" size="4" type="text" value="" autocomplete="off" required />
                            </div>
                            <input type="submit" value="Submit Payment">

                            {!! csrf_field() !!} 

                        {!! Form::close() !!}                            

                        </td>

                    </tr>

                </table>







                    <hr>
                                

           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection