<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User1 ;
use App\Http\Requests;

class PageController extends Controller
{

        public function index()
    {
    	return view('index'); 
    }
}
