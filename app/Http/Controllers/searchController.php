<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class searchController extends Controller
{
    function index(){
        return view('search-list');
    }
}
