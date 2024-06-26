@extends('layouts.main')

@section('container')
<section class="ama-section py-2">
    <div class="ama">
        <div class="row py-4">
          <!-- Baris Pertama -->
          <div class="col text-center">
            <img src="img/{{ $image }}" alt="Foto 1" class="ama-gambar img-fluid mb-1">
            <h6 class="ama-judul">{{ $name }}</h6>
            <p class="ama-isi">{{ $jabatan }}</p>
            <p class="ama-isi">{{ $telp }}</p>
            <p class="ama-isi">{{ $sektor }}</p>
          </div>
        </div>
        <div class="row pertama-ama py-4">
          <!-- Baris Kedua -->
          <div class="col">
            <img src="img/{{ $image2 }}" alt="Foto 2" class="ama-gambar img-fluid mb-1">
            <h6 class="ama-judul">{{ $name2 }}</h6>
            <p class="ama-isi">{{ $jabatan2 }}</p>
            <p class="ama-isi">{{ $telp2 }}</p>
            <p class="ama-isi">{{ $sektor2 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image3 }}" alt="Foto 3" class="ama-gambar img-fluid mb-1">
            <h6 class="ama-judul">{{ $name3 }}</h6>
            <p class="ama-isi">{{ $jabatan3 }}</p>
            <p class="ama-isi">{{ $telp3 }}</p>
            <p class="ama-isi">{{ $sektor3 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image4 }}" alt="Foto 4" class="ama-gambar img-fluid mb-1">
            <h6 class="ama-judul">{{ $name4 }}</h6>
            <p class="ama-isi">{{ $jabatan4 }}</p>
            <p class="ama-isi">{{ $telp4 }}</p>
            <p class="ama-isi">{{ $sektor4 }}</p>
          </div>
        </div>
        <div class="row">
          {{-- <!-- Baris Ketiga -->
          <div class="col">
            <img src="img/{{ $image5 }}" alt="Foto 5" class="ama-gambar img-fluid mb-1">
            <h6 class="ama-judul">{{ $name5 }}</h6>
            <p class="ama-isi">{{ $jabatan5 }}</p>
            <p class="ama-isi">{{ $telp5 }}</p>
            <p class="ama-isi">{{ $sektor5 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image6 }}" alt="Foto 6" class="ama-gambar img-fluid mb-1">
            <h6 class="ama-judul">{{ $name6 }}</h6>
            <p class="ama-isi">{{ $jabatan6 }}</p>
            <p class="ama-isi">{{ $telp6 }}</p>
            <p class="ama-isi">{{ $sektor6 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image7 }}" alt="Foto 7" class="ama-gambar img-fluid mb-1">
            <h6 class="ama-judul">{{ $name7 }}</h6>
            <p class="ama-isi">{{ $jabatan7 }}</p>
            <p class="ama-isi">{{ $telp7 }}</p>
            <p class="ama-isi">{{ $sektor7 }}</p>
          </div>
          <div class="row">
            <!-- Baris Keempat -->
            <div class="col">
              <img src="img/{{ $image8 }}" alt="Foto 8" class="ama-gambar img-fluid mb-1">
              <h6 class="ama-judul">{{ $name8 }}</h6>
              <p class="ama-isi">{{ $jabatan8 }}</p>
              <p class="ama-isi">{{ $telp8 }}</p>
              <p class="ama-isi">{{ $sektor8 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image9 }}" alt="Foto 9" class="ama-gambar img-fluid mb-1">
              <h6 class="ama-judul">{{ $name9 }}</h6>
              <p class="ama-isi">{{ $jabatan9 }}</p>
              <p class="ama-isi">{{ $telp9 }}</p>
              <p class="ama-isi">{{ $sektor9 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image10 }}" alt="Foto 10" class="ama-gambar img-fluid mb-1">
              <h6 class="ama-judul">{{ $name10 }}</h6>
              <p class="ama-isi">{{ $jabatan10 }}</p>
              <p class="ama-isi">{{ $telp10 }}</p>
              <p class="ama-isi">{{ $sektor10 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image11 }}" alt="Foto 11" class="ama-gambar img-fluid mb-1">
              <h6 class="ama-judul">{{ $name11 }}</h6>
              <p class="ama-isi">{{ $jabatan11 }}</p>
              <p class="ama-isi">{{ $telp11 }}</p>
              <p class="ama-isi">{{ $sektor11 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image12 }}" alt="Foto 12" class="ama-gambar img-fluid mb-1">
              <h6 class="ama-judul">{{ $name12 }}</h6>
              <p class="ama-isi">{{ $jabatan12 }}</p>
              <p class="ama-isi">{{ $telp12 }}</p>
              <p class="ama-isi">{{ $sektor12 }}</p>
            </div> --}}
        </div>
    </div>
</section>
@endsection

<style>
    .ama {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 4%;
        /* justify-content: center !important;
        align-content: center !important; */
    }

    .ama-judul {
        margin-bottom: 1px !important;
        /* margin-top: 1px !important; */
        font-weight: bold !important;
        text-align: center;
    }

    .ama-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
        text-align: center;
    }

    .ama-gambar {
        width: 150px !important;
        height: 210px !important;
    }

    .pertama-ama {
      padding-right: 29% !important;
      padding-left: 29% !important;
    }
</style>