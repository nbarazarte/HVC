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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    {!! Html::style('base-hotel/preview/css/styler.css') !!}
    <link rel="icon" href="{{ asset('base-hotel/system/images/favicon.png') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('base-hotel/system/images/favicon.png') }}" />

</head>

    @if ( !empty(Route::current()) )

        @if (Route::current()->getName() == 'homeIngles')

            <body class="home2 fullwidth">

        @elseif (   (Route::current()->getName() == 'matrimonialIngles') || 
                    (Route::current()->getName() == 'matrimonialSofaIngles') || 
                    (Route::current()->getName() == 'dobleIngles') || 
                    (Route::current()->getName() == 'duplexIngles') || 
                    (Route::current()->getName() == 'galleryIngles') 
                )
            
            <body>

        @else

            <body class="fullwidth">

        @endif 

        @include('en.menu')

        @if (Route::current()->getName() == 'homeIngles')

            <!-- Header | START -->
            <header>

                @include('en.slider')

                @include('en.reservacion')

            </header>
            <!-- Header | END -->

        @endif

        <div id="container">

            @yield('content')

            @include('en.extras')

            @include('en.footer')

        </div>

    @else

        <body class="fullwidth"> 

            @include('en.menu')

            <div id="container">

                @yield('content')

                 @include('en.extras')

                @include('en.footer')

            </div>            

    @endif

    @include('en.promo')

    {!! Html::script('base-hotel/system/js/plugins.js') !!}
    {!! Html::script('base-hotel/system/js/global.js') !!}
    {!! Html::script('base-hotel/preview/js/styler.js') !!}

    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-114915179-1', 'auto');
        ga('send', 'pageview');

    </script>

    <!-- Pasarela de pagos -->

        

            <script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>

        
    
    <!-- fin -->

    </body>

</html>