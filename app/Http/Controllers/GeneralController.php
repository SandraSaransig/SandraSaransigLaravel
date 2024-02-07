<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function where(){
        return view('general.where');
    }

    public function products(){
        return view('general.index');
    }
}
