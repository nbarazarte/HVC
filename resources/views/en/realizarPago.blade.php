@extends('en.app')

@section('content')

<?php

    
    //dd($datos);die();

    //$datos = Session::get('datos');

    //dd($datos[0]);

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
                <h1><span>Make Payment</span>
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

                @if (Auth::user())

                    @if($flag == "true")

                        <table style="text-align: justify;">

                            <tr>
                                <td>
                                    <b>Name:</b>
                                </td>
                                <td>
                                    {{ $persona['contact-name'] }}
                                </td>
                                <td>
                                    <b>Email:</b>
                                </td>
                                <td>
                                    {{ $persona['contact-email'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Phone Number:</b>
                                </td>
                                <td>
                                    {{ $persona['contact-phone'] }}
                                </td>
                                <td>
                                    <b>Accommodation:</b>
                                </td>
                                <td>
                                    {{ $persona['contact-habitacion'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Children:</b>
                                </td>
                                <td>
                                    {{ $persona['contact-ninos'] }}
                                </td>
                                <td>
                                    <b>Price of the Room:</b>
                                </td>
                                <td>
                                    Bs. {{ number_format($persona['contact-precioHabitacion'], 2, ',', '.')   }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Adults:</b>
                                </td>
                                <td>
                                    {{ $persona['contact-adultos'] }}
                                </td>
                                <td>
                                    <b>Arrival Date:</b>
                                </td>
                                <td>
                                    {{ $persona['contact-arrival'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Total Days:</b>
                                </td>
                                <td>                                    
                                    {{ $persona['cant_dias'] }}
                                </td>
                                <td>
                                    <b>Departure Date:</b>
                                </td>
                                <td>
                                     {{ $persona['contact-departure'] }}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>Message:</b>  {{ $persona['contact-message'] }}</td>
                            </tr>

                        </table>

                        <h2><strong>Payment</strong> Details</h2>

                        <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>

                            <table style="text-align: justify;">                                  

                                <tr>
                                    <td>
                                        <b>Name Printed on the Credit Card:</b></td>
                                    <td>
                                        <input type='text' name='card_holder_name' value='' placeholder="Neil E Barazarte A" required />
                                    </td>
                                    <td>
                                        <b>Address 1:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='street_address' placeholder="123 Test Address" value='' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>City:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='city' placeholder='Barquisimeto' value="" required />
                                    </td>
                                    <td>
                                        <b>Address 2:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='street_address2' placeholder="Suite 200" value='' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>State / Province:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='state' placeholder="Lara" value='' required />
                                    </td>
                                    <td>
                                        <b>Country:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='country' value='USA' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Zip Code:</b></td>
                                    <td>
                                        <input type='text' name='zip' placeholder="43228" value='' required />
                                    </td>
                                    <td>
                                        <b>Total to Pay:</b>
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
                                <a class="button"><span data-hover="Make Payment">Make Payment</span></a> 
                            </button>

                        </form>

                    @else

                        <p style="">
                            
                            No hay datos<br>

                            <a href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>

                        </p>  

                    @endif

                @else

                        <p style="">
                            
                            Debe estar logueado<br>

                            <a href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>

                        </p>  


                @endif    

            
           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection
