<?php

namespace App\Controllers;

use App\Models\ProfilMhs;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new ProfilMhs();
        $data['profil'] = $model->getAll(); 
        return view('index', $data);
    }

    public function beranda()
    {
        $data = [
            'nama' => 'Zahra Nabila',
            'nim'  => '2310817320007'
        ];
        return view('beranda', $data);
    }

    public function profil()
    {
        $model = new ProfilMhs();
        $data = $model->getById(1); // Ambil satu profil dengan ID tertentu, misal ID = 1

        if (!$data) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Profil tidak ditemukan.");
        }

        return view('profil', $data); // Profil ditampilkan langsung di sini
    }
}