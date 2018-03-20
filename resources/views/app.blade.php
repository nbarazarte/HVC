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

        @if (Route::current()->getName() == 'home')

            <body class="home2 fullwidth">

        @elseif ((Route::current()->getName() == 'accommodation') || (Route::current()->getName() == 'about') || (Route::current()->getName() == 'rci') || (Route::current()->getName() == 'contact') || (Route::current()->getName() == 'reservacion') || (Route::current()->getName() == 'restaurant') || (Route::current()->getName() == 'socios') || (Route::current()->getName() == 'eventos') || (Route::current()->getName() == 'fly') || (Route::current()->getName() == 'error') || (Route::current()->getName() == 'enviarReservacion') )

            <body class="fullwidth">

        @else

            <body>

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

    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-114915179-1', 'auto');
        ga('send', 'pageview');

    </script>

    <!-- Pasarela de pagos -->

        @if (Route::current()->getName() == 'pago')

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="https://www.2checkout.com/checkout/api/2co.min.js"></script>

            <script>
                // Called when token created successfully.
                var successCallback = function(data) {
                    var myForm = document.getElementById('myCCForm');

                    // Set the token as the value for the token input
                    myForm.token.value = data.response.token.token;

                    // IMPORTANT: Here we call `submit()` on the form element directly instead of using jQuery to prevent and infinite token request loop.
                    myForm.submit();
                };

                // Called when token creation fails.
                var errorCallback = function(data) {
                    if (data.errorCode === 200) {tokenRequest();} else {alert(data.errorMsg);}
                };

                var tokenRequest = function() {
                    // Setup token request arguments
                    var args = {
                        sellerId: "901375053",
                        publishableKey: "B0E9CB39-97DD-43C9-A59D-1B78EFF5D416",
                        ccNo: $("#ccNo").val(),
                        cvv: $("#cvv").val(),
                        expMonth: $("#expMonth").val(),
                        expYear: $("#expYear").val()
                    };

                    // Make the token request
                    TCO.requestToken(successCallback, errorCallback, args);
                };

                $(function() {
                    // Pull in the public encryption key for our environment
                    TCO.loadPubKey('sandbox');

                    $("#myCCForm").submit(function(e) {
                        // Call our token request function
                        tokenRequest();

                        // Prevent form from submitting
                        return false;
                    });
                });
            </script>

        @endif
    
    <!-- fin -->

    </body>

</html>