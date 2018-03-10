@extends('app')

@section('content')

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Restaurant</span>
                <span class="tagline">A Gourmet Dining Experience</span></h1>
            </div>
        </div>

        @include('reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow | START -->
        	<div id="slideshow">
                <div class="slider">
                    
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/HotelHippocampus-3.jpg') }}" width="1200" height="600" /></div>
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-27.jpg') }}" width="1200" height="600" /></div>

                    
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-24.jpg') }}" width="1200" height="600" /></div>
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <!-- Slideshow | END -->
        	<div id="left">
                <div id="content">
                    <h2><strong>Award-Winning</strong> Restaurant</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
                    <!-- Menu | START -->
                    <section id="menu">
                    	<h3><i class="fa fa-cutlery"></i> Dining Menu</h3>
                    	<div class="menu">
                            <h4>
                            	Breakfast <span>7.30am &ndash; 12.00pm</span>
                            	<img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-breakfast.jpg" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <div class="price">
                                    	<div>$15</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Aliquam tincidunt</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.</p>
                                    <div class="price">
                                    	<div><span>Small</span> $10</div>
                                        <div><span>Large</span> $18</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Vestibulum auctor <span class="tag" title="Vegetarian">V</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer.</p>
                                    <div class="price">
                                    	<div>$18</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Nunc dignissim <span class="tag" title="Vegetarian">V</span> <span class="tag" title="Gluten Free">GF</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <div class="price">
                                    	<div>$19.5</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Lunch <span>12.00pm &ndash; 3.30pm</span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-lunch.jpg" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Cras ornare tristique elit</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <div class="price">
                                    	<div>$18</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Vivamus vestibulum</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer.</p>
                                    <div class="price">
                                    	<div>$22.5</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Praesent placerat <span class="tag" title="Vegetarian">V</span> <span class="tag" title="Dairy Free">DF</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.</p>
                                    <div class="price">
                                    	<div>$24</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Fusce pellentesque <span class="tag" title="Vegetarian">V</span> <span class="tag" title="Gluten Free">GF</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <div class="price">
                                    	<div><span>2 Share</span> $30</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Dinner <span>5.00pm &ndash; 10.00pm</span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-dinner.jpg" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Vestibulum commodo</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <div class="price">
                                    	<div>$25</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Ut aliquam sollicitudin <span class="tag" title="Spicy">S</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer.</p>
                                    <div class="price">
                                    	<div>$27.5</div>
                                    </div>
                                </li>
                                <li class="featured">
                                    <h5>Integer vitae libero <span class="tag">Chef's Pick</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <div class="price">
                                    	<div>$29</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Cras iaculis</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.</p>
                                    <div class="price">
                                    	<div>$28</div>
                                        <div><span>+ Potato</span> $30</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Donec quis dui <span class="tag" title="Vegetarian">V</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer.</p>
                                    <div class="price">
                                    	<div>$30</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3><i class="fa fa-glass"></i> Drinks Menu</h3>
                    	<div class="menu">
                            <h4>
                            	Non-Alcoholic
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-drinks.jpg" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Soft Drinks</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <div class="price">
                                    	<div>$5</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Milkshakes</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer.</p>
                                    <div class="price">
                                    	<div>$5</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Bottled Spring Water</h5>
                                    <div class="price">
                                    	<div>$4</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Coffee <span>By Experienced Baristas</span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-coffee.jpg" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Cappuccino</h5>
                                    <div class="price">
                                    	<div>$4.5</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Flat White</h5>
                                    <div class="price">
                                    	<div>$4.5</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Latte</h5>
                                    <div class="price">
                                    	<div>$4.5</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Macchiato</h5>
                                    <div class="price">
                                    	<div>$4</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Wine <span>From Local Vineyards</span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-wine.jpg" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>2012 - Lorem ipsum dolor sit amet, consectetuer.</p>
                                    <div class="price">
                                    	<div><span>Glass</span> $10</div>
                                        <div><span>Bottle</span> $59</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Cras ornare tristique</h5>
                                    <p>2010 - Lorem ipsum dolor sit amet.</p>
                                    <div class="price">
                                    	<div><span>Glass</span> $12</div>
                                        <div><span>Bottle</span> $65</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Vivamus vestibulum</h5>
                                    <p>2008 - Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <div class="price">
                                    	<div><span>Glass</span> $18</div>
                                        <div><span>Bottle</span> $96</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Fusce pellentesque</h5>
                                    <p>2007 - Lorem ipsum dolor sit amet, consectetuer.</p>
                                    <div class="price">
                                    	<div><span>Glass</span> $22</div>
                                        <div><span>Bottle</span> $115</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- Menu | END -->
                </div>
            </div>
            <!-- Sidebar | START -->
            <aside class="layout2">
            	<div id="scroll">
                	<!-- Reservations Form | START -->
                    <div id="block" class="form">
                        <div class="blocktitle"><span>Reservations</span></div>
                                                <form id="reservations" action="restaurant.php.html#menu" method="post">
                        	<p><strong>+61 8 3456 7890</strong><br />
                            <a href="mailto:dine@basehotel.com">dine@basehotel.com</a></p>
                        	<div class="fieldgroup">
                                <div class="field calendar"><input name="booking-date" type="text" placeholder="Booking Date" id="bookingdate" readonly /><i class="fa fa-calendar-o"></i></div>
                                <div class="field"><input name="booking-people" type="text" placeholder="No. of People" /></div>
                                <div class="field"><input name="booking-name" type="text" placeholder="Your Name" /></div>
                                <div class="field"><input name="booking-email" type="text" placeholder="Email Address" /></div>
                                <div class="field"><input name="booking-phone" type="text" placeholder="Phone Number" /></div>
                            </div>
                            <button name="send" value="sendform"><span data-hover="Book a Table">Book a Table</span></button>
                        </form>
                    </div>
                    <!-- Reservations Form | END -->
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