<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table            = 'buku';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];

    protected $validationRules = [
        'judul' => [
            'label' => 'Judul',
            'rules' => 'required|min_length[3]|not_in_list[--,----,-----]'
        ],
        'penulis' => [
            'label' => 'Penulis',
            'rules' => 'required|min_length[3]|not_in_list[--,----,-----]'
        ],
        'penerbit' => [
            'label' => 'Penerbit',
            'rules' => 'required|alpha_space|not_in_list[--,----,-----]'
        ],
        'tahun_terbit' => [
            'label' => 'Tahun Terbit',
            'rules' => 'required|integer|greater_than[1901]|less_than[2024]'
        ]
    ];

    protected $validationMessages = [
        'judul' => [
            'required'     => 'Judul buku wajib diisi.',
            'min_length'   => 'Judul minimal 3 karakter.',
            'not_in_list'  => 'Judul harus diisi dan berupa string.'
        ],
        'penulis' => [
            'required'     => 'Nama penulis wajib diisi.',
            'alpha_space'  => 'Penulis harus diisi dan berupa string.',
            'not_in_list'  => 'Penulis harus diisi dan berupa string.'
        ],
        'penerbit' => [
            'required'     => 'Nama penerbit wajib diisi.',
            'alpha_space'  => 'Penerbit harus diisi dan berupa string.',
            'not_in_list'  => 'Penerbit harus diisi dan berupa string.'
        ],
        'tahun_terbit' => [
            'required'      => 'Tahun terbit wajib diisi.',
            'integer'       => 'Tahun terbit harus diisi dan berupa angka, angka harus lebih besar dari 1800 dan lebih kecil dari 2024',
            'greater_than'  => 'Tahun terbit harus diisi dan berupa angka, angka harus lebih besar dari 1800 dan lebih kecil dari 2024',
            'less_than'     => 'Tahun terbit harus diisi dan berupa angka, angka harus lebih besar dari 1800 dan lebih kecil dari 2024'
        ]
    ];

    protected $skipValidation = false;
}