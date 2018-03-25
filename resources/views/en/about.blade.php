@extends('en.app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Hippocampus Vacation Club</span>
                <span class="tagline">INNOVATING FOR YOU</span></h1>
            </div>
        </div>

        @include('en.reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->
        	<div id="slideshow">
                <div class="slider">
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/HH_Piscina_Torres_06_nosotros.jpg') }}" width="1200" height="600" /></div>
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-49.jpg') }}" width="1200" height="600" /></div>
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-50.jpg') }}" width="1200" height="600" /></div>
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-21.jpg') }}" width="1200" height="600" /></div>
                   
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div id="content">
                <h2><strong>ATTENTION OF SERVICE </strong> AND QUALITY</h2>

                <p style="text-align: justify;">
                    Hippocampus Vacation Club, CA from 1992 became an organization of tourist services (Hospitality & Timeshare), with an excellent location on the island of Margarita and ability to provide quality answers to their customers. With over <?=$ano = date('Y') - 1992 ?> years of experience and great learning in the area, our focus is to keep our organization within the preference of national and international tourists, focusing and guiding our efforts to fully satisfy the expectations of each of our users to When planning your holiday and choose destination Margarita Island.
                </p>                

                <p style="text-align: justify;">                    
                    Our mission is to be the preferred option for families when planning your vacation on the island of Margarita, characterized by our focus on meeting the expectations of our customers by providing good service and quality care.
                </p>

                <p style="text-align: justify;">                    
                    We have the vision of becoming the best tourist organization Margarita Island, synonym and guarantee unforgettable holidays and pleasant experiences framed in the cozy atmosphere of its facilities and services aimed at the satisfaction.
                </p>
                
                <p style="text-align: justify;">                 
                    With the best location facing the Bay of Pampatar and a few minutes from shopping centers and the city of Porlamar <strong>HIPPOCAMPUS VACATION CLUB</strong> has the following facilities to its guests:                    
                </p>

                <ul class="tags">
                    <li>Comfortable Rooms</li>
                    <li>Security Box</li>
                    <li>WI-FI service</li>
                    <li>Buffet Breakfast</li>
                    <li>2 Panoramic Pools + Jacuzzi</li>
                    <li>Sun loungers and Parasols</li>
                    <li>Panoramic Terrace</li>                    
                    <li>Restaurant</li>
                    <li>Entreteinment Activities</li>
                    <li>Meeting Room</li>
                    <li>Taxi Line</li>
                    <li>Spa</li>
                    <li>Minimarket</li>
                    <li>Internet Lounge</li>
                    <li>Covered Parking</li>
                </ul>
                <!-- Stats | START -->
                <section id="stats">
                	<h3>Last Month at Base Hotel</h3>
                    <figure>
                    	<strong>266</strong><br />
                        <span>Guests Stayed</span>
                    </figure>
                    <figure>
                    	<strong>478</strong><br />
                        <span>Meals Served</span>
                    </figure>
                    <figure>
                    	<strong>93</strong><br />
                        <span>Tours Booked</span>
                    </figure>
                    <figure>
                    	<strong>122</strong><br />
                        <span>Spa Treatments</span>
                    </figure>
                </section>
                <!-- Stats | END -->
            </div>
        </div>
        <!-- Instagram | START -->
        <div id="instagram">
            <p>
                @HippocampusVC 
                <a href="https://twitter.com/HippocampusVC" target="_blank"> <i class="fa fa-twitter"></i> Twitter</a> 
                <a href="https://www.instagram.com/hippocampusvc/" target="_blank"> <i class="fa fa-instagram"></i> Instagram</a> 
            </p>
            <p>
                Hippocampus Vacation Club 
                <a href="https://es-la.facebook.com/Hippocampus-Vacation-Club-210418352330415/" target="_blank"> <i class="fa fa-facebook"></i> Facebook</a> 
            </p>            
        </div>
        <!-- Instagram | END -->

        <!-- Feature List | START -->
        <section id="featurelist">
        	<div class="centre">
            	<h2>Hippocampus Vacation Club</h2>
                
                <!-- Video | START -->
                <div id="video">
                    <div class="embed-container"><iframe src="http://player.vimeo.com/video/258211037?title=0&portrait=0" width="1200" height="675" allowfullscreen></iframe></div>
                </div>
                <!-- Video | END -->

            </div>
        </section>
        <!-- Feature List | END -->

    </main>
    <!-- Content | END -->

@endsection