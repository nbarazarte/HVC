<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MyResetPassword;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'str_ci_pasaporte','str_genero', 'lng_idpais','blb_img','str_telefono','avatar', 'gender', 'provider', 'provider_id', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }

    public function setBlbimgAttribute($valor){
                
        if(!empty($valor)){          
            $this->attributes['blb_img'] = base64_encode(file_get_contents($valor));                                
        }    
    }       
}
