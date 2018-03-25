@extends('en.app')

@section('content')

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
                            <span>Stay from $149 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="See more">See more</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/matrimonialSofa.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('matrimonialSofaIngles')}}">
                            <h3 class="title">Matrimonial + Sofa<br />
                            <span>Stay from $199 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="See more">See more</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/doble.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('dobleIngles')}}">
                            <h3 class="title">Double Room<br />
                            <span>Stay from $225 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="See more">See more</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/duplex.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('duplexIngles')}}">
                            <h3 class="title">Duplex 2 Main Rooms<br />
                            <span>Stay from $240 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
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
                
                <table>
                    <tr>
                        <th>Tipo de Habitación</th>
                        <th>Temporada Baja</th>
                        <th>Temporada Media</th>
                        <th>Temporada Alta</th>
                    </tr>
                    <tr>
                        <td><strong>Matrimonial Room</strong></td>
                        <td>$149</td>
                        <td>$169</td>
                        <td>$199</td>
                    </tr>
                    <tr>
                        <td><strong>Matrimonial Room + Sofa</strong></td>
                        <td>$199</td>
                        <td>$219</td>
                        <td>$249</td>
                    </tr>
                    <tr>
                        <td><strong>Double Room</strong></td>
                        <td>$225</td>
                        <td>$245</td>
                        <td>$275</td>
                    </tr>
                    <tr>
                        <td><strong>Duplex 2 Main Rooms</strong></td>
                        <td>$240</td>
                        <td>$260</td>
                        <td>$290</td>
                    </tr>

                </table>
                <a href="{{ route('contactIngles')}}" class="button"><span data-hover="Book Online">Book Online</span></a>
            </div>

        </div>
    </main>
    <!-- Content | END -->

@endsection