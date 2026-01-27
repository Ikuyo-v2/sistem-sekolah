<?php
namespace App\Core;

class Router 
{

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($method == 'GET' && $uri == '/students') {
        echo '<h1>Students Listss</h1>';
        echo '<p>Menambpikan Daftar siswa</p>';
        return;
        }

          if ($method == 'GET' && $uri == '/students/create') {
        echo '<h1>Add Students </h1>';
        echo '<p>Menambpikan form tambah siswa</p>';
        return;
        }


        http_response_code(404);
        echo '<h1>404 Not Found</h1>';
    }
}



?>