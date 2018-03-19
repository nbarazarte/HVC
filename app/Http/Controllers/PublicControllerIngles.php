<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Validator;

class PublicControllerIngles extends Controller
{
    /**
     *
     * @return void
     */
    public function __construct()
    {

        $habitaciones = DB::table('cat_habitaciones')->get();

        \View::share(compact('habitaciones'));   

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('en.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('en.about');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function restaurant()
    {
        return view('en.restaurant');
    }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function socios()
    {
        
        $semanas = DB::table('cat_semanas')->get();

        return view('en.socios', compact('semanas'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function rci()
    {
        return view('en.rci');
    }  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function fly()
    {
        return view('en.fly');
    }  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventos()
    {
        return view('en.eventos');
    }  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function accommodation()
    {
        return view('en.accommodation');
    }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function matrimonial()
    {
        return view('en.matrimonial');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function matrimonialSofa()
    {
        return view('en.matrimonialSofa');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function doble()
    {
        return view('en.doble');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function duplex()
    {
        return view('en.duplex');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        return view('en.gallery');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('en.contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function reservacion(Request $request)
    {
        
        $datos = $request->all();
        //print_r($datos);die();
        //var_dump($datos);die();
        //dd($datos);die();
        return view('en.contact',compact('datos'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function especial()
    {
        return view('en.especial');
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function suscripcion()
    {
        return view('en.suscripcion');
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function suscripcionFallida()
    {
        return view('en.suscripcionFallida');
    }          

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function enviar()
    {       
        
        $message =  "N° Contrato: ".$_POST['contact-contrato']."<br>";
        $message .= "N° Cédula: ".$_POST['contact-cedula']."<br>";
        $message .= "Nombre y Apellido: ".$_POST['contact-name']."<br>";
        $message .= "Teléfono: ".$_POST['contact-phone']."<br>";
        $message .= "Correo Electrónico: ".$_POST['contact-email']."<br>";
        $message .= "Adultos: ".$_POST['contact-adultos']."<br>";
        $message .= "Niños: ".$_POST['contact-ninos']."<br>";
        $message .= "Infantes: ".$_POST['contact-infantes']."<br>";
        $message .= "Capacidad: ".$_POST['contact-capacidad']."<br>";
        $message .= "Semana ".$_POST['contact-semana']."<br>";
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

        $mail->Username = "atrellus@gmail.com";
        $mail->Password = "falcor90dvv";
        $mail->SetFrom('webmaster@hippocampus.com.ve');        

        $mail->AddReplyTo($_POST['contact-email'], $_POST['contact-name']);
        //$mail->addAddress("atencionalsocio@hippocampus.com.ve");
        $mail->addAddress($_POST['contact-email']);//correo del socio
        $mail->addAddress("ezebarazarte@gmail.com");//buzón al cual va a llegar el email
        
        $mail->Subject = "hippocampusvacationclub.com - Socio RCI: ".$_POST['contact-contrato'] ;
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        

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
                                        <b>Innovamos para ti</b>
                                    </td>

                                    <td align="right" width="25%">
                                        <div align="center">
                                            <h3>
                                                <b>+58 (295) 331.13.50</b>
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
                                            Gracias por hacer la reservación de su semana con nosotros. <br>En breves momentos nos estaremos comunicando con usted.
                                        </p>


                                    </td>
                                </tr>

                                <tr>

                                    <td align="center" colspan="3">

                                        <p style="text-align: center;">

                                            <table align="center" border="0">

                                                <tr>

                                                    <td>
                                                        N° Contrato:
                                                    <td>
                                                    <td>'.$_POST['contact-contrato'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Cédula:
                                                    <td>
                                                    <td>'.$_POST['contact-cedula'].'</td>

                                                </tr>                                                                          

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
                                                        Infantes:
                                                    <td>
                                                    <td>'.$_POST['contact-infantes'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Capacidad:
                                                    <td>
                                                    <td>'.$_POST['contact-capacidad'].'</td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        Semana:
                                                    <td>
                                                    <td>'.$_POST['contact-semana'].'</td>

                                                </tr>                                                

                                                <tr>

                                                    <td>
                                                        Mensaje:
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

        return Redirect::to('/Attention-to-Partner');

        //return Redirect::to('http://'.$_SERVER['SERVER_NAME'].'/');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function error()
    {
        return view('errors.404En');
    } 

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postNewsletter(Request $request)
    {

        $validator = $this->validator($request->all());

        if ($validator->fails()) {

            Session::flash('messageError','La dirección de correo electrónico ya se encuentra registrada en nuestros sistemas');
            return redirect()->back();
            //return redirect('/Suscripción-Fallida');

            /*
                $this->throwValidationException(
                    $request, $validator
                );

            */
        }
        
        $this->create($request->all());

        //return redirect($this->redirectPath()); 
        Session::flash('message','¡Gracias por suscribirse!');
        return redirect()->back();
        //return Redirect::to('/Suscripción-Realizada'); 
        
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
                
            'str_email' => 'required|unique:tbl_newsletter|max:255',     

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
        
        return Newsletter::create([

            'str_email' => $data['str_email'],

        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function enviarReservacion()
    {       

        $message = "Nombre y Apellido: ".$_POST['contact-name']."<br>";
        $message .= "Teléfono: ".$_POST['contact-phone']."<br>";
        $message .= "Correo Electrónico: ".$_POST['contact-email']."<br>";
        $message .= "Adultos: ".$_POST['contact-adultos']."<br>";
        $message .= "Niños: ".$_POST['contact-ninos']."<br>";
        $message .= "Llegada: ".$_POST['contact-arrival']."<br>";
        $message .= "Salida: ".$_POST['contact-departure']."<br>";
        $message .= "Tipo de Habitación: ".$_POST['contact-habitacion']."<br>";
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

        $mail->Username = "atrellus@gmail.com";
        $mail->Password = "falcor90dvv";
        $mail->SetFrom('webmaster@hippocampus.com.ve');      

        $mail->AddReplyTo($_POST['contact-email'], $_POST['contact-name']);
        //$mail->addAddress("atencionalsocio@hippocampus.com.ve");

        $mail->addAddress($_POST['contact-email']);//correo del huesped
        $mail->addAddress("ezebarazarte@gmail.com");//buzón al cual va a llegar el email
        
        
        $mail->Subject = "hippocampusvacationclub.com - Reserva de Habitaciones: ".$_POST['contact-name'] ;
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
                                                        Mensaje:
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

        return Redirect::to('/Contact');

        //return Redirect::to('http://'.$_SERVER['SERVER_NAME'].'/');

    }

}
