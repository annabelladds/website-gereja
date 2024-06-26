@extends('layouts.main')
@section('container')
<section class="pendidikan-section">
    <div class="pendidikan">
        <div class="row py-4 justify-content-center">
          <!-- Foto-foto Pendidikan -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Inang br. Hasugian.jpeg" alt="Ny. Sihombing/br. Hasugian" class="pendidikan-gambar img-fluid mb-1">
            </div>
            <h6 class="pendidikan-judul">Ny. Sihombing/br. Hasugian</h6>
            <p class="pendidikan-isi">Ketua Sie. Pendidikan</p>
            <p class="pendidikan-isi">081397162628</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Mama.jpeg" alt="St. H. br Tampubolon" class="pendidikan-gambar img-fluid mb-1">
            </div>
            <h6 class="pendidikan-judul">St. H. br Tampubolon</h6>
            <p class="pendidikan-isi">Sie. Pendidikan</p>
            <p class="pendidikan-isi">082115141040</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Kak Ester.JPG" alt="Ester br Tambunan" class="pendidikan-gambar img-fluid mb-1">
            </div>
            <h6 class="pendidikan-judul">Ester br Tambunan</h6>
            <p class="pendidikan-isi">Sie. Pendidikan</p>
            <p class="pendidikan-isi">089616469715</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Inang br. Sirait.jpeg" alt="Ny. St. H. Manurung/br. Sirait" class="pendidikan-gambar img-fluid mb-1">
            </div>
            <h6 class="pendidikan-judul">Ny. St. H. Manurung/br. Sirait</h6>
            <p class="pendidikan-isi">Sie. Pendidikan</p>
            <p class="pendidikan-isi">081383534573</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Inang br. Simatupang.jpeg" alt="Ny. Panjaitan/br. Simatupang" class="pendidikan-gambar img-fluid mb-1">
            </div>
            <h6 class="pendidikan-judul">Ny. Panjaitan/br. Simatupang</h6>
            <p class="pendidikan-isi">Sie. Pendidikan</p>
            <p class="pendidikan-isi">085284548476</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Inang br. Siregar.jpeg" alt="Ny. St. T. B Sitompul/br. Siregar" class="pendidikan-gambar img-fluid mb-1">
            </div>
            <h6 class="pendidikan-judul">Ny. St. T. B Sitompul/br. Siregar</h6>
            <p class="pendidikan-isi">Sie. Pendidikan</p>
            <p class="pendidikan-isi">081280455868</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/eybel.jpg" alt="Annabella br. Sinambela" class="pendidikan-gambar img-fluid mb-1">
            </div>
            <h6 class="pendidikan-judul">Annabella br. Sinambela</h6>
            <p class="pendidikan-isi">Sie. Pendidikan</p>
            <p class="pendidikan-isi">081311554059</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/Nadya.jpg" alt="Nadya br. Panjaitan" class="pendidikan-gambar img-fluid mb-1">
            </div>
            <h6 class="pendidikan-judul">Nadya br. Panjaitan</h6>
            <p class="pendidikan-isi">Sie. Pendidikan</p>
            <p class="pendidikan-isi">08979447304</p>
          </div>
        </div>
</section>
@endsection

<style>
    .pendidikan {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 2%;
    }

    .pendidikan-judul {
        margin-bottom: 1px !important;
        font-weight: bold !important;
    }

    .pendidikan-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
    }

    .pendidikan-gambar {
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
        .kedua-pendidikan .col, .row .col {
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 15px;
        }

        .pendidikan {
        padding-top: 18% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 577px) and (max-width: 768px) { 
        .kedua-pendidikan .col {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .pendidikan {
        padding-top: 16% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 769px) and (max-width: 992px) { 
        .kedua-pendidikan .col, .row .col {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }

        .pendidikan {
        padding-top: 14% !important;
        padding-bottom: 2%;
    }
    }

    @media (min-width: 993px) { 
        .kedua-pendidikan .col {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

    .row {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
</style>
