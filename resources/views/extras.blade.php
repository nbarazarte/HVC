<!-- Sitewide Extras | START -->
    <div id="extras">
        <div class="centre">

         @if ( !empty( Route::current() ))

            @if ( 

                    (Route::current()->getName() != 'especial') &&
                    (Route::current()->getName() != 'matrimonial') &&
                    (Route::current()->getName() != 'matrimonialSofa') &&
                    (Route::current()->getName() != 'doble') &&
                    (Route::current()->getName() != 'duplex')

                )

               @include('extras2')

            @endif

        @else

            @include('extras2')

        @endif

<!-- Recent Blog Posts | START -->
            <div class="recent">
                <a href="#">
                    <div class="date">
                        <span class="month">Dec</span>
                        <span class="day">12</span>
                    </div>
                    <p class="title">Our Latest Hotel Awards</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque...</p>
                </a>
                <a href="#">
                    <div class="date">
                        <span class="month">Nov</span>
                        <span class="day">27</span>
                    </div>
                    <p class="title">Free Wi-Fi in all rooms</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque...</p>
                </a>
            </div>
            <!-- Recent Blog Posts | END -->

            <!-- Footer Testimonial | START -->
            <div class="footertestimonial">
                <i class="fa fa-quote-left"></i>
                <p class="title">Un lugar ideal para el descanso</p>
                <p>
                    Un lugar muy agradable, con buena música y comida y una vista espectacular al mar.<br>
                    Excelente atención de parte de su personal, volvería con toda seguridad.
                </p>
                <div class="author">&ndash; <strong>Jaennie Pineda</strong> <span>(Caracas, Venezuela)</span></div>
                <a href="{{ route('contact')}}" class="button"><span data-hover="Reservar Ahora">Reservar Ahora</span></a>
            </div>
            <!-- Footer Testimonial | END -->

        </div>
    </div>
    <!-- Sitewide Extras | END -->