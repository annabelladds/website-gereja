@extends('layouts.main')

@section('container')
<section class="zending-section">
    <div class="zending">
        <div class="row pertama-zending py-4">
          <!-- Baris Pertama -->
          <div class="col text-center">
            <img src="img/{{ $image }}" alt="Foto 1" class="zending-gambar img-fluid mb-1">
            <h6 class="zending-judul">{{ $name }}</h6>
            <p class="zending-isi">{{ $jabatan }}</p>
            <p class="zending-isi">{{ $telp }}</p>
            <p class="zending-isi">{{ $sektor }}</p>
          </div>
        </div>
        <div class="row kedua-zending py-4">
          <!-- Baris Kedua -->
          <div class="col">
            <img src="img/{{ $image2 }}" alt="Foto 2" class="zending-gambar img-fluid mb-1">
            <h6 class="zending-judul">{{ $name2 }}</h6>
            <p class="zending-isi">{{ $jabatan2 }}</p>
            <p class="zending-isi">{{ $telp2 }}</p>
            <p class="zending-isi">{{ $sektor2 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image3 }}" alt="Foto 3" class="zending-gambar img-fluid mb-1">
            <h6 class="zending-judul">{{ $name3 }}</h6>
            <p class="zending-isi">{{ $jabatan3 }}</p>
            <p class="zending-isi">{{ $telp3 }}</p>
            <p class="zending-isi">{{ $sektor3 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image4 }}" alt="Foto 4" class="zending-gambar img-fluid mb-1">
            <h6 class="zending-judul">{{ $name4 }}</h6>
            <p class="zending-isi">{{ $jabatan4 }}</p>
            <p class="zending-isi">{{ $telp4 }}</p>
            <p class="zending-isi">{{ $sektor4 }}</p>
          </div>
        </div>
        {{-- <div class="row"> --}}
          {{-- <!-- Baris Ketiga -->
          <div class="col">
            <img src="img/{{ $image5 }}" alt="Foto 5" class="zending-gambar img-fluid mb-1">
            <h6 class="zending-judul">{{ $name5 }}</h6>
            <p class="zending-isi">{{ $jabatan5 }}</p>
            <p class="zending-isi">{{ $telp5 }}</p>
            <p class="zending-isi">{{ $sektor5 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image6 }}" alt="Foto 6" class="zending-gambar img-fluid mb-1">
            <h6 class="zending-judul">{{ $name6 }}</h6>
            <p class="zending-isi">{{ $jabatan6 }}</p>
            <p class="zending-isi">{{ $telp6 }}</p>
            <p class="zending-isi">{{ $sektor6 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image7 }}" alt="Foto 7" class="zending-gambar img-fluid mb-1">
            <h6 class="zending-judul">{{ $name7 }}</h6>
            <p class="zending-isi">{{ $jabatan7 }}</p>
            <p class="zending-isi">{{ $telp7 }}</p>
            <p class="zending-isi">{{ $sektor7 }}</p>
          </div>
          <div class="row">
            <!-- Baris Keempat -->
            <div class="col">
              <img src="img/{{ $image8 }}" alt="Foto 8" class="zending-gambar img-fluid mb-1">
              <h6 class="zending-judul">{{ $name8 }}</h6>
              <p class="zending-isi">{{ $jabatan8 }}</p>
              <p class="zending-isi">{{ $telp8 }}</p>
              <p class="zending-isi">{{ $sektor8 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image9 }}" alt="Foto 9" class="zending-gambar img-fluid mb-1">
              <h6 class="zending-judul">{{ $name9 }}</h6>
              <p class="zending-isi">{{ $jabatan9 }}</p>
              <p class="zending-isi">{{ $telp9 }}</p>
              <p class="zending-isi">{{ $sektor9 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image10 }}" alt="Foto 10" class="zending-gambar img-fluid mb-1">
              <h6 class="zending-judul">{{ $name10 }}</h6>
              <p class="zending-isi">{{ $jabatan10 }}</p>
              <p class="zending-isi">{{ $telp10 }}</p>
              <p class="zending-isi">{{ $sektor10 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image11 }}" alt="Foto 11" class="zending-gambar img-fluid mb-1">
              <h6 class="zending-judul">{{ $name11 }}</h6>
              <p class="zending-isi">{{ $jabatan11 }}</p>
              <p class="zending-isi">{{ $telp11 }}</p>
              <p class="zending-isi">{{ $sektor11 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image12 }}" alt="Foto 12" class="zending-gambar img-fluid mb-1">
              <h6 class="zending-judul">{{ $name12 }}</h6>
              <p class="zending-isi">{{ $jabatan12 }}</p>
              <p class="zending-isi">{{ $telp12 }}</p>
              <p class="zending-isi">{{ $sektor12 }}</p>
            </div> --}}
        </div>
    </div>
</section>
@endsection

<style>
    .zending {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 4%;
        /* justify-content: center !important;
        align-content: center !important; */
    }

    .zending-judul {
        margin-bottom: 1px !important;
        /* margin-top: 1px !important; */
        font-weight: bold !important;
        text-align: center;
    }

    .zending-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
        text-align: center;
    }

    .zending-gambar {
        width: 150px !important;
        height: 210px !important;
    }

    .pertama-zending {
      padding-right: 43% !important;
      padding-left: 43% !important;
    }

    .kedua-zending {
      padding-right: 29% !important;
      padding-left: 29% !important;
    }
</style>