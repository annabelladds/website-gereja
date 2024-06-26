@extends('layouts.main')

@section('container')
<section class="sekolahminggu-section">
    <div class="sekolahminggu">
        <div class="row pertama-skm py-4">
          <!-- Baris Pertama -->
          <div class="col">
            <img src="img/{{ $image }}" alt="Foto 1" class="sekolahminggu-gambar img-fluid mb-1">
            <h6 class="sekolahminggu-judul">{{ $name }}</h6>
            <p class="sekolahminggu-isi">{{ $jabatan }}</p>
            <p class="sekolahminggu-isi">{{ $telp }}</p>
            <p class="sekolahminggu-isi">{{ $sektor }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image2 }}" alt="Foto 2" class="sekolahminggu-gambar img-fluid mb-1">
            <h6 class="sekolahminggu-judul">{{ $name2 }}</h6>
            <p class="sekolahminggu-isi">{{ $jabatan2 }}</p>
            <p class="sekolahminggu-isi">{{ $telp2 }}</p>
            <p class="sekolahminggu-isi">{{ $sektor2 }}</p>
          </div>
        </div>
        <div class="row kedua-skm py-4">
          <!-- Baris Kedua -->
          <div class="col">
            <img src="img/{{ $image3 }}" alt="Foto 3" class="sekolahminggu-gambar img-fluid mb-1">
            <h6 class="sekolahminggu-judul">{{ $name3 }}</h6>
            <p class="sekolahminggu-isi">{{ $jabatan3 }}</p>
            <p class="sekolahminggu-isi">{{ $telp3 }}</p>
            <p class="sekolahminggu-isi">{{ $sektor3 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image4 }}" alt="Foto 4" class="sekolahminggu-gambar img-fluid mb-1">
            <h6 class="sekolahminggu-judul">{{ $name4 }}</h6>
            <p class="sekolahminggu-isi">{{ $jabatan4 }}</p>
            <p class="sekolahminggu-isi">{{ $telp4 }}</p>
            <p class="sekolahminggu-isi">{{ $sektor4 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image5 }}" alt="Foto 5" class="sekolahminggu-gambar img-fluid mb-1">
            <h6 class="sekolahminggu-judul">{{ $name5 }}</h6>
            <p class="sekolahminggu-isi">{{ $jabatan5 }}</p>
            <p class="sekolahminggu-isi">{{ $telp5 }}</p>
            <p class="sekolahminggu-isi">{{ $sektor5 }}</p>
          </div>
        </div>
        <div class="row kedua-skm py-4">
          <!-- Baris Ketiga -->
          <div class="col">
            <img src="img/{{ $image6 }}" alt="Foto 6" class="sekolahminggu-gambar img-fluid mb-1">
            <h6 class="sekolahminggu-judul">{{ $name6 }}</h6>
            <p class="sekolahminggu-isi">{{ $jabatan6 }}</p>
            <p class="sekolahminggu-isi">{{ $telp6 }}</p>
            <p class="sekolahminggu-isi">{{ $sektor6 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image7 }}" alt="Foto 7" class="sekolahminggu-gambar img-fluid mb-1">
            <h6 class="sekolahminggu-judul">{{ $name7 }}</h6>
            <p class="sekolahminggu-isi">{{ $jabatan7 }}</p>
            <p class="sekolahminggu-isi">{{ $telp7 }}</p>
            <p class="sekolahminggu-isi">{{ $sektor7 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image8 }}" alt="Foto 8" class="sekolahminggu-gambar img-fluid mb-1">
            <h6 class="sekolahminggu-judul">{{ $name8 }}</h6>
            <p class="sekolahminggu-isi">{{ $jabatan8 }}</p>
            <p class="sekolahminggu-isi">{{ $telp8 }}</p>
            <p class="sekolahminggu-isi">{{ $sektor8 }}</p>
          </div>
        </div>
          <div class="row kedua-skm py-4">
            <!-- Baris Keempat -->
            <div class="col">
              <img src="img/{{ $image9 }}" alt="Foto 9" class="sekolahminggu-gambar img-fluid mb-1">
              <h6 class="sekolahminggu-judul">{{ $name9 }}</h6>
              <p class="sekolahminggu-isi">{{ $jabatan9 }}</p>
              <p class="sekolahminggu-isi">{{ $telp9 }}</p>
              <p class="sekolahminggu-isi">{{ $sektor9 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image10 }}" alt="Foto 10" class="sekolahminggu-gambar img-fluid mb-1">
              <h6 class="sekolahminggu-judul">{{ $name10 }}</h6>
              <p class="sekolahminggu-isi">{{ $jabatan10 }}</p>
              <p class="sekolahminggu-isi">{{ $telp10 }}</p>
              <p class="sekolahminggu-isi">{{ $sektor10 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image11 }}" alt="Foto 11" class="sekolahminggu-gambar img-fluid mb-1">
              <h6 class="sekolahminggu-judul">{{ $name11 }}</h6>
              <p class="sekolahminggu-isi">{{ $jabatan11 }}</p>
              <p class="sekolahminggu-isi">{{ $telp11 }}</p>
              <p class="sekolahminggu-isi">{{ $sektor11 }}</p>
            </div>
        </div>
</section>
@endsection

<style>
    .sekolahminggu {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 4%;
        /* justify-content: center !important;
        align-content: center !important; */
    }

    .sekolahminggu-judul {
        margin-bottom: 1px !important;
        /* margin-top: 1px !important; */
        font-weight: bold !important;
        text-align: center;
    }

    .sekolahminggu-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
        text-align: center;
    }

    .sekolahminggu-gambar {
        width: 150px !important;
        height: 210px !important;
    }

    .pertama-skm {
      padding-right: 36% !important;
      padding-left: 36% !important;
    }

    .kedua-skm {
      padding-right: 29% !important;
      padding-left: 29% !important;
    }
</style>