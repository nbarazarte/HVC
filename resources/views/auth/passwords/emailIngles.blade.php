@extends('en.app')

@section('content')
    
    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Reset Password</span>
                <span class="tagline">INNOVATING FOR YOU</span></h1>
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

                            {{ session('status') }}
                            
                        </strong> 
                        
                    </div> 
                @endif                
            
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">

                    <div class="col">
                        &nbsp;
                    </div>

                    <div class="col">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <div class="field mandatory">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
 
                                <button style="width: 100%" name="send" value="sendform"><span data-hover="Send Link">Send Link</span></button>

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
                <i class="fa fa-map-marker"></i>  El Cristo Street, Hippocampus Complex building, La Caranta sector. <br>Margarita Island. Venezuela      
            </p>        

        </div>

    </main>
    <!-- Content | END -->

@endsection