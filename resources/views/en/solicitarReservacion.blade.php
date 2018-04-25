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

    @include('en.reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
        <div class="centre">
            <!-- Slideshow -->

            <div id="content">

                <h2><strong>{{ $persona['contact-habitacion'] }}</strong> 

                    @if($persona['contact-habitacion'] != 'Duplex 2 Main Rooms')
                        Room
                    @endif
                    
                    {{ $persona[3] }}
                </h2>

                        @include('mensajes')   

                <p style="text-align: justify;">
                    Dear Customer: <br>
                    In <strong>HIPPOCAMPUS VACATION CLUB</strong> we are pleased for your future visit and we hope that your stay with us is pleasant and unforgettable.
                </p>

                <p style="text-align: justify;">
                    Then we will send you by email the quote for the requested reservation.<br>
                    The reservation includes accommodation and breakfast, for the number of people indicated in the quote.
                </p>
                      

                        {!! Form::open(['route' => 'reservarIngles', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

                            <table id="myTable" style="text-align: justify;">

                                <tr style="text-align: center;">
                                    <th colspan="5">
                                        Reservation details
                                    </th>
                                </tr>                                

                                <tr>
                                    <td>
                                        <b>Name:</b><br>
                                        {{ $persona['contact-name'] }}
                                    </td>
                                    <td>
                                        <b>Email Address:</b><br>
                                        {{ $persona['contact-email'] }}
                                    </td>

                                    <td>
                                        <b>Phone Number:</b><br>
                                        {{ $persona['contact-phone'] }}

                                    </td>
                                    <td>
                                        <b>Price per Night:</b><br>
                                         ${{ number_format($persona['contact-precioHabitacion'], 2, ',', '.')   }}
                                    </td>

                                    <td>
                                        <b>Total Days:</b><br>
                                        {{ $persona['cant-dias'] }}                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Total to Pay:</b><br>
                                        ${{ number_format($persona['contact-totalPagar'], 2, ',', '.')   }}
                                    </td>

                                    <td>
                                        <b>Arrival Date:</b><br>
                                        {{ $persona['contact-arrival'] }}
                                    </td>

                                    <td>
                                        <b>Departure Date:</b><br>
                                        {{ $persona['contact-departure'] }}
                                    </td>                                    

                                    <td>
                                        <b>Adults:</b><br>
                                        {{ $persona['contact-adultos'] }}
                                    </td>

                                    <td>
                                        <b>Children:</b><br>
                                        {{ $persona['contact-ninos'] }}
                                    </td>
   
                                </tr>

                                <tr style="text-align: center;">
                                    <th colspan="5">                                        
                                        Detail of the Companions
                                    </th>
                                </tr>

                                <tr>
                                    <td>
                                        <b>Name and Surname:</b><br>
                                    </td>
                                    <td>
                                        <b>ID/Passport:</b><br>
                                    </td>

                                    <td>
                                        <b>Adult/Child</b>
                                    </td>
                                    <td>
                                       <b>Country</b>
                                    </td>
                                    <td>
                                        <input class="button" type="button" onclick="myFunction()" name="" value="Add">
                                    </td>
                                </tr> 

                                <tr>
                                    <td colspan="5"><b>Message:</b> <br>
                                        {{ $persona['contact-message'] }}        
                                    </td>                                    
                                </tr>

                            </table>

                <script>
                    function myFunction() {
                        var table = document.getElementById("myTable");
                        var row = table.insertRow(5);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);

                        cell1.innerHTML = '<input style="width: 100%; height: 45px; padding: 0 15px; letter-spacing: .4px; border: none; box-sizing: border-box;font: 14px/20px \'Open Sans\', sans-serif; z-index: 2;position: relative;"  name="acompanante-name[]" type="text" placeholder="Name and Surname" id="acompanante-name" value="" required/>';
                        cell2.innerHTML = '<input style="width: 100%; height: 45px; padding: 0 15px; letter-spacing: .4px; border: none; box-sizing: border-box;font: 14px/20px \'Open Sans\', sans-serif; z-index: 2;position: relative;" name="acompanante-cedula[]" type="number" placeholder="ID/Passport" id="acompanante-cedula" value="" required/>';
                        cell3.innerHTML= '<select name="acompanante-tipo[]" id="acompanante-tipo" style="width: 100%; height: 45px; padding: 0 15px; letter-spacing: .4px; border: none; box-sizing: border-box;font: 14px/20px \'Open Sans\', sans-serif; z-index: 2;position: relative;" required><option value="">Select</option>@foreach ($tipoPersona as $tipo)<option value="{{ $tipo->id}}">@if($tipo->str_descripcion == "Adulto") Adult @else Child @endif</option>@endforeach</select>';
                        cell4.innerHTML= '<select name="acompanante-pais[]" id="acompanante-pais" style="width: 100%; height: 45px; padding: 0 15px; letter-spacing: .4px; border: none; box-sizing: border-box;font: 14px/20px \'Open Sans\', sans-serif; z-index: 2;position: relative;" required><option value="">Select</option> @foreach ($paises as $pais)<option value="{{ $pais->id}}">{{ $pais->str_paises}}</option>@endforeach</select>';
                        cell5.innerHTML= '<input class="button" type="button" onclick="deleteRow(this)" name="" value="Delete">';                        
                    }

                  
                </script>                             

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

                            <input type="hidden" name="contact-idnumHab" readonly value="{{ $persona[4] }}">
                            <input type="hidden" name="contact-message" readonly value="{{ $persona['contact-message'] }}">

                            {!! csrf_field() !!} 

                        {!! Form::close() !!}

            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection

