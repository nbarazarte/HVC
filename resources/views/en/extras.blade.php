<!-- Sitewide Extras | START -->
    <div id="extras">
        <div class="centre">

         @if ( !empty( Route::current() ))

            @if ( 

                    (Route::current()->getName() != 'especialIngles') &&
                    (Route::current()->getName() != 'matrimonialIngles') &&
                    (Route::current()->getName() != 'matrimonialSofaIngles') &&
                    (Route::current()->getName() != 'dobleIngles') &&
                    (Route::current()->getName() != 'duplexIngles')

                )

               @include('en.extras2')

            @endif

        @else

            @include('en.extras2')

        @endif

            <!-- Recent Blog Posts | START -->
            <!--
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
                    <p class="title"> Free Wi-Fi in all rooms </p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque...</p>
                </a>
            </div>
            -->
            <!-- Recent Blog Posts | END -->

            <!-- Footer Testimonial | START -->
            <div class="footertestimonial">
                <i class="fa fa-quote-left"></i>
                <p class="title">
                    A ideal place for the rest
                </p>
                <p>
                    A very nice place, with good music, food and a spectacular view of the sea. <br>
                    Excellent attention from your staff, I would go back in all safety.
                </p>
                <div class="author">&ndash; <strong>Jaennie Pineda</strong> <span>(Caracas, Venezuela)</span></div>
                <a href="{{ route('contactIngles')}}" class="button"><span data-hover=" Book online"> Book online</span></a>
            </div>
            <!-- Footer Testimonial | END -->

        </div>
    </div>
    <!-- Sitewide Extras | END -->