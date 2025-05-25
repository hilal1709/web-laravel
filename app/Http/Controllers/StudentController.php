<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Data mahasiswa statis
    private $students = [
        1 => ['id' => 1, 'name' => 'Budi Santoso', 'nim' => '12345', 'program' => 'Teknik Informatika', 'semester' => 5],
        2 => ['id' => 2, 'name' => 'Siti Nurhaliza', 'nim' => '23456', 'program' => 'Sistem Informasi', 'semester' => 3],
        3 => ['id' => 3, 'name' => 'Agus Setiawan', 'nim' => '34567', 'program' => 'Ilmu Data', 'semester' => 7],
    ];

    public function index()
    {
        return view('students.index', ['students' => $this->students]);
    }

    public function show($id)
    {
        if (!isset($this->students[$id])) {
            abort(404, 'Mahasiswa tidak ditemukan');
        }
        
        return view('students.show', ['student' => $this->students[$id]]);
    }
}
