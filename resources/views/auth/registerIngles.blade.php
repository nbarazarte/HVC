@extends('en.app')

@section('content')
    
    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Sign in</span>
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


<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">

                    <div class="col">

                        <div class="field mandatory">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Your Name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="field mandatory">
                            <input id="str_ci_pasaporte" type="number" class="form-control" name="str_ci_pasaporte" placeholder="ID/Passport" value="{{ old('str_ci_pasaporte') }}" required autofocus>

                            @if ($errors->has('str_ci_pasaporte'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('str_ci_pasaporte') }}</strong>
                                </span>
                            @endif
                        </div>                          



                        <div class="select">

                            <select name="str_genero" id="str_genero" class="infants" required style="width: 100%">

                                <option value="">Gender</option>
                                <option value="Femenino">Female</option>
                                <option value="Masculino">Male</option>

                            </select>  <br>  <br>                  
                            
                        </div>    
                        
                    </div>
                    <div class="col">

                        <div class="field mandatory">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="field mandatory">
                            <input name="str_telefono" type="number" placeholder="Phone Number" id="str_telefono" value="" required/>
                        </div>

                        <div class="field ">

                            <input style="cursor: pointer;" id="blb_img" type="file" class="form-control" title="Select your profile picture" name="blb_img" value="{{ old('blb_img') }}" required>

                        </div>

                    </div>
                    <div class="col">

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


                        <div class="select">
                            
                            <select name="lng_idpais" id="str_pais" class="infants" required style="width: 100%">

                                <option value="">País</option>

                                @foreach ($paises as $pais)
                                                
                                    <option value="{{$pais->id}}" >{{$pais->str_paises}}</option>

                                @endforeach

                            </select> <br>  <br> <br>  

                        </div>  

                    </div>

                    <button style="" name="send" value="sendform"><span data-hover="Sign in">Sign in</span></button>
                        <br>
                    <a href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i> Back Home</a>
                    
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