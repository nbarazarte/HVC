@extends('en.app')

@section('content')

@foreach ($habitaciones as $hab)

    @if( $hab->str_rooms == "Matrimonial")

        <?php
            $precioMatrimonial = number_format($hab->str_dolares, 2, ',', '.');
            $precioMatrimonial_alojamiento = number_format($hab->str_dolares_alojamiento, 2, ',', '.');
        ?>

    @elseif( $hab->str_rooms == "Suite")

        <?php
            $precioSuite = number_format($hab->str_dolares, 2, ',', '.');
            $precioSuite_alojamiento = number_format($hab->str_dolares_alojamiento, 2, ',', '.');
        ?>

    @elseif( $hab->str_rooms == "Double")

        <?php
            $precioDoble = number_format($hab->str_dolares, 2, ',', '.');
            $precioDoble_alojamiento = number_format($hab->str_dolares_alojamiento, 2, ',', '.');
        ?>    

    @elseif( $hab->str_rooms == "Family")

        <?php
            $precioFamiliar = number_format($hab->str_dolares, 2, ',', '.');
            $precioFamiliar_alojamiento = number_format($hab->str_dolares_alojamiento, 2, ',', '.');
        ?>

    @elseif( $hab->str_rooms == "Duplex")

        <?php
            $precioDuplex = number_format($hab->str_dolares, 2, ',', '.');
            $precioDuplex_alojamiento = number_format($hab->str_dolares_alojamiento, 2, ',', '.');
        ?>

    @elseif( $hab->str_rooms == "Additional Pax")

        <?php
            $precioPax = number_format($hab->str_dolares, 2, ',', '.');
            $precioPax_alojamiento = number_format($hab->str_dolares_alojamiento, 2, ',', '.');
        ?>    

    @elseif( $hab->str_rooms == "Children")

        <?php
            $precioNiños = number_format($hab->str_dolares, 2, ',', '.');
            $precioNiños_alojamiento = number_format($hab->str_dolares_alojamiento, 2, ',', '.');
        ?>        

    @endif

@endforeach

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Accommodations</span>
                <span class="tagline">Modern and Comfortable Rooms</span></h1>
            </div>
        </div>

        @include('en.reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->

    <main>
    	<div class="centre">
            <!-- List Items (Rooms) | START -->

            <section id="rooms" class="list">
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/matrimonial.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('matrimonialIngles')}}">
                            <h3 class="title">Matrimonial<br />
                            <span>Stay from ${{ $precioMatrimonial }} per night</span></h3>
                            <p>
                                Comfortable room with a double bed, decorated with a pleasant style of soft colors where the special touch gives a beautiful and relaxing view of the Bay of Pampatar and the pool.
                            </p>
                            <div class="button"><span data-hover="See more">See more</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/matrimonialSofa.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('suiteIngles')}}">
                            <h3 class="title">Suite<br />
                            <span>Stay from ${{ $precioSuite }} per night</span></h3>
                            <p>
                                Comfortable room which is offered in two presentations: a double bed, and a sofa or a double bed and two single sofa beds.
                            </p>
                            <div class="button"><span data-hover="See more">See more</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/doble.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('dobleIngles')}}">
                            <h3 class="title">Double Room<br />
                            <span>Stay from ${{ $precioDoble }} per night</span></h3>
                            <p>
                                Comfortable room with two double beds, decorated with a pleasant style of soft colors where the special touch gives a beautiful and relaxing view of the Bay of Pampatar and the pool.
                            </p>
                            <div class="button"><span data-hover="See more">See more</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/duplex.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('familiarIngles')}}">
                            <h3 class="title">Duplex 2 Main Rooms<br />
                            <span>Stay from ${{ $precioFamiliar }} per night</span></h3>
                            <p>                                
                                Comfortable room for the whole family that has two rooms, one with a double bed and the other with two single beds, a living room with 2 sofa beds and a kitchen equipped and ready to use.                               
                            </p>
                            <div class="button"><span data-hover="See more">See more</span></div>
                        </a>
                    </div>
                </div>

            </section>


            <!-- List Items (Rooms) | END -->
            <div id="content">
                <h2><strong>HOTEL HIPPOCAMPUS VACATION CLUB</strong> <?=date('Y') - 1992?> YEARS IN THE ISLAND OF MARGARITA</h2>
                <p>
                    A hotel experience at your service, with a different concept in accommodation. Comfortable rooms equipped for all your family. Enjoy our terrace with the best view of the Bay of Pampatar. Celebrate special and corporate events with us.
                </p>

            <h2 style="margin:0;"><strong>+58 (295) 331.13.20</strong></h2>
            <p style="margin:0;">
                <a href="mailto:mmota@hippocampus.com.ve">mmota@hippocampus.com.ve</a>        
            </p> 
            <h2 style="margin:0;"><strong>+58 (295) 331.13.23</strong></h2>
            <p style="margin:0;">
                <a href="mailto:reservaciones1@hippocampus.com.ve">reservaciones1@hippocampus.com.ve</a><br />
                <i class="fa fa-map-marker"></i>  El Cristo Street, Hippocampus Complex building, La Caranta sector.<br>Margarita Island. Venezuela            
            </p>                            

                <!--<table>
                    <tr>
                        <th>Room Type</th>
                        <th>Breakfast included <hr> From {{ $hab->str_fecha_desde }} to {{ $hab->str_fecha_hasta }}</th>
                        <th>Accommodation only <hr> From {{ $hab->str_fecha_desde }} to {{ $hab->str_fecha_hasta }}</th>
                    </tr>
                    <tr>
                        <td><strong>Matrimonial</strong></td>
                        <td>$ {{ $precioMatrimonial }}</td>
                        <td>$ {{ $precioMatrimonial_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Double (2 Beds)</strong></td>
                        <td>$ {{ $precioSuite }}</td>
                        <td>$ {{ $precioSuite_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Suite</strong></td>
                        <td>$ {{ $precioDoble }}</td>
                        <td>$ {{ $precioDoble_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Family 1-3 Pax 2 Main Rooms</strong></td>
                        <td>$ {{ $precioFamiliar }}</td>
                        <td>$ {{ $precioFamiliar_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Duplex 6 Pax</strong></td>
                        <td>$ {{ $precioDuplex }}</td>
                        <td>$ {{ $precioDuplex_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Additional Pax</strong></td>
                        <td>$ {{ $precioPax }}</td>
                        <td>$ {{ $precioPax_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Children (6 - 11)</strong></td>
                        <td>$ {{ $precioNiños }}</td>
                        <td>$ {{ $precioNiños_alojamiento }}</td>
                    </tr>                    

                </table>-->                
                <a href="{{ route('contactIngles')}}" class="button"><span data-hover="Book a Room">Book a Room</span></a>
            </div>

        </div>
    </main>
    <!-- Content | END -->

@endsection