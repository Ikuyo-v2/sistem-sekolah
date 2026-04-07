<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="flex flex-col min-h-screen bg-gray-100">
    <!-----Header start---->
    <header class="bg-blue-500 text-white p-4">
        <div class="flex items-center justify-between container mx-auto">
            <a class="font-bold" href="/students">SISTEM SEKOLAH</a>
            <a class="py-2 px-4 bg-white text-blue-500 hover:bg-gray-200 rounded-" href="/students/create">+ TAMBAH
                SISWA</a>
        </div>
    </header>
    <!-----Header end------>

    <main class="grow container mx-auto">
        <div class="container mx-auto mt-8 shadow-lg rounded-lg bg-white p-6 bg-gray-100">
            <h1 class="text-2xl font-bold mb-4">Tambah Siswa</h1>
            <p>Menampilkan Detail siswa</p>
        </div>
        <br>
        <div>
            <div class="bg-white rounded-lg shadow p-6">
                <div class="py-1 grid grid-cols-2 gap-4" method="POST">
                    <div class="space-y-2">
                        <label class="font-bold block" for="name">Nama</label>
                        <input class="px-4 py-2 border rounded-lg w-full" type="text" id="name" name="name"
                            placeholder="Masukkan nama" readonly value="<?php echo $student['name']; ?>">
                    </div>
                    <div class="space-y-2">
                        <label class="font-bold block" for="class">Kelas</label>
                        <input class="px-4 py-2 border rounded-lg w-full" type="text" id="class" name="class"
                            placeholder="Masukkan kelas"readonly value="<?php echo $student['name']; ?>">
                    </div>
                    <div class="space-y-2">
                        <label class="font-bold block" for="nis">NIS</label>
                        <input class="px-4 py-2 border rounded-lg w-full" type="text" id="nis" name="nis"
                            placeholder="Masukkan NIS" readonly value="<?php echo $student['name']; ?>">
                    </div>
                    <div class="space-y-2">
                        <label class="font-bold block" for="phone">Phone Number</label>
                        <input class="px-4 py-2 border rounded-lg w-full" type="text" id="phone" name="phone"
                            placeholder="Masukkan nomor telepon"readonly value="<?php echo $student['name']; ?>">
                    </div>



                    <div class="flex justify-end gap-4 col-span-2">
                        <a href="/students" class="px-4 py-2 rounded-lg bg-gray-300">Kembali</a>

                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <footer>
        <div class="bg-blue-500 text-white p-4 text-center">
            2060 -SMK Kristen Immaniuel - Sistem Sekolah

        </div>
    </footer>
</body>

</html>