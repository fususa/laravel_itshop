<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function myshop(){
        $address = "IT CP KKU";
        $mobilephone = "0841286588";
        $location = "Khon kean";
        return view('myshop',[
            'address' => $address,
            'mobilephone' => $mobilephone,
            'location' => $location
        ]);
    }
}
