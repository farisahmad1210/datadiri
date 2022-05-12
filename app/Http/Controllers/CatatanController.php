<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedulidiri;

class CatatanController extends Controller
{
    public function catatan(){
        return view('catatan');
    }
}
