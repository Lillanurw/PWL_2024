<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Artikel dengan Id {id}</title>
</head>
<body>
    <h1>Halaman Artikel dengan Id {{ $artikel->id }}</h1>
    <p>Judul: {{ $artikel->judul }}</p>
    <p>Isi: {{ $artikel->isi }}</p>
</body>
</html>
