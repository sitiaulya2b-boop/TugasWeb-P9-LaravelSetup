<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - Tugas 9</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 p-10">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-blue-600 mb-4">Selamat Datang di Laravel!</h1>
        
        <h2 class="text-xl font-semibold mt-6">Data Mahasiswa (Dinamis):</h2>
        <ul class="list-disc ml-5 mt-2">
            <li>Nama: {{ $mahasiswa['nama'] }}</li>
            <li>NIM: {{ $mahasiswa['nim'] }}</li>
        </ul>

        <h2 class="text-xl font-semibold mt-4">Hobi:</h2>
        <ul class="list-disc ml-5 mt-2">
            @foreach($mahasiswa['hobi'] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

        <div class="mt-8 flex gap-4">
            <a href="/about" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">About</a>
            <a href="/contact" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Contact</a>
            <a href="/hello/Budi" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Coba Bonus</a>
        </div>
    </div>
</body>
</html>