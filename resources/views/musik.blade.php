@extends('layouts.main')
@section('container')
<section class="musik-section">
    <div class="musik">
        <div class="row py-4 justify-content-center">
          <!-- Foto-foto Musik -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/D. Nainggolan.jpeg" alt="D. Nainggolan/br. Sipahutar" class="musik-gambar img-fluid mb-1">
            </div>
            <h6 class="musik-judul">D. Nainggolan/br. Sipahutar</h6>
            <p class="musik-isi">Ketua Sie. Musik</p>
            <p class="musik-isi">081310926017</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Kak Ester.jpg" alt="Ester br. Tambunan" class="musik-gambar img-fluid mb-1">
            </div>
            <h6 class="musik-judul">Ester br. Tambunan</h6>
            <p class="musik-isi">Koordinator Organis</p>
            <p class="musik-isi">089616469715</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Given.jpeg" alt="Given Gultom" class="musik-gambar img-fluid mb-1">
            </div>
            <h6 class="musik-judul">Given Gultom</h6>
            <p class="musik-isi">Organis</p>
            <p class="musik-isi">081214786327</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Yabes.jpeg" alt="Yabes br. Simanungkalit" class="musik-gambar img-fluid mb-1">
            </div>
            <h6 class="musik-judul">Yabes br. Simanungkalit</h6>
            <p class="musik-isi">Organis</p>
            <p class="musik-isi">081287283630</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Inang br. Malau.jpg" alt="Ny. Sitorus/br. Malau" class="musik-gambar img-fluid mb-1">
            </div>
            <h6 class="musik-judul">Ny. Sitorus/br. Malau</h6>
            <p class="musik-isi">Song Leader</p>
            <p class="musik-isi">081286452107</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Inang br. Sagala.jpg" alt="Ny. Gultom/br. Sagala" class="musik-gambar img-fluid mb-1">
            </div>
            <h6 class="musik-judul">Ny. Gultom/br. Sagala</h6>
            <p class="musik-isi">Song Leader</p>
            <p class="musik-isi">081380610787</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Papi.jpg" alt="M. Sinambela" class="musik-gambar img-fluid mb-1">
            </div>
            <h6 class="musik-judul">M. Sinambela/St. H. br. Tampubolon</h6>
            <p class="musik-isi">Song Leader</p>
            <p class="musik-isi">081315818350</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/R. Samosir.jpeg" alt="R. Samosir/br. Sagala" class="musik-gambar img-fluid mb-1">
            </div>
            <h6 class="musik-judul">R. Samosir/br. Sagala</h6>
            <p class="musik-isi">Song Leader</p>
            <p class="musik-isi">081320011112</p>
          </div>
        </div>
</section>
@endsection

<style>
    .musik {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 2%;
    }

    .musik-judul {
        margin-bottom: 1px !important;
        font-weight: bold !important;
    }

    .musik-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
    }

    .musik-gambar {
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
        .kedua-musik .col, .row .col {
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 15px;
        }

        .musik {
        padding-top: 18% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 577px) and (max-width: 768px) { 
        .kedua-musik .col {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .musik {
        padding-top: 16% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 769px) and (max-width: 992px) {
        .kedua-musik .col, .row .col {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }

        .musik {
        padding-top: 14% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 993px) {
        .kedua-musik .col {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

    .row {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
</style>
