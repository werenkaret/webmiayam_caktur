<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataMakanan extends Seeder
{
    public function run()
    {
        $data = [
            'makanan_title' => 'Mi ayam',
            'makanan_description'    => 'MI ayam',
            'makanan_harga'    => '5000',

    ];

    // Simple Queries
    //$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

    // Using Query Builder
    $this->db->table('makanan')->insert($data);
    }
}
