<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Session;

class MyResetPassword extends ResetPassword
{
    public function toMail($notifiable)
    {   
         if(Session::get('idioma') == "es"){

            return (new MailMessage)
                ->subject('Recuperar clave')
                ->from('hippocampusclubhotel@gmail.com', 'Hippocampus Vacation Club')
                ->greeting('Hola')
                ->line('Estás recibiendo este correo porque hiciste una solicitud de recuperacion de clave para tu cuenta.')
                ->action('Recuperar clave', url('password/reset', $this->token))
                ->line('Si no realizaste esta solicitud, no se requiere realizar ninguna otra acción.');
        }else{

            return (new MailMessage)
                ->subject('Reset Password')
                ->from('hippocampusclubhotel@gmail.com', 'Hippocampus Vacation Club')
                ->greeting('Hello')
                ->line('You are receiving this email because we received a password reset request for your account.')
                ->action('Reset Password', url('password/reset', $this->token))
                ->line('If you did not request a password reset, no further action is required.');

        }
    }
}