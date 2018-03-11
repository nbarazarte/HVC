@extends('app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Servicios Especiales</span>
                <span class="tagline">Tiendas, Spa y Restaurant</span></h1>
            </div>
        </div>
        
        @include('reservacion')

    </header>
    <!-- Header | END -->
    <!-- Specials | START -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
            <div class="special">
                <div class="img">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/knela-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                    <h2>Piel Knela<br />
                    <span>Colection C.A.</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.</p>

                </div>
            </div>            
        	<div class="special">
            	<div class="img">
                	<div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/biothai-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                	<h2>BIO Thai<br />
                    <span>Activity Package</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.</p>

                </div>
            </div>
        	<div class="special">
            	<div class="img">
                	<div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/joe-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                	<h2>JOE'S Gril<br />
                    <span>Restaurant C.A.</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.</p>
                    
                    <a href="{{ route('restaurant') }}" class="button"><span data-hover="Ver más">Ver más</span></a>
                    

                </div>
            </div>
        </div>
    </main>
    <!-- Content | END -->

@endsection