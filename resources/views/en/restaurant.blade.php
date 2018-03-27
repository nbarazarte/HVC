@extends('en.app')

@section('content')

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Restaurant</span>
                <span class="tagline">A Gastronomy Experience </span></h1>
            </div>
        </div>

        @include('en.reservacion')

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
                        Our mision in of hotel <strong>Hippocampus Vacation Club</strong>, is to provide extraodinary services, offering a varied gastronomy as: breakfasts, lunch, snacks, pizzas, dinner, soups among many more. We provide a executive menu and a great variety for that guests it feels at ease in the restaurant or while enjoying a sunny day in the pool.
                    </p>

                    <h2 style="margin:0;"><strong>+58 (295) 267.62.13 </strong></h2>
                    <br>
                    <!-- Instagram | START -->
                    <div id="instagram">
                        <p>
                            @JoesGrilMargarita 
                            
                            <a href="https://www.instagram.com/joesgrilmargarita/" target="_blank"> <i class="fa fa-instagram"></i> Instagram</a> 
                        </p>
                      
                    </div>
                    <!-- Instagram | END -->                  

                    <!-- Menu | START -->
                    <section id="menu">
                    	<h3><i class="fa fa-cutlery"></i> Food Menu</h3>
                    	<div class="menu">
                            <h4>
                            	Breakfast <span></span>
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
                                    <p>Cheese, Ham, Ham and Cheese, Meatloaf, Ground Beef, Domino, Dogfish, Queen Pepiada, Sausage, Mixed</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Empanadas</h5>
                                    <p> Cheese, meatloaf, Ground Beef, Pavilion, Domino, Sausage</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Pabellon Criollo</h5>
                                    <p> White rice, Beans, Fried plantain slices, Meatloaf, Egg </p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Pabellón Margariteño</h5>
                                    <p>White rice, Beans, Fried plantain slices, Dogfish </p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>                                                                
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Break Diet <span></span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-lunch.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Club House</h5>
                                    <p>Chicken or Chop</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Shawarma</h5>
                                    <p>
                                        500 grams of boneless chicken breast (cut into strips), 2 tablespoons of lemon juice, 1 teaspoon of curry powder, 2 teaspoons of olive oil, &frac34; teaspoon of salt, &frac12; teaspoon of cumin, 3 cloves of chopped garlic</p>
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
                                    <p>Mozzarella Cheese, Tomato, Lettuce, Chop and Pesto</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Plátano Burger</h5>
                                    <p>200grs of Meat, Ham, Grated Cheese, Bacon and Banana</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>La Pololo</h5>
                                    <p>
                                        200grs of Chicken, Egg, Bacon and Caesar salad over the Hamburger</p>
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
                                    <h5>Tostones with cheese</h5>
                                    <p></p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Patacones with 1 Contour</h5>
                                    <p></p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li class="">
                                    <h5>Patacones with 2 Contours</h5>
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
                                Portions <span></span>
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
                                    <h5>Fried yucca</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li class="">
                                    <h5>Fried plantain slices with cheese</h5>
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
                                Specialty <span></span>
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
                                    <h5>Chopping Plate</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li class="">
                                    <h5>Grilled chicken breast</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Tuna Wheel</h5>
                                    <p></p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>                                               
                        <h3><i class="fa fa-glass"></i> Drinks Menu</h3>
                        <div class="menu">
                            <h4>
                                Non-Alcoholic
                                <img alt="" src="{{ asset('base-hotel/preview/images/jugos.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Nestea</h5>
                                    <p>Peach, Lemon</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Soda 1,5 Lts</h5>
                                    <p>Cola, Lemon, Orange, Grape, Colita</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Soda 2 Lts</h5>
                                    <p>Cola, Lemon, Orange, Grape, Colita</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Nestea Jar</h5>
                                    <p>Lemon, Peach</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Natural Juice</h5>
                                    <p>Strawberry, Blackberry, Pineapple, Melon, Papaya, Orange, Lemonade, Parchita, Pear, Peach</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>                                                         
                            </ul>
                        </div>                        
                    	<div class="menu">
                            <h4>
                            	Alcoholic
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-drinks2.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Caipiriña</h5>
                                    <p>
                                        Lima Tahiti or lemon, Cachaça, Sugar, Crushed Ice
                                    </p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Cuba Libre</h5>
                                    <p>Amargo Angostura, Lemon, Cola Refreshment, Dark Rum</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Cockroach Cocktail</h5>
                                    <p>A part of Tequila, A part of Coffee liqueur (Kahlua)</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Daikiri</h5>
                                    <p>Ice, 45 ml of White Rum, 30 ml of lime juice, 15ml of syrup or 50gr of sugar, Lime Bark</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Margarita</h5>
                                    <p>1 &frac12; oz. of Tequila, 1 &frac12; oz. of Triple Sec, 1 oz. of Lemon Juice, Ice</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Mojito</h5>
                                    <p>                                        
                                        2 sprigs of Mint or Yerbabuena, 2 teaspoons of sugar, The juice of 1 lime, 45 ml (more or less) of White Rum, A bit of crushed or crushed ice, Soda or sparkling water to fill 2/3 of the glass
                                    </p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Piña Colada</h5>
                                    <p><b>Original:</b> 1 part of Ron Blanco, 3 parts of pineapple juice, 1 part of milk or coconut cream (not coconut water) and crushed ice</p>
                                    <p><b>Adaptation:</b> 1 part of Ron Blanco, 1 part of Malibu, 1 part of Mangaroca, 3 parts of pineapple juice, crushed ice</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Blue Prince</h5>
                                    <p>1 &frac12; oz (45 ml) Vodka, &frac12; oz (15 ml) Apple Liqueur, 4 oz. (120 ml) Apple Juice, &frac12; oz. (15 ml) Liquid sugar, 4 layers of Ginger, Apple (optional to decorate with two balls)</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Tinto Verano</h5>
                                    <p>1 Bottle of Young Red Wine, 1 liter of Lemon Refreshment, Lemon and Orange Slices, Ice</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Sangaree</h5>
                                    <p>1 Bottle of wine (any price is fine), 1 Lemon or Ginger Ale Refreshment, 1 glass of some other liquor (Brandy, Whiskey, Tequila), Peach, Orange, Lemon, Apple, Cinnamon Sugar</p>
                                    <div class="price">
                                        <div></div>
                                    </div>
                                </li>                                
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Coffee <span></span>
                                <img alt="" src="{{ asset('base-hotel/preview/images/dining-thumb-coffee.jpg') }}" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Cappuccino</h5>
                                    <p>
                                        1 Espresso coffee (7-8gr of freshly ground coffee), 120 ml of fresh and cold whole milk, 1 jug of milk of 25cl to make the foam, 1 cup of Cappuccino of about 175 ml, 1 espresso machine (using purified water) , 1 coffee mill, 1 tamper (coffee compressor)
                                    </p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Flat White</h5>
                                    <p>
                                        Coffee, Emulsified Milk
                                    </p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Latte</h5>
                                    <p>Ground Coffee, Milk, Coffee Espresso, Sugar (optional)</p>
                                    <div class="price">
                                    	<div></div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Macchiato</h5>
                                    <p>One capsule of Grand Cru Roma, Indriya from India, Volluto or Volluto Decaffeinato, White sugar, 20 ml of cold milk, Chocolate chips</p>
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