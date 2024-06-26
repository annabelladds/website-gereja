@extends('layouts.main')

@section ('container')
{{-- <h1>Halaman Galeri</h1> --}}

@php
    use Carbon\Carbon;
    Carbon::setLocale('id'); // Mengatur locale Carbon ke Indonesia
@endphp
<section class="galeri-section">
  {{-- <p class="title-galeri">{{ $title }}</p> --}}

  <div class="container-galeri">
    <div class="row">
        @foreach ($galeri as $galeridetail)
        <div class="col-md-12">
            <div class="card-galeri">
              <div class="card-body-galeri">
              <h5 class="card-title-galeri">{{ $galeridetail->title }}</h5>
              {{-- <p class="card-text-galeri">{{ Carbon::parse($galeridetail->published_at)->isoFormat('dddd, D MMMM YYYY') }}</p> --}}
              {{-- <p class="card-text-galeri">{{ $galeridetail->time }}</p> --}}
              <p class="card-text-galeri">{{ $galeridetail->formatted_date }}</p>
              <div class="row">
                <div class="col-md-4 mb-3">
                  {{-- <img class="img fluid rounded" src="https://source.unsplash.com/350x200/?church" alt="Gereja"> --}}
                  {{-- <img class="img fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja"> --}}
                  @if($galeridetail->image1)
                  <div  style="max-height: 200px; max-width: 350px; overflow:hidden;">
                      <img src="{{ asset('storage/' . $galeridetail->image1) }}" class="img-fluid rounded"  style="object-fit: cover; width: 100%; height: 100%;" alt="Gereja">
                  </div>
                  @else
                    <img class="img fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                  @endif
                </div>
                <div class="col-md-4 mb-3">
                  {{-- <img class="img fluid rounded" src="https://source.unsplash.com/350x200/?christmas" alt="Gereja"> --}}
                  {{-- <img class="img fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja"> --}}
                  @if($galeridetail->image2)
                  <div  style="max-height: 200px; max-width: 350px; overflow:hidden;">
                      <img src="{{ asset('storage/' . $galeridetail->image2) }}" class="img-fluid rounded"  style="object-fit: cover; width: 100%; height: 100%;" alt="Gereja">
                  </div>
                  @else
                    <img class="img fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                  @endif 
                </div>
                <div class="col-md-4 mb-3">
                  {{-- <img class="img fluid rounded" src="https://source.unsplash.com/350x200/?workship" alt="Gereja"> --}}
                  {{-- <img class="img fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja"> --}}
                  @if($galeridetail->image3)
                  <div  style="max-height: 200px; max-width: 350px; overflow:hidden;">
                      <img src="{{ asset('storage/' . $galeridetail->image3) }}" class="img-fluid rounded"  style="object-fit: cover; width: 100%; height: 100%;" alt="Gereja">
                  </div>
                  @else
                    <img class="img fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                  @endif
                </div>
              </div> 
                  {{-- <a href="/galeri/{{ $galeridetail->url }}" class="btn btn-primary btn-dokumentasi">Dokumentasi Lainnya</a> --}}
                  @if ($galeridetail->url)
                    <a href="{{ $galeridetail->url }}" target="_blank" class="btn btn-primary btn-dokumentasi">Dokumentasi Lainnya</a>
                  @endif
                </div>
                {{-- <hr class="card-separator-galeri"> --}}
              </div>
        </div>
        @endforeach
    </div>
  </div>

  <div class="d-flex justify-content-center">
    {{ $galeri->links() }}
  </div>

</section>
@endsection  

<style>

  /* .title-galeri {
      padding-top: 10%;
      margin-left: 4% !important;
      color: var(--primary-600, #00397D);
      font-family: 'Nunito';
      font-size: 24px;
      font-style: normal;
      font-weight: 700;
      line-height: 120%;
      text-align: start;
  } */

  .img-galeri {
    width: 350;
    height: 200;
  }

  .card-galeri {
    padding: 2% 0 !important;
    border: none !important;
  }

  /* .card-separator-galeri {
    color: var(--primary-600, #868686);
    margin: 4% 0 !important;
  } */

  /* .card-separator-galeri:last-child {
    border: none !important;
  } */

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
    padding-top: 10%;
    padding-bottom: 6%;
    margin-left: 5% !important;
    margin-right: 5% !important;
    text-align: center;
  }

  /* .berita-terkini-hero {
      margin-left: 4% !important;
      margin-right: 4% !important;
      text-align: center;
  }

  .container-berita {
      margin-left: 3% !important;
      margin-right: 3% !important;
  } */

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
</style>