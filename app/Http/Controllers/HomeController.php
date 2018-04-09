<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Validator;
use App\Reservaciones;
use App\Http\Controllers\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $habitaciones = DB::table('cat_habitaciones')->get();

        \View::share(compact('habitaciones'));   

        $this->middleware('auth');
    }

    var $keys;
    
    public function crypt_key($ckey){
        $this->keys = array();
        
        $c_key = base64_encode(sha1(md5($ckey)));
        $c_key = substr($c_key, 0, round(ord($ckey{0})/5));
        
        $c2_key = base64_encode(md5(sha1($ckey)));
        $last = strlen($ckey) - 1;
        $c2_key = substr($c2_key, 1, round(ord($ckey{$last})/7));
        
        $c3_key = base64_encode(sha1(md5($c_key).md5($c2_key)));
        $mid = round($last/2);
        $c3_key = substr($c3_key, 1,  round(ord($ckey{(int)$mid})/9));
        
        $c_key = $c_key.$c2_key.$c3_key;
        $c_key = base64_encode($c_key);
        
        for($i = 0; $i < strlen($c_key); $i++){
            $this->keys[] = $c_key[$i];
        }
    }
    
    public function encrypt($string){
        $string = base64_encode($string);
        $keys = $this->keys;
        for($i = 0; $i < strlen($string); $i++){
            $id = $i % count($keys);
            $ord = ord($string{$i});
            $ord = $ord OR ord($keys[$id]);
            $id++;
            $ord = $ord AND ord($keys[$id]);
            $id++;
            $ord = $ord XOR ord($keys[$id]);
            $id++;
            $ord = $ord + ord($keys[$id]);
            $string{$i} = chr($ord);
        }
        return base64_encode($string);
    }
    
    public function decrypt($string){
        $string = base64_decode($string);
        $keys = $this->keys;
        for($i = 0; $i < strlen($string); $i++){
            $id = $i % count($keys);
            $ord = ord($string{$i});
            $ord = $ord XOR ord($keys[$id]);
            $id++;
            $ord = $ord AND ord($keys[$id]);
            $id++;
            $ord = $ord OR ord($keys[$id]);
            $id++;
            $ord = $ord - ord($keys[$id]);
            $string{$i} = chr($ord);
        }
        return base64_decode($string);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function enviarReservacion($request, $id)
    {       
        $ruta = DB::table('tbl_reservaciones')->select('str_codigo')->where('id', $id)->get();

        foreach ($ruta[0] as $key => $value) {
            
            $str_ruta[$key] = $value;
        }

        //dd($ruta);die();

        //dd($request);die();
        $message = "Nombre y Apellido: ".$_POST['contact-name']."<br>";
        $message .= "Teléfono: ".$_POST['contact-phone']."<br>";
        $message .= "Correo Electrónico: ".$_POST['contact-email']."<br>";
        $message .= "Adultos: ".$_POST['contact-adultos']."<br>";
        $message .= "Niños: ".$_POST['contact-ninos']."<br>";
        $message .= "Llegada: ".$_POST['contact-arrival']."<br>";
        $message .= "Salida: ".$_POST['contact-departure']."<br>";
        $message .= "Tipo de Habitación: ".$_POST['contact-habitacion']."<br>";
        $message .= "Precio de la Habitación: ".$_POST['contact-precioHabitacion']."<br>";
        $message .= "Total de Días: ".$_POST['cant-dias']."<br>";
        $message .= "Comentarios: ".$_POST['contact-message'];
         
        /*
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabeceras .= "Content-Type: image/png";    
        $cabeceras .= 'To: Best Office <ventas@solucionesbestoffice.com>' . "\r\n";
        $cabeceras .= 'From: '.$_POST['name'].' <'.$_POST['email'].'>' . "\r\n";     
        
        if (!mail('ventas@solucionesbestoffice.com', $_POST['asunto'].' - solucionesbestoffice.com', $message, $cabeceras)) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!, el mensaje no se pudo enviar');
        } else {
            Session::flash('message','Su mensaje fue enviado exitosamente!');
        }

        return Redirect::to('/');*/

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = env('MAIL_HOST','nada');
        $mail->Port = env('MAIL_PORT','nada');
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = env('MAIL_ENCRYPTION','nada');

        $mail->Username = env('MAIL_USERNAME','nada');
        $mail->Password = env('MAIL_PASSWORD','nada');
        $mail->SetFrom('reservaciones1@hippocampus.com.ve', 'Reservaciones Hippocampus');      

        $mail->AddReplyTo($_POST['contact-email'], $_POST['contact-name']);
        //$mail->addAddress("atencionalsocio@hippocampus.com.ve");

        $mail->addAddress($_POST['contact-email']);//correo del huesped
        $mail->addAddress("ezebarazarte@gmail.com");//buzón al cual va a llegar el email
        
        
        $mail->Subject = "Hotel Hippocampus Vacation Club: ".utf8_decode($_POST['contact-name']);
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        //$mail->msgHTML($message);

        $body= '<table style="background-color: #F0F0F0;font:14px/25px \'Open Sans\', sans-serif;" width="100%" border="0" align="center">
    
    <tr>

        <td>

            <table style="background-color: white" width="70%" border="0" align="center">

                <tr>

                    <td>                        

                        <table style="background-color: white" width="90%" border="0" align="center">
                            
                            <tr>
                                <td align="left" width="25%">
                                    <div align="center">
                                        <img src="http://hippocampusvacationclub.com/sites/default/files/Logo%20hvc%20new_0.png" width="80px">
                                    </div>
                                </td>

                                <td align="center" width="50%">
                                    <strong>
                                        HIPPOCAMPUS VACATION CLUB
                                    </strong>
                                    <br>
                                    <b>Innovamos para ti</b>
                                </td>

                                <td align="right" width="25%">
                                    <div align="center">
                                        <h3>
                                            <b>+58 (295) 331.13.23</b>
                                        </h3>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td align="center" colspan="3" style="background-image: url(\'http://hippocampusvacationclub.com/sites/default/files/styles/baner/public/vista.jpg?itok=FVdwGhRq\'); height: 400px">                      
                                </td>
                            </tr>

                            <tr>
                                <td align="center" colspan="3">

                                    <h2>
                                        Estimado(a): '.$_POST['contact-name'].'
                                    </h2>

                                    <p style="text-align: center">
                                        Gracias por hacer la reservación de su habitación <b>'.$_POST['contact-habitacion'].'</b> con nosotros. <br>La reserva incluye alojamiento y desayuno, para el número de personas indicadas en la cotización.
                                    </p>

                                </td>
                            </tr>

                            <tr>

                                <td align="center" colspan="3">

                                    <p style="text-align: center;">

                                    <style>
                                        #tablaDatos tr:nth-child(even){background-color: #f2f2f2}
                                    </style>

                                        <table id="tablaDatos" style="text-align: justify;border-collapse: collapse; width: 100%;font:14px/25px \'Open Sans\', sans-serif;" border="0">

                                            <tr>
                                                <th colspan="5" style="text-align: center; padding: 8px;background-color: #FBDAD2;color: black;">
                                                    DATOS DE LA RESERVACIÓN
                                                </th>
                                            </tr>  

                                            <tr style="background-color: #f2f2f2">

                                                <td style="text-align: left; padding: 8px;">
                                                    <b>Nombre:</b><br> 
                                                    '.$_POST['contact-name'].'
                                                </td>

                                                <td style="text-align: left; padding: 8px;">
                                                    <b>Correo Electrónico:</b><br>
                                                    '.$_POST['contact-email'].'
                                                </td>

                                                <td style="text-align: left; padding: 8px;">
                                                    <b>Teléfono:</b><br>
                                                    '.$_POST['contact-phone'].'
                                                </td>

                                                <td style="text-align: left; padding: 8px;">
                                                    <b>Precio:</b><br>
                                                    '.number_format($_POST['contact-precioHabitacion'], 2, ',', '.').'
                                                </td>

                                                <td style="text-align: left; padding: 8px;">
                                                    <b>Días:</b><br>
                                                    '.$_POST['cant-dias'].'
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 8px;">
                                                    <b>Total a Pagar:</b><br>
                                                    '.number_format($_POST['contact-totalPagar'], 2, ',', '.').'
                                                </td>

                                                <td style="text-align: left; padding: 8px;">
                                                    <b>Fecha de Llegada:</b><br>
                                                    '.$_POST['contact-arrival'].'
                                                </td>

                                                <td style="text-align: left; padding: 8px;">
                                                    <b>Fecha de Salida:</b><br>
                                                    '.$_POST['contact-departure'].'
                                                </td>

                                                <td style="text-align: left; padding: 8px;">
                                                    <b>Adultos:</b><br>
                                                    '.$_POST['contact-adultos'].'
                                                </td>

                                                <td style="text-align: left; padding: 8px;">
                                                    <b>Niños:</b><br>
                                                    '.$_POST['contact-ninos'].'
                                                </td>

                                            </tr>                                                                                                 

                                            <tr style="background-color: #f2f2f2">

                                                <td colspan="5">
                                                    <b>Comentarios:</b><br>
                                                    '.$_POST['contact-message'].'
                                                </td>

                                            </tr>                                
                                                                            
                                        </table>
                                      
                                    </p>

                                    <h2>POLÍTICAS DE PAGO</h2>

                                    <p style="text-align: justify;">

                                        <ul style="text-align: justify;">

                                        <li>
                                            Transferencias y depósitos bancarios en efectivo o cheque del mismo banco o de otros bancos.
                                        </li>
                                        <li>
                                            Todas las operaciones se deben hacer con un mínimo de 03 días hábiles antes de su llegada para garantizar la reserva.
                                        </li>

                                        </ul>

                                        <b>Realizar el pago a nombre de:</b>

                                    </p>

                                    <h2 style="margin:0;"><strong>HIPPOCAMPUS VACATION CLUB C.A. <br>J-30177391-8</strong></h2>

                                    <table id="tablaDatos">
                                        <tr>
                                            <th style="text-align: center; padding: 8px;background-color: #FBDAD2;color: black;">Banesco</th>
                                            <th style="text-align: center; padding: 8px;background-color: #FBDAD2;color: black;">BOD</th>
                                            <th style="text-align: center; padding: 8px;background-color: #FBDAD2;color: black;">Banco del Tesoro</th>
                                        </tr>
                                        <tr style="background-color: #f2f2f2">
                                            <td style="text-align: left; padding: 8px;"><b>0134-0343-1134-3101-5888</b></td>
                                            <td style="text-align: left; padding: 8px;"><b>0116-0450-13-0105891555</b></td>
                                            <td style="text-align: left; padding: 8px;"><b>0163-0617-74-6173007310</b></td>
                                        </tr>

                                    </table>

                                    <p style="text-align: justify;">
                                    Una vez realizado el pago, usted puede enviar el comprobante y verificar los datos de la reserva través de:
                                    </p>
                                    <h2 style="margin:0;"><strong>+58 (295) 331.13.23</strong></h2>
                                    <p style="margin:0;">
                                    <a href="mailto:reservaciones1@hippocampus.com.ve">reservaciones1@hippocampus.com.ve</a>          
                                    </p>

                                    <br>

                                    <p style="text-align: justify;">
                                    Tan pronto el Hotel recibe su información de garantía le hará llegar la RECONFIRMACION en un periodo no mayor de 48 horas hábiles continuas después de recibido el soporte de pago, caso contrario o para cualquier duda por favor comuníquense con nosotros, que gustosamente será atendido.                    
                                    </p>

                                    <p style="text-align: justify;">
                                    <b>RECUERDE QUE ES INDISPENSABLE LA PRESENTACION DEL VOUCHER DE SERVICIO EN EL MOMENTO DEL CHECK-IN DEL CLIENTE.</b><br>
                                    En caso de no recibir la garantía en la fecha límite, su solicitud quedara automáticamente ANULADA, y se podrá procesar nuevamente de acuerdo a nuestra disponibilidad.             
                                    </p>  

                                    <p>
                                        <a href="http://'.env('DIRECCION','nada').'/Pagar-Reservación/'.$str_ruta['str_codigo'].'">
                                           http://'.env('DIRECCION','nada').'/Pagar-Reservación-'.$str_ruta['str_codigo'].'
                                        </a>

                                        <form action="http://'.env('DIRECCION','nada').'/Pagar-Reservación/'.$str_ruta['str_codigo'].'">

                                            <input type="submit" style="font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;background-color: #F04D22; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;text-align: center; text-decoration: none; -webkit-text-size-adjust: none; background-color: #F04D22;" value="Pagar Reservación" />                                                    
                                        </form>                                            

                                    </p>                       

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>

            </table>

        </td>

    </tr>

</table>';

        $mail->msgHTML($body);

        $mail->AltBody = $message;
        //$mail->addAttachment('images/imagen_adjunta.png');
         
        if (!$mail->send()) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!'.$mail->ErrorInfo);
        } else {
            Session::flash('message','¡Su reservación fue enviada exitosamente! Revisa el correo electrónico: '.$_POST['contact-email']);
        }

        //return Redirect::to('/Pagar-Reservación');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function enviarReservacionIngles($request, $id)
    {       
        
        $ruta = DB::table('tbl_reservaciones')->select('str_codigo')->where('id', $id)->get();

        foreach ($ruta[0] as $key => $value) {
            
            $str_ruta[$key] = $value;
        }

        //dd($ruta);die();

        //dd($request);die();
        $message = "Name: ".$_POST['contact-name']."<br>";
        $message .= "Phone Number: ".$_POST['contact-phone']."<br>";
        $message .= "Email: ".$_POST['contact-email']."<br>";
        $message .= "Adults: ".$_POST['contact-adultos']."<br>";
        $message .= "Children: ".$_POST['contact-ninos']."<br>";
        $message .= "Arrival Date: ".$_POST['contact-arrival']."<br>";
        $message .= "Departure Date: ".$_POST['contact-departure']."<br>";
        $message .= "Accommodation: ".$_POST['contact-habitacion']."<br>";
        $message .= "Price of the Room: ".$_POST['contact-precioHabitacion']."<br>";
        $message .= "Total Days: ".$_POST['cant-dias']."<br>";
        $message .= "Message: ".$_POST['contact-message'];
         
        /*
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabeceras .= "Content-Type: image/png";    
        $cabeceras .= 'To: Best Office <ventas@solucionesbestoffice.com>' . "\r\n";
        $cabeceras .= 'From: '.$_POST['name'].' <'.$_POST['email'].'>' . "\r\n";     
        
        if (!mail('ventas@solucionesbestoffice.com', $_POST['asunto'].' - solucionesbestoffice.com', $message, $cabeceras)) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!, el mensaje no se pudo enviar');
        } else {
            Session::flash('message','Su mensaje fue enviado exitosamente!');
        }

        return Redirect::to('/');*/

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = env('MAIL_HOST','nada');
        $mail->Port = env('MAIL_PORT','nada');
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = env('MAIL_ENCRYPTION','nada');

        $mail->Username = env('MAIL_USERNAME','nada');
        $mail->Password = env('MAIL_PASSWORD','nada');
        $mail->SetFrom('reservaciones1@hippocampus.com.ve', 'Hippocampus Reservations ');      

        $mail->AddReplyTo($_POST['contact-email'], $_POST['contact-name']);
        //$mail->addAddress("atencionalsocio@hippocampus.com.ve");

        $mail->addAddress($_POST['contact-email']);//correo del huesped
        $mail->addAddress("ezebarazarte@gmail.com");//buzón al cual va a llegar el email
        
        
        $mail->Subject = "Hotel Hippocampus Vacation Club: ".utf8_decode($_POST['contact-name']);
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        //$mail->msgHTML($message);

        $body= '<table style="background-color: #F0F0F0;font:14px/25px \'Open Sans\', sans-serif;" width="100%" border="0" align="center">
    
                    <tr>

                        <td>
                            
            <table style="background-color: white" width="70%" border="0" align="center">

                <tr>

                    <td>                        

                        <table style="background-color: white" width="90%" border="0" align="center">
                                
                                <tr>
                                    <td align="left" width="25%">
                                        <div align="center">
                                            <img src="http://hippocampusvacationclub.com/sites/default/files/Logo%20hvc%20new_0.png" width="80px">
                                        </div>
                                    </td>

                                    <td align="center" width="50%">
                                        <strong>
                                            HIPPOCAMPUS VACATION CLUB
                                        </strong>
                                        <br>
                                        <b>Innovating For You</b>
                                    </td>

                                    <td align="right" width="25%">
                                        <div align="center">
                                            <h3>
                                                <b>+58 (295) 331.13.23</b>
                                            </h3>
                                        </div>
                                    </td>

                                </tr>

                                <tr>
                                    <td align="center" colspan="3" style="background-image: url(\'http://hippocampusvacationclub.com/sites/default/files/styles/baner/public/vista.jpg?itok=FVdwGhRq\'); height: 400px">                      
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center" colspan="3">

                                        <h2>
                                            Dear: '.$_POST['contact-name'].'
                                        </h2>

                                        <p style="text-align: center">
                                            Thank you for booking your room <b>'.$_POST['contact-habitacion'].'</b> with us. <br>The reservation includes accommodation and breakfast, for the number of people indicated in the quote.
                                        </p>

                                    </td>
                                </tr>

                                <tr>

                                    <td align="center" colspan="3">

                                        <p style="text-align: center;">

                    

                                            <table id="tablaDatos" style="text-align: justify;border-collapse: collapse; width: 100%;font:14px/25px \'Open Sans\', sans-serif;" border="0">

                                                <tr >
                                    <th colspan="5" style="text-align: center; padding: 8px;background-color: #FBDAD2;color: black;">
                                        RESERVATION DETAILS
                                    </th>
                                </tr>  

                                                <tr style="background-color: #f2f2f2">

                                                    <td style="text-align: left; padding: 8px;">
                                                        <b>Name:</b><br> 
                            '.$_POST['contact-name'].'
                                                    </td>

                                                    <td style="text-align: left; padding: 8px;">
                                                        <b>Email Address:</b><br>
                            '.$_POST['contact-email'].'
                                                    </td>

                                                    <td style="text-align: left; padding: 8px;">
                                                        <b>Phone Number:</b><br>
                            '.$_POST['contact-phone'].'
                                                    </td>

                                                    <td style="text-align: left; padding: 8px;">
                                                        <b>Price:</b><br>
                            '.number_format($_POST['contact-precioHabitacion'], 2, ',', '.').'
                                                    </td>

                                                    <td style="text-align: left; padding: 8px;">
                                                        <b>Total Days:</b><br>
                            '.$_POST['cant-dias'].'
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align: left; padding: 8px;">
                                                        <b>Total to Pay:</b><br>
                            '.number_format($_POST['contact-totalPagar'], 2, ',', '.').'
                                                    </td>

                                                    <td style="text-align: left; padding: 8px;">
                                                        <b>Arrival Date:</b><br>
                            '.$_POST['contact-arrival'].'
                                                    </td>

                                                    <td style="text-align: left; padding: 8px;">
                                                        <b>Departure Date:</b><br>
                            '.$_POST['contact-departure'].'
                                                    </td>

                                                    <td style="text-align: left; padding: 8px;">
                                                        <b>Adults:</b><br>
                            '.$_POST['contact-adultos'].'
                                                    </td>

                                                    <td style="text-align: left; padding: 8px;">
                                                        <b>Children:</b><br>
                            '.$_POST['contact-ninos'].'
                                                    </td>

                                                </tr>                                                                                                 

                                                <tr style="background-color: #f2f2f2">

                                                    <td colspan="5">
                                                        <b>Message:</b><br>
                            '.$_POST['contact-message'].'
                                                    </td>

                                                </tr>                                
                                                                                
                                            </table>
                                          
                                        </p>
                    
                    <h2>PAYMENT POLICIES</h2>

                    <p style="text-align: justify;">

                        <ul style="text-align: justify;">

                        <li>
                            Transfers and bank deposits in cash or check from the same bank or from other banks.
                        </li>
                        <li>
                            All operations must be done with a minimum of 03 business days before your arrival to guarantee the reservation.
                        </li>
                   
                        </ul>

                        <b>Make the payment on behalf of:</b>

                    </p>

                <h2 style="margin:0;"><strong>HIPPOCAMPUS VACATION CLUB C.A. <br>J-30177391-8</strong></h2>

                    <table id="tablaDatos">
                        <tr>
                            <th style="text-align: center; padding: 8px;background-color: #FBDAD2;color: black;">Banesco</th>
                            <th style="text-align: center; padding: 8px;background-color: #FBDAD2;color: black;">BOD</th>
                            <th style="text-align: center; padding: 8px;background-color: #FBDAD2;color: black;">Banco del Tesoro</th>
                        </tr>
                        <tr style="background-color: #f2f2f2">
                            <td style="text-align: left; padding: 8px;"><b>0134-0343-1134-3101-5888</b></td>
                            <td style="text-align: left; padding: 8px;"><b>0116-0450-13-0105891555</b></td>
                            <td style="text-align: left; padding: 8px;"><b>0163-0617-74-6173007310</b></td>
                        </tr>


                    </table>

                <p style="text-align: justify;">
                    Once the payment is made, you can send the voucher and verify the reservation information through:
                </p>
                <h2 style="margin:0;"><strong>+58 (295) 331.13.23</strong></h2>
                <p style="margin:0;">
                    <a href="mailto:reservaciones1@hippocampus.com.ve">reservaciones1@hippocampus.com.ve</a>          
                </p>

                <br>

                <p style="text-align: justify;">
                    As soon as the hotel receives your guarantee information, you will receive the RECONFIRMATION in a period of no more than 48 continuous working hours after receiving the payment support, otherwise or for any questions please contact us, which will be gladly answered.                   
                </p>

                <p style="text-align: justify;">
                    <b>REMEMBER THAT THE PRESENTATION OF THE SERVICE VOUCHER IS INDISPENSABLE AT THE MOMENT OF THE CUSTOMER\'S CHECK-IN.</b><br>
                    In case of not receiving the guarantee on the deadline, your request will be automatically CANCELED, and may be processed again according to our availability.             
                </p>  

                                        <p>
                                            <a href="http://'.env('DIRECCION','nada').'/en/Make-Payment/'.$str_ruta['str_codigo'].'">
                                               http://'.env('DIRECCION','nada').'/en/Make-Payment/'.$str_ruta['str_codigo'].'
                                            </a>

                                            <form action="http://'.env('DIRECCION','nada').'/en/Make-Payment/'.$str_ruta['str_codigo'].'">
                                                <input type="submit" style="font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
                 background-color: #F04D22; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
                 text-align: center; text-decoration: none; -webkit-text-size-adjust: none; background-color: #F04D22;" value="Send Payment" />

                                                        
                                        </form>                                            

                                    </p>                       

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>

            </table>

        </td>

    </tr>

</table>';

        $mail->msgHTML($body);

        $mail->AltBody = $message;
        //$mail->addAttachment('images/imagen_adjunta.png');
         
        if (!$mail->send()) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!'.$mail->ErrorInfo);
        } else {
            Session::flash('message','Your reservation was successfully sent! Check your email address: '.$_POST['contact-email']);
        }

        //return Redirect::to('/Pagar-Reservación'); 
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getReservaciones()
    {
        
        //dd(Session::get('test'));

        $datos = Session::get('datosReserva');

        //dd($datos[0][0]['datos']);die();

        if(!empty($datos)) {

            return view('solicitarReservacion',compact('datos'));

        }else{

            return view('contact');

        }
        
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getReservacionesIngles()
    {
        
        //dd(Session::get('test'));

        $datos = Session::get('datosReserva');

        //dd($datos[0][0]['datos']);die();

        if(!empty($datos)) {

            return view('en.solicitarReservacion',compact('datos'));

        }else{

            return view('en.contact');

        }
        
    }        

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postReservaciones(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            
             $this->throwValidationException(
                $request, $validator
            );
        }
        
        //$this->create($request->all());

        $idreservacion = $this->create($request->all())->id;

        $ruta = DB::table('tbl_reservaciones')->select('str_codigo')->where('id', $idreservacion)->get();

        foreach ($ruta[0] as $key => $value) {
            
            $str_ruta[$key] = $value;
        }        

        //echo "--->".Session::get('idioma');
        //die();
        if(Session::get('idioma') == "es"){

            $this->enviarReservacion($request, $idreservacion);

            return Redirect::to('/Pagar-Reservación/'.$str_ruta["str_codigo"]); 

        }else{

            $this->enviarReservacionIngles($request, $idreservacion); 

            return Redirect::to('/Make-Payment/'.$str_ruta["str_codigo"]); 
        }        

        //return redirect()->back();//realizar pago
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
                
            'contact-idHabitacion' => 'required|max:255',
            'contact-llegada' => 'required|max:255',
            'contact-salida' => 'required|max:255',  
            'contact-email' => 'required|max:255',
            'contact-name' => 'required|max:255',
            'contact-phone' => 'required|max:255',
            'contact-precioHabitacion' => 'required|max:255',     
            'contact-ninos' => 'required|max:255',
            'contact-adultos' => 'required|max:255',
            'cant-dias' => 'required|max:255',
            'contact-totalPagar' => 'required|max:255',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        
        return Reservaciones::create([

            'lng_idpersona' => \Auth::user()->id,
            'lng_idtipohab' => $data['contact-idHabitacion'],
            'dmt_fecha_entrada' => $data['contact-llegada'],
            'dmt_fecha_salida' => $data['contact-salida'],
            'str_codigo' => \Auth::user()->id.$this->generarCodigo(100),
            'str_email' => $data['contact-email'],
            'str_nombre' => $data['contact-name'],
            'str_telefono' => $data['contact-phone'],
            'dbl_precio' => $data['contact-precioHabitacion'],
            'int_ninos' => $data['contact-ninos'],
            'int_adultos' => $data['contact-adultos'],
            'int_dias' => $data['cant-dias'],
            'str_mensaje' => $data['contact-message'],
            'dbl_total_pagar' => $data['contact-totalPagar'],  

        ]);
    }  

    public function generarCodigo($longitud) {
        $key = '';

        $date=date_create();
        //echo date_timestamp_get($date);  
        $pattern = date_timestamp_get($date).'1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};

        return $key;
    }     

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function realizarPago($codigo)//Para pagar
    {
        $datos = DB::table('tbl_reservaciones as res')
        ->join('cat_habitaciones as hab', 'hab.id', '=', 'res.lng_idtipohab')        
        ->where('str_codigo', $codigo)
        ->Where(function ($query) {
            $query->where('lng_idpersona', '=', \Auth::user()->id);
        })
        ->Where(function ($query) {
            $query->where('str_estatus_pago', '=', null);
        })
        ->get();

        //dd($datos[0]);

        if(empty( $datos[0] ) ){

            return Redirect::to('/'); 

        }else{

            if(Session::get('idioma') == "es"){

                return view('realizarPago', compact('datos'));

            }else{

                return view('en.realizarPago', compact('datos'));
            }    

        }
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pagado()//Verifico si el pago se realizó con éxito
    {
        //dd($_REQUEST);die();
        $datos = DB::table('tbl_reservaciones as res')
        ->join('cat_habitaciones as hab', 'hab.id', '=', 'res.lng_idtipohab')    
        ->where('str_codigo', $_REQUEST['send'])
        ->Where(function ($query) {
            $query->where('lng_idpersona', '=', \Auth::user()->id);
        })
        ->get();

        //dd($datos[0]);die();

        foreach ($datos[0] as $key => $value) {
            
            $resultados[$key] = $value;
        }

        $total = number_format($resultados['dbl_total_pagar'], 2, '.', '');

        $hashSecretWord = env('HASHSECRETWORD', 'nada'); //2Checkout Secret Word
        $hashSid = env('HASHID', 'nada'); //2Checkout account number

        $hashTotal = $total; //Sale total to validate against
        $hashOrder = $_REQUEST['order_number']; //2Checkout Order Number
        $StringToHash = strtoupper(md5($hashSecretWord . $hashSid . $hashOrder . $hashTotal));

        if ($StringToHash != $_REQUEST['key']) {

           $result = 'Fail - Hash Mismatch';
        
        }else{ 
        
            $result = 'Success - Hash Matched';

            //echo $_REQUEST['order_number']; "<br>";

            $estatusPagado = DB::update('update tbl_reservaciones set str_estatus_pago = "'.$_REQUEST['order_number'].'" where lng_idpersona = '.\Auth::user()->id.' and str_codigo = "'.$_REQUEST['send'].'" ');            
            //dd($_REQUEST);
            //die();

            $this->crypt_key(env('KEY'));
            $order_numberEnc = $this->encrypt($_REQUEST['order_number']);

            return Redirect::to('/Reservacion-Pagada/'.$order_numberEnc); 

        }

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pago($codigo)
    {
        //echo strlen($codigo). "<br>";

        if(strlen($codigo) <= 67 ){

            //echo "encripta";
            $this->crypt_key(env('KEY'));
            $order_2CO = $this->decrypt($codigo);
            $order_number = substr($order_2CO,0,13);            

            //echo $order_number. "<br>";
            //die();

            $num_ordenes = DB::table('tbl_reservaciones as res')  
            ->select('str_estatus_pago')
            ->where('lng_idpersona', \Auth::user()->id)
            ->get();

            //dd($num_ordenes);die();
            //echo count($num_ordenes);               
            //die();

            $iguales = "false";

            for ($i=0; $i < count($num_ordenes); $i++) { 

                foreach ($num_ordenes[$i] as $key => $value) {
               
                    if($value == $order_number){

                        $iguales = "true";
                    }
                }
            }

            if($iguales == "true"){

                $datos = DB::table('tbl_reservaciones as res')  
                ->where('str_estatus_pago', $order_number)
                ->Where(function ($query) {
                    $query->where('lng_idpersona', '=', \Auth::user()->id);
                })        
                ->get();

                //dd($datos[0]);die();

                if(Session::get('idioma') == "es"){

                    return view('pagado');

                }else{

                    return view('en.pagado');
                } 

            }else{

                if(Session::get('idioma') == "es"){

                    return Redirect::to('/'); 

                }else{

                    return Redirect::to('/en'); 
                } 
            }

        }else{

            if(Session::get('idioma') == "es"){

                return Redirect::to('/'); 

            }else{

                return Redirect::to('/en'); 
            } 

        }

    }       

}