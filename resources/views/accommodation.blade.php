@extends('app')

@section('content')

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Accommodation</span>
                <span class="tagline">Modern Rooms & Spacious Suites</span></h1>
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
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/room-standard-1200.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('matrimonial')}}">
                            <h3 class="title">Standard Room<br />
                            <span>Stay from $149 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="View Room">View Room</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/room-ocean-1200.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('matrimonialSofa')}}">
                            <h3 class="title">Ocean View Room<br />
                            <span>Stay from $199 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="View Room">View Room</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/room-deluxe-1200.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('familiar')}}">
                            <h3 class="title">Deluxe Room<br />
                            <span>Stay from $225 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="View Room">View Room</span></div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/room-junior-1200.jpg')}}" width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{ route('duplex')}}">
                            <h3 class="title">Junior Suite<br />
                            <span>Stay from $240 per night</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>
                            <div class="button"><span data-hover="View Room">View Room</span></div>
                        </a>
                    </div>
                </div>

            </section>


            <!-- List Items (Rooms) | END -->
            <div id="content">
                <h2><strong>Find Your Base</strong> with our selection of rooms & suites</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
                <table>
                    <tr>
                        <th>Room Type</th>
                        <th>Low Season</th>
                        <th>Mid Season</th>
                        <th>High Season</th>
                    </tr>
                    <tr>
                        <td><strong>Standard Room</strong></td>
                        <td>$149</td>
                        <td>$169</td>
                        <td>$199</td>
                    </tr>
                    <tr>
                        <td><strong>Ocean View Room</strong></td>
                        <td>$199</td>
                        <td>$219</td>
                        <td>$249</td>
                    </tr>
                    <tr>
                        <td><strong>Deluxe Room</strong></td>
                        <td>$225</td>
                        <td>$245</td>
                        <td>$275</td>
                    </tr>
                    <tr>
                        <td><strong>Junior Suite</strong></td>
                        <td>$240</td>
                        <td>$260</td>
                        <td>$290</td>
                    </tr>

                </table>
                <a href="contact.php" class="button"><span data-hover="Book a Room">Book a Room</span></a>
            </div>
            <!-- Video | START -->
            <div id="video">
                <div class="embed-container"><iframe src="http://player.vimeo.com/video/258211037?title=0&portrait=0" width="1200" height="675" allowfullscreen></iframe></div>
            </div>
            <!-- Video | END -->

        </div>
    </main>
    <!-- Content | END -->

@endsection