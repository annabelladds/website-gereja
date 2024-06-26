@extends('layouts.main')
@section('container')
<section class="kesehatan-section">
    <div class="kesehatan">
        <div class="row py-4 justify-content-center">
          <!-- Foto-foto Kesehatan -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-3">
            <div class="image-container">
              <img src="img/woman.png" alt="Ny. Situmorang br Harianja" class="kesehatan-gambar img-fluid mb-1">
            </div>
            <h6 class="kesehatan-judul">Ny. Situmorang br Harianja</h6>
            <p class="kesehatan-isi">Ketua Sie. Kesehatan</p>
            <p class="kesehatan-isi">08**********</p>
        </div>
</section>
@endsection

<style>
.kesehatan {
    font-family: 'Nunito';
    width: 100%;
    text-align: center;
    padding-top: 8%;
    padding-bottom: 2%;
}

.kesehatan-judul {
    margin-bottom: 1px;
    font-weight: bold;
}

.kesehatan-isi {
    margin-bottom: 1px;
    font-size: 14px;
}

.kesehatan-gambar {
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
    .kesehatan {
        padding-top: 18%;
        padding-bottom: 2%;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .kesehatan {
        padding-top: 16%;
        padding-bottom: 2%;
    }
}

@media (min-width: 769px) and (max-width: 992px) {
    .kesehatan {
        padding-top: 14%;
        padding-bottom: 2%;
    }
}

.row {
    margin-right: 0;
    margin-left: 0;
}
</style>
