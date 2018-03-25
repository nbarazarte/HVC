@extends('en.app')

@section('content')

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Double Room</span>
                <span class="tagline">The comfort you deserve</span></h1>
            </div>
        </div>
        
        @include('en.reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<div id="left">
            	<!-- Slideshow | START -->
            	<div id="slideshow">
                	<div class="slider">
                    	<div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/habitacionDoble.jpg') }}" width="770" height="500" /></div>

                    </div>
                    <div class="nav">
                        <a class="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- Slideshow | END -->
                <div id="content">
                    <h2><strong>Double</strong> Room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>

                    @include('en.caracteristicasHabitacion')

                </div>
            </div>
            <!-- Sidebar | START -->
            <aside>
            	<div id="scroll">
                    <div id="block">
                        <div class="blocktitle"><a href="contact.php">Stay from <span>$149</span> per night</a></div>
                        
                        @include('en.habitacionesLista')
                        
                    </div>

                    <!-- List Items (Specials Slider) | START -->
                    @include('en.mini-extras')
                    <!-- List Items (Specials Slider) | END -->

                </div>
            </aside>
            <!-- Sidebar | END -->
        </div>
    </main>
    <!-- Content | END -->

@endsection   