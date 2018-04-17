<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    //protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $paises = DB::table('paises')->pluck('str_paises');   

        \View::share(compact('paises'));  

        $this->middleware('guest');
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
            'name' => 'required|max:255',
            'str_telefono' => 'required|max:255',
            'str_ci_pasaporte' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'str_genero' => 'required|max:255',
            'str_pais' => 'required|max:255',
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



        if(!empty($data['blb_img'])){

            return User::create([

                'name' => $data['name'],
                'email' => $data['email'],
                'str_telefono' => $data['str_telefono'],
                'str_ci_pasaporte' => $data['str_ci_pasaporte'],
                'password' => bcrypt($data['password']),
                'str_genero' => $data['str_genero'],                
                'str_pais' => $data['str_pais'],
                'blb_img' => $data['blb_img'],
                //'blb_img' => base64_encode(file_get_contents($data['blb_img'])),
            ]);

        }else{

            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'str_telefono' => $data['str_telefono'],
                'str_ci_pasaporte' => $data['str_ci_pasaporte'],
                'password' => bcrypt($data['password']),
                'str_genero' => $data['str_genero'],
                'str_pais' => $data['str_pais'],
            ]);          
        }

    }
}
