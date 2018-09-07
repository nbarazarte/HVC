@extends('app')

@section('content')

@foreach ($habitaciones as $hab)

    @if( $hab->str_habitacion == "Matrimonial")

        <?php
            $precioMatrimonial = number_format($hab->str_precio, 2, ',', '.');
            $precioMatrimonial_alojamiento = number_format($hab->str_precio_alojamiento, 2, ',', '.');
        ?>

    @elseif( $hab->str_habitacion == "Suite")

        <?php
            $precioSuite = number_format($hab->str_precio, 2, ',', '.');
            $precioSuite_alojamiento = number_format($hab->str_precio_alojamiento, 2, ',', '.');
        ?>

    @elseif( $hab->str_habitacion == "Doble")

        <?php
            $precioDoble = number_format($hab->str_precio, 2, ',', '.');
            $precioDoble_alojamiento = number_format($hab->str_precio_alojamiento, 2, ',', '.');
        ?>    

    @elseif( $hab->str_habitacion == "Familiar")

        <?php
            $precioFamiliar = number_format($hab->str_precio, 2, ',', '.');
            $precioFamiliar_alojamiento = number_format($hab->str_precio_alojamiento, 2, ',', '.');
        ?>

    @elseif( $hab->str_habitacion == "Duplex")

        <?php
            $precioDuplex = number_format($hab->str_precio, 2, ',', '.');
            $precioDuplex_alojamiento = number_format($hab->str_precio_alojamiento, 2, ',', '.');
        ?>

    @elseif( $hab->str_habitacion == "Pax Adicional")

        <?php
            $precioPax = number_format($hab->str_precio, 2, ',', '.');
            $precioPax_alojamiento = number_format($hab->str_precio_alojamiento, 2, ',', '.');
        ?>    

    @elseif( $hab->str_habitacion == "Niños")

        <?php
            $precioNiños = number_format($hab->str_precio, 2, ',', '.');
            $precioNiños_alojamiento = number_format($hab->str_precio_alojamiento, 2, ',', '.');
        ?>        

    @endif

@endforeach

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Habitaciones</span>
                <span class="tagline">Modernas y Cómodas Habitaciones</span></h1>
            </div>
        </div>

        @include('reservacion')

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
                        <a href="{{ route('matrimonial')}}">
                            <h3 class="title"> Matrimonial<br />
                            <!-- 
                                <span>Desde Bs. S {{ $precioMatrimonial }} por noche</span>
                            -->
                            </h3>
                            <p>
                                Cómoda y confortable habitación con una cama matrimonial, decorada con un estilo agradable de colores suaves donde el toque especial lo brinda una hermosa y relajante vista a la bahía de Pampatar y a la piscina.                                
                            </p>
                            <div class="button"><span data-hover="Ver más">Ver más</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/matrimonialSofa.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('suite')}}">
                            <h3 class="title"> Suite<br />
                            <!--    
                                <span>Desde Bs. S {{ $precioSuite }} por noche</span>
                            -->
                            </h3>
                            <p>
                                Cómoda y confortable habitación la cual se ofrece en dos presentaciones: una cama matrimonial, y un sofá o una cama matrimonial y dos sofás camas individuales.
                            </p>
                            <div class="button"><span data-hover="Ver más">Ver más</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/doble.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('doble')}}">
                            <h3 class="title"> Doble (2 Camas Mat.)<br />
                            <!--
                                <span>Desde Bs. S {{ $precioDoble }} por noche</span>
                            -->
                            </h3>
                            <p>
                                Cómoda y confortable habitación con dos camas matrimoniales, decorada con un estilo agradable de colores suaves donde el toque especial lo brinda una hermosa y relajante vista a la bahía de Pampatar y a la piscina.                                
                            </p>
                            <div class="button"><span data-hover="Ver más">Ver más</span></div>
                        </a>
                    </div>
                </div>
                <!--<div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/duplex.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('familiar')}}">
                            <h3 class="title"> Familiar 1-3 Pax 2 Ambientes<br />
                            <!--    
                                <span>Desde Bs. S {{ $precioFamiliar }} por noche</span>
                            -->
                            <!--</h3>
                            <p>
                                Cómoda y confortable habitación para toda la familia que cuenta con dos cuartos, uno con una cama matrimonial y el otro con dos camas individuales, una sala de estar con 2 sofá cama y una cocina equipada y lista para utilizar.
                            </p>
                            <div class="button"><span data-hover="Ver más">Ver más</span></div>
                        </a>
                    </div>
                </div>-->

            </section>


            <!-- List Items (Rooms) | END -->
            <div id="content">
                <h2><strong>HOTEL HIPPOCAMPUS VACATION CLUB</strong> <?=date('Y') - 1992?> años en la Isla de Margarita</h2>
                <p>
                    Toda una experiencia hotelera a su servicio, con un concepto diferente en alojamiento.
                    Cómodas habitaciones equipadas para toda su familia. Disfrute de nuestra terraza con la mejor vista de la bahía de Pampatar. Celebre con nosotros eventos especiales y corporativos.
                </p>

            <h2 style="margin:0;"><strong>+58 (295) 331.13.20</strong></h2>
            <p style="margin:0;">
                <a href="mailto:mmota@hippocampus.com.ve">mmota@hippocampus.com.ve</a>        
            </p> 
            <h2 style="margin:0;"><strong>+58 (295) 331.13.23</strong></h2>
            <p style="margin:0;">
                <a href="mailto:reservaciones1@hippocampus.com.ve">reservaciones1@hippocampus.com.ve</a><br />
                <i class="fa fa-map-marker"></i>  Calle El Cristo, edifc. Complejo Hippocampus, sector La Caranta.<br />Isla de Margarita. Venezuela            
            </p>                               
                
                <!--<table>
                    <tr>
                        <th>Habitación</th>
                        <th>Desayuno Incluido <hr> Del {{ $hab->str_fecha_desde }} al {{ $hab->str_fecha_hasta }}</th>
                        <th>Sólo Alojamiento <hr> Del {{ $hab->str_fecha_desde }} al {{ $hab->str_fecha_hasta }}</th>
                    </tr>
                    <tr>
                        <td><strong>Matrimonial</strong></td>
                        <td>Bs. S {{ $precioMatrimonial }}</td>
                        <td>Bs. S {{ $precioMatrimonial_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Doble (2 Camas Mat.)</strong></td>
                        <td>Bs. S {{ $precioSuite }}</td>
                        <td>Bs. S {{ $precioSuite_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Suite</strong></td>
                        <td>Bs. S {{ $precioDoble }}</td>
                        <td>Bs. S {{ $precioDoble_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Familiar 1-3 Pax 2 Ambientes</strong></td>
                        <td>Bs. S {{ $precioFamiliar }}</td>
                        <td>Bs. S {{ $precioFamiliar_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Duplex 6 Pax</strong></td>
                        <td>Bs. S {{ $precioDuplex }}</td>
                        <td>Bs. S {{ $precioDuplex_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Pax Adicional</strong></td>
                        <td>Bs. S {{ $precioPax }}</td>
                        <td>Bs. S {{ $precioPax_alojamiento }}</td>
                    </tr>
                    <tr>
                        <td><strong>Niños (6 - 11)</strong></td>
                        <td>Bs. S {{ $precioNiños }}</td>
                        <td>Bs. S {{ $precioNiños_alojamiento }}</td>
                    </tr>                    

                </table>-->
                <a href="{{ route('contact')}}" class="button"><span data-hover="Reservar Ahora">Reservar Ahora</span></a>
            </div>

        </div>
    </main>
    <!-- Content | END -->

@endsection