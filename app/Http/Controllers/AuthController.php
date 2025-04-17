<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view ('login');
    }

    public function loginSubmit(Request $request) 
    {
        //form validation
        $request->validate(
            //rules
            [
                'text_username' => 'required|email' , //caso houvesse mais alguma validação poderia colocar o | e ir adicionando as outiras  ( required | asjkdlasdj | dhsajdhkjashd)
                // outra forma seria por array ['required', 'dasdasd', 'dashjdhaks']
                'text_password' => 'required|min:6|max:16'
            ], 
            
            // error messages
            [
                'text_username.required' => 'O usernamen é obrigatório',
                'text_username.email' => 'O usuário deve ser um e-mail',
                'text_password.required' => 'A senha deve ser obrigatória',
                'text_password.min' => 'A senha deve conter no mínimo :min caracteres',
                'text_password.max' => 'A senha deve conter no máximo :max caracteres',

            ]

            );

            // get user input
            $username = $request->input('text_username');
            $password = $request->input('text_password');

            echo "OK!"; // esse OK é para caso passe as validaçoes ele retorne esse OK
    }

    public function logout() 
    {
        print "logout";
    }
}
