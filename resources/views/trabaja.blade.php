@extends('app')

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
                <h1><span>Trabaja con Nosotros</span>
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
            	<img src="{{ asset('base-hotel/preview/images/trabaja.jpg') }}" width="1200" height="400" alt="" />

                    <!--include('mensajes')-->
            
                    {!! Form::open(['route' => 'enviarTrabaja', 'method'=>'PUT', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false', 'onsubmit' => '']) !!}     
                              
                        <div class="col" style="width: 100%">

                            <div class="field mandatory"><input name="contact-name" type="text" placeholder="Nombre y Apellido" id="contact-name" value="" required/></div>                            

                            <div class="field mandatory"><input name="contact-email" type="email" placeholder="Correo Electrónico" id="contact-email" value="" required/></div>
                                                                              
                            <div class="field mandatory"><input name="contact-phone" type="number" placeholder="N° de Teléfono" id="contact-phone" value="" required/></div> 
                                
                            <div class="field mandatory"><input name="contact-file" type="file" title="Adjuntar Hoja de Vida" id="contact-file" value="" required/></div>
          
                            <div class="field"><textarea name="contact-message" placeholder="Mensaje" id="contact-message"></textarea></div>                                                          
                        </div>                                

                        <button name="send" value="sendform"><span data-hover="Enviar mis datos">Enviar mis datos</span></button>
                    
                    
                   {!! csrf_field() !!} 

                {!! Form::close() !!}

            </div>

            <!-- Contact Form | END -->          

            <h2 style="margin:0;"><strong>+58 (295) 331.13.00</strong></h2>
            <p style="margin:0;">
                <a href="mailto:gestiondetalento@hippocampus.com.ve ">gestiondetalento@hippocampus.com.ve</a><br />
                <i class="fa fa-map-marker"></i>  Calle El Cristo, edifc. Complejo Hippocampus, sector La Caranta.<br />Isla de Margarita. Venezuela            
            </p>        

        </div>

    </main>
    <!-- Content | END -->

@endsection