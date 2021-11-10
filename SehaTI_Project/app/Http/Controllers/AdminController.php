<?php

namespace App\Http\Controllers;

use App\Models\Approve;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $pengajuans = Pengajuan::all();
        return view('master.admin', compact('pengajuans'));
    }

    public function approve(Request $request, $id)
    {
        $setuju = Approve::create([
            'pengajuan_id' => $request->id
        ]);
        $status = Pengajuan::find($id);
        $status->update(['status' => 1]);
        return redirect('/admin');
    }
}
