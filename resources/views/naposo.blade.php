@extends('layouts.main')
@section('container')
<section class="naposo-section">
    <div class="naposo">
        <div class="row py-4 justify-content-center">
          <!-- Foto-foto Naposo -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/St. Simanjuntak.jpeg" alt="St. M. Simanjuntak" class="naposo-gambar img-fluid mb-1">
            </div>
            <h6 class="naposo-judul">St. M. Simanjuntak</h6>
            <p class="naposo-isi">Paniroi Naposo</p>
            <p class="naposo-isi">088294527038</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Freddy.jpg" alt="Freddy Pakpahan" class="naposo-gambar img-fluid mb-1">
            </div>
            <h6 class="naposo-judul">Freddy Pakpahan</h6>
            <p class="naposo-isi">Ketua Naposo</p>
            <p class="naposo-isi">0895334340607</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Satrio.jpg" alt="Satrio Lumbantobing" class="naposo-gambar img-fluid mb-1">
            </div>
            <h6 class="naposo-judul">Satrio Lumbantobing</h6>
            <p class="naposo-isi">Wakil Ketua Naposo</p>
            <p class="naposo-isi">081397216590</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Falen.jpg" alt="Falentina br. Lumbantoruan" class="naposo-gambar img-fluid mb-1">
            </div>
            <h6 class="naposo-judul">Falentina br. Lumbantoruan</h6>
            <p class="naposo-isi">Sekretaris Naposo</p>
            <p class="naposo-isi">082127201593</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Desna.jpg" alt="Desna br. Sitompul" class="naposo-gambar img-fluid mb-1">
            </div>
            <h6 class="naposo-judul">Desna br. Sitompul</h6>
            <p class="naposo-isi">Bendahara Naposo</p>
            <p class="naposo-isi">081260365137</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Hana.jpg" alt="Hana br. Pardede" class="naposo-gambar img-fluid mb-1">
            </div>
            <h6 class="naposo-judul">Hana br. Pardede</h6>
            <p class="naposo-isi">Sie. Kerohanian</p>
            <p class="naposo-isi">081296071318</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Riris.jpg" alt="Riris br. Silitonga" class="naposo-gambar img-fluid mb-1">
            </div>
            <h6 class="naposo-judul">Riris br. Silitonga</h6>
            <p class="naposo-isi">Sie. Kerohanian</p>
            <p class="naposo-isi">083898710581</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Josua.jpg" alt="Josua Pakpahan" class="naposo-gambar img-fluid mb-1">
            </div>
            <h6 class="naposo-judul">Josua Pakpahan</h6>
            <p class="naposo-isi">Sie. Humas</p>
            <p class="naposo-isi">085260105935</p>
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
        padding-bottom: 2%;
    }

    .naposo-judul {
        margin-bottom: 1px !important;
        font-weight: bold !important;
    }

    .naposo-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
    }

    .naposo-gambar {
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
        .kedua-naposo .col, .row .col {
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 15px;
        }

        .naposo {
        padding-top: 18% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 577px) and (max-width: 768px) {
        .kedua-naposo .col {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .naposo {
        padding-top: 16% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 769px) and (max-width: 992px) {
        .kedua-naposo .col, .row .col {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }

        .naposo {
        padding-top: 14% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 993px) {
        .kedua-naposo .col {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

    .row {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
</style>
