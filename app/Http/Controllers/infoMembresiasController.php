<?php

namespace App\Http\Controllers;

use App\Models\Tipomembresias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class infoMembresiasController extends Controller
{
    public function index()
    {
        $membresiasData = Tipomembresias::all();
        return view('dashboard', compact('membresiasData'));
    }

}