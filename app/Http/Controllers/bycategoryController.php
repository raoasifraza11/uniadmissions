<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class bycategoryController extends Controller
{
    function index(){
    	return view('byAlpha');
    }
}
