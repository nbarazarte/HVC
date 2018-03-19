@extends('en.app')

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
                    <h3>Toda Una Experiencia Hotelera</h3>
                    <p>Cómodas y confortables habitaciones equipadas para toda la familia. Ven y disfruta de nuestra terraza con la mejor vista a la bahía de Pampatar, te esperamos.</p>
                </div>
                <div class="box">
                    <i class="fa fa-cutlery"></i>
                    <h3>Una Fusión de Sabores</h3>
                    <p>
                        Lo mejor de la Gastronomía de Venezuela converge en cada plato para complacer a los paladares más exigentes, te invitamos a degustar nuestras delicateses.
                    </p>
                </div>
                <div class="box">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    <h3>Encuentros Corporativos</h3>
                    <p>
                        Con instalaciones que cuentan con todo lo necesario para llevar a cabo las más productivas reuniones de negocios en un ambiente cómodo y agradable.
                    </p>
                </div>
            </section>
            <!-- USP Boxes | END -->
        </div>








        
    </main>
    <!-- Content | END -->

    @include('en.gallerySlider')

@endsection