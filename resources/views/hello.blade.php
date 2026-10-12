<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 p-10">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md text-center">
        <h1 class="text-4xl font-bold text-purple-600 mb-4">Halo, {{ $nama }}! 👋</h1>
        <p>Ini adalah contoh route parameter dinamis.</p>
        <a href="/" class="mt-6 inline-block text-blue-500 underline">Kembali ke Home</a>
    </div>
</body>
</html>