<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
       $title = 'sistem sekolah - daftar siswa';

       $students = Student::select(['id', 'nis', 'name', 'major', 'class'])
       ->where( "name", '=', 'Budi')
       ->get();
       
     
       
       return view('students.index',[
        'title'=> $title,
        'students'=> $students
       ]);
    }

    public function show(Student $student)
    {
        $title = 'sistem sekolah - detail data siswa';
        return view('students.show', [
            'title' => $title,
            'student' => $student,
        ]);
    }

    public function create()
    { 
        $title = 'sistem sekolah - tambah data siswa';
        return view('students.create',[
            'title' => $title
        ]
        );
    }

    public function store(StoreRequest $request){
        $validatedRequest = $request->validated();

        Student::create($validatedRequest);

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function update(Student $student, UpdateRequest $request)
    {
        $validatedRequest = $request->validated();

        $student->update($validatedRequest);

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui');
    }
    
    public function destroy(Student $student)
    {
       $student->delete();
         return redirect()->route('students.index')->with('success', 'Data siswa berhasil dihapus');
    }

    public function edit(Student $student)
    {
        $title = 'sistem sekolah - ubah data siswa';
        return view('students.edit', [
            'title' => $title,
            'student' => $student,
        ]);
    }
    

};
