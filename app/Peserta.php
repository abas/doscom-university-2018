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

    public static function getGender($fullname)
    {
        try {
            $apiClient = new GenderApiClient(env('GENDER_APP_KEY'));
            $name = $apiClient->getByFirstNameAndLastName($fullname);
        
            if ($name->genderFound()) {
                echo $name->getGender(); // will return "female" (possible values: male, female, unknown)
            }
        
        } catch (GenderApi\Exception $e) {
            echo 'Exception: ' . $e->getMessage();
        }
    }

    public static function isFemale($gender)
    {
        if($gender == 'female'){
            return true;
        }return false;
    }

    public static function getKelas($peserta_id)
    {
        $data = Peserta::find($peserta_id);
        $kelas = [
            $data->web      == 'true' ? 'Web' : null,
            $data->femdev   == 'true' ? 'FemaleDev' : null,
            $data->mobile   == 'true' ? 'Mobile' : null,
            $data->linux    == 'true' ? 'Linux' : null,
            $data->net      == 'true' ? 'Network' : null,
            $data->inkscape == 'true' ? 'Inkscape' : null,
            $data->godot    == 'true' ? 'Godot' : null,
        ];
        $result = [];
        foreach ($kelas as $key) {
            # code...
            if($key != null){
                array_push($result,$key);
            }
        }
        return $result;

    }
}
