<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class contactController extends Controller
{
    function index(){
        return view('contact-us');
    }
}
