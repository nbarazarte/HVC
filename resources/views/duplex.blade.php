@extends('app')

@section('content')

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Habitación Duplex</span>
                <span class="tagline">Luxurious by Reputation</span></h1>
            </div>
        </div>
        
        @include('reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<div id="left">
            	<!-- Slideshow | START -->
            	<div id="slideshow">
                	<div class="slider">
                    	<div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/habitacionDuplex1.jpg') }}" width="770" height="500" /></div>
                        <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/habitacionDuplex2.jpg') }}" width="770" height="500" /></div>
                        <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/habitacionDuplex3.jpg') }}" width="770" height="500" /></div>
                        <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/habitacionDuplex4.jpg') }}" width="770" height="500" /></div>
                    </div>
                    <div class="nav">
                        <a class="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- Slideshow | END -->
                <div id="content">
                    <h2><strong>Habitación</strong> Duplex</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
                    <ul class="tags">
                        <li>TV por Cable</li>
                        <li>Aire Acondicionado</li>
                        <li>Nevera</li>
                        <li>Microondas</li>
                        <li>Secador de Cabello</li>
                        <li>Teléfono</li>
                        <li>Caja de Seguridad</li>
                        <li>Cocina</li>
                    </ul>
                    <!-- USP Boxes | START -->
                    <section class="usp">
                        <div class="box">
                            <i class="fa fa-expand"></i>
                            <h3>Espaciosas áreas de estar</h3>
                            <p>Contamos con diversos espacios abiertos dispuestos para el goce y disfrute de nuestros huéspedes, con actividades recreativas para toda la familia.</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-wifi"></i>
                            <h3>Wi-Fi</h3>
                            <p>Ofrecemos a nuestros huéspedes acceso a internet en todos los espacios abiertos del hotel para que puedan mantenerse comunicados y entretenidos con sus dispositivos portátiles.</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-user"></i>
                            <h3>Servicio de habitación las 24 horas</h3>
                            <p>Nuestro personal siempre estará para brindarle la mejor y cordial atención, para Hippocampus Vacation Club siempre será un honor servirle.</p>
                        </div>
                    </section>
                    <!-- USP Boxes | END -->
                </div>
            </div>
            <!-- Sidebar | START -->
            <aside>
            	<div id="scroll">
                    <div id="block">
                        <div class="blocktitle"><a href="contact.php">Stay from <span>$149</span> per night</a></div>
                        
                        @include('habitacionesLista')
                        
                    </div>
                    <!-- List Items (Specials Slider) | START -->
                    @include('mini-extras')
                    <!-- List Items (Specials Slider) | END -->
                </div>
            </aside>
            <!-- Sidebar | END -->
        </div>
    </main>
    <!-- Content | END -->

@endsection   