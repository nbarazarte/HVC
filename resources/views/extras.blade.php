<!-- Sitewide Extras | START -->
    <div id="extras">
        <div class="centre">

            @if ( 

                    (Route::current()->getName() != 'especial') &&
                    (Route::current()->getName() != 'matrimonial') &&
                    (Route::current()->getName() != 'matrimonialSofa') &&
                    (Route::current()->getName() != 'doble') &&
                    (Route::current()->getName() != 'duplex') 

                )

                <!-- List Items (Specials Slider) | START -->
                <div id="specials" class="list">
                    <div class="back">
                        <div class="slider">
                            <div class="item">
                                <img alt="" src="{{ asset('base-hotel/preview/images/knela.jpg') }}" width="1200" height="400" />
                                <div class="details">
                                    <a href="{{ route('especial')}}">
                                        <div class="title">Piel Knela<br />
                                        <span>Collection C.A.</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.<br />
                                        <strong>Stay from $249 per night</strong></p>
                                        <div class="button"><span data-hover="Ver más">Ver más</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <img alt="" src="{{ asset('base-hotel/preview/images/joe.jpg') }}" width="*" height="400" />
                                <div class="details">
                                    <a href="{{ route('especial')}}">
                                        <div class="title">JOE'S<br />
                                        <span>Restaurant</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.<br />
                                        <strong>Stay from $249 per night</strong></p>
                                        <div class="button"><span data-hover="Ver más">Ver más</span></div>
                                    </a>
                                </div>
                            </div>                        
                            <div class="item">
                                <img alt="" src="{{ asset('base-hotel/preview/images/bio.jpg') }}" width="1200" height="400" />
                                <div class="details">
                                    <a href="{{ route('especial')}}">
                                        <div class="title">BIO Thai<br />
                                        <span>Center C.A.</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.<br />
                                        <strong>Stay from $249 per night</strong></p>
                                        <div class="button"><span data-hover="Ver más">Ver más</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav"></div>
                </div>
                <!-- List Items (Specials Slider) | END -->

            @endif



            <!-- Recent Blog Posts | START -->
            <div class="recent">
                <a href="blog-post.html">
                    <div class="date">
                        <span class="month">Dec</span>
                        <span class="day">12</span>
                    </div>
                    <p class="title">Our Latest Hotel Awards</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque...</p>
                </a>
                <a href="blog-post.html">
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
                    Un lugar muy agradable, buena música y comida, una vista espectacular al mar.
                </p>
                <div class="author">&ndash; <strong>José Antonio Jaimes</strong> <span>(Caracas, Venezuela)</span></div>
                <a href="{{ route('contact')}}" class="button"><span data-hover="Reservar Ahora">Reservar Ahora</span></a>
            </div>
            <!-- Footer Testimonial | END -->



        </div>
    </div>
    <!-- Sitewide Extras | END -->