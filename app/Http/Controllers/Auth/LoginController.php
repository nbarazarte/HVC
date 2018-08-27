<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;

use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $userSocial = Socialite::driver($provider)->stateless()->user();

        /*
            //$user->token;                            
            $newvar= dd($userSocial);
            return $newvar;
            die();
        */         

        //check if user exits and log in:

        $user = User::where('email', $userSocial->email)->first();
        if($user){
            if(Auth::loginUsingId($user->id)){
                return redirect()->route('home');
            }
        }

        //else sign the user up
        $userSignup = User::Create([

            'name' => $userSocial->name,
            'email' => $userSocial->email,
            'password' => bcrypt('12345678'),
            //'gender' => $userSocial->user['gender'],
            'provider' => $provider,
            'provider_id' => $userSocial->id,
            'avatar' => $userSocial->avatar,
        ]);

        //finally log the user in

        if($userSignup){
            if(Auth::loginUsingId($userSignup->id)){
                return redirect()->route('home');
            }
        }
    }





























}
