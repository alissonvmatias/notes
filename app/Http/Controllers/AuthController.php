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
        echo $request->input('text_username'); // serve para retornar o valor ( usado para verificar se esta trazendo o valor correto)
        echo '<br>';
        echo $request->input('text_password'); // serve para retornar o valor ( usado para verificar se esta trazendo o valor correto)
    }

    public function logout() 
    {
        print "logout";
    }
}
