<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $majors = [

                    [

                        'id' => 1,

                        'code' => 'AKL',

                        'name' => 'Akuntansi dan Keuangan Lembaga',

                        'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',

                    ],

                    [

                        'id' => 2,

                        'code' => 'TKJ',

                        'name' => 'Teknik Komputer dan Jaringan',

                         'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',

                    ],

                    [

                            'id' => 3,

                            'code' => 'BD',

                            'name' => 'Bisnis Digital',

                            'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',

                    ],

                    ];
                    return view('majors.index',[
                            'title'=> 'sistem sekolah - daftar jurusan',
                            'majors'=> $majors
                        ]
                    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('majors.index',[
                            'title'=> 'sistem sekolah - tambah jurusan',
                        ]
                    );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "menambahkan data jurusan baru";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('majors.index',[
                            'title'=> 'sistem sekolah - detail jurusan',
                        ]
                    );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "menampilkan form untuk mengedit data jurusan dengan ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "mengubah data jurusan dengan ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "menghapus data jurusan dengan ID: {$id}";
    }
}
