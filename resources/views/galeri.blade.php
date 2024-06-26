@extends('layouts.main')
@section ('container')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
<section class="galeri-section">
  @if($galeri->count())
  <div class="container-galeri">
    <div class="row">
        @foreach ($galeri as $galeridetail)
        <div class="col-md-12">
            <div class="card-galeri">
              <div class="card-body-galeri">
              <h5 class="card-title-galeri">{{ $galeridetail->title }}</h5>
              <p class="card-text-galeri">{{ $galeridetail->formatted_date }}</p>
              <div class="row images-row">
                <div class="col-md-4 mb-3">
                  @if($galeridetail->image1)
                  <div class="image-container">
                      <img src="{{ asset('storage/' . $galeridetail->image1) }}" class="img-fluid rounded" alt="Gereja">
                  </div>
                  @else
                    <img class="img-fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                  @endif
                </div>
                <div class="col-md-4 mb-3">
                  @if($galeridetail->image2)
                  <div class="image-container">
                      <img src="{{ asset('storage/' . $galeridetail->image2) }}" class="img-fluid rounded" alt="Gereja">
                  </div>
                  @else
                    <img class="img-fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                  @endif 
                </div>
                <div class="col-md-4 mb-3">
                  @if($galeridetail->image3)
                  <div class="image-container">
                      <img src="{{ asset('storage/' . $galeridetail->image3) }}" class="img-fluid rounded" alt="Gereja">
                  </div>
                  @else
                    <img class="img-fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                  @endif
                </div>
              </div> 
                  @if ($galeridetail->url)
                    <a href="{{ $galeridetail->url }}" target="_blank" class="btn btn-primary btn-dokumentasi">Dokumentasi Lainnya</a>
                  @endif
                </div>
              </div>
        </div>
        @endforeach
    </div>
  </div>
  @else
  <p class="tidak-ada-galeri text-center">Tidak ada galeri yang ditemukan!</p>
  @endif
  <div class="d-flex justify-content-center">
    {{ $galeri->links() }}
  </div>
</section>
@endsection  

<style>
      .tidak-ada-galeri {
        color: var(--primary-600, #00397D) !important;
        font-family: 'Nunito';
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 120%;
        padding-top: 2% !important;
    }

  .img-galeri {
    width: 100%;
    height: auto;
  }

  .image-container {
    max-height: 200px;
    max-width: 100%;
    overflow: hidden;
  }

  .image-container img {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }

  .card-galeri {
    padding: 2% 0 !important;
    border: none !important;
  }

  .card-body-galeri {
    margin: 0 !important;
  }

  .card-title-galeri {
      color: var(--primary-600, #00397D);
      font-family: 'Nunito';
      font-size: 20px;
      font-style: normal;
      font-weight: 700;
      line-height: 120%;
      text-decoration: none;
  }

  .card-text-galeri {
      color: var(--primary-600, #004BA4);
      font-family: 'Nunito';
      font-size: 18px;
      font-style: normal;
      font-weight: 500;
      line-height: 120%;
      text-decoration: none;
  }

  .galeri-section {
    padding-top: 8%;
    padding-bottom: 6%;
    margin-left: 5% !important;
    margin-right: 5% !important;
    text-align: center;
  }

  .btn-dokumentasi {
      color: var(--font-600, #FFFFFF) !important;
      font-family: 'Nunito' !important;
      font-size: 18px !important;
      font-style: normal;
      font-weight: 500 !important;
      width: auto;
      background-color: var(--font-600, #00397D) !important;
      text-decoration: none;
}

.btn-dokumentasi:hover {
    color: var(--font-600, #FFFFFF) !important;
    font-family: 'Nunito';
    font-size: 18px !important;
    font-style: normal;
    font-weight: 500 !important;
    width: auto;
    background-color: var(--font-600, #005EC6) !important;
  }

@media (max-width: 576px) {
    .images-row .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .galeri-section {
    padding-top: 16%;
    padding-bottom: 2%;
    margin-left: 5% !important;
    margin-right: 5% !important;
    text-align: center;
  }

  .card-title-galeri {
      padding-top: 6% !important;
  }
  .tidak-ada-galeri {
        font-size: 16px;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .images-row .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .galeri-section {
    padding-top: 14%;
    padding-bottom: 6%;
    margin-left: 5% !important;
    margin-right: 5% !important;
    text-align: center;
  }

  .card-title-galeri {
      padding-top: 4% !important;
  }
}

@media (min-width: 769px) and (max-width: 992px) {
    .images-row .col-md-4 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .galeri-section {
    padding-top: 10%;
    padding-bottom: 6%;
    margin-left: 5% !important;
    margin-right: 5% !important;
    text-align: center;
  }

  .card-title-galeri {
      padding-top: 2% !important;
  }
}

@media (min-width: 993px) {
    .images-row .col-md-4 {
        flex: 0 0 33.3333%;
        max-width: 33.3333%;
    }

    .galeri-section {
    padding-top: 8%;
    padding-bottom: 6%;
    margin-left: 5% !important;
    margin-right: 5% !important;
    text-align: center;
  }

  .card-title-galeri {
      padding-top: 2% !important;
  }
}
</style>
