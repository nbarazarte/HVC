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
                            <input type='text' name='li_0_name' value='invoice123' />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='li_0_price' value='25.99' />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='card_holder_name' value='Checkout Shopper' />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='street_address' value='123 Test Address' />
                        </div>
                    </div>

                    <div class="col">                   
                
                        <div class="field mandatory">
                            <input type='text' name='street_address2' value='Suite 200' />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='city' value='Columbus' />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='state' value='OH' />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='zip' value='43228' />
                        </div>
                                
                        <button style="width: 100%" name="send" value="sendform"><span data-hover="Pagar">Pagar</span></button>
                        
                    </div>

                    <div class="col">
                        <div class="field mandatory">
                            <input type='text' name='country' value='USA' />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='email' value='example@2co.com' />
                        </div>

                        <div class="field mandatory">
                            <input type='text' name='phone' value='614-921-2450' />
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