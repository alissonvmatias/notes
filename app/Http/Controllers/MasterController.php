<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index($value)
    {

    return view('master', ['value' => $value]);

    }
}
