<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilMhs extends Model
{
    protected $table = 'profilmhs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama', 'prodi', 'nim', 'hobi', 'skill', 'gambar'];

    private $data = [
        [
            'id'     => 1, 
            'nama'   => 'Zahra Nabila',
            'nim'    => '2310817320007',
            'prodi'  => 'Teknologi Informasi',
            'hobi'   => 'Nonton film, mendengar musik, hangout ',
            'skill'  => 'CSS, Canva design, Office Word/Excel',
            'univ'   => 'Universitas Lambung Mangkurat',
            'gambar' => 'b2.jpg'

        ],
    ];

    public function getAll()
    {
        return $this->data;
    }

    public function getById($id)
    {
        foreach ($this->data as $item) {
            if ($item['id'] === (int)$id) { 
                return $item;
            }
        }
        return null;
    }
}