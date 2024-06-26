@extends('layouts.main')

@section ('container')
{{-- 
  <style>
    .container-jumlah {
      text-align: center;
      margin-top: 50px;
    }
    .logo {
      margin-bottom: 20px;
    }
    .angka {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .tulisan {
      font-size: 18px;
    }
  </style>

  <div class="container-jumlah">
    <img src="logo_orang.png" alt="Logo Orang" class="logo">
    <p class="angka" id="angka-jemaat">1</p>
    <p class="tulisan">jemaat</p>
    <img src="logo_keluarga.png" alt="Logo Keluarga" class="logo">
    <p class="angka" id="angka-keluarga">1</p>
    <p class="tulisan">keluarga</p>
    <img src="logo_anak.png" alt="Logo Anak" class="logo">
    <p class="angka" id="angka-anak">1</p>
    <p class="tulisan">anak</p>
  </div>

  <script>
    // Fungsi untuk menggerakkan angka dari 1 hingga 1000+
    function animateNumber(id, end, duration) {
      let start = 1;
      let range = end - start;
      let current = start;
      let increment = end > start ? 1 : -1;
      let stepTime = Math.abs(Math.floor(duration / range));
      let obj = document.getElementById(id);
      let timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
          clearInterval(timer);
        }
      }, stepTime);
    }

    // Panggil fungsi animateNumber untuk setiap angka
    window.onload = function() {
      animateNumber("angka-jemaat", 1000, 700); // Animasi angka jemaat dari 1 hingga 1000+ dalam 2 detik
      animateNumber("angka-keluarga", 300, 700); // Animasi angka keluarga dari 1 hingga 300+ dalam 2 detik
      animateNumber("angka-anak", 150, 700); // Animasi angka anak dari 1 hingga 150+ dalam 2 detik
    };
  </script> --}}


  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh Pengaturan Jarak Kiri dan Kanan</title>
  <!-- Panggil library CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #EFF3FF;
      font-family: 'Nunito', sans-serif;
    }
    .container-jumlah {
      text-align: center;
      margin-top: 50px;
    }
    .logo {
      margin-bottom: 20px;
    }
    .angka {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .tulisan {
      font-size: 18px;
    }
    .item {
      display: inline-block;
      width: calc(33.33% - 20px); /* 20px untuk margin antar item */
      margin-right: 10px;
      vertical-align: top;
    }
  </style>
</head>
<body>
  <div class="container-jumlah">
    <div class="item">
      <img src="logo_orang.png" alt="Logo Orang" class="logo">
      <p class="angka" id="angka-jemaat">1+</p>
      <p class="tulisan">jemaat</p>
    </div>
    <div class="item">
      <img src="logo_keluarga.png" alt="Logo Keluarga" class="logo">
      <p class="angka" id="angka-keluarga">1+</p>
      <p class="tulisan">keluarga</p>
    </div>
    <div class="item">
      <img src="logo_anak.png" alt="Logo Anak" class="logo">
      <p class="angka" id="angka-anak">1+</p>
      <p class="tulisan">anak</p>
    </div>
  </div>

  <!-- Panggil library JavaScript Bootstrap (jika diperlukan) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Fungsi untuk menggerakkan angka dari 1 hingga 1000+
    function animateNumber(id, end, duration) {
      let start = 1;
      let range = end - start;
      let current = start;
      let increment = end > start ? 1 : -1;
      let stepTime = Math.abs(Math.floor(duration / range));
      let obj = document.getElementById(id);
      let timer = setInterval(function() {
        current += increment;
        // Tambahkan tanda '+' jika angka lebih besar dari 999
        let displayNumber = current > 1 ? current + '+' : current;
        obj.innerHTML = displayNumber;
        if (current == end) {
          clearInterval(timer);
        }
      }, stepTime);
    }

    // Panggil fungsi animateNumber untuk setiap angka
    window.onload = function() {
      animateNumber("angka-jemaat", 1000, 700); // Animasi angka jemaat dari 1 hingga 1000+ dalam 2 detik
      animateNumber("angka-keluarga", 300, 700); // Animasi angka keluarga dari 1 hingga 300+ dalam 2 detik
      animateNumber("angka-anak", 150, 700); // Animasi angka anak dari 1 hingga 150+ dalam 2 detik
    };
  </script>
</body>
</html>

@endsection  