<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterInfoController extends Controller
{
    //
    public function contact(){
        return view('footerInfo.contact');
     }

     public function policy(){
         return view('footerInfo.policy');
     }

     public function privacy(){
         return view('footerInfo.privacy');
     }

     public function setting(){
         return view('footerInfo.setting');
     }

     public function terms(){
         return view('footerInfo.terms');
     }
}
