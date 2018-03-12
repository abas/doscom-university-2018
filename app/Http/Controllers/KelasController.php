<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Peserta;
use App\Kelas;

class KelasController extends Controller
{
    public function semuaKelas()
    {
        return Kelas::detailKelas();
    }


    /**
     * do tutup kelas
     */
    public function tutupKelas($nama_kelas)
    {
        $nama = (string)$nama_kelas;
        $kelas = Kelas::where("nama",$nama)->update([
                            'status' => 'penuh'
                        ]);
        return  redirect()->back()->with('msg','kelas '.$nama.' di tutup');
    }

    /**
     * do buka kelas
     */
    public function bukaKelas($nama_kelas)
    {
        $nama = (string)$nama_kelas;
        $kelas = Kelas::where("nama",$nama)->update([
                            'status' => 'sisa'
                        ]);
        return redirect()->back()->with('msg','kelas '.$nama.' di buka');
    }

    public function show($nama_kelas)
    {
        $pesertas = Peserta::all();
        // return $pesertas;
        $peserta = [];
        foreach ($pesertas as $key) {
            if($key->$nama_kelas == 'true'){
                array_push($peserta,$key);
            }
        }
        // return $peserta;
        return view('admin.detail-kelas',compact('peserta','nama_kelas'));
    }

    public function counterMinus($id)
    {
        $kelas = Kelas::find($id);
        if($kelas->jumlah > 0){
            $kelas->jumlah--;
            if($kelas->update()){
                return redirect()->back()->with('msg','updated!');
            }
        }
        return redirect()->back()->with('msg','update failed!');
    }

    public function counterplus($id)
    {
        $kelas = Kelas::find($id);
        if($kelas->jumlah < 40){
            $kelas->jumlah++;
            if($kelas->update()){
                return redirect()->back()->with('msg','updated!');
            }
        }
        return redirect()->back()->with('msg','update failed!');
    }
}
