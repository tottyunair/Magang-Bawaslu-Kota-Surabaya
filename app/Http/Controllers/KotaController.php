<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(){
        return view('content.kota.index');
    }
}
