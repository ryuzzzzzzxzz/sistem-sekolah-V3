<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
       $title = 'sistem sekolah - daftar siswa';
       $students = [
        [
            'id'=> 1,
            'nis'=> '1001',
            'name'=> 'Andi',
            'class'=> 'XII TKJ 2',
            'major'=> 'TKJ'
        ],
        [
            'id'=> 2,
            'nis'=> '1002',
            'name'=> 'Budi',
            'class'=> 'XII TKJ 2',
            'major'=> 'TKJ'
        ],
       ];
       return view('students.index',[
        'title'=> $title,
        'students'=> $students
       ]);
    }

    public function show(string $id)
    {
        $title = 'sistem sekolah - detail siswa';
        return view('students.show');
    }

    public function create()
    { 
        $title = 'sistem sekolah - catat siswa baru';
        return view('students.create');
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
        $title = 'sistem sekolah - ubah data siswa';
        return view('students.edit');
    }
    

};
