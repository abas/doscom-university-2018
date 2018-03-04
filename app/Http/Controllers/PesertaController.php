<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Peserta;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

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
        return view('peserta.pendaftaran');
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
            'godot'             => $req->godot == null ? 'false' : 'true'
        ]);

        $tot_bayar = 0;
        foreach ($kelas as $bayar) {
            if($bayar == 'true'){
                $tot_bayar += 35;
            }
        }

        $peserta->total_pembayaran = $tot_bayar;
        $peserta->kekurangan_pembayaran = $tot_bayar;

        if($peserta){
            return redirect(route('getDaftar'))->with('success','register successfull');
        }return redirect(route('getDaftar'))->with('failed','failed to register');
        
    }
}
