    <!-- Navigation | START -->
    <div id="nav">
        <div class="centre">

            @if ( !empty(Route::current()))

                @if (Route::current()->getName() == 'homeIngles')

                    <a href="{{ route('homeIngles')}}" class="logo">

                        <img alt="" src="{{ asset('base-hotel/system/images/logohvc.png') }}" />

                    </a>

                @else

                    <a href="{{ route('homeIngles')}}" class="logo2">

                        <img alt="" src="{{ asset('base-hotel/system/images/logohvc2.png') }}" />

                    </a>            
                
                @endif

            @else

                    <a href="{{ route('homeIngles')}}" class="logo2">

                        <img alt="" src="{{ asset('base-hotel/system/images/logohvc2.png') }}" />

                    </a>               

            @endif  

            <nav>
                <ul>
                	<li class="mobile"><a href="{{ route('contactIngles')}}" class="navbook"> Book Online</a></li>
                    <li><a href="{{ route('homeIngles')}}" title="Inicio"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><a href="{{ route('aboutIngles')}}">HVC</a>
                    <li><a href="{{ route('accommodationIngles')}}">Accommodation</a>

                        <ul>
                            <li><a href="{{ route('matrimonialIngles') }}">Matrimonial Room</a></li>
                            <li><a href="{{ route('matrimonialSofaIngles') }}">Matrimonial Room + Sofa</a></li>
                            <li><a href="{{ route('dobleIngles') }}">Double Room</a></li>
                            <li><a href="{{ route('duplexIngles') }}">Duplex 2 Main Rooms</a></li>
                        </ul>

                    </li>
                    <li><a href="{{ route('especialIngles')}}">Services</a></li>
                    <li><a href="{{ route('galleryIngles')}}">Gallery</a></li>
                    <li><a href="{{ route('restaurantIngles')}}">Restaurant</a></li>
                    <li><a href="{{ route('eventosIngles')}}">Events</a></li>
                
                    <li><a href="#">Partners</a>

                        <ul>
                            <li><a href="{{ route('rciIngles') }}">Partner RCI</a></li>
                            <li><a href="{{ route('sociosIngles') }}">Member Service</a></li>
                            <li><a href="{{ route('flyIngles') }}">Fly & Buy</a></li>
                        </ul>

                    </li>
                    <li><a href="{{ route('contactIngles')}}">Contact us</a></li>
                </ul>
                <a id="pull"><i class="fa fa-bars"></i></a>
            </nav>
            <!-- Languages | START -->
            <div id="language">
            	<ul>
                	<li class="en"><a>EN</a></li>
                    <li class="es"><a href="{{ route('home')}}">ES</a></li>
                    
                </ul>
            </div>
            <!-- Languages | END -->

            @if (Auth::user())
                <a href="{{ route('logout') }}" class="book" title="Logout">
                    <span data-hover="{{ Auth::user()->name }}">{{ Auth::user()->name }}</span>
                    
                </a>
            @else
                <a href="{{ url('/login') }}" class="promopopup book" >
                    <span data-hover="Log In Now">Log In Now</span> 
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>
            @endif

            <div class="shadow"></div>
        </div>
    </div>
    <!-- Navigation | END -->