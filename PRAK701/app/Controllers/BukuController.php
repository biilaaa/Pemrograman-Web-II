<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;

class BukuController extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
    
        if (!$this->bukuModel->validate($data)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->bukuModel->errors());
        }
    
        $this->bukuModel->insert($data);
    
        return redirect()->to('/buku')->with('success', 'Data buku berhasil ditambahkan.');
    }    

    public function edit($id)
    {
        $buku = $this->bukuModel->find($id);

        if (!$buku) {
            return redirect()->to('/buku')->with('error', 'Data buku tidak ditemukan.');
        }

        return view('buku/edit', ['buku' => $buku]);
    }

    public function update($id)
    {
        $data = $this->request->getPost();

        if (!$this->bukuModel->update($id, $data)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->bukuModel->errors());
        }

        return redirect()->to('/buku')->with('success', 'Data buku berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku')->with('success', 'Data buku berhasil dihapus.');
    }
}