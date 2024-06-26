@extends('layouts.main')

@section('container')
<section class="remaja-section">
    <div class="remaja">
        <div class="row py-4">
          <!-- Baris Pertama -->
          <div class="col text-center">
            <img src="img/{{ $image }}" alt="Foto 1" class="remaja-gambar img-fluid mb-1">
            <h6 class="remaja-judul">{{ $name }}</h6>
            <p class="remaja-isi">{{ $jabatan }}</p>
            <p class="remaja-isi">{{ $telp }}</p>
            <p class="remaja-isi">{{ $sektor }}</p>
          </div>
        </div>
        <div class="row pertama-remaja py-4">
          <!-- Baris Kedua -->
          <div class="col">
            <img src="img/{{ $image2 }}" alt="Foto 2" class="remaja-gambar img-fluid mb-1">
            <h6 class="remaja-judul">{{ $name2 }}</h6>
            <p class="remaja-isi">{{ $jabatan2 }}</p>
            <p class="remaja-isi">{{ $telp2 }}</p>
            <p class="remaja-isi">{{ $sektor2 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image3 }}" alt="Foto 3" class="remaja-gambar img-fluid mb-1">
            <h6 class="remaja-judul">{{ $name3 }}</h6>
            <p class="remaja-isi">{{ $jabatan3 }}</p>
            <p class="remaja-isi">{{ $telp3 }}</p>
            <p class="remaja-isi">{{ $sektor3 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image4 }}" alt="Foto 4" class="remaja-gambar img-fluid mb-1">
            <h6 class="remaja-judul">{{ $name4 }}</h6>
            <p class="remaja-isi">{{ $jabatan4 }}</p>
            <p class="remaja-isi">{{ $telp4 }}</p>
            <p class="remaja-isi">{{ $sektor4 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image5 }}" alt="Foto 5" class="remaja-gambar img-fluid mb-1">
            <h6 class="remaja-judul">{{ $name5 }}</h6>
            <p class="remaja-isi">{{ $jabatan5 }}</p>
            <p class="remaja-isi">{{ $telp5 }}</p>
            <p class="remaja-isi">{{ $sektor5 }}</p>
          </div>
        </div>
        <div class="row kedua-remaja py-4">
          <!-- Baris Ketiga -->
          <div class="col">
            <img src="img/{{ $image6 }}" alt="Foto 6" class="remaja-gambar img-fluid mb-1">
            <h6 class="remaja-judul">{{ $name6 }}</h6>
            <p class="remaja-isi">{{ $jabatan6 }}</p>
            <p class="remaja-isi">{{ $telp6 }}</p>
            <p class="remaja-isi">{{ $sektor6 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image7 }}" alt="Foto 7" class="remaja-gambar img-fluid mb-1">
            <h6 class="remaja-judul">{{ $name7 }}</h6>
            <p class="remaja-isi">{{ $jabatan7 }}</p>
            <p class="remaja-isi">{{ $telp7 }}</p>
            <p class="remaja-isi">{{ $sektor7 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image8 }}" alt="Foto 8" class="remaja-gambar img-fluid mb-1">
            <h6 class="remaja-judul">{{ $name8 }}</h6>
            <p class="remaja-isi">{{ $jabatan8 }}</p>
            <p class="remaja-isi">{{ $telp8 }}</p>
            <p class="remaja-isi">{{ $sektor8 }}</p>
          </div>
        </div>
          <div class="row pertama-remaja py-4">
            <!-- Baris Keempat -->
            <div class="col">
              <img src="img/{{ $image9 }}" alt="Foto 9" class="remaja-gambar img-fluid mb-1">
              <h6 class="remaja-judul">{{ $name9 }}</h6>
              <p class="remaja-isi">{{ $jabatan9 }}</p>
              <p class="remaja-isi">{{ $telp9 }}</p>
              <p class="remaja-isi">{{ $sektor9 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image10 }}" alt="Foto 10" class="remaja-gambar img-fluid mb-1">
              <h6 class="remaja-judul">{{ $name10 }}</h6>
              <p class="remaja-isi">{{ $jabatan10 }}</p>
              <p class="remaja-isi">{{ $telp10 }}</p>
              <p class="remaja-isi">{{ $sektor10 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image11 }}" alt="Foto 11" class="remaja-gambar img-fluid mb-1">
              <h6 class="remaja-judul">{{ $name11 }}</h6>
              <p class="remaja-isi">{{ $jabatan11 }}</p>
              <p class="remaja-isi">{{ $telp11 }}</p>
              <p class="remaja-isi">{{ $sektor11 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image12 }}" alt="Foto 12" class="remaja-gambar img-fluid mb-1">
              <h6 class="remaja-judul">{{ $name12 }}</h6>
              <p class="remaja-isi">{{ $jabatan12 }}</p>
              <p class="remaja-isi">{{ $telp12 }}</p>
              <p class="remaja-isi">{{ $sektor12 }}</p>
            </div>
        </div>
</section>
@endsection

<style>
    .remaja {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 4%;
        /* justify-content: center !important;
        align-content: center !important; */
    }

    .remaja-judul {
        margin-bottom: 1px !important;
        /* margin-top: 1px !important; */
        font-weight: bold !important;
        text-align: center;
    }

    .remaja-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
        text-align: center;
    }

    .remaja-gambar {
        width: 150px !important;
        height: 210px !important;
    }

    .kedua-remaja {
      padding-right: 29% !important;
      padding-left: 29% !important;
    }

    .pertama-remaja {
      padding-right: 22% !important;
      padding-left: 22% !important;
    }
</style>