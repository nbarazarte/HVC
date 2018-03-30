@extends('en.app')

@section('content')

@foreach ($datos as $dato)

@endforeach

    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Make Payment</span>
                <span class="tagline">Innovating for you</span></h1>
            </div>
        </div>

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
        <div class="centre">
            <!-- Slideshow -->

            <div id="content">

                        @include('mensajes')  

                        <h2><strong>Payment</strong> Details</h2>

                        <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>

                            <table style="text-align: justify;">                                  

                                <tr>
                                    <td>
                                        <b>Name Printed on the Credit Card:</b></td>
                                    <td>
                                        <input type='text' name='card_holder_name' value='' placeholder="Peter Quill" required />
                                    </td>
                                    <td>
                                        <b>Address 1:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='street_address' placeholder="123 Test Address" value='' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>City:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='city' placeholder='Barquisimeto' value="" required />
                                    </td>
                                    <td>
                                        <b>Address 2:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='street_address2' placeholder="Suite 200" value='' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>State / Province:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='state' placeholder="Lara" value='' required />
                                    </td>
                                    <td>
                                        <b>Country:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='country' value='USA' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Zip Code:</b></td>
                                    <td>
                                        <input type='text' name='zip' placeholder="43228" value='' required />
                                    </td>
                                    <td>
                                        <b>Total to Pay:</b>
                                    </td>
                                    <td>
                                        <b style="font-size: 18px">
                                            
                                            ${{ number_format($dato->dbl_precio, 2, ',', '.')   }}

                                        </b>
                                        <input type='text' name='li_0_price' value="{{ $dato->dbl_precio }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Email Address:</b>
                                    </td>

                                    <td>
                                        <input type='text' name='email' value="" placeholder="user@server.com" required />
                                    </td>

                                    <td>
                                        <b>Phone Number:</b>
                                    </td>

                                    <td>
                                        <input type='text' name='phone' value="" placeholder="+584141112233" required />
                                    </td>
                                </tr> 

                            </table>

                            <input type='text' name='li_0_name' value="habitacion" />

                            <input type='text' name='sid' value='901375053' />
                            <input type='text' name='mode' value='2CO' />
                            <input type='text' name='li_0_type' value='product' />
                             
                            <button name="send" value="sendform">
                                <a class="button"><span data-hover="Make Payment">Make Payment</span></a> 
                            </button>

                        </form>

  

            
           
            </div>
        </div>

    </main>
    <!-- Content | END -->

@endsection
