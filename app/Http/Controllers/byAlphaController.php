<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class byAlphaController extends Controller
{
    function index(){
    	return view('byAlpha');
    }
}
