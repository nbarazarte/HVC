@extends('en.app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>RCI</span>
                <span class="tagline">Enjoy the vacations of your life</span></h1>
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
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-56.jpg') }}" width="1200" height="600" /></div>
                   
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

            <div id="content">
                <h2><strong>RCI</strong></h2>
                <p style="text-align: justify;">
                    RCI is one of the largest companies worldwide Vacation Exchange. RCI Bank operates as a space where you can Placing your vacation week, if you want to use in your Resort, provided you are current on your year and a day with the Condominium, and exchange it for another through them with the same characteristics yours. Not weeks prior years and once deposited deposit your week will not be able to reverse.
                </p>

                <p style="text-align: justify;">
                    Your membership to RCI through its Hippocampus Vacation Club Resort will be up to two free years for the purchase of his contract. After paying all administrative costs will be sent by email within no more business within 45 days of your membership code to enjoy the benefits of being a member of such a prestigious chain exchange.
                </p>

                <p style="text-align: justify;">
                    This way you can make Vacation Exchange with other hotels and affiliated to RCI Resort in and out of Venezuela, in the same season as the availability and capacity you have in Hippocampus, by pre-paying a fee RCI Exchange. The interchange fee is paid in bolivars at RCI if the exchange is national and in case of making international exchange rate will be paid in dollars.
                </p>

                <p style="text-align: justify;">                   
                    Bono Week Certificate given at the time of purchase is valid for one year from RCI membership and has seasonal restrictions and destinations, which are described on the back of it. The week bonus payment does not generate condo fee because it is an additional week, however for the exchange must pay the fee indicated by RCI for use.
                </p>

                <p style="text-align: justify;">
                    Application week deposit upon application from October 1 of each year when you checkout your condo and keep up with all obligations of the contract. Remember to make your request in advance are most likely to have major vacation options depending on your destination to visit.
                </p>

                <p style="text-align: justify;">
                    When you decide to deposit your week should apply through the mail: <strong><a href="mailto:atencionalsocio@hippocampus.com.ve">atencionalsocio@hippocampus.com.ve</a>.</strong><br> or more information you can contact us through our toll Master <strong>+58 (295) 331.13.50.</strong>
    
                    <br> For more information on RCI Exchange chain (Resort Condominiums International, can communicate only by landline through the phone <strong>0800-1003853.</strong>
                </p>
            
                <h2 style="margin:0;"><strong>+58 (295) 331.13.50</strong></h2>
                <p style="margin:0;">
                    <a href="mailto:atencionalsocio@hippocampus.com.ve">atencionalsocio@hippocampus.com.ve</a><br />
                    <i class="fa fa-map-marker"></i> El Cristo Street, Hippocampus Complex building, La Caranta sector.<br> Margarita Island. Venezuela
                </p>  

                <br>

            </div>
        </div>  

    </main>
    <!-- Content | END -->

@endsection