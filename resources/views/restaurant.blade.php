@extends('app')

@section('content')

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Restaurant</span>
                <span class="tagline">Una Experiencia Gastronómica</span></h1>
            </div>
        </div>

        @include('reservacion')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow | START -->
        	<div id="slideshow">
                <div class="slider">
                    
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/HotelHippocampus-3.jpg') }}" width="1200" height="600" /></div>
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-27.jpg') }}" width="1200" height="600" /></div>                    
                    <div class="item"><img alt="" src="{{ asset('base-hotel/preview/images/AVH.HotelHippocampus-24.jpg') }}" width="1200" height="600" /></div>
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <!-- Slideshow | END -->

        	<div id="">
                <div id="content">

                    <h2><strong>JOE'S Gril</strong> Restaurant</h2>
                    <p style="text-align: justify;">
                        Nuestra misión dentro del hotel <strong>Hippocampus Vacation Club</strong>, es brindar un servicio extraordinario, ofreciendo una oferta gastronómica variada como: desayunos, almuerzos, snacks, pizzas, cenas, sopas entre muchas más. Proveemos un menú ejecutivo y una gran variedad en la carta para que nuestros huéspedes se sientan a gusto en el restaurant o mientras disfrutan de un día soleado en la piscina.
                    </p>

                    <!-- Menu | START -->
                    <section id="menu">
                    	<h3><i class="fa fa-cutlery"></i> Menú de Comidas</h3>
                    	<div class="menu">
                            <h4>
                            	Desayunos <span></span>
                            	<img alt="" src="{{ asset('base-hotel/preview/images/desayunos.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Sandwich</h5>
                                    <p></p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Arepas</h5>
                                    <p>Queso, Jamón, Jamón y Queso, Carne Mechada, Carne Molida, Dominó, Cazón, Reina Pepiada, Salchicha, Mixta</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Empanadas</h5>
                                    <p>Queso, Carne Mechada, Carne Molida, Pabellón, Dominó, Salchicha</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Pabellon Criollo</h5>
                                    <p>Arroz Blanco, Caraotas, Tajadas, Carne Mechada, Huevo</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Pabellón Margariteño</h5>
                                    <p>Arroz Blanco, Caraotas, Tajadas, Cazón</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>                                                                
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Rompe Dieta <span></span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-lunch.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Club House</h5>
                                    <p>Pollo o Chuleta</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Shawarma</h5>
                                    <p>500 gramos de pechuga de pollo sin hueso (cortada en tiras), 2 cucharadas de jugo de limón, 1 cucharadita de curry en polvo, 2 cucharaditas de aceite de oliva, ¾ cucharadita de sal, ½ cucharadita de comino, 3 dientes de ajo picado</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Hamburguesa JOE'S</h5>
                                    <p></p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Hamburguesa Capresa</h5>
                                    <p>Queso Mozzarella, Tomate, Lechuga, Chuleta y Pesto</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Plátano Burger</h5>
                                    <p>200grs de Carne, Jamón, Queso Rallado,Tocineta y Plátano</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>La Pololo</h5>
                                    <p>200grs de Pollo, Huevo,Tocineta y Ensalada César sobre la Hamburguesa</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Hamburguesa Mixta</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>                                                                                                
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Patacones <span></span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/patacones.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Tostones con Queso</h5>
                                    <p></p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Patacones con 1 Contorno</h5>
                                    <p></p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li class="">
                                    <h5>Patacones con 2 Contornos</h5>
                                    <p></p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Patacones JOE'S Club</h5>
                                    <p></p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                                Raciones <span></span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/raciones.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Tequeños</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Yuca Frita</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li class="">
                                    <h5>Tajadas con Queso</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Arepitas</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                                Especialidades <span></span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-dinner.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Chuleta</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Plato para Picar</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li class="">
                                    <h5>Pechuga a la Plancha</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Rueda de Atún</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>                                               
                        <h3><i class="fa fa-glass"></i> Menú de Bebidas</h3>
                        <div class="menu">
                            <h4>
                                No Alcohólicas
                                <img alt="" src="{{ asset('base-hotel/preview/images/jugos.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Nestea</h5>
                                    <p>Durazno, Limón</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Refresco 1,5 Lts</h5>
                                    <p>Cola, Limón, Naranja, Uva, Colita</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Refresco 2 Lts</h5>
                                    <p>Cola, Limón, Naranja, Uva, Colita</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Jarra de Nestea</h5>
                                    <p>Limón, Durazno</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Jugo Natural</h5>
                                    <p>Fresa, Mora, Piña, Melón, Lechoza, Naranja, Limonada, Parchita, Pera, Melocotón</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>                                                         
                            </ul>
                        </div>                        
                    	<div class="menu">
                            <h4>
                            	Alcohólicas
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-drinks2.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Caipiriña</h5>
                                    <p>Lima Tahití o limón, Cachaça, Azúcar, Hielo Picado</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Cuba Libre</h5>
                                    <p>Amargo Angostura, Limón, Refresco de Cola, Ron Oscuro</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Cucaracha</h5>
                                    <p>Una parte de Tequila, Una parte de licor de Café (Kahlua)</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Daikiri</h5>
                                    <p>Hielo, 45ml de Ron Blanco, 30ml de zumo de lima, 15ml de almíbar o 50gr de azúcar, Corteza de lima</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Margarita</h5>
                                    <p>1 1/2 oz. de Tequila, 1 1/2 oz. de Triple Sec, 1 oz. de Jugo de Limón, Hielo</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Mojito</h5>
                                    <p>2 ramitas de Menta o Yerbabuena, 2 cucharaditas de azúcar, El zumo de 1 lima, 45 ml (más o menos) de Ron Blanco, Un poco de hielo picado o triturado, Soda o agua con gas hasta llenar 2/3 del vaso</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Piña Colada</h5>
                                    <p><b>Original:</b> 1 parte de Ron Blanco, 3 partes de zumo de Piña, 1 parte de leche o crema de coco (no agua de coco) y hielo picado</p>
                                    <p><b>Adaptación:</b> 1 parte de Ron Blanco, 1 parte de Malibú, 1 parte de Mangaroca, 3 partes de zumo de Piña, hielo picado</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Príncipe Azul</h5>
                                    <p>1 1/2 oz (45 ml) Vodka, 1/2 oz oz (15 ml) Licor de Manzana, 4 oz (120 ml) Zumo de Manzana, 1/2 oz (15 ml) Azúcar líquida, 4 Laminas de Jengibre, Manzana (opcional para decorar con dos bolas)</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Tinto Verano</h5>
                                    <p>1 Botella de Vino Tinto joven, 1 litro de Refresco de Limón, Rodajas de Limón y Naranja, Hielo</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Sangría</h5>
                                    <p>1 Botella de vino (cualquier precio está bien), 1 Refresco de Limón o Ginger Ale, 1 vaso de algún otro licor (Brandy, Whiskey, Tequila), Durazno, Naranja, Limón, Manzana, Azúcar Canela</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>                                
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Cafetería <span></span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-coffee.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Cappuccino</h5>
                                    <p>1 Café Espresso (7-8gr de café recién molido),120 ml de leche entera fresca y fría, 1 jarra de leche de 25cl para hacer la espuma, 1 taza de Cappuccino de unos 175 ml, 1 cafetera espresso (usando agua purificada), 1 molino de Café, 1 tamper (compresor de café)</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Flat White</h5>
                                    <p>Café, Leche Emulsionada</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Latte</h5>
                                    <p>Café Molido, Leche, Cafetera Espresso, Azúcar (opcional)</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Macchiato</h5>
                                    <p>Una cápsula de Grand Cru Roma, Indriya from India, Volluto o Volluto Decaffeinato, Azúcar blanca, 20 ml de leche fría, Virutas de chocolate</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </section>
                    <!-- Menu | END -->

                </div>
            </div>

        </div>
    </main>
    <!-- Content | END -->

@endsection