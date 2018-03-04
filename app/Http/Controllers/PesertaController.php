<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;
use App\Peserta;
use App\Kelas;

class PesertaController extends Controller
{
    use DispatchesJobs, ValidatesRequests;
    /**
     * {@inheritdoc}
     */
    protected function formatValidationErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
    
    
    /**
     * form pendaftaran peserta
     */
    public function getDaftar()
    {
        $kelas = Kelas::all();
        return view('peserta.pendaftaran',compact('kelas'));
    }

    /**
     * save data pendaftaran peserta
     */
    public function postDaftar(Request $req)
    {
        $kelas = [
            $req->web == null ? 'false' : 'true',
            $req->femdev== null ? 'false' : 'true',
            $req->mobile == null ? 'false' : 'true',
            $req->linux == null ? 'false' : 'true',
            $req->net == null ? 'false' : 'true',
            $req->inkscape == null ? 'false' : 'true',
            $req->godot == null ? 'false' : 'true'
        ];

        // return $kelas;
        
        if(Peserta::isTidakMilihKelas($kelas)){
            return redirect()->route('getDaftar')->with('iseng','kelas tidak boleh kosong');
        }
        // $peserta = new Peserta;
        $tot_bayar = 0;
        foreach ($kelas as $bayar) {
            if($bayar == 'true'){
                $tot_bayar += 35000;
            }
        }

        $peserta = Peserta::create([
            'nama'              => $req->nama,
            'email'             => $req->email,
            'nohp'              => $req->nohp,
            'status_peserta'    => $req->status_peserta,
            'alasan'            => $req->alasan,
            'web'               => $req->web == null ? 'false' : 'true',
            'femdev'            => $req->femdev == null ? 'false' : 'true',
            'mobile'            => $req->mobile == null ? 'false' : 'true',
            'linux'             => $req->linux == null ? 'false' : 'true',
            'net'               => $req->net == null ? 'false' : 'true',
            'inkscape'          => $req->inkscape == null ? 'false' : 'true',
            'godot'             => $req->godot == null ? 'false' : 'true',
            'total_pembayaran'  => $tot_bayar,
            'kekurangan_pembayaran' => $tot_bayar
        ]);
    
        
        if($peserta){
            if($peserta->web == 'true'){
                $web = Kelas::where('nama','web')->first();
                $web->jumlah = $web->jumlah - 1;
                if($web->jumlah == 0){
                    $web->status = 'penuh';
                }
                $web->update();
            }
            if($peserta->femdev == 'true'){
                $femdev = Kelas::where('nama','femdev')->first();
                $femdev->jumlah = $femdev->jumlah - 1;
                if($femdev->jumlah == 0){
                    $femdev->status = 'penuh';
                }
                $femdev->update();
            }
            if($peserta->mobile == 'true'){
                $mobile = Kelas::where('nama','mobile')->first();
                $mobile->jumlah = $mobile->jumlah - 1;
                if($mobile->jumlah == 0){
                    $mobile->status = 'penuh';
                }
                $mobile->update();
            }
            if($peserta->linux == 'true'){
                $linux = Kelas::where('nama','linux')->first();
                $linux->jumlah = $linux->jumlah - 1;
                if($linux->jumlah == 0){
                    $linux->status = 'penuh';
                }
                $linux->update();
            }
            if($peserta->net == 'true'){
                $net = Kelas::where('nama','net')->first();
                $net->jumlah = $net->jumlah - 1;
                if($net->jumlah == 0){
                    $net->status = 'penuh';
                }
                $net->update();
            }
            if($peserta->inkscape == 'true'){
                $inkscape = Kelas::where('nama','inkscape')->first();
                $inkscape->jumlah = $inkscape->jumlah - 1;
                if($inkscape->jumlah == 0){
                    $inkscape->status = 'penuh';
                }
                $inkscape->update();
            }
            if($peserta->godot == 'true'){
                $godot = Kelas::where('nama','godot')->first();
                $godot->jumlah = $godot->jumlah - 1;
                if($godot->jumlah == 0){
                    $godot->status = 'penuh';
                }
                $godot->update();
            }
            return redirect(route('getDaftar'))->with('success','register successfull');
        }return redirect(route('getDaftar'))->with('failed','failed to register');
        
    }
}
