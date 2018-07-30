    <!-- Check Rates Banner | START -->
    <div id="check">
        <div class="centre">

            {!! Form::open(['route' => 'contactIngles', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false', 'onsubmit' => 'diferencia()']) !!}                   

                <div class="field calendar"><input name="contact-arrival" type="text" placeholder="Arrival" id="contact-arrival" required /><i class="fa fa-calendar-o"></i></div>
                <div class="field calendar"><input name="contact-departure" type="text" placeholder="Departure" id="contact-departure" required /><i class="fa fa-calendar-o"></i></div>
                <div class="field select">

                    <select name="contact-habitacion">

                        @foreach ($cuartos as $hab)

                            <option value="{{ $hab->str_rooms }}">{{ $hab->str_rooms }}</option>

                        @endforeach

                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="field select">
                    <select name="contact-adultos">

                        <?php

                            for ($i=1; $i < 10; $i++) { ?>
                            
                                <option value="{{ $i }}">{{ $i }} @if($i > 1) Adults @else Adult @endif</option>

                        <?php }?>

                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="field select">
                    <select name="contact-ninos">

                        <?php

                            for ($i=0; $i < 3; $i++) { ?>
                            
                                <option value="{{ $i }}">{{ $i }} @if($i > 1) Children @else Child @endif</option>

                        <?php }?>

                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <button><span data-hover="Search Room"> Search Room</span></button>

                <input type="hidden" id="contact-name" name="contact-name" value="">
                <input type="hidden" id="contact-email" name="contact-email" value="">
                <input type="hidden" id="contact-phone" name="contact-phone" value="">
                <input type="hidden" id="contact-message" name="contact-message" value="">


                <input type="hidden" id="cant-dias" name="cant-dias" value="">
                <input type="hidden" id="contact-llegada" name="contact-llegada" value="">
                <input type="hidden" id="contact-salida" name="contact-salida" value="">                

                {!! csrf_field() !!} 
                
            {!! Form::close() !!}

            @include('mensajes')                           

        </div>
    </div>
    <!-- Check Rates Banner | END -->

