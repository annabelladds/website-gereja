@extends('dashboard.layouts.main')

@section('container')
<section class="detail-section mb-5">
    <div class="galeri-detail-hero">
        {{-- <div class="row"> --}}
            {{-- <div class="col-md-8"> --}}
                {{-- <div class="col-md-12"> --}}
                    <div class="card-galeri">
                      <div class="card-body-galeri">
                      <h5 class="card-title-galeri">{{ $galeri->title }}</h5>
                      <p class="card-text-galeri">{{ $galeri->formatted_date }}</p>
                      <div class="row">
                        <div class="col-md-4 mb-3">
                          @if($galeri->image1)
                          <div  style="max-height: 200px; max-width: 350px; overflow:hidden;">
                              <img src="{{ asset('storage/' . $galeri->image1) }}" class="img-fluid rounded"  style="object-fit: cover; width: 100%; height: 100%;" alt="Gereja">
                          </div>
                          @else
                            <img class="img fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                          @endif
                        </div>
                        <div class="col-md-4 mb-3">
                          @if($galeri->image2)
                          <div  style="max-height: 200px; max-width: 350px; overflow:hidden;">
                              <img src="{{ asset('storage/' . $galeri->image2) }}" class="img-fluid rounded"  style="object-fit: cover; width: 100%; height: 100%;" alt="Gereja">
                          </div>
                          @else
                            <img class="img fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                          @endif 
                        </div>
                        <div class="col-md-4 mb-3">
                          @if($galeri->image3)
                          <div  style="max-height: 200px; max-width: 350px; overflow:hidden;">
                              <img src="{{ asset('storage/' . $galeri->image3) }}" class="img-fluid rounded"  style="object-fit: cover; width: 100%; height: 100%;" alt="Gereja">
                          </div>
                          @else
                            <img class="img fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                          @endif
                        </div>
                      </div> 
                          <a href="/galeri/{{ $galeri->url }}" class="btn btn-primary btn-dokumentasi">Dokumentasi Lainnya</a>
                        </div>
                      </div>
                {{-- </div> --}}
                
                {{-- <img src="/img/Dalam Gereja.png" class="img-fluid mb-4 rounded" alt="Gereja"> --}}
                <a href="/dashboard/galeri" class="dashboard-kembali"><span data-feather="arrow-left"></span></a>
                <a href="/dashboard/galeri/{{ $galeri->slug }}/edit" class="dashboard-edit"><span data-feather="edit"></span></a>
                <form action="/dashboard/galeri/{{ $galeri->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="dashboard-delete border-0" onclick="return confirm('Apakah Anda yakin?')"><span data-feather="trash-2"></span></button>
                </form>
                {{-- <a href="" class="dashboard-delete"><span data-feather="trash-2"></span></a> --}}
                {{-- <article class="text-detail mt-4" >
                    {!! $galeri->body !!}
                </article> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    </div>

@endsection

<style>

    .btn {
        padding-left: 0% !important;
        margin-bottom: 2%;
    }

      .dashboard-kembali {
    /* color: var(--font-600, #00397D) !important; */
    color: var(--font-600, #004BA4) !important;
    width: auto;
    margin-right: 4px;
    /* color: var(--font-600, #FFFFFF) !important;
    background-color: var(--font-600, #00397D) !important; */ */
  }

  .dashboard-kembali:hover {
    /* color: var(--font-600, #005EC6) !important; */
    color: var(--font-600, #579AFF) !important;
    width: auto;
    margin-right: 4px;
  }

  .dashboard-edit {
    color: var(--font-600, #BF7600) !important;
    width: auto;
    margin-right: 4px;
  }

  .dashboard-edit:hover {
    color: var(--font-600, #F6BC70) !important;
    width: auto;
    margin-right: 4px;
  }

  .dashboard-delete {
    color: var(--font-600, #9F0005) !important;
    width: auto;
    margin-right: 4px;
    background: none !important;
  }

  .dashboard-delete:hover {
    color: var(--font-600, #F84030) !important;
    width: auto;
    margin-right: 4px;
    background: none !important;
  }

.detail-section {
        padding: 1% 7% !important;
    }

    .img-galeri {
    width: 350;
    height: 200;
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
    padding-top: 10%;
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
    .galeri-detail-hero {
        /* margin-left: 8% !important;
        margin-right: 8% !important; */
        text-align: justify;
        margin-left: 0% !important;
        padding-left: 0% !important;
    }

    .galeri-detail {
        padding-top: 3%;
        padding-left: 7%;
        /* padding-left: 4%; */
        /* padding-right: 8%; */
        /* margin-left: 3% !important; */
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        text-align: start;
    }

    /* .gambar-detail {
        border-radius: 10 !important;
        margin-bottom: 4px !important;
    } */

    .author-detail {
        color: var(--primary-600, #00397D) !important;
        font-family: 'Nunito';
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        text-decoration: none;
    }

    .text-detail {
        color: var(--primary-600, #004BA4);
        font-family: 'Nunito';
        font-size: 18px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%;
        text-decoration: none;
    }

    .oleh-author-detail {
        color: var(--primary-600, #9B9B9B);
        font-family: 'Nunito';
        font-size: 14px;
        font-style: normal;
        font-weight: 350;
        line-height: 120%;
        text-decoration: none;
    }
    .btn-selengkapnya {
        color: var(--font-600, #FFFFFF) !important;
      font-family: 'Nunito' !important;
      font-size: 18px !important;
      font-style: normal;
      font-weight: 500 !important;
      width: auto;
      background-color: var(--font-600, #00397D) !important;
      text-decoration: none;
      margin: 2% !important;
      justify-items: center !important;
  }
  
  .btn-selengkapnya:hover {
    color: var(--font-600, #FFFFFF) !important;
    font-family: 'Nunito';
    font-size: 18px !important;
    font-style: normal;
    font-weight: 500 !important;
    width: auto;
    background-color: var(--font-600, #005EC6) !important;
    margin: 2% !important;
    justify-items: center !important;
  }
</style>