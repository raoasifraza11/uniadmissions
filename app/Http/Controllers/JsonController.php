<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JsonController extends Controller
{
    function index(){
        return view('jsonoutput');
    }
}
