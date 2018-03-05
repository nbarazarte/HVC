@extends('app')

@section('content')

    <!-- Content | START -->
    <main>
        <div class="centre">
            <h1>Disfruta con nosotros <strong>la mejor Experiencia en Margarita</strong></h1>
            <p>
                Su Hotel Hippocampus Vacation Club tiene una ubicación privilegiada frente a la hermosa bahía de Pampatar, Contando con 146 habitaciones de uso Hotelero y Tiempo Compartido. Situado a solo 50 minutos del aeropuerto Internacional del Caribe Santiago Mariño y a 15 minutos de la ciudad de Porlamar.
            </p>

            <p>
                Disfrutaras de Alojamiento en confortables habitaciones con Desayuno Incluido, Wi-Fi, Piscinas Panorámicas, Jacuzzi, Servicio de Toallas, Entretenimiento diurno, Agencia de Viajes, Acceso directo al Restauran Pad Thai y Estacionamiento Techado. Ademas de la cercanía a las playas más reconocidas de la zona gastronómica y la vida nocturna de la Isla de Margarita.
            </p>



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