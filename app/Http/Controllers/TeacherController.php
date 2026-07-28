<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa";
    }

    public function show(string $id)
    {
        return "menampilkan detail siswa dengan ID: {$id}";
    }

    public function create()
    { 
        return "menampilkan form untuk menambahkan siswa baru";
    }

    public function store()
    {
        return "menambahkan data siswa baru";
    }

    public function update(string $id)
    {
        return "mengubah data siswa dengan ID: {$id}";
    }
    
    public function destroy(string $id)
    {
        return "menghapus data siswa dengan ID: {$id}";
    }

    public function edit(string $id)
    {
        return "menampilkan form untuk mengedit data siswa dengan ID: {$id}";
    }
}
