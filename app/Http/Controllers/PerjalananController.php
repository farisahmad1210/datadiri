<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedulidiri;

class PerjalananController extends Controller
{
    public function indexDashboard(){
        return view('dashboard');
    }

    public function simpanHasil(Request $request)
    {
        $data = [
            'id_user' => 1,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'suhu' => $request->suhu
        ];

    //    dd($data);

        pedulidiri::create($data);
        return redirect('/hasil')->with('message', 'Penyimpanan Berhasil');
    }

    public function hapusCatatan($id) 
    {
        $data = pedulidiri::where('id', $id)->delete();

        pedulidiri::deleted($data);
        return redirect('/hasil')->with('message', 'Data berhasil dihapus!');
    }

    public function updateCatatan(Request $request) 
    {
        $data = pedulidiri::where('id', $request->id)
        ->update([
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'suhu' => $request->suhu,
        ]);
        return redirect('/hasil')->with('message', 'Data Berhasil diupdate');

    }

    public function ubahCatatan($id)
    {
        $data = pedulidiri::select('*')
                    ->where('id', $id)
                    ->get();
        
        return view('/ubah', ['jalan' => $data]);
    }
}