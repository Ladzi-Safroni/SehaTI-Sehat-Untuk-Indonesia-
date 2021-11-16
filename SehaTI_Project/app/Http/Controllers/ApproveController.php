<?php

namespace App\Http\Controllers;

use App\Models\Approve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ApproveController extends Controller
{
    public function index()
    {
        $approve = Approve::all();
        $approve = Approve::orderBy('id')->paginate(5);
        return view('master.pengumuman', ['approves' => $approve]);
    }
}
