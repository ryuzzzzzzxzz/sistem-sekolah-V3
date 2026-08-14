<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = 'sistem sekolah - daftar guru';
        $teachers = [

                    [

                        'id' => 1,

                        'nip' => '198501012024',

                        'name' => 'Budi Santoso',

                        'gender' => 'Laki-Laki',

                        'subject' => 'Akuntansi Dasar',

                        'phone' => '081234560001',

                        'status' => 'Aktif',

                    ],

                    [

                        'id' => 2,

                        'nip' => '198703152024',

                        'name' => 'Siti Aminah',

                        'gender' => 'Perempuan',

                        'subject' => 'Jaringan Komputer',

                        'phone' => '081234560002',

                        'status' => 'Aktif',

                    ]

                    ];
                    return view('teachers.index',[
                        'title'=> $title,
                        'teachers'=> $teachers
                    ]);
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
