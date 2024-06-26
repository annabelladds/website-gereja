@extends('layouts.main')

@section('container')
<section class="parompuan-section">
    <div class="parompuan">
        <div class="row pertama-parompuan py-4">
          <!-- Baris Pertama -->
          <div class="col text-center">
            <img src="img/{{ $image }}" alt="Foto 1" class="parompuan-gambar img-fluid mb-1">
            <h6 class="parompuan-judul">{{ $name }}</h6>
            <p class="parompuan-isi">{{ $jabatan }}</p>
            <p class="parompuan-isi">{{ $telp }}</p>
            <p class="parompuan-isi">{{ $sektor }}</p>
          </div>
        </div>
        <div class="row kedua-parompuan py-4">
          <!-- Baris Kedua -->
          <div class="col">
            <img src="img/{{ $image2 }}" alt="Foto 2" class="parompuan-gambar img-fluid mb-1">
            <h6 class="parompuan-judul">{{ $name2 }}</h6>
            <p class="parompuan-isi">{{ $jabatan2 }}</p>
            <p class="parompuan-isi">{{ $telp2 }}</p>
            <p class="parompuan-isi">{{ $sektor2 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image3 }}" alt="Foto 3" class="parompuan-gambar img-fluid mb-1">
            <h6 class="parompuan-judul">{{ $name3 }}</h6>
            <p class="parompuan-isi">{{ $jabatan3 }}</p>
            <p class="parompuan-isi">{{ $telp3 }}</p>
            <p class="parompuan-isi">{{ $sektor3 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image4 }}" alt="Foto 4" class="parompuan-gambar img-fluid mb-1">
            <h6 class="parompuan-judul">{{ $name4 }}</h6>
            <p class="parompuan-isi">{{ $jabatan4 }}</p>
            <p class="parompuan-isi">{{ $telp4 }}</p>
            <p class="parompuan-isi">{{ $sektor4 }}</p>
          </div>
        </div>
        <div class="row kedua-parompuan py-4">
          <!-- Baris Ketiga -->
          <div class="col">
            <img src="img/{{ $image5 }}" alt="Foto 5" class="parompuan-gambar img-fluid mb-1">
            <h6 class="parompuan-judul">{{ $name5 }}</h6>
            <p class="parompuan-isi">{{ $jabatan5 }}</p>
            <p class="parompuan-isi">{{ $telp5 }}</p>
            <p class="parompuan-isi">{{ $sektor5 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image6 }}" alt="Foto 6" class="parompuan-gambar img-fluid mb-1">
            <h6 class="parompuan-judul">{{ $name6 }}</h6>
            <p class="parompuan-isi">{{ $jabatan6 }}</p>
            <p class="parompuan-isi">{{ $telp6 }}</p>
            <p class="parompuan-isi">{{ $sektor6 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image7 }}" alt="Foto 7" class="parompuan-gambar img-fluid mb-1">
            <h6 class="parompuan-judul">{{ $name7 }}</h6>
            <p class="parompuan-isi">{{ $jabatan7 }}</p>
            <p class="parompuan-isi">{{ $telp7 }}</p>
            <p class="parompuan-isi">{{ $sektor7 }}</p>
          </div>
        </div>
          {{-- <div class="row">
            <!-- Baris Keempat -->
            <div class="col">
              <img src="img/{{ $image8 }}" alt="Foto 8" class="parompuan-gambar img-fluid mb-1">
              <h6 class="parompuan-judul">{{ $name8 }}</h6>
              <p class="parompuan-isi">{{ $jabatan8 }}</p>
              <p class="parompuan-isi">{{ $telp8 }}</p>
              <p class="parompuan-isi">{{ $sektor8 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image9 }}" alt="Foto 9" class="parompuan-gambar img-fluid mb-1">
              <h6 class="parompuan-judul">{{ $name9 }}</h6>
              <p class="parompuan-isi">{{ $jabatan9 }}</p>
              <p class="parompuan-isi">{{ $telp9 }}</p>
              <p class="parompuan-isi">{{ $sektor9 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image10 }}" alt="Foto 10" class="parompuan-gambar img-fluid mb-1">
              <h6 class="parompuan-judul">{{ $name10 }}</h6>
              <p class="parompuan-isi">{{ $jabatan10 }}</p>
              <p class="parompuan-isi">{{ $telp10 }}</p>
              <p class="parompuan-isi">{{ $sektor10 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image11 }}" alt="Foto 11" class="parompuan-gambar img-fluid mb-1">
              <h6 class="parompuan-judul">{{ $name11 }}</h6>
              <p class="parompuan-isi">{{ $jabatan11 }}</p>
              <p class="parompuan-isi">{{ $telp11 }}</p>
              <p class="parompuan-isi">{{ $sektor11 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image12 }}" alt="Foto 12" class="parompuan-gambar img-fluid mb-1">
              <h6 class="parompuan-judul">{{ $name12 }}</h6>
              <p class="parompuan-isi">{{ $jabatan12 }}</p>
              <p class="parompuan-isi">{{ $telp12 }}</p>
              <p class="parompuan-isi">{{ $sektor12 }}</p>
            </div>
        </div> --}}
</section>
@endsection

<style>
    .parompuan {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 4%;
        /* justify-content: center !important;
        align-content: center !important; */
    }

    .parompuan-judul {
        margin-bottom: 1px !important;
        /* margin-top: 1px !important; */
        font-weight: bold !important;
        text-align: center;
    }

    .parompuan-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
        text-align: center;
    }

    .parompuan-gambar {
        width: 150px !important;
        height: 210px !important;
    }

    .pertama-parompuan {
      padding-right: 43% !important;
      padding-left: 43% !important;
    }

    .kedua-parompuan {
      padding-right: 29% !important;
      padding-left: 29% !important;
    }
</style>