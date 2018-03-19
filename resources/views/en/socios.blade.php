@extends('app')

@section('content')

	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Atención al Socio</span>
                <span class="tagline">Disfrute de las vacaciones de su vida</span></h1>
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

                    @include('mensajes')       

                    {!! Form::open(['route' => 'enviar', 'method'=>'PUT', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

                    <div class="col">
                        
                        <div class="field mandatory">
                            <input name="contact-contrato" type="text" placeholder="N° Contrato" id="contact-contrato" value="" required/>
                        </div>   
                        
                        <div class="field mandatory">
                            <input name="contact-cedula" type="text" placeholder="N° Cédula" id="contact-cedula" value="" required/>
                        </div>
                        
                        <div class="field mandatory">
                            <input name="contact-name" type="text" placeholder="Nombre y Apellido" id="contact-name" value="" required/>
                        </div>   
                                                                  
                    </div>

                    <div class="col">

                        <div class="field mandatory">
                            <input name="contact-phone" type="text" placeholder="N° Teléfono" id="contact-phone" value="" required/>
                        </div>
                        
                         <div class="field mandatory">
                            <input name="contact-email" type="email" placeholder="Correo Electrónico" id="contact-email" value="" required/>
                        </div>

                        <div class="select">                                    
                                        
                            <select name="contact-adultos" id="contact-adultos" class="" required>

                                <option value="">Adultos</option>

                                <?php

                                    for ($i=1; $i < 7; $i++) { ?>
                                    
                                        <option value="{{ $i }}">{{ $i }} @if($i > 1) Adultos @else Adulto @endif</option>

                                <?php }?>

                            </select>

                            <select name="contact-ninos" id="contact-ninos" class="" required>

                                <option value="">Niños</option>

                                <?php

                                    for ($i=0; $i < 6; $i++) { ?>
                                    
                                        <option value="{{ $i }}">{{ $i }} @if($i > 1) Niños @else Niño @endif</option>

                                <?php }?>

                            </select>
                      
                            <select name="contact-infantes" id="contact-infantes" class="" required>

                                <option value="">Infantes</option>

                                <?php

                                    for ($i=0; $i < 6; $i++) { ?>
                                    
                                        <option value="{{ $i }}">{{ $i }} @if($i > 1) Infantes @else Infante @endif</option>

                                <?php }?>

                            </select> 
                                                                                                                                
                        </div>
                                                                 
                    </div>

                    <div class="col">
                        <div class="field"><textarea name="contact-message" placeholder="Mensaje" id="contact-message"></textarea></div>
                        <div class="select">
                            
                            <select name="contact-capacidad" id="contact-capacidad" class="" required>
                                <option  value="">Capacidad</option>
                                <option  value="2" >2 </option>
                                <option  value="3" >3 </option>
                                <option  value="3" >4 </option>
                                <option  value="3" >6 </option>
                            </select>

                            <select name="contact-semana" id="contact-semana" class="" required>
                                
                                <option  value="">Semanas</option>

                                @foreach ($semanas as $semana) 
                                     
                                    <option  value="{{$semana->id }}: {{ $semana->str_semana_inicio }} - {{ $semana->str_semana_fin }}">
                                        
                                       Semana {{$semana->id }}: {{ $semana->str_semana_inicio }} - {{ $semana->str_semana_fin }}

                                    </option>

                                @endforeach

                            </select>    

                        </div>  
                    
                    </div>

                       <button name="send" value="sendform">
                        <span data-hover="Enviar Reservación">Enviar Reservación</span>
                    </button>
                    {!! csrf_field() !!} 
                    
                {!! Form::close() !!}

            </div>
            <!-- Contact Form | END -->

            <div id="content">

                <h2><strong>Atención</strong> al Socio</h2>

                <p style="text-align: justify;">
                    Ante todo  reciba  nuestra más cordial saludo,  en nuestro esfuerzo para darle la mayor atención, le informamos que para el uso y disfrute de su semana vacacional podrá <b>hacer su reservación y aclarar dudas</b> a través de nuestro correo electrónico <a href="mailto:atencionalsocio@hippocampus.com.ve">atencionalsocio@hippocampus.com.ve</a> 
                    <br>
                    También pueden contactarnos por el número telefónico <b>+58 (295) 331.13.50</b>
                </p>

                <p style="text-align: justify;">
                    La solicitud de reservación deberá hacerse con un mínimo de 90 días de antelación para  semanas de temporada alta  y un mínimo de 21 días para las de temporada baja, todo sujeto a disponibilidad.  Dependiendo la capacidad según contrato.
                </p>

                <p style="text-align: justify;">
                    Le Anexamos el Calendario de Semanas para que pueda Programar y Planificar con tiempo sus vacaciones. Recuerde que las semanas, dependen del tipo de contrato adquirido: Silver o Gold.<br>Las semanas son de Sábado a Sábado, (Entrada: 4:00 pm y Salida: 11:00 am).
                </p>

                <p style="text-align: justify;">
                
                    <ul style="text-align: justify;">

                        <li>
                            <b>Silver:</b> Derecho de uso desde la Sem 3 hasta la 27 y desde la 40 hasta la semana 49.
                        </li>
                        <li>
                            <b>Gold:</b> Derecho de uso en cualquier semana del año.
                        </li>                                   

                    </ul>

                </p>

                <p style="text-align: justify;">
                    La anulación de una reservación deberá hacerse con un mínimo de 30 días de antelación, de no hacer la notificación, se considerará la semana como utilizada.
                    <br>
                    La semana no disfrutada en el año correspondiente de uso, solo podrá ser usada dentro de los primeros seis (6) meses del año inmediato siguiente y únicamente en temporada baja.                                    
                </p>

                <p style="text-align: center;">
                    <b>
                        PARA HACER USO DE SU SEMANA ANUAL ES INDISPENSABLE TENER CUBIERTA LA CUOTA DE MANTENIMIENTO O CONDOMINIO CORRESPONDIENTE Y ESTAR AL DÍA CON TODAS SUS OBLIGACIONES
                    </b>
                </p>

                <p style="text-align: justify;">
                    La única empresa encargada de la cobranza de nuestros socios es <strong>FIDELITAS</strong>, sólo a través de ella se canalizarán los pagos y todo lo referente a su estado de cuenta y recibos.
                </p>

                <h2 style="margin:0;"><strong>+58 (412) 197.37.32</strong></h2>
                <h2 style="margin:0;"><strong>+58 (412) 289.67.44</strong></h2>
                <p style="margin:0;">
                    <a href="mailto:pagosfidelitasvzla@fdlcs.com">pagosfidelitasvzla@fdlcs.com</a><br />
                    <i class="fa fa-map-marker"></i> Av. Libertador, Multicentro Empresarial del Este. Núcleo C. Piso 8 Ofic. 82C. Chacao. <br>Caracas 1060, Venezuela.            
                </p>

                <p>
                    <b>Las Cuentas Bancarias para hacer sus depósitos, son las siguientes a nombre de: </b>
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
                                <th>Banco</th>
                                <th>cuenta Corriente</th>
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