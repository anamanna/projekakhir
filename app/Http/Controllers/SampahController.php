<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function index(){
        return view('app.manajemen_sampah.index');
    }

    public function create(){        
        return view('app.manajemen_sampah.create');
    }
}
