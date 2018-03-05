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
                    	<div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/room-1-770.jpg') }}" width="770" height="500" /></div>
                        <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/room-2-770.jpg') }}" width="770" height="500" /></div>
                        <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/room-3-770.jpg') }}" width="770" height="500" /></div>
                    </div>
                    <div class="nav">
                        <a class="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- Slideshow | END -->
                <div id="content">
                    <h2><strong>Habitación Duplex</strong> Inclusions</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
                    <ul class="tags">
                    	<li>Spa Bath</li>
                        <li>King Size Bed</li>
                        <li>Air Conditioning</li>
                        <li>CD Player</li>
                        <li>Dishwasher</li>
                        <li>Cable Television</li>
                        <li>Spacious Living Areas</li>
                        <li>Free Unlimited Wi-Fi</li>
                        <li>24 Hour Room Service</li>
                    </ul>
                    <!-- USP Boxes | START -->
                    <section class="usp">
                        <div class="box">
                            <i class="fa fa-expand"></i>
                            <h3>Spacious Living Areas</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula.</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-wifi"></i>
                            <h3>Free Unlimited Wi-Fi</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-user"></i>
                            <h3>24 Hour Room Service</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.</p>
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
                    <div id="specials" class="list">
                        <div class="slider">
                        	<div class="item">
                                <img alt="" src="{{ asset('base-hotel/preview/images/special-dine-380.jpg') }}" width="380" height="250" />
                                <div class="details">
                                    <a href="specials.html">
                                        <div class="title">Family Escape<br />
                                        <span>Activity Package</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.<br />
                                        <strong>Stay from $249 per night</strong></p>
                                        <div class="button"><span data-hover="View Special">View Special</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <img alt="" src="{{ asset('base-hotel/preview/images/special-spa-380.jpg') }}" width="380" height="250" />
                                <div class="details">
                                    <a href="specials.html">
                                        <div class="title">Rustic Charm<br />
                                        <span>Restaurant Package</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.<br />
                                        <strong>Stay from $249 per night</strong></p>
                                        <div class="button"><span data-hover="View Special">View Special</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="nav"></div>
                    </div>
                    <!-- List Items (Specials Slider) | END -->
                </div>
            </aside>
            <!-- Sidebar | END -->
        </div>
    </main>
    <!-- Content | END -->

@endsection   