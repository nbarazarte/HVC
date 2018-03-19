    <!-- Check Rates Banner | START -->
    <div id="check">
        <div class="centre">

            {!! Form::open(['route' => 'reservacionIngles', 'id' => '', '', 'enctype'=>'multipart/form-data', 'class' => '']) !!}                 

                <div class="field calendar"><input name="arrival" type="text" placeholder="Arrival" id="arrival" readonly /><i class="fa fa-calendar-o"></i></div>
                <div class="field calendar"><input name="departure" type="text" placeholder="Departure" id="departure" readonly /><i class="fa fa-calendar-o"></i></div>
                <div class="field select">

                    <select name="habitacion">

                        @foreach ($habitaciones as $hab)

                            <option value="{{ $hab->str_rooms }}">{{ $hab->str_rooms }}</option>

                        @endforeach

                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="field select">
                    <select name="adultos">

                        <?php

                            for ($i=1; $i < 10; $i++) { ?>
                            
                                <option value="{{ $i }}">{{ $i }} @if($i > 1) Adultos @else Adulto @endif</option>

                        <?php }?>

                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="field select">
                    <select name="ninos">

                        <?php

                            for ($i=0; $i < 3; $i++) { ?>
                            
                                <option value="{{ $i }}">{{ $i }} @if($i > 1) Niños @else Niño @endif</option>

                        <?php }?>

                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <button><span data-hover="Reservar Ahora">Reservar Ahora</span></button>

                {!! csrf_field() !!} 
                
            {!! Form::close() !!}

            @include('mensajes')                           

        </div>
    </div>
    <!-- Check Rates Banner | END -->

