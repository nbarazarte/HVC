@extends('en.app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Fly & Buy</span>
                <span class="tagline">Discover the advantages of being our partner</span></h1>
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
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/wing-221526_1280.jpg') }}" width="1200" height="600" /></div>

                   
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

            <div id="content">
                <h2><strong>Fly & Buy</strong></h2>
                <p style="text-align: center;">
                    <strong>Hippocampus Vacation Club</strong> offers you the opportunity to enjoy a weekend at his family through <strong>Fly & Buy</strong> program, where you can discover and learn about the advantages of being our partner.
                </p>


                <p>
                    Learn about our promotional packages, call us:
                </p>


                <h2 style="margin:0;"><strong>+58 (295) 331.13.80</strong></h2>
                <p style="margin:0;">
                    <a href="mailto:dfuenmayor@hippocampus.com.ve">dfuenmayor@hippocampus.com.ve</a><br />
                    <i class="fa fa-map-marker"></i> El Cristo Street, Hippocampus Complex building, La Caranta sector. <br> Margarita Island. Venezuela       
                </p>  

                <br>

            </div>
        </div>  

    </main>
    <!-- Content | END -->

@endsection