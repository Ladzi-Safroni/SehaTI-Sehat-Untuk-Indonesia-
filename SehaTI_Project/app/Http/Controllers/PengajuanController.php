<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        return  view('master.user');
    }

    public function create()
    {
        return view('master.pengajuan');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nik' => 'required',
            'namaLengkap' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'jk' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'ktp' => 'image|mimes:jpg,png|max:2048',
            'kk' => 'image|mimes:jpg,png|max:2048',
        ]);

        if ($request->file('ktp')) {
            $validateData['ktp'] = $request->file('ktp')->store('ktp');
        }
        if ($request->file('kk')) {
            $validateData['kk'] = $request->file('kk')->store('kk');
        }

        Pengajuan::create($validateData);

        return redirect('/user');
    }

    public function show($id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('master.detail', compact('pengajuan'));
    }
}
