@extends('app')

@section('content')

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
                            <span>Stay from $149 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="Ver más">Ver más</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/matrimonialSofa.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('matrimonialSofa')}}">
                            <h3 class="title"> Matrimonial + Sofá<br />
                            <span>Stay from $199 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="Ver más">Ver más</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/doble.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('doble')}}">
                            <h3 class="title"> Doble<br />
                            <span>Stay from $225 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="Ver más">Ver más</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/duplex.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('duplex')}}">
                            <h3 class="title"> Duplex<br />
                            <span>Stay from $240 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="Ver más">Ver más</span></div>
                        </a>
                    </div>
                </div>

            </section>


            <!-- List Items (Rooms) | END -->
            <div id="content">
                <h2><strong>HOTEL HIPPOCAMPUS VACATION CLUB</strong> <?=date('Y') - 1992?> años en la Isla de Margarita</h2>
                <p>
                    Toda una experiencia hotelera a su servicio, con un concepto diferente en alojamiento.
                    Cómodas habitaciones equipadas para toda su familia. Disfrute de nuestra terraza con la mejor vista de la bahía de Pampatar. Celebre con nosotros eventos especiales y corporativos.
                </p>
                
                <table>
                    <tr>
                        <th>Tipo de Habitación</th>
                        <th>Temporada Baja</th>
                        <th>Temporada Media</th>
                        <th>Temporada Alta</th>
                    </tr>
                    <tr>
                        <td><strong>Matrimonial</strong></td>
                        <td>$149</td>
                        <td>$169</td>
                        <td>$199</td>
                    </tr>
                    <tr>
                        <td><strong>Matrimonial + Sofá</strong></td>
                        <td>$199</td>
                        <td>$219</td>
                        <td>$249</td>
                    </tr>
                    <tr>
                        <td><strong>Doble</strong></td>
                        <td>$225</td>
                        <td>$245</td>
                        <td>$275</td>
                    </tr>
                    <tr>
                        <td><strong>Duplex</strong></td>
                        <td>$240</td>
                        <td>$260</td>
                        <td>$290</td>
                    </tr>

                </table>
                <a href="contact.php" class="button"><span data-hover="Reservar Ahora">Reservar Ahora</span></a>
            </div>

        </div>
    </main>
    <!-- Content | END -->

@endsection