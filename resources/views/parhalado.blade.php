@extends('layouts.main')

@section('container')
<section class="parhalado-section">
    <div class="parhalado">
        <div class="row pertama-parhalado py-4">
          <!-- Baris Pertama -->
          <div class="col- text-center">
            <img src="img/{{ $image }}" alt="Foto 1" class="parhalado-gambar img-fluid mb-1">
            <h6 class="parhalado-judul">{{ $name }}</h6>
            <p class="parhalado-isi">{{ $jabatan }}</p>
            <p class="parhalado-isi">{{ $telp }}</p>
          </div>
        </div>
        <div class="row kedua-parhalado py-4">
        {{-- <div class="row px-2 pb-4"> --}}
          <!-- Baris Kedua -->
          <div class="col">
            <img src="img/{{ $image7 }}" alt="Foto 7" class="parhalado-gambar img-fluid mb-1">
            <h6 class="parhalado-judul">{{ $name7 }}</h6>
            <p class="parhalado-isi">{{ $jabatan7 }}</p>
            <p class="parhalado-isi">{{ $telp7 }}</p>
            <p class="parhalado-isi">{{ $sektor7 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image2 }}" alt="Foto 2" class="parhalado-gambar img-fluid mb-1">
            <h6 class="parhalado-judul">{{ $name2 }}</h6>
            <p class="parhalado-isi">{{ $jabatan2 }}</p>
            <p class="parhalado-isi">{{ $telp2 }}</p>
            <p class="parhalado-isi">{{ $sektor2 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image3 }}" alt="Foto 3" class="parhalado-gambar img-fluid mb-1">
            <h6 class="parhalado-judul">{{ $name3 }}</h6>
            <p class="parhalado-isi">{{ $jabatan3 }}</p>
            <p class="parhalado-isi">{{ $telp3 }}</p>
            <p class="parhalado-isi">{{ $sektor3 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image8 }}" alt="Foto 8" class="parhalado-gambar img-fluid mb-1">
            <h6 class="parhalado-judul">{{ $name8 }}</h6>
            <p class="parhalado-isi">{{ $jabatan8 }}</p>
            <p class="parhalado-isi">{{ $telp8 }}</p>
            <p class="parhalado-isi">{{ $sektor8 }}</p>
          </div>
          <div class="col">
            <img src="img/{{ $image8 }}" alt="Foto 8" class="parhalado-gambar img-fluid mb-1">
            <h6 class="parhalado-judul">{{ $name8 }}</h6>
            <p class="parhalado-isi">{{ $jabatan8 }}</p>
            <p class="parhalado-isi">{{ $telp8 }}</p>
            <p class="parhalado-isi">{{ $sektor8 }}</p>
          </div>
        </div>
        <div class="row ketiga-parhalado py-4">
          {{-- <div class="row px-2 pb-4"> --}}
            <!-- Baris Ketiga -->
            <div class="col">
              <img src="img/{{ $image4 }}" alt="Foto 4" class="parhalado-gambar img-fluid mb-1">
              <h6 class="parhalado-judul">{{ $name4 }}</h6>
              <p class="parhalado-isi">{{ $jabatan4 }}</p>
              <p class="parhalado-isi">{{ $telp4 }}</p>
              <p class="parhalado-isi">{{ $sektor4 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image5 }}" alt="Foto 5" class="parhalado-gambar img-fluid mb-1">
              <h6 class="parhalado-judul">{{ $name5 }}</h6>
              <p class="parhalado-isi">{{ $jabatan5 }}</p>
              <p class="parhalado-isi">{{ $telp5 }}</p>
              <p class="parhalado-isi">{{ $sektor5 }}</p>
            </div>
            <div class="col">
              <img src="img/{{ $image6 }}" alt="Foto 6" class="parhalado-gambar img-fluid mb-1">
              <h6 class="parhalado-judul">{{ $name6 }}</h6>
              <p class="parhalado-isi">{{ $jabatan6 }}</p>
              <p class="parhalado-isi">{{ $telp6 }}</p>
              <p class="parhalado-isi">{{ $sektor6 }}</p>
            </div>
          {{-- </div> --}}
          </div>
          <div class="row keempat-parhalado py-4">
              <!-- Baris Ketiga -->
              <div class="col">
                <img src="img/{{ $image4 }}" alt="Foto 4" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name4 }}</h6>
                <p class="parhalado-isi">{{ $jabatan4 }}</p>
                <p class="parhalado-isi">{{ $telp4 }}</p>
                <p class="parhalado-isi">{{ $sektor4 }}</p>
              </div>
              <div class="col">
                <img src="img/{{ $image5 }}" alt="Foto 5" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name5 }}</h6>
                <p class="parhalado-isi">{{ $jabatan5 }}</p>
                <p class="parhalado-isi">{{ $telp5 }}</p>
                <p class="parhalado-isi">{{ $sektor5 }}</p>
              </div>
              <div class="col">
                <img src="img/{{ $image6 }}" alt="Foto 6" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name6 }}</h6>
                <p class="parhalado-isi">{{ $jabatan6 }}</p>
                <p class="parhalado-isi">{{ $telp6 }}</p>
                <p class="parhalado-isi">{{ $sektor6 }}</p>
              </div>
              <div class="col">
                <img src="img/{{ $image6 }}" alt="Foto 6" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name6 }}</h6>
                <p class="parhalado-isi">{{ $jabatan6 }}</p>
                <p class="parhalado-isi">{{ $telp6 }}</p>
                <p class="parhalado-isi">{{ $sektor6 }}</p>
              </div>
            {{-- </div> --}}
            </div>
          <div class="row ketiga-parhalado py-4">
              <!-- Baris Ketiga -->
              <div class="col">
                <img src="img/{{ $image8 }}" alt="Foto 8" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
                <p class="parhalado-isi">{{ $sektor8 }}</p>
              </div>
              <div class="col">
                <img src="img/{{ $image8 }}" alt="Foto 8" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
                <p class="parhalado-isi">{{ $sektor8 }}</p>
              </div>
              <div class="col">
                <img src="img/{{ $image8 }}" alt="Foto 8" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
                <p class="parhalado-isi">{{ $sektor8 }}</p>
              </div>
            {{-- </div> --}}
            </div>
