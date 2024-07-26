<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class PatientController extends Controller
{
    public function store(Request $request)
    {
        \Log::debug($request);

        $validated = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
        ]);
        \Log::debug("cek");

        DB::table('pasien')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
            'jurusan' => $request->jurusan,
        ]);


        return redirect('/dashboard');
    }

}
