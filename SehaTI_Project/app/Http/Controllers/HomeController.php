<?php

namespace App\Http\Controllers;

use App\Models\Approve;
use App\Models\User;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pengajuans = Pengajuan::all();
        $approves = Approve::all();
        $admins = User::where('role', '1')->count();
        $users = User::where('role', '0')->count();

        return view('master.dashboard', compact('users','admins','pengajuans','approves'));
    }
}
