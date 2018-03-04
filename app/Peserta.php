<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'pesertas';
    protected $fillable = [
        'nama','email','nohp','status_peserta','alasan',
        'status_pembayaran','total_pembayaran','kekurangan_pembayaran',
        
        'web','femdev','mobile','linux','net','inkscape','godot'
    ];

    public static function isTidakMilihKelas($kelas)
    {
        $ans = true;
        foreach ($kelas as $key) {
            if($key == 'true') {
                $ans = false; break;
            }
        }return $ans;
    }
}
