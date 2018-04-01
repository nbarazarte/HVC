@extends('en.app')

@section('content')

@foreach ($habitaciones as $hab)

    @if( $hab->str_habitacion == "Duplex 2 Ambientes")

        <?php
            $precioDuplex = number_format($hab->str_dolares, 2, ',', '.');
        ?>

    @endif

@endforeach

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Duplex 2 Main Rooms</span>
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
                    <h2><strong>Duplex 2</strong> Main Rooms</h2>
                    <p>
                        Comfortable room for the whole family, decorated with a pleasant style of soft colors where the special touch gives a beautiful and relaxing view of the Bay of Pampatar and the pool.                        
                    </p>
                    <p>                        
                        The room has two rooms, one with a double bed and the other with two single beds, a living room with 2 sofa beds and a kitchen equipped and ready to use.<br>
                        To satisfy our visitors, all rooms have the following amenities:                                        
                    </p>

                    @include('en.caracteristicasHabitacion')

                </div>
            </div>
            <!-- Sidebar | START -->
            <aside>
            	<div id="scroll">
                    <div id="block">
                        <div class="blocktitle"><a href="contact.php">Stay from <span>${{ $precioDuplex }}</span> per night</a></div>
                        
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