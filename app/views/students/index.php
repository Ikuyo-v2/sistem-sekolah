<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
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
        <div class="container mx-auto mt-8 shadow-lg rounded-lg bg-white p-6">
            <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>
            <p>Menampilkan Daftar Siswa</p>
            <table class="w-full border-collapse border border-0">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-0 px-4 py-2">ID</th>
                        <th class="border border-0 px-4 py-2">Nama</th>
                        <th class="border border-0 px-4 py-2">Kelas</th>
                        <th class="border border-0 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($students) && is_array($students)): ?>
                        <?php foreach ($students as $student): ?>
                            <tr class="text-center">
                                <td class="border border-0 px-4 py-2"><?php echo $student['id']; ?></td>
                                <td class="border border-0 px-4 py-2"><?php echo $student['name']; ?></td>
                                <td class="border border-0 px-4 py-2"><?php echo $student['class']; ?></td>
                                <td class="border border-0 px-4 py-2">
                                    <a href="/students/<?php echo $student['id']; ?>"
                                        class="text-blue-500 hover:underline">Lihat Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center py-4">Tidak ada data siswa.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <br>
    </main>

    <footer>
        <div class="bg-blue-500 text-white p-4 text-center">
            2060 -SMK Kristen Immaniuel - Sistem Sekolah

        </div>
    </footer>
</body>

</html>