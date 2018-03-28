@extends('en.app')

@section('content')
    
    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Login</span>
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
                
            
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

                    <div class="col">
                        &nbsp;
                    </div>

                    <div class="col">
                        <div class="field mandatory">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

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

                        <div style="text-align: center; width: 100%" >

                           Remember Me<input style="width: 30%; height: 25px" type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>

                        </div>                         
                        
                        <button style="width: 100%" name="send" value="sendform"><span data-hover="Iniciar Sesión">Login</span></button>

                        <div style="text-align: center">
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                            <br>
                            <a class="btn btn-link" href="{{ url('/register') }}">
                                Register
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