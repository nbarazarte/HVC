@extends('app')

@section('content')

@foreach ($habitaciones as $hab)

    @if( $hab->str_habitacion == "Matrimonial")

        <?php
            $precioMatrimonial = number_format($hab->str_precio, 2, ',', '.');
        ?>

    @endif

@endforeach

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Habitación Matrimonial</span>
                <span class="tagline">Innovamos para ti</span></h1>
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
                    	<div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/habitacionMatrimonial.jpg') }}" width="770" height="500" /></div>

                    </div>
                    <div class="nav">
                        <a class="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- Slideshow | END -->
                <div id="content">
                    <h2><strong>Habitación</strong> Matrimonial</h2>
                    <p>Cómoda y confortable habitación con una cama matrimonial, decorada con un estilo agradable de colores suaves donde el toque especial lo brinda una hermosa y relajante vista a la bahía de Pampatar y a la piscina.</p>
                    <p>
                        Para satisfacer a nuestros visitantes, todas las habitaciones cuentan con las siguientes comodidades:
                    </p>
    
                    @include('caracteristicasHabitacion')
                    
                </div>
            </div>
            <!-- Sidebar | START -->
            <aside>
            	<div id="scroll">
                    <div id="block">
                        <div class="blocktitle">
                            <span><i class="fa fa-bed" aria-hidden="true"></i> Habitaciones</span>
                            <!--<a href="contact.php"><span>Bs. S {{ $precioMatrimonial }}</span> por noche</a>-->
                        </div>
                        
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