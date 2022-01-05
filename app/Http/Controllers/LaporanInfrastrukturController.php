<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanInfrastrukturController extends Controller
{
    public function index(){
        return view('laporaninfrastruktur.index');
    }
}
