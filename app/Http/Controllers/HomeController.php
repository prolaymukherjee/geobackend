<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;

class HomeController extends Controller
{
    public function index(){

        return view('dashboard');
    }

    public function changes(){
        echo "next step testing for ci/cd pipeline";
        exit();
    }


}
