<!DOCTYPE HTML>
<!-- Base Hotel: HTML Template by Klaye Morrison (http://klayemorrison.com) -->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hippocampus Vacation Club</title>
    {!! Html::style('base-hotel/system/css/global.css') !!}
    {!! Html::style('base-hotel/system/css/colour-blue.css') !!}
    {!! Html::style('base-hotel/system/css/pattern-china.css') !!}
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {!! Html::style('base-hotel/preview/css/styler.css') !!}
    <link rel="icon" href="{{ asset('base-hotel/system/images/favicon.png') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('base-hotel/system/images/favicon.png') }}" />

</head>

    @if ( !empty(Route::current()) )

        @if (Route::current()->getName() == 'home')

            <body class="home2 fullwidth">

        @elseif (   (Route::current()->getName() == 'matrimonial') || 
                    (Route::current()->getName() == 'suite') || 
                    (Route::current()->getName() == 'doble') || 
                    (Route::current()->getName() == 'familiar') || 
                    (Route::current()->getName() == 'gallery') 
                )
            
            <body>

        @else

            <body class="fullwidth">

        @endif  

        @include('menu')

        @if (Route::current()->getName() == 'home')

            <!-- Header | START -->
            <header>

                @include('slider')

                @include('reservacion')

            </header>
            <!-- Header | END -->

        @endif

        <div id="container">

            @yield('content')

            @include('extras')

            @include('footer')

        </div>

    @else

        <body class="fullwidth"> 

            @include('menu')

            <div id="container">

                @yield('content')

                 @include('extras')

                @include('footer')

            </div>            

    @endif

    @include('promo')

    {!! Html::script('base-hotel/system/js/plugins.js') !!}
    {!! Html::script('base-hotel/system/js/global.js') !!}
    {!! Html::script('base-hotel/preview/js/styler.js') !!}
    {!! Html::script('js/custom.js') !!}

    <!-- Pasarela de pagos -->
        <script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>
    <!-- fin -->

    </body>

</html>