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

                <h2><strong>Habitación</strong> {{ $dato->str_habitacion }}</h2>

                        @include('mensajes')    

                            <table style="text-align: justify;">

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
                                        {{ $dato->dmt_fecha_entrada }}
                                    </td>

                                    <td>
                                        <b>Salida:</b><br>
                                        {{ $dato->dmt_fecha_salida }}
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


            </div>
        </div>

    </main>






    <main>
        <div class="centre">
            <!-- Contact Form | START -->



            <div id="contact">

                
                @include('mensajes')


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
                        
                        <input type='hidden' name='li_0_name' readonly value='{{ $dato->str_habitacion }}' required />
                        <input type='hidden' readonly name='li_0_price' value='{{ $dato->dbl_total_pagar }}' required />                        
                        <input type='hidden' name='sid' value='{{env("HASHID","nada")}}' readonly />
                        <input type='hidden' name='mode' value='2CO' readonly />
                        <input type='hidden' name='li_0_type' value='product' readonly />     

                    </div>

                    <button  name="send" value="{{ $dato->str_codigo }}"><span data-hover="Pagar">Pagar</span></button>
                    
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