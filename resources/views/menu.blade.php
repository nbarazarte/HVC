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
                    @if (Auth::user())
                        <li class="mobile"><a href="{{ route('logout')}}" class="navbook">Cerrar Sesión {{ Auth::user()->name }}</a></li>
                    @else
                        <li class="mobile"><a href="{{ url('/login')}}" class="navbook">Entrar/Registro</a></li>
                    @endif
                    <li><a href="{{ route('home')}}" title="Inicio"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><a href="{{ route('about')}}">HVC</a>
                    <li><a href="{{ route('accommodation')}}">Habitaciones</a>

                        <ul>
                            <li><a href="{{ route('matrimonial') }}">Habitación Matrimonial</a></li>
                            <li><a href="{{ route('suite') }}">Habitación Suite</a></li>
                            <li><a href="{{ route('doble') }}">Habitación Doble (2 Camas Mat.)</a></li>
                            <li><a href="{{ route('familiar') }}">Habitación Familiar 1-3 Pax 2 Ambientes</a></li>
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
                    <span data-hover="Cerrar Sesión">{{ Auth::user()->name }}</span>
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>
            @else
                <a href="{{ url('/login') }}" class="promopopup book" title="Iniciar Sesión">
                    <span data-hover="Entrar/Registro">Entrar/Registro</span> 
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>
            @endif
            <div class="shadow"></div>
        </div>
    </div>
    <!-- Navigation | END -->