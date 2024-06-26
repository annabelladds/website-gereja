@extends('layouts.main')

@section('container')
<section class="naposo-section">
    <div class="naposo">
        <div class="row py-4">
          <!-- Baris Pertama -->
          <div class="col text-center">
            <img src="img/{{ $image }}" alt="Foto 1" class="naposo-gambar img-fluid mb-1">
            <h6 class="naposo-judul">{{ $name }}</h6>
            <p class="naposo-isi">{{ $jabatan }}</p>
            <p class="naposo-isi">{{ $telp }}</p>
            <p class="naposo-isi">{{ $sektor }}</p>
          </div>
        </div>
        <div class="row kedua-naposo py-4">
          <!-- Baris Kedua -->
          <div class="col">
            <img src="img/{{ $image2 }}" alt="Foto 2" class="naposo-gambar img-fluid mb-1">
            <h6 class="naposo-judul">{{ $name2 }}</h6>
            <p class="naposo-isi">{{ $jabatan2 }}</p>
            <p class="naposo-isi">{{ $telp2 }}</p>
            <p class="naposo-isi">{{ $sektor2 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image3 }}" alt="Foto 3" class="naposo-gambar img-fluid mb-1">
            <h6 class="naposo-judul">{{ $name3 }}</h6>
            <p class="naposo-isi">{{ $jabatan3 }}</p>
            <p class="naposo-isi">{{ $telp3 }}</p>
            <p class="naposo-isi">{{ $sektor3 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image4 }}" alt="Foto 4" class="naposo-gambar img-fluid mb-1">
            <h6 class="naposo-judul">{{ $name4 }}</h6>
            <p class="naposo-isi">{{ $jabatan4 }}</p>
            <p class="naposo-isi">{{ $telp4 }}</p>
            <p class="naposo-isi">{{ $sektor4 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image5 }}" alt="Foto 5" class="naposo-gambar img-fluid mb-1">
            <h6 class="naposo-judul">{{ $name5 }}</h6>
            <p class="naposo-isi">{{ $jabatan5 }}</p>
            <p class="naposo-isi">{{ $telp5 }}</p>
            <p class="naposo-isi">{{ $sektor5 }}</p>
          </div>
        </div>
        <div class="row pertama-naposo py-4">
          <!-- Baris Ketiga -->
          <div class="col">
            <img src="img/{{ $image6 }}" alt="Foto 6" class="naposo-gambar img-fluid mb-1">
            <h6 class="naposo-judul">{{ $name6 }}</h6>
            <p class="naposo-isi">{{ $jabatan6 }}</p>
            <p class="naposo-isi">{{ $telp6 }}</p>
            <p class="naposo-isi">{{ $sektor6 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image7 }}" alt="Foto 7" class="naposo-gambar img-fluid mb-1">
            <h6 class="naposo-judul">{{ $name7 }}</h6>
            <p class="naposo-isi">{{ $jabatan7 }}</p>
            <p class="naposo-isi">{{ $telp7 }}</p>
            <p class="naposo-isi">{{ $sektor7 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image8 }}" alt="Foto 8" class="naposo-gambar img-fluid mb-1">
            <h6 class="naposo-judul">{{ $name8 }}</h6>
            <p class="naposo-isi">{{ $jabatan8 }}</p>
            <p class="naposo-isi">{{ $telp8 }}</p>
            <p class="naposo-isi">{{ $sektor8 }}</p>
          </div>
        </div>
          <div class="row kedua-naposo py-4">
            <!-- Baris Keempat -->
            <div class="col">
              <img src="img/{{ $image9 }}" alt="Foto 9" class="naposo-gambar img-fluid mb-1">
              <h6 class="naposo-judul">{{ $name9 }}</h6>
              <p class="naposo-isi">{{ $jabatan9 }}</p>
              <p class="naposo-isi">{{ $telp9 }}</p>
              <p class="naposo-isi">{{ $sektor9 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image10 }}" alt="Foto 10" class="naposo-gambar img-fluid mb-1">
              <h6 class="naposo-judul">{{ $name10 }}</h6>
              <p class="naposo-isi">{{ $jabatan10 }}</p>
              <p class="naposo-isi">{{ $telp10 }}</p>
              <p class="naposo-isi">{{ $sektor10 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image11 }}" alt="Foto 11" class="naposo-gambar img-fluid mb-1">
              <h6 class="naposo-judul">{{ $name11 }}</h6>
              <p class="naposo-isi">{{ $jabatan11 }}</p>
              <p class="naposo-isi">{{ $telp11 }}</p>
              <p class="naposo-isi">{{ $sektor11 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image12 }}" alt="Foto 12" class="naposo-gambar img-fluid mb-1">
              <h6 class="naposo-judul">{{ $name12 }}</h6>
              <p class="naposo-isi">{{ $jabatan12 }}</p>
              <p class="naposo-isi">{{ $telp12 }}</p>
              <p class="naposo-isi">{{ $sektor12 }}</p>
            </div>
        </div>
</section>
@endsection

<style>
    .naposo {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 4%;
        /* justify-content: center !important;
        align-content: center !important; */
    }

    .naposo-judul {
        margin-bottom: 1px !important;
        /* margin-top: 1px !important; */
        font-weight: bold !important;
        text-align: center;
    }

    .naposo-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
        text-align: center;
    }

    .naposo-gambar {
        width: 150px !important;
        height: 210px !important;
    }

    .pertama-naposo {
      padding-right: 29% !important;
      padding-left: 29% !important;
    }

    .kedua-naposo {
      padding-right: 22% !important;
      padding-left: 22% !important;
    }
</style>