<?php

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * seeding kelas
         * 
         */
        $kelas = [
            'web',
            'femdev',
            'mobile',
            'linux',
            'net',
            'inkscape',
            'godot'
        ];
        
        foreach ($kelas as $keyKelas) {
            if($keyKelas == 'godot'){
                DB::table('kelas')->insert([
                    'nama'      => $keyKelas,
                    'jumlah'    => 20,
                    'status'    => 'sisa'
                ]);
            }else{
                DB::table('kelas')->insert([
                    'nama'      => $keyKelas,
                    'jumlah'    => 40,
                    'status'    => 'sisa'
                ]);
            }
        
        }
    }
}
