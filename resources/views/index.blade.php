@extends('app')

@section('content')

    <!-- Content | START -->
    <main>
        <div class="centre">
            <h1>Experience Luxury & <strong>Find Your Base</strong></h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.</p>
            <!-- USP Boxes | START -->
            <section class="usp">
                <div class="box">
                    <i class="fa fa-trophy"></i>
                    <h3>Rated #1 on TripAdvisor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.</p>
                </div>
                <div class="box">
                    <i class="fa fa-cutlery"></i>
                    <h3>Award-Winning Restaurant</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.</p>
                </div>
                <div class="box">
                    <i class="fa fa-user"></i>
                    <h3>24 Hour Concierge Service</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.</p>
                </div>
            </section>
            <!-- USP Boxes | END -->
        </div>
    </main>
    <!-- Content | END -->

    @include('gallerySlider')

    

@endsection