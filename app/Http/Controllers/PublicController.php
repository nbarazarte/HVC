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

use Twocheckout;
use Twocheckout_Charge;
use Twocheckout_Error;

class PublicController extends Controller
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

        // Via a request instance...
        session()->put('idioma', 'es');

        return view('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function restaurant()
    {
        return view('restaurant');
    }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function socios()
    {
        
        $semanas = DB::table('cat_semanas')->get();

        return view('socios', compact('semanas'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function rci()
    {
        return view('rci');
    }  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function fly()
    {
        return view('fly');
    }  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventos()
    {
        return view('eventos');
    }  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function accommodation()
    {
        return view('accommodation');
    }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function matrimonial()
    {
        return view('matrimonial');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function matrimonialSofa()
    {
        return view('matrimonialSofa');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function doble()
    {
        return view('doble');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function duplex()
    {
        return view('duplex');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        return view('gallery');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
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
        return view('contact',compact('datos'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function especial()
    {
        return view('especial');
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function suscripcion()
    {
        return view('suscripcion');
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function suscripcionFallida()
    {
        return view('suscripcionFallida');
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
        $mail->Host = env('MAIL_HOST','nada');
        $mail->Port = env('MAIL_PORT','nada');
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = env('MAIL_ENCRYPTION','nada');

        $mail->Username = env('MAIL_USERNAME','nada');
        $mail->Password = env('MAIL_PASSWORD','nada');
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
                                        <br>
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
            Session::flash('message','Su reservación fue enviada exitosamente! Revisa el correo electrónico: '.$_POST['contact-email']);
        }

        return Redirect::to('/Atención-al-Socio');

        //return Redirect::to('http://'.$_SERVER['SERVER_NAME'].'/');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function error()
    {
        return view('errors.404');
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
    public function solicitarReservacion()
    {
    
        $entrada = $_POST['contact-llegada'];
        $salida = $_POST['contact-salida'];

        //$entrada = '2018-04-12';
        //$salida = '2018-04-14';

        //$fecha_entrada = strtotime($request['contact-llegada']);
        //$fecha_salida = strtotime($request['contact-salida']);

        $entrar = "Ocupada";
        $condicion = 'false';
        $diasdiferencia = 0;

        $filtro1 = DB::select("SELECT dmt_fecha_entrada, dmt_fecha_salida, minfe, maxfs
                                FROM tbl_reservaciones r
                                left JOIN (SELECT * FROM reservaciones) as rs ON rs.maxfs >= dmt_fecha_salida
                                WHERE 
                                (
                                    (   
                                        ('".$entrada."' BETWEEN dmt_fecha_entrada and dmt_fecha_salida) 
                                        
                                        and 
                                        
                                        ('".$salida."' BETWEEN dmt_fecha_entrada and dmt_fecha_salida)
                                    )
                                or 
                                    (   (dmt_fecha_entrada BETWEEN '".$entrada."' and '".$salida."') 
                                        
                                        or

                                        (dmt_fecha_salida BETWEEN '".$entrada."' and '".$salida."')
                                    )
                                or 
                                    (
                                        (dmt_fecha_entrada = '".$entrada."') and (dmt_fecha_salida = '".$salida."')
                                    )
                                ) 
                                and r.lng_idtipohab = 4 order by dmt_fecha_entrada"

                            );

        if( count($filtro1) == 0){

            $entrar = "Disponible";//mando a reservar directo
 
        }else{
            
            for ($i=0; $i < count($filtro1); $i++) 
            { 

                foreach ($filtro1[$i] as $key => $value) {

                    $datos[$key] = $value;
                } 

                if(($entrada <= $datos['minfe']) and ($salida <= $datos['minfe'])){

                    $entrar = "Disponible";//1 mando a reservar directo     
                }

                if(($entrada >= $datos['maxfs']) and ($salida >= $datos['maxfs'])){

                    $entrar = "Disponible";//2 mando a reservar directo     
                }

                if(($entrada == $datos['dmt_fecha_entrada']) and ($salida == $datos['dmt_fecha_salida'])){

                   $condicion = 'false';

                }

                if(($entrada > $datos['dmt_fecha_entrada']) and ($entrada == $datos['dmt_fecha_salida']) ) {

                    $condicion = 'true';
                }

                if ($condicion == 'true') {

                    if(($entrada < $datos['dmt_fecha_entrada']) and ($salida == $datos['dmt_fecha_entrada']) ) {

                        $entrar = 'Disponible';//3 mando a reservar directo
                    }
                }
            }
        }
                           
        /*
            echo $entrar."<br>";
            echo $entrada. "--". $salida. "<br>";
            dd($filtro1); 
            die();

            */
        

        if($entrar != 'Disponible'){

            Session::flash('message','No hay Disponibilidad de habitaciones');
            return redirect()->back();//realizar pago
        }
        //die();

        //pido el precio de la habitación:
        $habitacion = DB::table('cat_habitaciones')->select('id','str_precio')->where('str_habitacion', $_POST['contact-habitacion'] )->get();

        //dd($str_precio);

        foreach ($habitacion[0] as $key => $value) {
           
            $hab[$key] = $value;  
        }

        //asigno el valor del id y el precio a una variable:
        $id_habitacion = $hab['id'];
        $precio_habitacion = $hab['str_precio'];
        $total_pagar = $_POST['cant-dias'] * $precio_habitacion;

        //lo asigno a lo que viene por post del formulario:
        //dd($_POST);die();
        array_push($_POST, $_POST['contact-idHabitacion']=$id_habitacion,$_POST['contact-precioHabitacion']=$precio_habitacion, $_POST['contact-totalPagar']=$total_pagar);
        
        //dd($_POST);die();

        $datos = $_POST;

        //dd($datos);die();

        Session::pull('datosReserva', array(compact('datos')));//borra
        Session::push('datosReserva', array(compact('datos')));//asigna

        //dd(Session::get('datosReserva'));
        //die();
        return Redirect::to('/Solicitar-Reservación'); 

    } 

}