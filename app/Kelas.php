<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'kelas','status'
    ];

    public static function isFull($id)
    {
        $jumlah = $this::find($id)->jumlah;
        if($jumlah == 0){
            return true;
        }return false;
    }
}
