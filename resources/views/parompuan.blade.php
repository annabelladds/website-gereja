@extends('layouts.main')
@section('container')
<section class="parompuan-section">
    <div class="parompuan">
        <div class="row py-4 justify-content-center">
          <!-- Foto-foto Parompuan -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Mama.jpeg" alt="St. H. br Tampubolon" class="parompuan-gambar img-fluid mb-1">
            </div>
            <h6 class="parompuan-judul">St. H. br Tampubolon</h6>
            <p class="parompuan-isi">Paniroi Parompuan</p>
            <p class="parompuan-isi">082115141040</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Ny. Sagala br. Turnip.jpg" alt="Ny. Sagala br. Turnip" class="parompuan-gambar img-fluid mb-1">
            </div>
            <h6 class="parompuan-judul">Ny. Sagala br. Turnip</h6>
            <p class="parompuan-isi">Ketua Parompuan</p>
            <p class="parompuan-isi">081311121748</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Ny. Simanulang br. Simanjuntak.jpeg" alt="Ny. Simanulang br. Simanjuntak" class="parompuan-gambar img-fluid mb-1">
            </div>
            <h6 class="parompuan-judul">Ny. Simanulang br. Simanjuntak</h6>
            <p class="parompuan-isi">Sekretaris Parompuan</p>
            <p class="parompuan-isi">081284338122</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Ny. Silaban br. Bakkara.jpeg" alt="Ny. Silaban br. Bakkara" class="parompuan-gambar img-fluid mb-1">
            </div>
            <h6 class="parompuan-judul">Ny. Silaban br. Bakkara</h6>
            <p class="parompuan-isi">Bendahara Parompuan</p>
            <p class="parompuan-isi">082111635124</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Ny. Pasaribu br. Manalu.jpeg" alt="Ny. Pasaribu br. Manalu" class="parompuan-gambar img-fluid mb-1">
            </div>
            <h6 class="parompuan-judul">Ny. Pasaribu br. Manalu</h6>
            <p class="parompuan-isi">Koordinator Punguan Ina</p>
            <p class="parompuan-isi">081319953075</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Ny. Gultom br. Sagala.jpeg" alt="Ny. Gultom br. Sagala" class="parompuan-gambar img-fluid mb-1">
            </div>
            <h6 class="parompuan-judul">Ny. Gultom br. Sagala</h6>
            <p class="parompuan-isi">Sekretaris Punguan Ina</p>
            <p class="parompuan-isi">081380610787</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Ny. Simanungkalit br. Samosir.jpeg" alt="Ny. Simanungkalit br. Samosir" class="parompuan-gambar img-fluid mb-1">
            </div>
            <h6 class="parompuan-judul">Ny. Simanungkalit br. Samosir</h6>
            <p class="parompuan-isi">Bendahara Punguan Ina</p>
            <p class="parompuan-isi">081219106681</p>
          </div>
        </div>
</section>
@endsection

<style>
    .parompuan {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 2%;
    }

    .parompuan-judul {
        margin-bottom: 1px !important;
        font-weight: bold !important;
    }

    .parompuan-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
    }

    .parompuan-gambar {
        width: 150px !important;
        height: 210px !important;
        object-fit: cover;
    }

    .image-container {
        overflow: hidden;
        max-width: 100%;
        max-height: 210px;
    }

    @media (max-width: 576px) {
        .kedua-parompuan .col, .row .col {
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 15px;
        }

        .parompuan {
        padding-top: 18% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 577px) and (max-width: 768px) {
        .kedua-parompuan .col {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .parompuan {
        padding-top: 16% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 769px) and (max-width: 992px) {
        .kedua-parompuan .col, .row .col {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }

        .parompuan {
        padding-top: 14% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 993px) {
        .kedua-parompuan .col {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

    .row {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
</style>
