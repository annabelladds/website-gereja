@extends('layouts.main')
@section('container')
<section class="kemasyarakatan-section">
    <div class="kemasyarakatan">
        <div class="row py-4 justify-content-center">
          <!-- Foto-foto Kemasyrakatan -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/R. Manik.jpeg" alt="R. Manik/br. Panjaitan" class="kemasyarakatan-gambar img-fluid mb-1">
            </div>
            <h6 class="kemasyarakatan-judul">R. Manik/br. Panjaitan</h6>
            <p class="kemasyarakatan-isi">Ketua Sie. Kemasyrakatan</p>
            <p class="kemasyarakatan-isi">082124410023</p>
        </div>
</section>
@endsection

<style>
 .kemasyarakatan {
    font-family: 'Nunito';
    width: 100%;
    text-align: center;
    padding-top: 8%;
    padding-bottom: 2%;
}

.kemasyarakatan-judul {
    margin-bottom: 1px;
    font-weight: bold;
}

.kemasyarakatan-isi {
    margin-bottom: 1px;
    font-size: 14px;
}

.kemasyarakatan-gambar {
    width: 150px;
    height: 210px;
    object-fit: cover;
}

.image-container {
    overflow: hidden;
    max-width: 100%;
    max-height: 210px;
}

@media (max-width: 576px) {
    .kemasyarakatan {
        padding-top: 18%;
        padding-bottom: 2%;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .kemasyarakatan {
        padding-top: 16%;
        padding-bottom: 2%;
    }
}

@media (min-width: 769px) and (max-width: 992px) {
    .kemasyarakatan {
        padding-top: 14%;
        padding-bottom: 2%;
    }
}

.row {
    margin-right: 0;
    margin-left: 0;
}
</style>
