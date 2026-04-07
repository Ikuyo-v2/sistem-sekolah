<?php
namespace App\Controllers;

class StudentController 
{
    private function getStudents(): array
    {
        // Placeholder data; replace with DB fetch in future
        return [
            ['id' => 1, 'name' => 'Ahmad', 'class' => 'X IPA 1'],
            ['id' => 2, 'name' => 'Siti', 'class' => 'X IPS 2'],
            ['id' => 3, 'name' => 'Budi', 'class' => 'XI IPA 3'],
        ];
    }

    public function index()
    {
        $students = $this->getStudents();
        require_once '../app/views/students/index.php';
    }

    public function create()
    {
        require_once '../app/views/students/create.php';
    }

    public function show($id)
    {
        require_once '.app/views/students/show.php';
    }
    public function edit($id)
    {
        require_once '.app/views/students/edit.php';
    }




}
?>