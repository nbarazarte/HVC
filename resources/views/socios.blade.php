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

        @include('reservacion-rci')

    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">



            <!-- Contact Form | START -->
            <div id="contact" style="text-align: center;">
                <img src="{{ asset('base-hotel/preview/images/HH_Piscina_Toldos_07_atencion.jpg') }}" width="1200" height="400" alt="" />
                    <form name="contact" action="#" method="post">
                    <div class="col">
                        <div class="field mandatory"><input name="contact-contrato" type="text" placeholder="N° Contrato" id="contact-contrato" value="" /></div>   
                        <div class="field mandatory"><input name="contact-cedula" type="text" placeholder="N° Cédula" id="contact-cedula" value="" /></div>
                        <div class="field mandatory"><input name="contact-name" type="text" placeholder="Nombre y Apellido" id="contact-name" value="" /></div>
                       
                        
                    </div>

                    <div class="col">

                        <div class="select">
                            <div class="field mandatory"><input name="contact-phone" type="text" placeholder="N° Teléfono" id="contact-phone" value="" /></div>
                             <div class="field mandatory"><input name="contact-email" type="text" placeholder="Correo Electrónico" id="contact-email" value="" /></div>
                            <select name="contact-rooms" id="contact-rooms" class="">
                                <option  value="">Adultos</option>
                                <option  value="2" >2 Adultos</option>
                                <option  value="3" >3 Adultos</option>
                            </select>
                            <select name="contact-rooms" id="contact-rooms" class="">
                                <option  value="">Niños</option>
                                <option  value="2" >2 Niños</option>
                                <option  value="3" >3 Niños</option>
                            </select>
                            <select name="contact-rooms" id="contact-rooms" class="">
                                <option  value="">Infantes</option>
                                <option  value="2" >2 Infantes</option>
                                <option  value="3" >3 Infantes</option>
                            </select>                                                        

                        </div>
                    </div>
                    <div class="col">
                        <div class="select">

                            <select name="contact-rooms" id="contact-rooms" class="">
                                <option  value="">Capacidad</option>
                                <option  value="2" >2 Personas</option>
                                <option  value="3" >3 Personas</option>
                            </select>

                            <select name="contact-rooms" id="contact-rooms" class="">
                                <option  value="">Semana</option>
                                <option  value="2" >2 </option>
                                <option  value="3" >3 </option>
                            </select>

                        </div>
                    </div>


                    <!-- Honeypot (for bot spam) -->
                    <input name="contact-email2" type="text" placeholder="Email Address" autocomplete="false" class="honeypot" value="" />
                    <button name="send" value="sendform"><span data-hover="Enviar Reservación">Enviar Reservación</span></button>
                </form>
            </div>
            <!-- Contact Form | END -->


            <div id="content">

                <h2><strong>Atención al Socio</strong></h2>

                <p>
                    Ante todo  reciba  nuestra más cordial saludo,  en nuestro esfuerzo para darle la mayor atención, le informamos que para el uso y disfrute de su semana vacacional podrá <b>hacer su reservación y aclarar dudas</b> a través de nuestro correo electrónico <a href="mailto:atencionalsocio@hippocampus.com.ve">atencionalsocio@hippocampus.com.ve</a> 
                    <br>
                    También pueden contactarnos por el número telefónico <b>+58 (295) 331.13.50</b>
                </p>


                <p>
                    La solicitud de reservación deberá hacerse con un mínimo de 90 días de antelación para  semanas de temporada alta  y un mínimo de 21 días para las de temporada baja, todo sujeto a disponibilidad.  Dependiendo la capacidad según contrato.
                </p>

                <p>
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

                <p>
                    La anulación de una reservación deberá hacerse con un mínimo de 30 días de antelación, de no hacer la notificación, se considerará la semana como utilizada.
                    <br>
                    La semana no disfrutada en el año correspondiente de uso, solo podrá ser usada dentro de los primeros seis (6) meses del año inmediato siguiente y únicamente en temporada baja.                                    
                </p>

                <p>
                    <b>
                        PARA HACER USO DE SU SEMANA ANUAL ES INDISPENSABLE TENER CUBIERTA LA CUOTA DE MANTENIMIENTO O CONDOMINIO CORRESPONDIENTE Y ESTAR AL DÍA CON TODAS SUS OBLIGACIONES
                    </b>
                </p>

                <p>
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