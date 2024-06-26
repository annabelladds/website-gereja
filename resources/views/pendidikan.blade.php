@extends('layouts.main')

@section('container')
<section class="pendidikan-section">
    <div class="pendidikan">
        <div class="row pertama-pendidikan py-4">
          <!-- Baris Pertama -->
          <div class="col text-center">
            <img src="img/{{ $image }}" alt="Foto 1" class="pendidikan-gambar img-fluid mb-1">
            <h6 class="pendidikan-judul">{{ $name }}</h6>
            <p class="pendidikan-isi">{{ $jabatan }}</p>
            <p class="pendidikan-isi">{{ $telp }}</p>
            <p class="pendidikan-isi">{{ $sektor }}</p>
          </div>
          <div class="col text-center">
            <img src="img/{{ $image2 }}" alt="Foto 2" class="pendidikan-gambar img-fluid mb-1">
            <h6 class="pendidikan-judul">{{ $name2 }}</h6>
            <p class="pendidikan-isi">{{ $jabatan2 }}</p>
            <p class="pendidikan-isi">{{ $telp2 }}</p>
            <p class="pendidikan-isi">{{ $sektor2 }}</p>
          </div>
          <div class="col text-center">
            <img src="img/{{ $image3 }}" alt="Foto 3" class="pendidikan-gambar img-fluid mb-1">
            <h6 class="pendidikan-judul">{{ $name3 }}</h6>
            <p class="pendidikan-isi">{{ $jabatan3 }}</p>
            <p class="pendidikan-isi">{{ $telp3 }}</p>
            <p class="pendidikan-isi">{{ $sektor3 }}</p>
          </div>
        </div>
        <div class="row kedua-pendidikan py-4">
          <!-- Baris Kedua -->
          <div class="col">
            <img src="img/{{ $image4 }}" alt="Foto 4" class="pendidikan-gambar img-fluid mb-1">
            <h6 class="pendidikan-judul">{{ $name4 }}</h6>
            <p class="pendidikan-isi">{{ $jabatan4 }}</p>
            <p class="pendidikan-isi">{{ $telp4 }}</p>
            <p class="pendidikan-isi">{{ $sektor4 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image5 }}" alt="Foto 5" class="pendidikan-gambar img-fluid mb-1">
            <h6 class="pendidikan-judul">{{ $name5 }}</h6>
            <p class="pendidikan-isi">{{ $jabatan5 }}</p>
            <p class="pendidikan-isi">{{ $telp5 }}</p>
            <p class="pendidikan-isi">{{ $sektor5 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image6 }}" alt="Foto 6" class="pendidikan-gambar img-fluid mb-1">
            <h6 class="pendidikan-judul">{{ $name6 }}</h6>
            <p class="pendidikan-isi">{{ $jabatan6 }}</p>
            <p class="pendidikan-isi">{{ $telp6 }}</p>
            <p class="pendidikan-isi">{{ $sektor6 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image7 }}" alt="Foto 7" class="pendidikan-gambar img-fluid mb-1">
            <h6 class="pendidikan-judul">{{ $name7 }}</h6>
            <p class="pendidikan-isi">{{ $jabatan7 }}</p>
            <p class="pendidikan-isi">{{ $telp7 }}</p>
            <p class="pendidikan-isi">{{ $sektor7 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image8 }}" alt="Foto 8" class="pendidikan-gambar img-fluid mb-1">
            <h6 class="pendidikan-judul">{{ $name8 }}</h6>
            <p class="pendidikan-isi">{{ $jabatan8 }}</p>
            <p class="pendidikan-isi">{{ $telp8 }}</p>
            <p class="pendidikan-isi">{{ $sektor8 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image9 }}" alt="Foto 9" class="pendidikan-gambar img-fluid mb-1">
            <h6 class="pendidikan-judul">{{ $name9 }}</h6>
            <p class="pendidikan-isi">{{ $jabatan9 }}</p>
            <p class="pendidikan-isi">{{ $telp9 }}</p>
            <p class="pendidikan-isi">{{ $sektor9 }}</p>
          </div>
        </div>
        {{-- <div class="row">
          <!-- Baris Ketiga -->
          
          <div class="row">
            <!-- Baris Keempat -->
            <div class="col">
              <img src="img/{{ $image10 }}" alt="Foto 10" class="pendidikan-gambar img-fluid mb-1">
              <h6 class="pendidikan-judul">{{ $name10 }}</h6>
              <p class="pendidikan-isi">{{ $jabatan10 }}</p>
              <p class="pendidikan-isi">{{ $telp10 }}</p>
              <p class="pendidikan-isi">{{ $sektor10 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image11 }}" alt="Foto 11" class="pendidikan-gambar img-fluid mb-1">
              <h6 class="pendidikan-judul">{{ $name11 }}</h6>
              <p class="pendidikan-isi">{{ $jabatan11 }}</p>
              <p class="pendidikan-isi">{{ $telp11 }}</p>
              <p class="pendidikan-isi">{{ $sektor11 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image12 }}" alt="Foto 12" class="pendidikan-gambar img-fluid mb-1">
              <h6 class="pendidikan-judul">{{ $name12 }}</h6>
              <p class="pendidikan-isi">{{ $jabatan12 }}</p>
              <p class="pendidikan-isi">{{ $telp12 }}</p>
              <p class="pendidikan-isi">{{ $sektor12 }}</p>
            </div>
        </div> --}}
    </div>
</section>
@endsection

<style>
    .pendidikan {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 4%;
        /* justify-content: center !important;
        align-content: center !important; */
    }

    .pendidikan-judul {
        margin-bottom: 1px !important;
        /* margin-top: 1px !important; */
        font-weight: bold !important;
        text-align: center;
    }

    .pendidikan-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
        text-align: center;
    }

    .pendidikan-gambar {
        width: 150px !important;
        height: 210px !important;
    }

    .pertama-pendidikan {
      padding-right: 29% !important;
      padding-left: 29% !important;
    }

    .kedua-pendidikan {
      padding-right: 7% !important;
      padding-left: 7% !important;
    }
</style>