@extends('en.app')

@section('content')
    
    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>User Register</span>
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
                
            
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">

                    <div class="col">
                        &nbsp;
                    </div>

                    <div class="col">
                        <div class="field mandatory">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="field mandatory">
                            <input id="str_ci_pasaporte" type="text" class="form-control" name="str_ci_pasaporte" placeholder="ID/Passport" value="{{ old('str_ci_pasaporte') }}" required autofocus>

                            @if ($errors->has('str_ci_pasaporte'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('str_ci_pasaporte') }}</strong>
                                </span>
                            @endif
                        </div>                           
                        <div class="field mandatory">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="field mandatory">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="field mandatory">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
                        </div>
                      
                        
                        <button style="width: 100%" name="send" value="sendform"><span data-hover="Register">Register</span></button>

                        <div style="text-align: center">
                            <a class="btn btn-link" href="{{ url('/login') }}">
                                Login
                            </a>
                            <br>
                            <a href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i> Home</a>
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
                <i class="fa fa-map-marker"></i>  El Cristo Street, Hippocampus Complex building, La Caranta sector. <br> Margarita Island. Venezuela
            </p>        

        </div>

    </main>
    <!-- Content | END -->

@endsection