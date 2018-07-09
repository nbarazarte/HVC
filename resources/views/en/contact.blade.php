@extends('en.app')

@section('content')
    
    <?php

        if($_POST){

            $arrival = $datos['arrival'];
            $departure = $datos['departure'];
            $habitacion = $datos['habitacion'];
            $adultos = $datos['adultos'];
            $ninos = $datos['ninos'];

        }else{

            $arrival = "";
            $departure = "";
            $habitacion = "";
            $adultos = "";
            $ninos = "";

        }

    ?>

    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Contact us</span>
                <span class="tagline">Innovating for you</span></h1>
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
                <img src="{{ asset('base-hotel/preview/images/contacto.jpg') }}" width="1200" height="400" alt="" />

                    <!--include('mensajes')-->      

                    {!! Form::open(['route' => 'contactIngles', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false', 'onsubmit' => 'diferencia()']) !!} 

                    <div class="col">

                        @if (Auth::user())

                            <div class="field mandatory"><input name="contact-name" type="text" placeholder="Your Name" id="contact-name" value="{{ Auth::user()->name }}" required/></div>
                            <div class="field mandatory"><input name="contact-email" type="email" placeholder="Email Address" id="contact-email" value="{{ Auth::user()->email }}" required/></div>
                            <div class="field mandatory"><input name="contact-phone" type="text" placeholder="Phone Number" id="contact-phone" value="{{ Auth::user()->str_telefono }}" required/></div>

                        @else

                            <div class="field mandatory"><input name="contact-name" type="text" placeholder="Your Name" id="contact-name" value="" required/></div>
                            <div class="field mandatory"><input name="contact-email" type="email" placeholder="Email Address" id="contact-email" value="" required/></div>
                            <div class="field mandatory"><input name="contact-phone" type="text" placeholder="Phone Number" id="contact-phone" value="" required/></div>

                        @endif

                    </div>
                    <div class="col">
                        <div class="field calendar"><input name="contact-arrival" type="text" placeholder="Arrival Date" id="contact-arrival" required value="<?=$arrival?>"  /><i class="fa fa-calendar-o"></i></div>
                        <div class="field calendar"><input name="contact-departure" type="text" placeholder="Departure Date" id="contact-departure" required value="<?=$departure?>"  /><i class="fa fa-calendar-o"></i></div>
                        <div class="select">

                            <select name="contact-habitacion" id="contact-habitacion" class="infants" required>

                                <option value="">Rooms</option>

                                @foreach ($habitaciones as $hab)

                                    <option value="{{ $hab->str_rooms }}" @if($hab->str_rooms == $habitacion) selected="selected" @endif >{{ $hab->str_rooms }}</option>

                                @endforeach

                            </select>

                            <select name="contact-adultos" id="contact-adultos" class="adults" required>

                                <option value="">Adults</option>
                                
                                <?php

                                    for ($i=1; $i < 10; $i++) { ?>

                                        <option value="{{ $i }}" @if($i == $adultos) selected="selected" @endif >{{ $i }} @if($i > 1) Adults @else Adult @endif</option>
                            
                                <?php }?>
                    
                            </select>

                            <select name="contact-ninos" id="contact-ninos" class="children" required>

                                <option value="">Children</option>                              

                                <?php

                                    for ($i=0; $i < 3; $i++) { ?>
                                    
                                        <option value="{{ $i }}" @if($i == $ninos) selected="selected" @endif >{{ $i }} @if($i > 1) Children @else Child @endif</option>

                                <?php }?>

                            </select>

                        </div>
                    </div>
                    <div class="col">
                        <input type="hidden" id="cant-dias" name="cant-dias" value="">

                        <input type="hidden" id="contact-llegada" name="contact-llegada" value="">
                        <input type="hidden" id="contact-salida" name="contact-salida" value="">

                        <div class="field"><textarea name="contact-message" placeholder="Message" id="contact-message"></textarea></div>
                    </div>
                    <!-- Honeypot (for bot spam) --><input name="contact-email2" type="text" placeholder="Email Address" autocomplete="false" class="honeypot" value="" />



                    <button name="send" value="sendform"><span data-hover="Check Availability">Check Availability</span></button>


                    
                   {!! csrf_field() !!} 

                {!! Form::close() !!}

            </div>
            <!-- Contact Form | END -->



            <h2 style="margin:0;"><strong>+58 (295) 331.13.23</strong></h2>
            <p style="margin:0;">
                <a href="mailto:reservaciones1@hippocampus.com.ve">reservaciones1@hippocampus.com.ve</a><br />
                <i class="fa fa-map-marker"></i> El Cristo Street, Hippocampus Complex building, La Caranta sector.<br>Margarita Island. Venezuela            
            </p>        

            <p>

                <h2 style="margin:0;"><strong>In front of the beautiful Pampatar Bay</strong></h2>

            </p>

            <p style="text-align: justify;">
                Our privileged location puts us just five minutes from the historic center of Pampatar, where you can enjoy various tourist attractions such as the Castillo San Carlos de Borromeo, the church of Cristo del Buen Viaje and some beaches. In addition, the city of Pampatar has a large gastronomic area for all tastes, as well as bars, clubs and restaurants very close to our facilities.
            <br>
                We are 10 minutes from the main commercial centers of the island and approximately 50 and 60 minutes from the airport and ferry terminal, respectively.
            </p>
        </div>
        <!-- Google Map | START -->

        <div id="map">
            <div id="googlemap"></div>
        </div>
        <!-- Google Map | END -->

    </main>
    <!-- Content | END -->

@endsection