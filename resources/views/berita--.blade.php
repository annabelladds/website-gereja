<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsplash Image Test</title>
</head>
<body>
    <img src="https://source.unsplash.com/1200x500/?church" alt="Church Image">
    <img src="https://images.unsplash.com/photo-1593642532871-8b12e02d091c" alt="Static Unsplash Image">

    <script>
        Menambahkan event listener untuk memeriksa apakah gambar berhasil dimuat
        const img = document.querySelector('img');
        img.addEventListener('load', () => {
            console.log('Gambar berhasil dimuat');
        });
        img.addEventListener('error', () => {
            console.log('Gagal memuat gambar');
        });
    </script>
</body>
</html>
