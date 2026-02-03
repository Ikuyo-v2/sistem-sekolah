<?php
namespace App\Controllers;

class StudentController 
{
    
    public function index()
    {
        echo '<h1>Students Listss</h1>';
        echo '<p>Menambpikan Daftar siswa</p>';
    }

    public function create()
    {
        echo '<h1>Add Students </h1>';
        echo '<p>Menambpikan form tambah siswa</p>';
    }

    public function show($id)
    {
        echo '<h1>Student Details</h1>';
        echo '<p>Menampilkan detail siswa dengan ID: ' . $id . '</p>';
    }




}
?>