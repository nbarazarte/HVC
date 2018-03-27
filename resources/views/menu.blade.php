    <!-- Navigation | START -->
    <div id="nav">
        <div class="centre">

            @if ( !empty(Route::current()))

                @if (Route::current()->getName() == 'home')

                    <a href="{{ route('home')}}" class="logo">

                        <img alt="" src="{{ asset('base-hotel/system/images/logohvc.png') }}" />

                    </a>

                @else

                    <a href="{{ route('home')}}" class="logo2">

                        <img alt="" src="{{ asset('base-hotel/system/images/logohvc2.png') }}" />

                    </a>            
                
                @endif

            @else

                    <a href="{{ route('home')}}" class="logo2">

                        <img alt="" src="{{ asset('base-hotel/system/images/logohvc2.png') }}" />

                    </a>               

            @endif  

            <nav>
                <ul>
                	<li class="mobile"><a href="{{ route('contact')}}" class="navbook">Reservar Ahora</a></li>
                    <li><a href="{{ route('home')}}" title="Inicio"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><a href="{{ route('about')}}">HVC</a>
                    <li><a href="{{ route('accommodation')}}">Habitaciones</a>

                        <ul>
                            <li><a href="{{ route('matrimonial') }}">Habitación Matrimonial</a></li>
                            <li><a href="{{ route('matrimonialSofa') }}">Habitación Matrimonial + Sofá</a></li>
                            <li><a href="{{ route('doble') }}">Habitación Doble</a></li>
                            <li><a href="{{ route('duplex') }}">Habitación Duplex 2 Ambientes</a></li>
                        </ul>

                    </li>
                    <li><a href="{{ route('especial')}}">Servicios</a></li>
                    <li><a href="{{ route('gallery')}}">Galería</a></li>
                    <li><a href="{{ route('restaurant')}}">Restaurante</a></li>
                    <li><a href="{{ route('eventos')}}">Eventos</a></li>
                
                    <li><a href="#">Socios</a>

                        <ul>
                            <li><a href="{{ route('rci') }}">Socio RCI</a></li>
                            <li><a href="{{ route('socios') }}">Atención al Socio</a></li>
                            <li><a href="{{ route('fly') }}">Fly & Buy</a></li>
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
                    <li class="en"><a href="{{ route('homeIngles')}}">EN</a></li>
                    
                </ul>
            </div>
            <!-- Languages | END -->

            @if (Auth::user())
                <a href="{{ route('logout') }}" class="book" title="Cerrar Sesión">
                    <span data-hover="{{ Auth::user()->name }}">{{ Auth::user()->name }}</span>
                    
                </a>
            @else
                <a href="{{ url('/login') }}" class="promopopup book">
                    <span data-hover="Iniciar Sesión">Iniciar Sesión</span> 
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>
            @endif
            <div class="shadow"></div>
        </div>
    </div>
    <!-- Navigation | END -->