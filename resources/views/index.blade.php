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
                Disfrutaras de Alojamiento en confortables habitaciones con Desayuno Incluido, Wi-Fi, Piscinas Panorámicas, Jacuzzi, Servicio de Toallas, Entretenimiento diurno, Agencia de Viajes, Acceso directo al Restauran y estacionamiento techado. Ademas de la cercanía a las playas más reconocidas de la zona gastronómica y la vida nocturna de la Isla de Margarita.
            </p>

            <!-- USP Boxes | START -->
            <section class="usp">
                <div class="box">
                    
                    <i class="fa fa-bed" aria-hidden="true"></i>
                    <h3>Una experiencia hotelera</h3>
                    <p>Cómodas y confortables habitaciones equipadas para toda la familia. Disfrute de nuestra terraza con la mejor vista a la bahía de Pampatar.</p>
                </div>
                <div class="box">
                    <i class="fa fa-cutlery"></i>
                    <h3>Award-Winning Restaurant</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.</p>
                </div>
                <div class="box">
                    <i class="fa fa-users"></i>
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