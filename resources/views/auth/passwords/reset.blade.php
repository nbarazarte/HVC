@extends('app')

@section('content')
    
    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Reiniciar Clave</span>
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

                @if (session('status'))
                    <div class="alert success">
                        <i class="fa fa-check-circle"></i> 
                        <strong>
                            ¡Le hemos enviado por correo electrónico el enlace de restablecimiento de su clave!
                        </strong> 
                        
                    </div> 
                @endif                
            
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">

                    <div class="col">
                        &nbsp;
                    </div>

                    <div class="col">
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <div class="field mandatory">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico" value="{{ $email or old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <div class="field mandatory">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Clave" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <div class="field mandatory">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Clave" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
 
                                <button style="width: 100%" name="send" value="sendform"><span data-hover="Reiniciar Clave">Reiniciar Clave</span></button>

                            </div>
                        </div>

                    </div>

                    <div class="col">
                        &nbsp;
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