</section>
@endsection

<style>
    .parhalado {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 4%;
        /* justify-content: center !important;
        align-content: center !important; */
    }

    .parhalado-judul {
        margin-bottom: 1px !important;
        /* margin-top: 1px !important; */
        font-weight: bold !important;
        text-align: center;
    }

    .parhalado-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
        text-align: center;
    }

    .parhalado-gambar {
        width: 150px !important;
        height: 210px !important;
        /* padding-right: 1px !important;
        padding-left: 1px !important; */
    }

    .pertama-parhalado {
      padding-right: 43% !important;
      padding-left: 43% !important;
    }

    .kedua-parhalado {
      padding-right: 14% !important;
      padding-left: 14% !important;
    }

    .ketiga-parhalado {
      padding-right: 28% !important;
      padding-left: 28% !important;
    }

    .keempat-parhalado {
      padding-right: 22% !important;
      padding-left: 22% !important;
    }
</style>




{{-- @extends('layouts.main')

@section('container')
<section class="parhalado-section">
  <div class="parhalado container">
    <section class="parhalado-section">
        <!-- Baris 1 -->
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 text-center mb-4">
                <img src="img/{{ $image }}" alt="Foto 1" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name }}</h6>
                <p class="parhalado-isi">{{ $jabatan }}</p>
                <p class="parhalado-isi">{{ $telp }}</p>
            </div>
        </div>

        <!-- Baris 2 -->
        <div class="row justify-content-center">
            <div class="col-md-2 col-sm-4 text-center mb-4">
                <img src="img/{{ $image2 }}" alt="Foto 2" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name2 }}</h6>
                <p class="parhalado-isi">{{ $jabatan2 }}</p>
                <p class="parhalado-isi">{{ $telp2 }}</p>
            </div>

            <div class="col-md-2 col-sm-4 text-center mb-4">
                <img src="img/{{ $image3 }}" alt="Foto 3" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name3 }}</h6>
                <p class="parhalado-isi">{{ $jabatan3 }}</p>
                <p class="parhalado-isi">{{ $telp3 }}</p>
            </div>

            <div class="col-md-2 col-sm-4 text-center mb-4">
                <img src="img/{{ $image4 }}" alt="Foto 4" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name4 }}</h6>
                <p class="parhalado-isi">{{ $jabatan4 }}</p>
                <p class="parhalado-isi">{{ $telp4 }}</p>
            </div>

            <div class="col-md-2 col-sm-4 text-center mb-4">
                <img src="img/{{ $image5 }}" alt="Foto 5" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name5 }}</h6>
                <p class="parhalado-isi">{{ $jabatan5 }}</p>
                <p class="parhalado-isi">{{ $telp5 }}</p>
            </div>

            <div class="col-md-2 col-sm-4 text-center mb-4">
                <img src="img/{{ $image6 }}" alt="Foto 6" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name6 }}</h6>
                <p class="parhalado-isi">{{ $jabatan6 }}</p>
                <p class="parhalado-isi">{{ $telp6 }}</p>
            </div>
        </div>

        <!-- Baris 3 -->
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 text-center mb-4">
                <img src="img/{{ $image7 }}" alt="Foto 7" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name7 }}</h6>
                <p class="parhalado-isi">{{ $jabatan7 }}</p>
                <p class="parhalado-isi">{{ $telp7 }}</p>
            </div>

            <div class="col-md-4 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 8" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>

            <div class="col-md-4 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 9" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>
        </div>

        <!-- Baris 4 -->
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 10" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>

            <div class="col-md-3 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 11" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>

            <div class="col-md-3 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 12" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>

            <div class="col-md-3 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 13" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>
        </div>

        <!-- Baris 5 -->
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 14" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>

            <div class="col-md-3 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 15" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>

            <div class="col-md-3 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 16" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>

            <div class="col-md-3 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 17" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>
        </div>

        <!-- Baris 6 -->
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 18" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>

            <div class="col-md-4 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 19" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>

            <div class="col-md-4 col-sm-6 text-center mb-4">
                <img src="img/{{ $image8 }}" alt="Foto 20" class="parhalado-gambar img-fluid mb-1">
                <h6 class="parhalado-judul">{{ $name8 }}</h6>
                <p class="parhalado-isi">{{ $jabatan8 }}</p>
                <p class="parhalado-isi">{{ $telp8 }}</p>
            </div>
        </div>
    </section>
</div>
</section>
@endsection

<style>
            .parhalado {
            font-family: 'Nunito', sans-serif;
            padding-top: 8%;
            padding-bottom: 4%;
        }

        .parhalado-judul {
            font-weight: bold;
        }

        .parhalado-isi {
            font-size: 14px;
        }

        .parhalado-gambar {
            width: 150px;
            height: 210px;
        }
</style> --}}