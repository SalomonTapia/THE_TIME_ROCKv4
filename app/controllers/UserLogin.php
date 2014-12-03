<?php

class UserLogin extends \BaseController {

    public function User()
    {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'usuario' => Input::get('username'),
            'password' => Input::get('password')
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('users');
        }
        else
        {
            // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
            return Redirect::to('/')->with('mensaje_error', true);
        }
    }

}