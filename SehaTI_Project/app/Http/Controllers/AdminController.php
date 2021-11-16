<?php

namespace App\Http\Controllers;

use App\Models\Approve;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    public function index()
    {
        $pengajuans = Pengajuan::paginate(4);
        return view('master.admin', compact('pengajuans'));
    }

    public function approve(Request $request, $id)
    {
        $setuju = Approve::create([
            'pengajuan_id' => $request->id
        ]);
        $status = Pengajuan::find($id);
        $status->update(['status' => 1]);
        return redirect('/admin')->with('success', 'Anda telah Menyetujui Pengajuan Vaksinasi');
    }
}
