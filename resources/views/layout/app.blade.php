<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold mb-6">sistem Manajemen Produk Kue</h1>
    <div class="mb-4">
        <a href="{{ route('produks.index') }}" class="text-blue-500 mr-4">Daftar Produk</a>
        <a href="{{ route('produks.create') }}" class="text-green-500">Tambah Produk</a>
        <a href ="{{ route('kategoris.index') }}" class="text-purple-500 ml-4">Daftar Kategori</a>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>
