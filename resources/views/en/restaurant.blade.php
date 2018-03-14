@extends('app')

@section('content')

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Restaurant</span>
                <span class="tagline">Una Experiencia Gastronómica</span></h1>
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



        	<div id="">
                <div id="content">

                    <h2><strong>JOE'S Gril</strong> Restaurant</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>



                    <!-- Menu | START -->
                    <section id="menu">
                    	<h3><i class="fa fa-cutlery"></i> Menú de Comidas</h3>
                    	<div class="menu">
                            <h4>
                            	Desayuno <span>7.30am &ndash; 12.00pm</span>
                            	<img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-breakfast.jpg') }}" width="120" height="120" />
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
                            	Almuerzo <span>12.00pm &ndash; 3.30pm</span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-lunch.jpg') }}" width="120" height="120" />
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
                            	Cena <span>5.00pm &ndash; 10.00pm</span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-dinner.jpg') }}" width="120" height="120" />
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
                        <h3><i class="fa fa-glass"></i> Menú de Bebidas</h3>
                    	<div class="menu">
                            <h4>
                            	Alcohólicas
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-drinks2.jpg') }}" width="120" height="120" />
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
                            	Cafetería <span></span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-coffee.jpg') }}" width="120" height="120" />
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

                    </section>
                    <!-- Menu | END -->

                </div>
            </div>

        </div>
    </main>
    <!-- Content | END -->

@endsection