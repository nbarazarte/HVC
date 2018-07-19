@extends('en.app')

@section('content')

@foreach ($habitaciones as $hab)

    @if( $hab->str_rooms == "Matrimonial")

        <?php
            $precioMatrimonial = number_format($hab->str_dolares, 2, ',', '.');
        ?>

    @endif

@endforeach

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Matrimonial Room</span>
                <span class="tagline">WE INNOVATE FOR YOU</span></h1>
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
                    	<div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/habitacionMatrimonial.jpg') }}" width="770" height="500" /></div>

                    </div>
                    <div class="nav">
                        <a class="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- Slideshow | END -->
                <div id="content">
                    <h2><strong>Matrimonial</strong> Room</h2>
                    <p>
                        Comfortable room with a double bed, decorated with a pleasant style of soft colors where the special touch gives a beautiful and relaxing view of the Bay of Pampatar and the pool.
                    </p>
                    <p>
                        To satisfy our visitors, all rooms have the following amenities:
                    </p>

                    @include('en.caracteristicasHabitacion')

                </div>
            </div>
            <!-- Sidebar | START -->
            <aside>
            	<div id="scroll">
                    <div id="block">
                        <div class="blocktitle">
                            <span><i class="fa fa-bed" aria-hidden="true"></i> Rooms</span>
                            <!--<a href="contact.php">Stay from <span>${{ $precioMatrimonial }}</span> per night</a>-->
                        </div>
                        
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