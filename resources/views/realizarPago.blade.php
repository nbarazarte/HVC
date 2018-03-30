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
            <!-- Contact Form | START -->
            <div id="contact">
                
                @include('mensajes')

                <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>

                    <div class="col">
                        <div class="field mandatory">
                            <input type='text' name='li_0_name' readonly value='{{ $dato->str_habitacion }}' required />
                        </div>

                        <div class="field mandatory">
                             
                            <input type='text' readonly name='totalPagar' value="{{ number_format($dato->dbl_total_pagar , 2, ',', '.') }}" />
                            <input type='hidden' readonly name='li_0_price' value='{{ $dato->dbl_total_pagar }}' required />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='card_holder_name' value='' placeholder="Neil Barazarte" required />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='street_address' value='' placeholder='123 Test Address' required />
                        </div>
                    </div>

                    <div class="col">                   
                
                        <div class="field mandatory">
                            <input type='text' name='street_address2' value='' placeholder='Suite 200' required />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='city' value='' placeholder='Columbus' required />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='state' value='' placeholder='OH' required />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='zip' value='' placeholder='43228' required />
                        </div>
                                
                        <button style="width: 100%" name="send" value="sendform"><span data-hover="Pagar">Pagar</span></button>
                        
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
                        <input type='hidden' name='sid' value='901375053' />
                        <input type='hidden' name='mode' value='2CO' />
                        <input type='hidden' name='li_0_type' value='product' />                         
                    </div>
                    
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