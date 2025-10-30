<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library App - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #2563eb;
            color: white;
            padding: 20px;
        }
        main {
            margin-top: 50px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #2563eb;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
        }
        a:hover {
            background-color: #1e40af;
        }
    </style>
</head>
<body>

    <header>
        <h1>📚 Library App</h1>
        <p>Selamat datang di Sistem Perpustakaan kami </p>
    </header>

    <main>
        <h2>Manajemen Buku Lebih Mudah</h2>
        <p>Kelola data buku, anggota, dan peminjaman dengan efisien.</p>
        <a href="{{ url('/dashboard') }}">Masuk ke Dashboard</a>
    </main>

</body>
</html>
