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

        @include('reservacion')        

    </header>
    <!-- Header | END -->
    <!-- Content | START -->


    <main>
        <div class="centre">
            <!-- Slideshow -->

            <div id="content">

                <h2><strong>Habitación</strong> {{ $dato->str_habitacion }}</h2>

                <p style="text-align: justify;">
                    Estimado Cliente: <br>
                    La reserva incluye alojamiento y desayuno, para el número de personas indicadas en la cotización.
                </p>


                            <table style="text-align: justify;">

                                <tr style="text-align: center;">
                                    <th colspan="5">
                                        Datos de la reservación
                                    </th>
                                </tr>                                

                                <tr>
                                    <td>
                                        <b>Nombre:</b><br>
                                        {{ $dato->str_nombre }}
                                    </td>
                                    <td>
                                        <b>Correo Electrónico:</b><br>
                                        {{ $dato->str_email }}
                                    </td>

                                    <td>
                                        <b>Teléfono:</b><br>
                                        {{ $dato->str_telefono }}

                                    </td>
                                    <td>
                                        <b>Precio:</b><br>
                                        Bs. {{ number_format($dato->dbl_precio, 2, ',', '.')   }}
                                    </td>

                                    <td>
                                        <b>Días:</b><br>
                                        {{ $dato->int_dias }}                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Total:</b><br>
                                        Bs. {{ number_format($dato->dbl_total_pagar, 2, ',', '.')   }}
                                    </td>
     

                                    <td>
                                        <b>Llegada:</b><br>

                                        <?php

                                            $date1 = new DateTime($dato->dmt_fecha_entrada);
                                            $fecha_entrada = $date1->format('d-m-Y');
                                        ?>

                                        {{ $fecha_entrada }}
                                    </td>

                                    <td>
                                        <b>Salida:</b><br>
                                        
                                        <?php

                                            $date2 = new DateTime($dato->dmt_fecha_entrada);
                                            $fecha_salida = $date2->format('d-m-Y');
                                        ?>

                                        {{ $fecha_salida }}
                                    </td>                                    


                                    <td>
                                        <b>Adulto(s):</b><br>
                                        {{ $dato->int_adultos }}
                                    </td>

                                    <td>
                                        <b>Niño(s):</b><br>
                                        {{ $dato->int_ninos }}
                                    </td>
   
                                </tr>
                                <tr>
                                    <td colspan="5"><b>Comentarios:</b> <br>
                                        {{ $dato->str_mensaje }}        
                                    </td>                                    
                                </tr>

                            </table>


                <h2 style="margin:0;"><strong>Políticas</strong> de pago</h2>

                <p style="text-align: justify;">

                    <ul style="text-align: justify;">

                        <li>
                            Transferencias y depósitos bancarios en efectivo o cheque del mismo banco o de otros bancos.
                        </li>
                        <li>
                            Todas las operaciones se deben hacer con un mínimo de 03 días hábiles antes de su llegada para garantizar la reserva.
                        </li>
           
                    </ul>

                    <b>Realizar el pago a nombre de:</b>

                </p>

                <h2 style="margin:0;"><strong>HIPPOCAMPUS VACATION CLUB C.A. <br>J-30177391-8</strong></h2>

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
                    Una vez realizado el pago, usted puede enviar el comprobante y verificar los datos de la reserva través de:
                </p>

                <h2 style="margin:0;"><strong>+58 (295) 331.13.23</strong></h2>
                <p style="margin:0;">
                    <a href="mailto:reservaciones1@hippocampus.com.ve">reservaciones1@hippocampus.com.ve</a>          
                </p>

                <br>

                <p style="text-align: justify;">
                    Tan pronto el Hotel recibe su información de garantía le hará llegar la RECONFIRMACION en un periodo no mayor de 48 horas hábiles continuas después de recibido el soporte de pago, caso contrario o para cualquier duda por favor comuníquense con nosotros, que gustosamente será atendido.                    
                </p>

                <p style="text-align: justify;">
                    <b>RECUERDE QUE ES INDISPENSABLE LA PRESENTACION DEL VOUCHER DE SERVICIO EN EL MOMENTO DEL CHECK-IN DEL CLIENTE.</b><br>
                    En caso de no recibir la garantía en la fecha límite, su solicitud quedara automáticamente ANULADA, y se podrá procesar nuevamente de acuerdo a nuestra disponibilidad.             
                </p>                          

            </div>

            <br>
            <h2 style="margin:0;"><strong>Pago</strong> en línea</h2>
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
                        
                        <input type='hidden' name='li_0_name' readonly value='Habitación: {{ $dato->str_habitacion }} - Fecha Llegada: {{ $dato->dmt_fecha_entrada }} - Fecha Salida: {{ $dato->dmt_fecha_salida }}' required />
                        <input type='hidden' readonly name='li_0_price' value='{{ $dato->dbl_total_pagar }}' required />                        
                        <input type='hidden' name='sid' value='{{env("HASHID","nada")}}' readonly />
                        <input type='hidden' name='mode' value='2CO' readonly />
                        <input type='hidden' name='li_0_type' value='product' readonly />     

                    </div>

                    <button  name="send" value="{{ $dato->str_codigo }}"><span data-hover="Realizar Pago">Realizar Pago</span></button>
                    
                   {!! csrf_field() !!} 

                </form>

            </div>
            <!-- Contact Form | END -->

            <h2 style="margin:0;"><strong>+58 (295) 331.13.23</strong></h2>
            <p style="margin:0;">
                <a href="mailto:reservaciones1@hippocampus.com.ve">reservaciones1@hippocampus.com.ve</a><br />
                <i class="fa fa-map-marker"></i>  Calle El Cristo, edifc. Complejo Hippocampus, sector La Caranta.<br />Isla de Margarita. Venezuela            
            </p>        

        </div>

    </main>
    <!-- Content | END -->

@endsection