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
            [
                'text_username' => 'required' , //caso houvesse mais alguma validação poderia colocar o | e ir adicionando as outiras  ( required | asjkdlasdj | dhsajdhkjashd)
                // outra forma seria por array ['required', 'dasdasd', 'dashjdhaks']
                'text_password' => 'required'
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
