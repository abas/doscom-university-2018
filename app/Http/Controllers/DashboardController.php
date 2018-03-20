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
        // return $peserta;
        $lunas = Peserta::where('status_pembayaran','lunas')->count();
        $total_uang_tekumpul = 0;
        foreach ($peserta as $p) {
            if($p->status_pembayaran == 'lunas'){
                if($p->web == 'true'){
                    $total_uang_tekumpul += 35000;
                }
                if($p->femdev == 'true'){
                    $total_uang_tekumpul += 35000;
                }
                if($p->mobile == 'true'){
                    $total_uang_tekumpul += 35000;
                }
                if($p->linux == 'true'){
                    $total_uang_tekumpul += 35000;
                }
                if($p->net == 'true'){
                    $total_uang_tekumpul += 35000;
                }
                if($p->inkscape == 'true'){
                    $total_uang_tekumpul += 35000;
                }
                if($p->godot == 'true'){
                    $total_uang_tekumpul += 35000;
                }
            }
        }
        return view('admin.dashboard',compact('kelas','peserta','lunas','total_uang_tekumpul'));
    }

    public function humasdata()
    {
        $peserta = Peserta::all()->where('status_pembayaran','lunas');
        // return $peserta;
        return view('admin.humas-data',compact('peserta'));
    }

    public function getNomorAll()
    {
        $peserta = Peserta::all()->where('status_pembayaran','lunas');
        $nomors = [];
        foreach ($peserta as $key) {
            echo $key->nohp.',';
            echo '<br>';
        }
    }

    public function getNomorAllCount()
    {
        $peserta = Peserta::all()->where('status_pembayaran','lunas');
        return $peserta->count();
    }
}
