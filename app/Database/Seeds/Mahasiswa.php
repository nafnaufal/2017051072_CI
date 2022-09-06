<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'nama'          => 'Naufal',
                'npm'           => '123',
                'alamat'        => 'Jambi',
                'created_at'    =>  Time::now()
            ],
            [
                'nama'          => 'Anbial',
                'npm'           => '234',
                'alamat'        => 'Kampung Baru',
                'created_at'    =>  Time::now()
            ],
            [
                'nama'          => 'Falah',
                'npm'           => '345',
                'alamat'        => 'Sungai Penuh',
                'created_at'    =>  Time::now()
            ],

        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}