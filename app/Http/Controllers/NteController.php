<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NteController extends Controller
{
    public function index(){
        
        return view('nte/nte');
    }
}
