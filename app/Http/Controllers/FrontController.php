<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function profil(){
        return view('profilperangkatdaerah.profil');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_perangkat_daerah' => 'required|string|max:155',
            'nama_pemimpin' => 'required',
            'alamat_kantor' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'nama_pengelola' => 'required',
            'nomor_pengelola' => 'required',
            'email_pengelola' => 'required'
        ]);

        $profil = Profil::create([
            'nama_perangkat_daerah' => $request->nama_perangkat_daerah,
            'nama_pemimpin' => $request->nama_pemimpin,
            'alamat_kantor' => $request->alamat_kantor,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'nama_pengelola' => $request->nama_pengelola,
            'nomor_pengelola' => $request->nomor_pengelola,
            'email_pengelola' => $request->email_pengelola
        ]);

        
        if ($profil) {
            return redirect()
                ->route('profilperangkatdaerah.profil')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
}
