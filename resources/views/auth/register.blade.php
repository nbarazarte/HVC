@extends('app')

@section('content')
    
    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Registro de Usuarios</span>
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

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">

                    <div class="col">

                        <div class="field mandatory">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Nombre y Apellido" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="field mandatory">
                            <input id="str_ci_pasaporte" type="text" class="form-control" name="str_ci_pasaporte" placeholder="Cédula/Pasaporte" value="{{ old('str_ci_pasaporte') }}" required autofocus>

                            @if ($errors->has('str_ci_pasaporte'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('str_ci_pasaporte') }}</strong>
                                </span>
                            @endif
                        </div>                          



                        <div class="select">

                            <select name="str_genero" id="str_genero" class="infants" required style="width: 100%">

                                <option value="">Género</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>

                            </select>  <br>  <br>                  
                            
                        </div>    
                        
                    </div>
                    <div class="col">

                        <div class="field mandatory">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="field mandatory">
                            <input name="str_telefono" type="text" placeholder="N° de Teléfono" id="str_telefono" value="" required/>
                        </div>

                        <div class="field ">

                            <input style="cursor: pointer;" id="blb_img" type="file" class="form-control" title="Seleccione su imagen de perfil" name="blb_img" value="{{ old('blb_img') }}" required>

                        </div>

                    </div>
                    <div class="col">

                        <div class="field mandatory">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Clave" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="field mandatory">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme su clave" required>
                        </div>                        


                        <div class="select">
                            
                            <select name="str_pais" id="str_pais" class="infants" required style="width: 100%">

                                <option value="">País</option>

                                @foreach ($paises as $value)
                                                
                                    <option value="{{$value}}" >{{$value}}</option>

                                @endforeach

                            </select> <br>  <br> <br>  

                        </div>  

                    </div>

                    <button style="" name="send" value="sendform"><span data-hover="Registrarse">Registrarse</span></button>
                        <br>
                    <a href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                    
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