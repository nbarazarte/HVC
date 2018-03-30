@extends('en.app')

@section('content')

    @foreach ($datos[0][0]['datos'] as $dato => $valor)

    <?php

        $persona[$dato] = $valor; 
        
    ?>    

    @endforeach

    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Request Reservation</span>
                <span class="tagline">Innovating for you</span></h1>
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

                <h2><strong></strong> {{ $persona['contact-habitacion'] }}</h2>

                        @include('mensajes')    

                        {!! Form::open(['route' => 'reservarIngles', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

                            <table style="text-align: justify;">

                                <tr>
                                    <td>
                                        <b>Name:</b><br>
                                        {{ $persona['contact-name'] }}
                                    </td>
                                    <td>
                                        <b>Email Address:</b><br>
                                        {{ $persona['contact-email'] }}
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Phone Number:</b><br>
                                        {{ $persona['contact-phone'] }}

                                    </td>
                                    <td>
                                        <b>Price per Night:</b><br>
                                         ${{ number_format($persona['contact-precioHabitacion'], 2, ',', '.')   }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Total Days:</b><br>
                                        {{ $persona['cant-dias'] }}                                        
                                    </td>
                                    <td>
                                        <b>Total to Pay:</b><br>
                                        ${{ number_format($persona['contact-totalPagar'], 2, ',', '.')   }}
                                    </td>
     
                                </tr>
                                <tr>

                                    <td>
                                        <b>Arrival Date:</b><br>
                                        {{ $persona['contact-arrival'] }}
                                    </td>

                                    <td>
                                        <b>Departure Date:</b><br>
                                        {{ $persona['contact-departure'] }}
                                    </td>                                    

                                </tr>
                                <tr>

                                    <td>
                                        <b>Adults:</b><br>
                                        {{ $persona['contact-adultos'] }}
                                    </td>

                                    <td>
                                        <b>Children:</b><br>
                                        {{ $persona['contact-ninos'] }}
                                    </td>
   
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Message:</b> <br>
                                        {{ $persona['contact-message'] }}        
                                    </td>                                    
                                </tr>

                            </table>

                        <button name="send" value="sendform">
                            <a class="button"><span data-hover="Send Booking Request">Send Booking Request</span></a> 
                        </button>    

                         
                            <input type="hidden" name="contact-totalPagar" readonly value="{{ $persona['contact-totalPagar'] }}">                     

                            <input type="hidden" name="contact-name" readonly value="{{ $persona['contact-name'] }}">                                        
                            <input type="hidden" name="contact-email" readonly value="{{ $persona['contact-email'] }}">
                            <input type="hidden" name="contact-phone" readonly value="{{ $persona['contact-phone'] }}">                                        
                            <input type="hidden" name="contact-habitacion" readonly value="{{ $persona['contact-habitacion'] }}">
                            <input type="hidden" name="contact-idHabitacion"  value="{{ $persona['contact-idHabitacion'] }}">                                    
                            <input type="hidden" name="contact-precioHabitacion" readonly value="{{ $persona['contact-precioHabitacion'] }}">
                            <input type="hidden" name="contact-adultos" readonly value="{{ $persona['contact-adultos'] }}">
                            <input type="hidden" name="contact-ninos" readonly value="{{ $persona['contact-ninos'] }}">
                            <input type="hidden" name="contact-arrival"  value="{{ $persona['contact-arrival'] }}">
                            <input type="hidden" name="contact-llegada"  value="{{ $persona['contact-llegada'] }}"> 
                            <input type="hidden" name="contact-departure"  value="{{ $persona['contact-departure'] }}">
                            <input type="hidden" name="contact-salida"  value="{{ $persona['contact-salida'] }}">
                            <input type="hidden" name="cant-dias" readonly value="{{ $persona['cant-dias'] }}">
                            <input type="hidden" name="contact-message" readonly value="{{ $persona['contact-message'] }}">

                            {!! csrf_field() !!} 

                        {!! Form::close() !!}

            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection

