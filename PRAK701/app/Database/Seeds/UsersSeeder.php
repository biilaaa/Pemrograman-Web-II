<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->truncate(); 

        $data = [
            'username' => 'admin',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'email'    => 'admin@example.com',
        ];
        $this->db->table('users')->insert($data);
        echo "Data admin berhasil ditambahkan.\n";
    }
}