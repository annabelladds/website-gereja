@extends('layouts.main')
@section('container')
<section class="remaja-section">
    <div class="remaja">
        <div class="row py-4 justify-content-center">
            <!-- Foto-foto Remaja -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/St. Marbun.jpeg" alt="St. K. Marbun" class="remaja-gambar img-fluid mb-1">
                </div>
                <h6 class="remaja-judul">St. K. Marbun</h6>
                <p class="remaja-isi">Paniroi Remaja</p>
                <p class="remaja-isi">081286984013</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/Maria.jpg" alt="Maria br. Siagian" class="remaja-gambar img-fluid mb-1">
                </div>
                <h6 class="remaja-judul">Maria br. Siagian</h6>
                <p class="remaja-isi">Ketua Remaja</p>
                <p class="remaja-isi">085961635477</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/Yabes.jpeg" alt="Yabes br. Simanungkalit" class="remaja-gambar img-fluid mb-1">
                </div>
                <h6 class="remaja-judul">Yabes br. Simanungkalit</h6>
                <p class="remaja-isi">Wakil Ketua Remaja</p>
                <p class="remaja-isi">081287283630</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/Gyta.jpg" alt="Gyta br. Gultom" class="remaja-gambar img-fluid mb-1">
                </div>
                <h6 class="remaja-judul">Gyta br. Gultom</h6>
                <p class="remaja-isi">Sekretaris Remaja</p>
                <p class="remaja-isi">081317773263</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/Monicha.jpg" alt="Monik br. Tambunan" class="remaja-gambar img-fluid mb-1">
                </div>
                <h6 class="remaja-judul">Monicha br. Tambunan</h6>
                <p class="remaja-isi">Bendahara Remaja</p>
                <p class="remaja-isi">089602404689</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/naomi.jpg" alt="Naomi br. Panjaitan" class="remaja-gambar img-fluid mb-1">
                </div>
                <h6 class="remaja-judul">Naomi br. Panjaitan</h6>
                <p class="remaja-isi">Sie. Acara</p>
                <p class="remaja-isi">085691742045</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/Marissa.jpg" alt="Marissa br. Siahaan" class="remaja-gambar img-fluid mb-1">
                </div>
                <h6 class="remaja-judul">Marissa br. Siahaan</h6>
                <p class="remaja-isi">Sie. Koor</p>
                <p class="remaja-isi">085775551388</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/Putri.jpg" alt="Putri br. Simaremare" class="remaja-gambar img-fluid mb-1">
                </div>
                <h6 class="remaja-judul">Putri br. Simaremare</h6>
                <p class="remaja-isi">Sie. Humas</p>
                <p class="remaja-isi">085213967324</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/Gideon.jpg" alt="Gideon Gultom" class="remaja-gambar img-fluid mb-1">
                </div>
                <h6 class="remaja-judul">Gideon Gultom</h6>
                <p class="remaja-isi">Sie. Musik</p>
                <p class="remaja-isi">088289045008</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center mb-3">
                <div class="image-container">
                    <img src="img/Stanly.jpeg" alt="Stanly Sagala" class="remaja-gambar img-fluid mb-1">
                </div>
                <h6 class="remaja-judul">Stanly Sagala</h6>
                <p class="remaja-isi">Sie. Musik</p>
                <p class="remaja-isi">081389719238</p>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
    .remaja {
        font-family: 'Nunito';
        width: 100% !important;
        text-align: center;
        padding-top: 8%;
        padding-bottom: 2%;
    }

    .remaja-judul {
        margin-bottom: 1px !important;
        font-weight: bold !important;
    }

    .remaja-isi{
        margin-bottom: 1px !important;
        font-size: 14px;
    }

    .remaja-gambar {
        width: 150px !important;
        height: 210px !important;
        object-fit: cover;
    }

    .image-container {
        overflow: hidden;
        max-width: 100%;
        max-height: 210px;
        margin: 0 auto;
    }

    @media (max-width: 576px) {
        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .remaja {
            padding-top: 18% !important;
            padding-bottom: 2%;
        }
    }

    @media (min-width: 577px) and (max-width: 768px) {
        .col-12 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .remaja {
            padding-top: 16% !important;
            padding-bottom: 2%;
        }
    }

    @media (min-width: 769px) and (max-width: 992px) {
        .col-12 {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }

        .remaja {
            padding-top: 14% !important;
            padding-bottom: 2%;
        }
    }

    @media (min-width: 993px) {
        .col-12 {
            flex: 0 0 16.6667%;
            max-width: 16.6667%;
        }
    }

    .row {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
</style>
