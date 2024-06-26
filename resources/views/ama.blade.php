@extends('layouts.main')
@section('container')
<section class="ama-section">
    <div class="ama">
        <div class="row py-4 justify-content-center">
            <!-- Foto-foto Ama -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/St. Sinambela.jpeg" alt="St. E. Sinambela" class="ama-gambar img-fluid mb-1">
                </div>
                <h6 class="ama-judul">St. E. Sinambela</h6>
                <p class="ama-isi">Paniroi Ama</p>
                <p class="ama-isi">081382956637</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/N. Pakpahan.jpg" alt="N. Pakpahan/br. Sinaga" class="ama-gambar img-fluid mb-1">
                </div>
                <h6 class="ama-judul">N. Pakpahan/br. Sinaga</h6>
                <p class="ama-isi">Ketua Ama</p>
                <p class="ama-isi">089686028573</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/F. Naibaho.jpg" alt="F. Naibaho/br. Pasaribu" class="ama-gambar img-fluid mb-1">
                </div>
                <h6 class="ama-judul">F. Naibaho/br. Pasaribu</h6>
                <p class="ama-isi">Sekretaris Ama</p>
                <p class="ama-isi">082113695536</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/H. Silaban.jpeg" alt="H. Silaban/br. Limbong" class="ama-gambar img-fluid mb-1">
                </div>
                <h6 class="ama-judul">H. Silaban/br. Limbong</h6>
                <p class="ama-isi">Bendahara Ama</p>
                <p class="ama-isi">085281404341</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/D. Nainggolan.jpeg" alt="D. Nainggolan/br. Sipahutar" class="ama-gambar img-fluid mb-1">
                </div>
                <h6 class="ama-judul">D. Nainggolan/br. Sipahutar</h6>
                <p class="ama-isi">Seksi Koor Ama</p>
                <p class="ama-isi">081310926017</p>
            </div>
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
        padding-bottom: 2%;
    }

    .ama-judul {
        margin-bottom: 1px !important;
        font-weight: bold !important;
    }

    .ama-isi {
        margin-bottom: 1px !important;
        font-size: 14px;
    }

    .ama-gambar {
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

        .ama {
            padding-top: 18% !important;
        }
    }

    @media (min-width: 577px) and (max-width: 768px) {
        .col-12.col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .ama {
            padding-top: 16% !important;
        }
    }

    @media (min-width: 769px) and (max-width: 992px) {
        .col-12.col-sm-6.col-md-4 {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }

        .ama {
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
