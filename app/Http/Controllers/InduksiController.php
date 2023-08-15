<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InduksiController extends Controller
{
    public function index(){
        return view('indexInduksi', [
            'title'         => 'Induksi',
        ]);
    }
    
}
