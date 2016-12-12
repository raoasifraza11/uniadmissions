<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class aboutController extends Controller
{
    // index
    function index(){
        return view('about-us');
    }
}
