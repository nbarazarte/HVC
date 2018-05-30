<?php

namespace Illuminate\Foundation\Auth;

use Session;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        //return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';

        if (Session::get('idioma') == "es" ){

            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';

        }elseif (Session::get('idioma') == "en") {
        
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/en/';

        }
        
    }

}