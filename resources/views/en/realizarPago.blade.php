@extends('en.app')

@section('content')

@foreach ($datos as $dato)
    
   

@endforeach
    
    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Make Payment</span>
                <span class="tagline">Innovating for you</span></h1>
            </div>
        </div>

        @include('en.reservacion')  

    </header>
    <!-- Header | END -->
    <!-- Content | START -->

    <main>
        <div class="centre">
            <!-- Slideshow -->

            <div id="content">

                <h2><strong>Habitación</strong> {{ $dato->str_habitacion }}</h2>

                <p style="text-align: justify;">
                    Dear Customer: <br>
                    The reservation includes accommodation and breakfast, for the number of people indicated in the quote.
                </p> 

                            <table style="text-align: justify;">

                                <tr style="text-align: center;">
                                    <th colspan="5">
                                        Reservation Details
                                    </th>
                                </tr>                                   

                                <tr>
                                    <td>
                                        <b>Name:</b><br>
                                        {{ $dato->str_nombre }}
                                    </td>
                                    <td>
                                        <b>Email:</b><br>
                                        {{ $dato->str_email }}
                                    </td>

                                    <td>
                                        <b>Phone Number:</b><br>
                                        {{ $dato->str_telefono }}

                                    </td>
                                    <td>
                                        <b>Price:</b><br>
                                        ${{ number_format($dato->dbl_precio, 2, ',', '.')   }}
                                    </td>

                                    <td>
                                        <b>Total Days:</b><br>
                                        {{ $dato->int_dias }}                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Total to Pay:</b><br>
                                        ${{ number_format($dato->dbl_total_pagar, 2, ',', '.')   }}
                                    </td>
     

                                    <td>
                                        <b>Arrival Date:</b><br>

                                        <?php

                                            $date1 = new DateTime($dato->dmt_fecha_entrada);
                                            $fecha_entrada = $date1->format('m-d-Y');
                                        ?>

                                        {{ $fecha_entrada }}

                                    </td>

                                    <td>
                                        <b>Departure Date:</b><br>

                                        <?php

                                            $date2 = new DateTime($dato->dmt_fecha_salida);
                                            $fecha_salida = $date2->format('m-d-Y');
                                        ?>

                                        {{ $fecha_salida }}

                                    </td>                                    


                                    <td>
                                        <b>Adults:</b><br>
                                        {{ $dato->int_adultos }}
                                    </td>

                                    <td>
                                        <b>Children:</b><br>
                                        {{ $dato->int_ninos }}
                                    </td>
   
                                </tr>
                                <tr>
                                    <td colspan="5"><b>Message:</b> <br>
                                        {{ $dato->str_mensaje }}        
                                    </td>                                    
                                </tr>

                             </table>


                <h2 style="margin:0;"><strong>Payment </strong> policies</h2>

                <p style="text-align: justify;">

                    <ul style="text-align: justify;">

                        <li>
                            Transfers and bank deposits in cash or check from the same bank or from other banks.
                        </li>
                        <li>
                            All operations must be done with a minimum of 03 business days before your arrival to guarantee the reservation.
                        </li>
           
                    </ul>

                    <b>Make the payment on behalf of:</b>

                </p>

                <h2 style="margin:0;"><strong>HIPPOCAMPUS VACATIONS CLUB C.A. <br>J-30177391-8</strong></h2>

                    <table>
                        <tr>
                            <th>Banesco</th>
                            <th>BOD</th>
                            <th>Banco del Tesoro</th>
                        </tr>
                        <tr>
                            <td><b>0134-0343-1134-3101-5888</b></td>
                            <td><b>0116-0450-13-0105891555</b></td>
                            <td><b>0163-0617-74-6173007310</b></td>
                        </tr>


                    </table>

                <p style="text-align: justify;">                    
                    Once the payment is made, you can send the voucher and verify the reservation information through:
                </p>

                <h2 style="margin:0;"><strong>+58 (295) 331.13.23</strong></h2>
                <p style="margin:0;">
                    <a href="mailto:reservaciones1@hippocampus.com.ve">reservaciones1@hippocampus.com.ve</a>          
                </p>

                <br>

                <p style="text-align: justify;">                    
                    As soon as the hotel receives your guarantee information, you will receive the RECONFIRMATION in a period of no more than 48 continuous working hours after receiving the payment support, otherwise or for any questions please contact us, which will be gladly answered.                 
                </p>

                <p style="text-align: justify;">
                    <b>REMEMBER THAT THE PRESENTATION OF THE SERVICE VOUCHER IS INDISPENSABLE AT THE MOMENT OF THE CUSTOMER'S CHECK-IN.</b><br>
                    In case of not receiving the guarantee on the deadline, your request will be automatically CANCELED, and may be processed again according to our availability.            
                </p>                          

            </div>

            
            <br>
             <h2 style="margin:0;"><strong>Details of</strong> payment</h2>
        </div>

    </main>


    <main>
        <div class="centre">
            <!-- Contact Form | START -->
            <div id="contact">                

                <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>

                    <div class="col">

                        <div class="field mandatory">
                            <input type='text' name='card_holder_name' value='' placeholder="Neil Barazarte" required />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='street_address' value='' placeholder='123 Test Address' required />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='street_address2' value='' placeholder='Suite 200' required />
                        </div>  

                    </div>


                    <div class="col">   

                        <div class="field mandatory">
                            <input type='text' name='city' value='' placeholder='Columbus' required />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='state' value='' placeholder='OH' required />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='zip' value='' placeholder='43228' required />
                        </div>

                    </div>

                    <div class="col">

                        <div class="field mandatory">
                            <input type='text' name='country' value='USA' />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='email' value='' placeholder='hvc@gmail.com' required />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='phone' value='' placeholder='614-921-2450' required />
                        </div>
                        
                        <input type='hidden' name='li_0_name' readonly value='Room: {{ $dato->str_habitacion }} - Arrival Date: {{ $dato->dmt_fecha_entrada }} - Departure Date: {{ $dato->dmt_fecha_salida }}' required />
                        <input type='hidden' readonly name='li_0_price' value='{{ $dato->dbl_total_pagar }}' required />                        
                        <input type='hidden' name='sid' value='{{env("HASHID","nada")}}' readonly />
                        <input type='hidden' name='mode' value='2CO' readonly />
                        <input type='hidden' name='li_0_type' value='product' readonly />     

                    </div>

                    <button  name="send" value="{{ $dato->str_codigo }}"><span data-hover="send payment">send payment</span></button>
                    
                   {!! csrf_field() !!} 

                </form>

            </div>
            <!-- Contact Form | END -->

            <h2 style="margin:0;"><strong>+58 (295) 331.13.23</strong></h2>
            <p style="margin:0;">
                <a href="mailto:reservaciones1@hippocampus.com.ve">reservaciones1@hippocampus.com.ve</a><br />
                <i class="fa fa-map-marker"></i> El Cristo Street, Hippocampus Complex building, La Caranta sector.<br>Margarita Island. Venezuela            
            </p>        

        </div>

    </main>
    <!-- Content | END -->

@endsection