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
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>

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
                        
                        <button style="width: 100%" name="send" value="sendform"><span data-hover="Login">Login</span></button>

                        <center>
                           
                            <div style="text-align: center; width: 100%;">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">                                
                                    <div class="button" style="width: all; background-color: #ff8000"><span data-hover="Forgot Your Password?">Forgot Password?</span></div>
                                </a>
                                
                                <a class="btn btn-link" href="{{ url('/register') }}">
                                    <div class="button" style="width: all; background-color: #ffbf00"><span data-hover="Sign in">Sign in</span></div>
                                </a>                            
    
                            </div>

                        </center> 

                        <hr>

                        <center>
                           You can also log in with:
                            <div style="text-align: center; width: 100%;">
                                <!--
                                <a class="btn btn-link" href="{{ url('/login/facebook') }}">                                
                                    <div class="button" style="width: all; background-color: #3B5998"><i class="fa fa-facebook" aria-hidden="true"></i> <span data-hover="Facebook">Facebook</span></div>
                                </a>
                            -->
                                
                                <a class="btn btn-link" href="{{ url('/login/google') }}">
                                    <div class="button" style="width: all; background-color: #EA4335"><i class="fa fa-google" aria-hidden="true"></i> <span data-hover="Google">Google</span></div>
                                </a>                            

                                <br>
                                <a href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i> Back Home</a>

                                <!--<a class="btn btn-link" href="{{ url('/redirect') }}">
                                    facebook
                                </a>-->
                            </div>

                        </center>                            

                    </div>

                    <div class="col">
                        &nbsp;
                    </div>
                    
                   {{ csrf_field() }} 

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