@extends('en.app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Member Service</span>
                <span class="tagline">Enjoy the vacations of your life</span></h1>
            </div>
        </div>       

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">

            <!-- Contact Form | START -->
            <div id="contact">
                <img src="{{ asset('base-hotel/preview/images/HH_Piscina_Toldos_07_atencion.jpg') }}" width="1200" height="400" alt="" />

                    @include('en.mensajes')       

                    {!! Form::open(['route' => 'enviarIngles', 'method'=>'PUT', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

                    <div class="col">
                        
                        <div class="field mandatory">
                            <input name="contact-contrato" type="text" placeholder="Contract Number" id="contact-contrato" value="" required/>
                        </div>   
                        
                        <div class="field mandatory">
                            <input name="contact-cedula" type="text" placeholder="ID Card" id="contact-cedula" value="" required/>
                        </div>
                        
                        <div class="field mandatory">
                            <input name="contact-name" type="text" placeholder="Your Name" id="contact-name" value="" required/>
                        </div>   
                                                                  
                    </div>

                    <div class="col">

                        <div class="field mandatory">
                            <input name="contact-phone" type="text" placeholder="Phone Number" id="contact-phone" value="" required/>
                        </div>
                        
                         <div class="field mandatory">
                            <input name="contact-email" type="email" placeholder="Email" id="contact-email" value="" required/>
                        </div>

                        <div class="select">                                    
                                        
                            <select name="contact-adultos" id="contact-adultos" class="" required>

                                <option value="">Adults</option>

                                <?php

                                    for ($i=1; $i < 7; $i++) { ?>
                                    
                                        <option value="{{ $i }}">{{ $i }} @if($i > 1) Adults @else Adult @endif</option>

                                <?php }?>

                            </select>

                            <select name="contact-ninos" id="contact-ninos" class="" required>

                                <option value="">Children</option>

                                <?php

                                    for ($i=0; $i < 6; $i++) { ?>
                                    
                                        <option value="{{ $i }}">{{ $i }} @if($i > 1) Children @else Child @endif</option>

                                <?php }?>

                            </select>
                      
                            <select name="contact-infantes" id="contact-infantes" class="" required>

                                <option value="">Infants</option>

                                <?php

                                    for ($i=0; $i < 6; $i++) { ?>
                                    
                                        <option value="{{ $i }}">{{ $i }} @if($i > 1) Infants @else Infant @endif</option>

                                <?php }?>

                            </select> 
                                                                                                                                
                        </div>
                                                                 
                    </div>

                    <div class="col">
                        <div class="field"><textarea name="contact-message" placeholder="Message" id="contact-message"></textarea></div>
                        <div class="select">
                            
                            <select name="contact-capacidad" id="contact-capacidad" class="" required>
                                <option  value="">Capacity</option>
                                <option  value="2" >2 </option>
                                <option  value="3" >3 </option>
                                <option  value="3" >4 </option>
                                <option  value="3" >6 </option>
                            </select>

                            <select name="contact-semana" id="contact-semana" class="" required>
                                
                                <option  value="">Weeks</option>

                                @foreach ($semanas as $semana) 
                                     
                                    <option  value="{{$semana->id }}: {{ $semana->str_semana_inicio }} - {{ $semana->str_semana_fin }}">
                                        
                                       Week {{$semana->id }}: {{ $semana->str_semana_inicio }} - {{ $semana->str_semana_fin }}

                                    </option>

                                @endforeach

                            </select>    

                        </div>  
                    
                    </div>

                       <button name="send" value="sendform">
                        <span data-hover="Send Reservation">Send Reservation</span>
                    </button>
                    {!! csrf_field() !!} 
                    
                {!! Form::close() !!}

            </div>
            <!-- Contact Form | END -->

            <div id="content">

                <h2><strong>Member</strong> Service</h2>

                <p style="text-align: justify;">
                    Above all receive our warmest greetings in our efforts to give the most attention, please note that for the use and enjoyment of your holiday week you can <b>make your reservation</b> through our email <a href="mailto:atencionalsocio@hippocampus.com.ve">atencionalsocio@hippocampus.com.ve</a> 
                    <br>
                    You can also contact us by phone number <b>+58 (295) 331.13.50</b>
                </p>

                <p style="text-align: justify;">
                    The reservation request must be made at least 90 days in advance for peak weeks and a minimum of 21 days for low season, all subject to availability. Depending on the capacity under contract.
                </p>

                <p style="text-align: justify;">
                    We attach Le Weeks Calendar so you can Scheduling and Planning ahead your vacation. Remember weeks, depending on the type of contract purchased: Silver or Gold.<br>The weeks are from Saturday to Saturday (Check In: ​​4:00 pm Check Out: 11:00 am).
                </p>

                <p style="text-align: justify;">
                
                    <ul style="text-align: justify;">

                        <li>
                            <b>Silver:</b> Right of use since Sem 3 up to 27 and from 40 to week 49.
                        </li>
                        <li>
                            <b>Gold:</b> Right of use in any week of the year.
                        </li>                                   

                    </ul>

                </p>

                <p style="text-align: justify;">
                    The cancellation of a reservation must be made at least 30 days prior notice not to be considered as used week.
                    <br>
                    The week is not spent in the corresponding year of use, it may only be used within the first six (6) months immediately subsequent year and only in low season.                                 
                </p>

                <p style="text-align: center;">
                    <b>
                        TO MAKE USE OF ITS ANNUAL WEEK IS REQUIRED TO HAVE COVERED THE MAINTENANCE FEE OR CONDOMINIUM FOR AND BE A DAY WITH ALL OBLIGATIONS
                    </b>
                </p>

                <p style="text-align: justify;">
                    The only company responsible for the collection of our partners is <strong>FIDELITAS</strong>, only through it will be channeled payments and everything related to your account statement and receipts.
                </p>

                <h2 style="margin:0;"><strong>+58 (412) 197.37.32</strong></h2>
                <h2 style="margin:0;"><strong>+58 (412) 289.67.44</strong></h2>
                <p style="margin:0;">
                    <a href="mailto:pagosfidelitasvzla@fdlcs.com">pagosfidelitasvzla@fdlcs.com</a><br />
                    <i class="fa fa-map-marker"></i> Libertador Avenue, Multicentro Empresarial del Este Building. Core C. Floor 8 Office 82C. Chacao.<br>Caracas 1060, Venezuela.
                </p>

                <p>
                    <b>The Bank Accounts to make your deposits, are the following in the name of:</b>
                </p>   

            </div>
        </div>

        <!-- Feature List | START -->
        <section id="featurelist">
            <div class="centre">
                <h2>HIPPOCAMPUS VACATIONS CLUB C.A. <br>J-30177391-8</h2>

                    <div id="content">
                        
                        <table>
                            <tr>
                                <th>Bank</th>
                                <th>Checking Account</th>
                            </tr>
                            <tr>
                                <td><strong>MERCANTIL</strong></td>
                                <td>0105-0114-80-1114023884</td>
                            </tr>
                            <tr>
                                <td><strong>BANESCO</strong></td>
                                <td>0134-0343-11-3431015888</td>
                            </tr>
                            <tr>
                                <td><strong>CORP-BANCA</strong></td>
                                <td>0121-0170-86-0105891555</td>                    
                            </tr>
                            <tr>
                                <td><strong>VENEZUELA</strong></td>
                                <td>0102-0107-18-0006486356</td>                                
                            </tr>

                            <tr>
                                <td><strong>PROVINCIAL</strong></td>
                                <td>0108-0001-3801-0020-6078</td>
                            </tr>
                            <tr>
                                <td><strong>BOD</strong></td>
                                <td>0116-0118-9800-0722-2700</td>                    
                            </tr>
                            <tr>
                                <td><strong>VENEZOLANO DE CRÉDITO</strong></td>
                                <td>0104-0107-1001-0714-9597</td>                                
                            </tr>



                        </table>
                        
                    </div>


            </div>
        </section>
        <!-- Feature List | END -->        

    </main>
    <!-- Content | END -->

@endsection