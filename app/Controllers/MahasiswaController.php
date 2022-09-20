<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();
        
        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        
        return view('templates/header', $data)
        . view('mahasiswa/list', $data)
        . view('templates/footer');
    }
    
    public function create()
    {
        $data = ['title' => 'Add'];
        
        return view('templates/header', $data)
        . view('mahasiswa/create')
        . view('templates/footer');
    }
    public function store()
    {
        $mahasiswaModel = new Mahasiswa();
        if(!$this->validate([
            'nama' => 'required|numeric',
            'npm' => 'required|string',
            'alamat' => 'required'
        ])){
            return redirect()->to('/create');
        }
        $data = [
            'nama' => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $mahasiswaModel->save($data);

        return redirect()->to('/mahasiswa');
    }
    public function delete($id)
    {
        $mahasiswaModel = new Mahasiswa();
        
        $mahasiswaModel->delete($id);
        
        return redirect()->to('mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswaModel = new Mahasiswa();

        $mahasiswa = $mahasiswaModel->find($id);

        $data = [
            'title' => 'Edit mahasiswa',
        ];

         return view('templates/header', $data)
        . view('mahasiswa/edit', $mahasiswa)
        . view('templates/footer');
    }
    public function update($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'alamat' => $this->request->getVar('alamat'),
        ];
        $mahasiswaModel->update($id, $data);

        return redirect()->to('/mahasiswa/');
    }
}
