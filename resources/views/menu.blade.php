    <!-- Navigation | START -->
    <div id="nav">
        <div class="centre">

            @if (Route::current()->getName() == 'home')

                <a href="{{ route('home')}}" class="logo">

                    <img alt="" src="{{ asset('base-hotel/system/images/logohvc.png') }}" />

                </a>

            @else

                <a href="{{ route('home')}}" class="logo2">

                    <img alt="" src="{{ asset('base-hotel/system/images/logohvc2.png') }}" />

                </a>            
            
            @endif  

            <nav>
                <ul>
                	<li class="mobile"><a href="contact.php" class="navbook">Reservar Ahora</a></li>
                    <li><a href="{{ route('home')}}">Inicio</a></li>
                    <li><a href="{{ route('about')}}">Nosotros</a>
                    <li><a href="{{ route('accommodation')}}">Habitaciones</a>

                        <ul>
                            <li><a href="{{ route('matrimonial') }}">Matrimonial</a></li>
                            <li><a href="{{ route('matrimonialSofa') }}">Matrimonial + Sofá</a></li>
                            <li><a href="{{ route('familiar') }}">Familiar</a></li>
                            <li><a href="{{ route('duplex') }}">Duplex</a></li>
                        </ul>

                    </li>
                    <li><a href="{{ route('gallery')}}">Galería</a></li>
                    <li>
                        <a href="about.html">More Pages</a>
                    	<ul>
                        	<li><a href="about.html">About Hotel</a></li>
                            <li><a href="restaurant.php">Restaurant</a></li>
                            <li><a href="specials.html">Special Offers</a></li>
                            
                            <li><a href="location.html">Location</a></li>
                            <li><a href="blog.html">Our Blog <i class="fa fa-chevron-right"></i></a>
                            	<ul>
                                    <li><a href="blog.html">Blog Overview</a></li>
                                    <li><a href="blog-post.html">Blog Post</a></li>
                                </ul>
                            </li>
                            <li><a href="guest-book.html">Guest Book</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                            <li><a class="promopopup">Promo Popup</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contact')}}">Contáctanos</a></li>
                </ul>
                <a id="pull"><i class="fa fa-bars"></i></a>
            </nav>
            <!-- Languages | START -->
            <div id="language">
            	<ul>
                	<li class="es"><a>ES</a></li>
                    <li class="en"><a href="#">EN</a></li>
                    
                </ul>
            </div>
            <!-- Languages | END -->
            <a href="{{ route('contact')}}" class="book"><span data-hover="Reservar Ahora">Reservar Ahora</span> </a>
            <div class="shadow"></div>
        </div>
    </div>
    <!-- Navigation | END -->