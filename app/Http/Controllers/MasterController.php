<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index($value)
    {
        return view('master', ['value' => $value]);
    }

    public function page2($value)
    {
        return view('page2', ['value' => $value]);
    }

    public function page3($value)
    {
        return view('page3', ['value' => $value]);
    }

}
