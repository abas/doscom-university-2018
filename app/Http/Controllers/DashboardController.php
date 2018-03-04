<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User,App\Kelas,App\Peserta;
use Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $peserta = Peserta::all();

        return view('admin.dashboard',compact('kelas','peserta'));
    }
}
