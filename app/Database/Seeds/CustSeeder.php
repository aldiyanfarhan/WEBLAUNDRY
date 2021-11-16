<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CustSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username_admin'    =>  'Anton',
                'nama_cust'         =>  'pria',
                'no_telp'           =>  '081234555678',
                'alamat'            =>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
                'created_at' => Time::now(),
                'jenis_layanan'     =>  'Pakaian ONS',
                'kuantitas'         =>  '5',
                'berat'             =>  '5',
            ]
        ];
        $this->db->table('datacust')->insertBatch($data);
    }
}
