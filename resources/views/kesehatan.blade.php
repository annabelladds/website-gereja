@extends('layouts.main')

@section('container')
<section class="kesehatan-section">
    <div class="kesehatan">
        <div class="row pertama-kesehatan py-4">
          <!-- Baris Pertama -->
          <div class="col text-center\">
            <img src="img/{{ $image }}" alt="Foto 1" class="kesehatan-gambar img-fluid mb-1">
            <h6 class="kesehatan-judul">{{ $name }}</h6>
            <p class="kesehatan-isi">{{ $jabatan }}</p>
            <p class="kesehatan-isi">{{ $telp }}</p>
            <p class="kesehatan-isi">{{ $sektor }}</p>
          </div>
        </div>
        <div class="row kedua-kesehatan py-4">
          <!-- Baris Kedua -->
          <div class="col">
            <img src="img/{{ $image2 }}" alt="Foto 2" class="kesehatan-gambar img-fluid mb-1">
            <h6 class="kesehatan-judul">{{ $name2 }}</h6>
            <p class="kesehatan-isi">{{ $jabatan2 }}</p>
            <p class="kesehatan-isi">{{ $telp2 }}</p>
            <p class="kesehatan-isi">{{ $sektor2 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image3 }}" alt="Foto 3" class="kesehatan-gambar img-fluid mb-1">
            <h6 class="kesehatan-judul">{{ $name3 }}</h6>
            <p class="kesehatan-isi">{{ $jabatan3 }}</p>
            <p class="kesehatan-isi">{{ $telp3 }}</p>
            <p class="kesehatan-isi">{{ $sektor3 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image4 }}" alt="Foto 4" class="kesehatan-gambar img-fluid mb-1">
            <h6 class="kesehatan-judul">{{ $name4 }}</h6>
            <p class="kesehatan-isi">{{ $jabatan4 }}</p>
            <p class="kesehatan-isi">{{ $telp4 }}</p>
            <p class="kesehatan-isi">{{ $sektor4 }}</p>
          </div> 
        </div>
        <div class="row kedua-kesehatan py-4">
          <!-- Baris Ketiga -->
          <div class="col">
            <img src="img/{{ $image5 }}" alt="Foto 5" class="kesehatan-gambar img-fluid mb-1">
            <h6 class="kesehatan-judul">{{ $name5 }}</h6>
            <p class="kesehatan-isi">{{ $jabatan5 }}</p>
            <p class="kesehatan-isi">{{ $telp5 }}</p>
            <p class="kesehatan-isi">{{ $sektor5 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image6 }}" alt="Foto 6" class="kesehatan-gambar img-fluid mb-1">
            <h6 class="kesehatan-judul">{{ $name6 }}</h6>
            <p class="kesehatan-isi">{{ $jabatan6 }}</p>
            <p class="kesehatan-isi">{{ $telp6 }}</p>
            <p class="kesehatan-isi">{{ $sektor6 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image7 }}" alt="Foto 7" class="kesehatan-gambar img-fluid mb-1">
            <h6 class="kesehatan-judul">{{ $name7 }}</h6>
            <p class="kesehatan-isi">{{ $jabatan7 }}</p>
            <p class="kesehatan-isi">{{ $telp7 }}</p>
            <p class="kesehatan-isi">{{ $sektor7 }}</p>
          </div>
        </div>
          {{-- <div class="row">
            <!-- Baris Keempat -->
            <div class="col">
              <img src="img/{{ $image10 }}" alt="Foto 10" class="kesehatan-gambar img-fluid mb-1">
              <h6 class="kesehatan-judul">{{ $name10 }}</h6>
              <p class="kesehatan-isi">{{ $jabatan10 }}</p>
              <p class="kesehatan-isi">{{ $telp10 }}</p>
              <p class="kesehatan-isi">{{ $sektor10 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image11 }}" alt="Foto 11" class="kesehatan-gambar img-fluid mb-1">
              <h6 class="kesehatan-judul">{{ $name11 }}</h6>
              <p class="kesehatan-isi">{{ $jabatan11 }}</p>
              <p class="kesehatan-isi">{{ $telp11 }}</p>
              <p class="kesehatan-isi">{{ $sektor11 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image12 }}" alt="Foto 12" class="kesehatan-gambar img-fluid mb-1">
              <h6 class="kesehatan-judul">{{ $name12 }}</h6>
              <p class="kesehatan-isi">{{ $jabatan12 }}</p>
              <p class="kesehatan-isi">{{ $telp12 }}</p>
              <p class="kesehatan-isi">{{ $sektor12 }}</p>
            </div> --}}
        
    </div>
</section>
@endsection

<style>
    .kesehatan {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 4%;
        /* justify-content: center !important;
        align-content: center !important; */
    }

    .kesehatan-judul {
        margin-bottom: 1px !important;
        /* margin-top: 1px !important; */
        font-weight: bold !important;
        text-align: center;
    }

    .kesehatan-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
        text-align: center;
    }

    .kesehatan-gambar {
        width: 150px !important;
        height: 210px !important;
    }

    .pertama-kesehatan {
      padding-right: 43% !important;
      padding-left: 43% !important;
    }

    .kedua-kesehatan {
      padding-right: 29% !important;
      padding-left: 29% !important;
    }
</style>