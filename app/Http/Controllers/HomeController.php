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
        $this->middleware('auth');
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
    public function enviarReservacion($request)
    {       
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
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";

        //$mail->Username = "socialmedia@monitorbg.com";
        //$mail->Password = "Monitor.2017";
        //$mail->SetFrom('socialmedia@monitorbg.com');

        $mail->Username = "hippocampusclubhotel@gmail.com";
        $mail->Password = "worl35Z23";
        $mail->SetFrom('reservaciones1@hippocampus.com.ve', 'HVC');      

        $mail->AddReplyTo($_POST['contact-email'], $_POST['contact-name']);
        //$mail->addAddress("atencionalsocio@hippocampus.com.ve");

        $mail->addAddress($_POST['contact-email']);//correo del huesped
        $mail->addAddress("ezebarazarte@gmail.com");//buzón al cual va a llegar el email
        
        
        $mail->Subject = "Web - Reserva de Habitaciones: ".utf8_decode($_POST['contact-name']);
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        //$mail->msgHTML($message);

        $body= '<table style="background-color: #F0F0F0" width="100%" border="0" align="center">
    
                    <tr>

                        <td>
                            
                            <table style="background-color: white" width="50%" border="0" align="center">
                                
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
                                            Gracias por hacer la reservación de su habitación <b>'.$_POST['contact-habitacion'].'</b> con nosotros. <br>En breves momentos nos estaremos comunicando con usted.
                                        </p>


                                    </td>
                                </tr>

                                <tr>

                                    <td align="center" colspan="3">

                                        <p style="text-align: center;">

                                            <table align="center" border="0">                                

                                                <tr>

                                                    <td>
                                                        Teléfono:
                                                    <td>
                                                    <td>'.$_POST['contact-phone'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Correo Electrónico:
                                                    <td>
                                                    <td>'.$_POST['contact-email'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Adulto(s):
                                                    <td>
                                                    <td>'.$_POST['contact-adultos'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Niño(s):
                                                    <td>
                                                    <td>'.$_POST['contact-ninos'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Llegada:
                                                    <td>
                                                    <td>'.$_POST['contact-arrival'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Salida:
                                                    <td>
                                                    <td>'.$_POST['contact-departure'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Total de Días:
                                                    <td>
                                                    <td>'.$_POST['cant-dias'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Precio de la Habitación:
                                                    <td>
                                                    <td>'.$_POST['contact-precioHabitacion'].'</td>

                                                </tr> 

                                                <tr>

                                                    <td>
                                                        Total a Pagar:
                                                    <td>
                                                    <td>'.$_POST['contact-precioHabitacion'] * $_POST['cant-dias'].'</td>

                                                </tr>                                                                                                 

                                                <tr>

                                                    <td>
                                                        Comentarios:
                                                    <td>
                                                    <td>'.$_POST['contact-message'].'</td>

                                                </tr>                                
                                                                                
                                            </table>
                                          
                                        </p>                    

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
            Session::flash('message','Su reservación fue enviada exitosamente!');
        }

        //return Redirect::to('/Pagar-Reservación'); 

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function enviarReservacionIngles($request)
    {       
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
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";

        //$mail->Username = "socialmedia@monitorbg.com";
        //$mail->Password = "Monitor.2017";
        //$mail->SetFrom('socialmedia@monitorbg.com');

        $mail->Username = "hippocampusclubhotel@gmail.com";
        $mail->Password = "worl35Z23";
        $mail->SetFrom('reservaciones1@hippocampus.com.ve', 'HVC');      

        $mail->AddReplyTo($_POST['contact-email'], $_POST['contact-name']);
        //$mail->addAddress("atencionalsocio@hippocampus.com.ve");

        $mail->addAddress($_POST['contact-email']);//correo del huesped
        $mail->addAddress("ezebarazarte@gmail.com");//buzón al cual va a llegar el email
        
        
        $mail->Subject = "Web - Reserva de Habitaciones: ".utf8_decode($_POST['contact-name']);
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        //$mail->msgHTML($message);

        $body= '<table style="background-color: #F0F0F0" width="100%" border="0" align="center">
    
                    <tr>

                        <td>
                            
                            <table style="background-color: white" width="50%" border="0" align="center">
                                
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
                                            
                                            Thank you for booking your room <b>'.$_POST['contact-habitacion'].'</b> with us. <br>In a few moments we will be communicating with you.
                                        </p>


                                    </td>
                                </tr>

                                <tr>

                                    <td align="center" colspan="3">

                                        <p style="text-align: center;">

                                            <table align="center" border="0">                                

                                                <tr>

                                                    <td>
                                                        Phone Number:
                                                    <td>
                                                    <td>'.$_POST['contact-phone'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Email:
                                                    <td>
                                                    <td>'.$_POST['contact-email'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Adults:
                                                    <td>
                                                    <td>'.$_POST['contact-adultos'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Children:
                                                    <td>
                                                    <td>'.$_POST['contact-ninos'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Arrival Date:
                                                    <td>
                                                    <td>'.$_POST['contact-arrival'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Departure Date:
                                                    <td>
                                                    <td>'.$_POST['contact-departure'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Total Days:
                                                    <td>
                                                    <td>'.$_POST['cant-dias'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Price of the Romm:
                                                    <td>
                                                    <td>'.$_POST['contact-precioHabitacion'].'</td>

                                                </tr> 

                                                <tr>

                                                    <td>
                                                        Total to Pay:
                                                    <td>
                                                    <td>'.$_POST['contact-precioHabitacion'] * $_POST['cant-dias'].'</td>

                                                </tr>                                                                                                 

                                                <tr>

                                                    <td>
                                                        Message:
                                                    <td>
                                                    <td>'.$_POST['contact-message'].'</td>

                                                </tr>                                
                                                                                
                                            </table>
                                          
                                        </p>                    

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
            Session::flash('message','Your reservation was successfully sent!');
        }

        //return Redirect::to('/Pagar-Reservación'); 

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
        
        $this->create($request->all());

        if(Session::get('idioma') == "es"){
            
            $this->enviarReservacion($request);

        }else{

            $this->enviarReservacionIngles($request);    
        }
        
        return redirect()->back();//realizar pago
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

        ]);
    }   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function realizarPago()
    {
        return view('realizarPago');
    }

}
