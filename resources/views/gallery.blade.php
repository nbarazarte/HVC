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
    
<!-- Feature --><figure class="item-w2 item-h2">
    <a href="{{ asset('base-hotel/preview/images/HH_Piscina_Torres_06.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/HH_Piscina_Torres_06.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<figure class="">
    <a href="{{ asset('base-hotel/preview/images/HH_Piscina_Toldos_07.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/HH_Piscina_Toldos_07.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<figure class="">
    <a href="{{ asset('base-hotel/preview/images/HH_Piscina_Villas_02.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/HH_Piscina_Villas_02.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<figure class="">
    <a href="{{ asset('base-hotel/preview/images/HH_Piscina_Vista_06.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/HH_Piscina_Vista_06.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<figure class="">
    <a href="{{ asset('base-hotel/preview/images/HH_PIscina_Vista_01.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/HH_PIscina_Vista_01.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<!-- Portrait --><figure class="item-h2">
    <a href="{{ asset('base-hotel/preview/images/HH_Spa_01.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/HH_Spa_01.jpg') }}" width="600" height="900" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<!-- Portrait --><figure class="item-h2">
    <a href="{{ asset('base-hotel/preview/images/gallery-7.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-7.jpg') }}" width="600" height="900" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<!-- Feature --><figure class="item-w2 item-h2">
    <a href="{{ asset('base-hotel/preview/images/HH_Vista_03.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/HH_Vista_03.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<!-- Feature --><figure class="item-w2 item-h2">
    <a href="{{ asset('base-hotel/preview/images/gallery-8.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-8.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<!-- Feature --><figure class="item-w2 item-h2">
    <a href="{{ asset('base-hotel/preview/images/gallery-12.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-12.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<figure class="">
    <a href="{{ asset('base-hotel/preview/images/gallery-2.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-2.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<figure class="">
    <a href="{{ asset('base-hotel/preview/images/gallery-11.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-11.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<!-- Portrait --><figure class="item-h2">
    <a href="{{ asset('base-hotel/preview/images/gallery-16.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-16.jpg') }}" width="600" height="900" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<!-- Portrait --><figure class="item-h2">
    <a href="{{ asset('base-hotel/preview/images/gallery-13.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-13.jpg') }}" width="600" height="900" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<figure class="">
    <a href="{{ asset('base-hotel/preview/images/gallery-15.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-15.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<figure class="">
    <a href="{{ asset('base-hotel/preview/images/gallery-10.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-10.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<!-- Feature --><figure class="item-w2 item-h2">
    <a href="{{ asset('base-hotel/preview/images/gallery-14.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-14.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>
<!-- Feature --><figure class="item-w2 item-h2">
    <a href="{{ asset('base-hotel/preview/images/gallery-17.jpg') }}">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" data-original="{{ asset('base-hotel/preview/images/gallery-17.jpg') }}" width="900" height="600" src="{{ asset('base-hotel/system/images/blank.png') }}" />
    </a>
</figure>

        </div>
    </main>
    <!-- Content | END -->

@endsection