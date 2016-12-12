<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class byareaController extends Controller
{
    function index(){
    	return view('byAlpha');
    }
}
