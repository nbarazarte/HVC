@extends('en.app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Hippocampus Vacation Club</span>
                <span class="tagline">Innovating for you</span></h1>
            </div>
        </div>

    @include('reservacion')
    
    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->

            <div id="content">

                <h2><strong>Thanks for your </strong> payment!</h2>
                                   
                <p style="">
                    
                    We hope soon! <br>

                    <a href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i> Home</a>

                </p>    
           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection