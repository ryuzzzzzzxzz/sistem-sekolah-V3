<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'nis' => ['required', 'string', 'size:10', 'unique:students,nis'],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki laki,Perempuan'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BID'],
            'class' => ['required', 'string'],
        ]);

        Student::create($validatedRequest);

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function update(Student $student, Request $request)
    {
        $validatedRequest = $request->validate([
            'nis' => ['required', 'string', 'size:10', 'unique:students,nis,' . $student->id],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki laki,Perempuan'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BID'],
            'class' => ['required', 'string'],
        ]);

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
