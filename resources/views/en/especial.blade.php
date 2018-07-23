@extends('en.app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Special Services</span>
                <span class="tagline">Shops, Spa, Restaurant and Internet</span></h1>
            </div>
        </div>
        
        @include('en.reservacion')

    </header>
    <!-- Header | END -->
    <!-- Specials | START -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
            <div class="special">
                <div class="img">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/model-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                    <h2>Shops<br />
                    <span></span></h2>
                        <p align="justify">
                            
                            In our store we advise you with the perfect swimsuit to wear during your stay at the Hippocampus Vacation Club hotel.<br>
                            We have a variety of accessories for ladies and soon for men.<br>                           
                            Did you arrive at Hippocampus Vacation Club and do not have a bathing suit? Do not worry, here you will find what you need.
                        </p>

                </div>
            </div>
            <div class="special">
                <div class="img">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/joe-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                    <h2>Restaurant<br />
                    <span></span></h2>
                    <p align="justify">
                        A place full of magic and fusions of flavors<br>
                        Visit us! Here all is Always Delicious!
                    </p>

                    <!-- Instagram | START -->
                    <!--
                    <div id="instagram">
                        <p>
                            @JoesGrilMargarita 
                            
                            <a href="https://www.instagram.com/joesgrilmargarita/" target="_blank"> <i class="fa fa-instagram"></i> Instagram</a> 
                        </p>
                      
                    </div>
                    -->
                    <!-- Instagram | END -->                    
                    
                    <a href="{{ route('restaurantIngles') }}" class="button"><span data-hover="See more">See more</span></a>
                    

                </div>
            </div>                     
        	<div class="special">
            	<div class="img">
                	<div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/biothai-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                	<h2>BioThai<br />
                    <span>Center C.A.</span></h2>
                    <p align="justify">
                        In BioThai Center we are an oasis located in the heart of Pampatar.<br>
                        A place of well-being and personal care for men and women, designed to improve both the physical and emotional health of the body and forget about the stress of the city.
                    </p>
        
                    <!-- Instagram | START -->
                    <div id="instagram">
                        <p>
                            @Biothaispa 
                            
                            <a href="https://www.instagram.com/biothaispa/" target="_blank"> <i class="fa fa-instagram"></i> Instagram</a> 
                        </p>
                      
                    </div>
                    <!-- Instagram | END -->                            

                </div>
            </div>

            <div class="special">
                <div class="img">
                    <div class="imgcontainer"><img alt="" src="{{ asset('base-hotel/preview/images/ciber-770.jpg') }}" width="770" height="400" /></div>
                </div>
                <div class="details">
                    <h2>Internet Lounge<br />
                    <span>HVC</span></h2>
                    <p align="justify">
                        In addition to offering our guests Wi-Fi service, we also have an exclusive area to access the internet 24 hours a day during your stay at the hotel.<br>
                        Stay connected to the world when you need it.
                    </p>                    

                </div>
            </div>            

        </div>
    </main>
    <!-- Content | END -->

@endsection