@extends('layouts.main')

@section('container')
<section class="sosial-section">
    <div class="sosial">
        <div class="row pertama-sosial py-4">
          <!-- Baris Pertama -->
          <div class="col text-center">
            <img src="img/{{ $image }}" alt="Foto 1" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name }}</h6>
            <p class="sosial-isi">{{ $jabatan }}</p>
            <p class="sosial-isi">{{ $telp }}</p>
            <p class="sosial-isi">{{ $sektor }}</p>
          </div>
        </div>
        <div class="row kedua-sosial py-4">
          <!-- Baris Kedua -->
          <div class="col">
            <img src="img/{{ $image2 }}" alt="Foto 2" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name2 }}</h6>
            <p class="sosial-isi">{{ $jabatan2 }}</p>
            <p class="sosial-isi">{{ $telp2 }}</p>
            <p class="sosial-isi">{{ $sektor2 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image3 }}" alt="Foto 3" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name3 }}</h6>
            <p class="sosial-isi">{{ $jabatan3 }}</p>
            <p class="sosial-isi">{{ $telp3 }}</p>
            <p class="sosial-isi">{{ $sektor3 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image4 }}" alt="Foto 4" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name4 }}</h6>
            <p class="sosial-isi">{{ $jabatan4 }}</p>
            <p class="sosial-isi">{{ $telp4 }}</p>
            <p class="sosial-isi">{{ $sektor4 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image5 }}" alt="Foto 5" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name5 }}</h6>
            <p class="sosial-isi">{{ $jabatan5 }}</p>
            <p class="sosial-isi">{{ $telp5 }}</p>
            <p class="sosial-isi">{{ $sektor5 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image6 }}" alt="Foto 6" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name6 }}</h6>
            <p class="sosial-isi">{{ $jabatan6 }}</p>
            <p class="sosial-isi">{{ $telp6 }}</p>
            <p class="sosial-isi">{{ $sektor6 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image7 }}" alt="Foto 7" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name7 }}</h6>
            <p class="sosial-isi">{{ $jabatan7 }}</p>
            <p class="sosial-isi">{{ $telp7 }}</p>
            <p class="sosial-isi">{{ $sektor7 }}</p>
        </div>
      </div>
        <div class="row ketiga-sosial py-4">
          <!-- Baris Ketiga -->
          <div class="col">
            <img src="img/{{ $image8 }}" alt="Foto 8" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name8 }}</h6>
            <p class="sosial-isi">{{ $jabatan8 }}</p>
            <p class="sosial-isi">{{ $telp8 }}</p>
            <p class="sosial-isi">{{ $sektor8 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image9 }}" alt="Foto 9" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name9 }}</h6>
            <p class="sosial-isi">{{ $jabatan9 }}</p>
            <p class="sosial-isi">{{ $telp9 }}</p>
            <p class="sosial-isi">{{ $sektor9 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image10 }}" alt="Foto 10" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name10 }}</h6>
            <p class="sosial-isi">{{ $jabatan10 }}</p>
            <p class="sosial-isi">{{ $telp10 }}</p>
            <p class="sosial-isi">{{ $sektor10 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image11 }}" alt="Foto 11" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name11 }}</h6>
            <p class="sosial-isi">{{ $jabatan11 }}</p>
            <p class="sosial-isi">{{ $telp11 }}</p>
            <p class="sosial-isi">{{ $sektor11 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image12 }}" alt="Foto 12" class="sosial-gambar img-fluid mb-1">
            <h6 class="sosial-judul">{{ $name12 }}</h6>
            <p class="sosial-isi">{{ $jabatan12 }}</p>
            <p class="sosial-isi">{{ $telp12 }}</p>
            <p class="sosial-isi">{{ $sektor12 }}</p>
          </div>
        </div>
          {{-- <div class="row">
            <!-- Baris Keempat -->
            
            </div> --}}
</section>
@endsection

<style>
    .sosial {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 4%;
        /* justify-content: center !important;
        align-content: center !important; */
    }

    .sosial-judul {
        margin-bottom: 1px !important;
        /* margin-top: 1px !important; */
        font-weight: bold !important;
        text-align: center;
    }

    .sosial-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
        text-align: center;
    }

    .sosial-gambar {
        width: 150px !important;
        height: 210px !important;
    }

    .pertama-sosial {
      padding-right: 43% !important;
      padding-left: 43% !important;
    }

    .kedua-sosial {
      padding-right: 7% !important;
      padding-left: 7% !important;
    }

    .ketiga-sosial {
      padding-right: 14% !important;
      padding-left: 14% !important;
    }
</style>