<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Contracts\Validation\Validator;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use GenderApi\Client as GenderApiClient;
use Auth;
use App\Peserta;
use App\Kelas;

class PesertaController extends Controller
{
    // use DispatchesJobs, ValidatesRequests;
    /**
     * {@inheritdoc}
     */
    /*
    protected function formatValidationErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
    */
    
    /**
     * form pendaftaran peserta
     * 
     * middlerware @var Guest
     */
    public function getDaftar()
    {
        $kelas = Kelas::all();
        $isPenuh = true;
        foreach($kelas as $val){
            if($val->status != 'penuh')
            $isPenuh = false;
        }
        return view('peserta.pendaftaran',compact('kelas','isPenuh'));
    }

    /**
     * save data pendaftaran peserta
     * 
     * middleware @var Guest
     */
    public function postDaftar(Request $req)
    {
        $checkEmail = Peserta::where('email',$req->email)->get()->first();
        if($checkEmail != null){
            // return $checkEmail;
            return redirect()->back()->with(
                'info',
                'email tersebut sudah digunakan sebagai '. strtoupper($checkEmail->nama).','.
                ' silahkan hubungi kami untuk konfirmasi lebih lanjut jika ada perubahan kelas.'.
                ' Atau jika nama tersebut bukan anda.'.
                ' \n*kontak ada di halaman utama!'
            );
        }
        

        $kelas = [
            'web'       => $req->web == null ? 'false' : 'true',
            'femdev'    => $req->femdev== null ? 'false' : 'true',
            'mobile'    => $req->mobile == null ? 'false' : 'true',
            'linux'     => $req->linux == null ? 'false' : 'true',
            'net'       => $req->net == null ? 'false' : 'true',
            'inkscape'  => $req->inkscape == null ? 'false' : 'true',
            'godot'     => $req->godot == null ? 'false' : 'true'
        ];
        
        if($kelas['web'] == 'true'){
            $web = Kelas::where('nama','web')->first();
            if($web->status == 'penuh'){
                return redirect()->back()->with('info','maaf kak, kelas Web Programming saat ini sudah penuh');
            }
        }
        if($kelas['femdev'] == 'true'){
            $femdev = Kelas::where('nama','femdev')->first();
            if($femdev->status == 'penuh'){
                return redirect()->back()->with('info','maaf kak, kelas FemaleDev saat ini sudah penuh');
            }
        }
        if($kelas['mobile'] == 'true'){
            $mobile = Kelas::where('nama','mobile')->first();
            if($mobile->status == 'penuh'){
                return redirect()->back()->with('info','maaf kak, kelas Mobile Programming saat ini sudah penuh');
            }
        }
        if($kelas['linux'] == 'true'){
            $linux = Kelas::where('nama','linux')->first();
            if($linux->status == 'penuh'){
                return redirect()->back()->with('info','maaf kak, kelas Linux Fundamental saat ini sudah penuh');
            }
        }
        if($kelas['net'] == 'true'){
            $net = Kelas::where('nama','net')->first();
            if($net->status == 'penuh'){
                return redirect()->back()->with('info','maaf kak, kelas Networking saat ini sudah penuh');
            }
        }
        if($kelas['inkscape'] == 'true'){
            $inkscape = Kelas::where('nama','inkscape')->first();
            if($inkscape->status == 'penuh'){
                return redirect()->back()->with('info','maaf kak, kelas Multimedia Inkscape saat ini sudah penuh');
            }
        }
        if($kelas['godot'] == 'true'){
            $godot = Kelas::where('nama','godot')->first();
            if($godot->status == 'penuh'){
                return redirect()->back()->with('info','maaf kak, kelas Game Development saat ini sudah penuh');
            }
            
        }

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
            return redirect(route('getDaftar'))->with('success','register successfull');
        }return redirect(route('getDaftar'))->with('failed','failed to register');
        
    }

    /**
     * fungsi untuk mengurangi total pembayaran 
     * 
     * middleware @var Auth&&Admin
     */
    public function pembayaran(Request $req,$id_peserta)
    {
        $peserta = Peserta::find($id_peserta);
        // input dari pembayaran
        $bayar = $req->peserta_bayar;
        // eksekusi pembayaran
        if($peserta->kekurangan_pembayaran < $bayar){
            return ['err'=>'input tidak valid! *pembayaran tidak boleh lebih besar dari total yang harus di bayar'];    
        }
        $peserta->kekurangan_pembayaran = $peserta->kekurangan_pembayaran - $bayar;
        // cek apakah sudah terbayar lunas ?
        if($peserta->kekurangan_pembayaran == 0) {
            $peserta->status_pembayaran = 'lunas';
        }

        
        if($peserta->update()){
            return $peserta;
        }return [
            'err' => 'failed to update'
        ];
    }

    public function pelunasan($peserta_id)
    {
        # code...
        $peserta = Peserta::find($peserta_id);
        $peserta->status_pembayaran = 'lunas';
        $peserta->kekurangan_pembayaran = 0;
        if($peserta->update()){
            // return $peserta;
            if($peserta->web == 'true'){
                $web = Kelas::where('nama','web')->first();
                $web->jumlah = $web->jumlah - 1;
                if($web->jumlah == 5){
                    $web->status = 'penuh';
                }
                $web->update();
            }
            if($peserta->femdev == 'true'){
                $femdev = Kelas::where('nama','femdev')->first();
                $femdev->jumlah = $femdev->jumlah - 1;
                if($femdev->jumlah == 5){
                    $femdev->status = 'penuh';
                }
                $femdev->update();
            }
            if($peserta->mobile == 'true'){
                $mobile = Kelas::where('nama','mobile')->first();
                $mobile->jumlah = $mobile->jumlah - 1;
                if($mobile->jumlah == 5){
                    $mobile->status = 'penuh';
                }
                $mobile->update();
            }
            if($peserta->linux == 'true'){
                $linux = Kelas::where('nama','linux')->first();
                $linux->jumlah = $linux->jumlah - 1;
                if($linux->jumlah == 5){
                    $linux->status = 'penuh';
                }
                $linux->update();
            }
            if($peserta->net == 'true'){
                $net = Kelas::where('nama','net')->first();
                $net->jumlah = $net->jumlah - 1;
                if($net->jumlah == 5){
                    $net->status = 'penuh';
                }
                $net->update();
            }
            if($peserta->inkscape == 'true'){
                $inkscape = Kelas::where('nama','inkscape')->first();
                $inkscape->jumlah = $inkscape->jumlah - 1;
                if($inkscape->jumlah == 5){
                    $inkscape->status = 'penuh';
                }
                $inkscape->update();
            }
            if($peserta->godot == 'true'){
                $godot = Kelas::where('nama','godot')->first();
                $godot->jumlah = $godot->jumlah - 1;
                if($godot->jumlah == 5){
                    $godot->status = 'penuh';
                }
                $godot->update();
            }
            return redirect()->back();
        }return ['err'=>'failed to update'];
    }

    public function deletePeserta($id)
    {
        $peserta = Peserta::find($id);
        // return $peserta;
        if($peserta != null){
            if($peserta->status_pembayaran == 'lunas'){
                $p_kelas = Kelas::PgetKelas($peserta);
                // return $p_kelas;
                foreach($p_kelas as $kls => $status){
                    if($status == "true"){
                        $kelas = Kelas::where('nama',$kls)->first();
                        $kelas->jumlah++;
                        $kelas->update();
                    }
                }
                if($peserta->delete()){
                    return redirect()->back()->with('msg','user barhasil di hapus, silahkan mendaftar ulang');
                }
            }else if($peserta->delete()){
                return redirect()->back()->with('msg','user barhasil di hapus, silahkan mendaftar ulang');
            }
        }return ['msg'=>'user not found!'];
    }


    public function getInformation()
    {
        return view('peserta.cari-peserta');
    }

    public function postInformation(Request $req)
    {
        $peserta = Peserta::where('email',$req->email)->get()->first();
        if($peserta == null){
            return redirect()->back()->with('iseng','email yang anda cari belum terdaftar');
            // return ['msg'=>'email tidak terdaftar'];
        }
        return redirect()->route('show-info',$peserta->id);
    }
    
    public function showInformation($peserta_id)
    {
        $peserta = Peserta::find($peserta_id);
        $kelas = Kelas::PgetKelas($peserta);
        // return $peserta;
        return view('peserta.detail-peserta',compact('peserta','kelas')); 
    }
}
