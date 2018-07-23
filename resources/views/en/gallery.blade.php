@extends('en.app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Gallery</span>
                <span class="tagline">Live the Experience Close</span></h1>
            </div>
        </div>
        
    @include('en.reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main id="gallerycontainer">
        <div id="gallery">
            
            @include('fotosGaleria')

        </div>
    </main>
    <!-- Content | END -->

@endsection