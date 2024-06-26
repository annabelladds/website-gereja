@extends('layouts.main')
@section('container')
<section class="zending-section">
    <div class="zending">
        <div class="row py-4 justify-content-center">
            <!-- Foto-foto Zending -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                  <img src="img/Inang br. Sirait.jpeg" alt="Ny. St. H. Manurung/br. Sirait" class="zending-gambar img-fluid mb-1">
                </div>
                <h6 class="zending-judul">Ny. St. H. Manurung/br. Sirait</h6>
                <p class="zending-isi">Team Doa</p>
                <p class="zending-isi">081383534573</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                  <img src="img/Inang br. Simatupang.jpeg" alt="Ny. Panjaitan/br. Simatupang" class="zending-gambar img-fluid mb-1">
                </div>
                <h6 class="zending-judul">Ny. Panjaitan/br. Simatupang</h6>
                <p class="zending-isi">Team Doa</p>
                <p class="zending-isi">085284548476</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                  <img src="img/D. Pardede.jpg" alt="D. Pardede" class="zending-gambar img-fluid mb-1">
                </div>
                <h6 class="zending-judul">D. Pardede</h6>
                <p class="zending-isi">Team Doa</p>
                <p class="zending-isi">081280870887</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                  <img src="img/Mama.jpeg" alt="St. H. br. Tampubolon" class="zending-gambar img-fluid mb-1">
                </div>
                <h6 class="zending-judul">St. H. br. Tampubolon</h6>
                <p class="zending-isi">Team Doa</p>
                <p class="zending-isi">082115141040</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                  <img src="img/St. Simaremare.jpeg" alt="St. Ronald Simaremare" class="zending-gambar img-fluid mb-1">
                </div>
                <h6 class="zending-judul">St. Ronald Simaremare</h6>
                <p class="zending-isi">Team Doa</p>
                <p class="zending-isi">081315214822</p>
            </div>
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
        padding-bottom: 2%;
    }

    .zending-judul {
        margin-bottom: 1px !important;
        font-weight: bold !important;
    }

    .zending-isi {
        margin-bottom: 1px !important;
        font-size: 14px;
    }

    .zending-gambar {
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
        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .zending {
            padding-top: 18% !important;
        }
    }

    @media (min-width: 577px) and (max-width: 768px) {
        .col-12.col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .zending {
            padding-top: 16% !important;
        }
    }

    @media (min-width: 769px) and (max-width: 992px) {
        .col-12.col-sm-6.col-md-4 {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }

        .zending {
            padding-top: 14% !important;
        }
    }

    @media (min-width: 993px) {
        .col-12.col-sm-6.col-md-4.col-lg-2 {
            flex: 0 0 20%;
            max-width: 20%;
        }
    }

    .row {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
</style>
