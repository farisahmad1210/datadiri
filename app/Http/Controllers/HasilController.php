<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedulidiri;

class HasilController extends Controller
{
    public function hasil(){
        $data = pedulidiri::all();
        return view('hasil', ['data'=> $data]);
    }
}
