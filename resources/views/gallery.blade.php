@extends('app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Galería</span>
                <span class="tagline">Vive de Cerca la Experiencia</span></h1>
            </div>
        </div>
        
    @include('reservacion')

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