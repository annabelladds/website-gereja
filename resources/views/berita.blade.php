@extends('layouts.main')
@section ('container')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
<section class="berita-section">
    <link rel="icon" href="{{ asset('img/church (2).png') }}">
    <p class="berita-terkini mb-3 text-center">{{ $title }}</p>
    <div class="row mb-2 justify-content-center">
        <div class="col-md-5">
            <form action="/berita">
                @if (request('author'))
                 <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pencarian..." name="cari" value="{{ request('cari') }}">
                    <button class="btn btn-primary btn-cari" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="berita-terkini-hero">
        @if($berita->count())
            <div class="card mb-3">
                @if($berita[0]->image)
                <div class="image-container-atas">
                    <img src="{{ asset('storage/' . $berita[0]->image) }}" class="img-fluid mb-4 rounded-top-only" alt="Gereja">
                </div>
                @else
                <img src="/img/Dalam Gereja.png" class="card-img-top" alt="Gereja">
                @endif
                <div class="card-body text-center">
                    <h5 class="card-title-terkini"><a href="/berita/{{ $berita[0]->slug }}" class="card-title-terkini">{{ $berita[0]->title }}</a></h5>
                    <p>
                        <small class="oleh-author">
                        Oleh <a href="/berita?author={{ $berita[0]->author->slug }}" class="author-terkini">{{ $berita[0]->author->name }}</a> {{ $berita[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text-isi">{{ $berita[0]->excerpt }}</p>
                    <a href="/berita/{{ $berita[0]->slug }}" class="btn btn-primary btn-selengkapnya">Selengkapnya</a>
                </div>
            </div>
    </div>
    <div class="container-berita">
        <div class="row">
            @foreach ($berita->skip(1) as $beritadetail)
            <div class="col-md-4 mb-3">
                <div class="card card-berita-terkini">
                    @if($beritadetail->image)
                        <div class="image-container-bawah">
                            <img src="{{ asset('storage/' . $beritadetail->image) }}" class="img-fluid mb-4 rounded-top-only" alt="Gereja">
                        </div>
                    @else
                    <img src="/img/Dalam Gereja.png" class="card-img-top" alt="Gereja">
                    @endif
                    <div class="card-body text-center">
                      <h5 class="card-title-terkini">{{ $beritadetail->title }}</h5>
                      <p>
                        <small class="oleh-author">
                        Oleh <a href="/berita?author={{ $beritadetail->author->slug }}" class="author-terkini">{{ $beritadetail->author->name }}</a> {{ $beritadetail->created_at->diffForHumans() }}
                        </small>
                    </p>
                      <p class="card-text-isi">{{ $beritadetail->excerpt }}</p>
                      <a href="/berita/{{ $beritadetail->slug }}" class="btn btn-primary btn-selengkapnya">Selengkapnya</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="tidak-ada-berita text-center">Tidak ada berita yang ditemukan!</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $berita->links() }}
    </div>
</section>
@endsection  
<style>
    .tidak-ada-berita {
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 120%;
    }

    .artikel-berita {
        color: inherit;
        text-decoration: none;
    }

    .berita-terkini {
        padding-top: 10%;
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        text-align: start;
    }

    .card-title-terkini {
        color: var(--primary-600, black);
        font-family: 'Nunito';
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 120%;
        text-decoration: none;
    }

    .author-terkini {
        color: var(--primary-600, #005EC6);
        font-family: 'Nunito';
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        text-decoration: none;
    }

    .author-terkini:hover {
        color: var(--primary-600, #005EC6);
        font-family: 'Nunito';
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        text-decoration: underline;
    }

    .card-text-isi {
        color: var(--primary-600, black);
        font-family: 'Nunito';
        font-size: 16px;
        font-style: normal;
        font-weight: 300;
        line-height: 150%;
        text-decoration: none;
        text-align: justify;
    }

    .oleh-author {
        color: var(--primary-600, #9B9B9B);
        font-family: 'Nunito';
        font-size: 14px;
        font-style: normal;
        font-weight: 350;
        line-height: 120%;
        text-decoration: none;
    }

    .berita-section {
        padding: 0 6%;
    }

    .berita-terkini-hero {
        margin: 0 auto;
        text-align: center;
    }

    .container-berita {
        margin: 0 auto;
        padding-bottom: 2% !important;
    }

    .btn-selengkapnya, .btn-cari, .page-link {
        color: var(--font-600, #FFFFFF) !important;
        font-family: 'Nunito' !important;
        font-size: 18px !important;
        font-style: normal;
        font-weight: 500 !important;
        width: auto;
        height: auto !important;
        background-color: var(--font-600, #00397D) !important;
        text-decoration: none;
    }
  
    .btn-selengkapnya:hover, .btn-cari:hover, .page-link:hover {
        color: var(--font-600, #FFFFFF) !important;
        font-family: 'Nunito';
        font-size: 18px !important;
        font-style: normal;
        font-weight: 500 !important;
        width: auto;
        height: auto !important;
        background-color: var(--font-600, #005EC6) !important;
    }

    .form-control {
        height: auto !important;
    }

    .page-link:not(.active) {
        color: var(--primary-600, #00397D) !important;
        background-color: #FFFFFF !important;
    }

    .page-link:not(.active):hover {
        color: var(--font-600, #FFFFFF) !important;
        background-color: var(--font-600, #005EC6) !important;
    }

    .image-container-atas {
        height: 500px;
        width: 100%;
        overflow: hidden;
    }
    .image-container-bawah {
        height: 220px;
        width: 100%;
        overflow: hidden;
    }

    .image-container-atas img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .image-container-bawah img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .rounded-top-only {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    }

    @media (max-width: 576px) {
        .berita-section {
        padding: 6% 4%;
        }

        .berita-terkini {
            font-size: 18px;
        }
        .card-title-terkini {
            font-size: 16px;
        }
        .card-text-isi {
            font-size: 14px;
        }
        .btn-selengkapnya, .btn-cari, .page-link {
            font-size: 14px;
        }

        .tidak-ada-berita {
        font-size: 16px;
    }
    }

    @media (min-width: 577px) and (max-width: 768px) {
        .berita-section {
        padding: 6% 4%;
        }

        .berita-terkini {
            font-size: 20px;
        }
        .card-title-terkini {
            font-size: 18px;
        }
        .card-text-isi {
            font-size: 16px;
        }
        .btn-selengkapnya, .btn-cari, .page-link {
            font-size: 16px;
        }
    }

    @media (min-width: 769px) and (max-width: 992px) {
        .berita-section {
        padding: 2% 4%;
        }

        .berita-terkini {
            font-size: 22px;
        }
        .card-title-terkini {
            font-size: 20px;
        }
        .card-text-isi {
            font-size: 18px;
        }
        .btn-selengkapnya, .btn-cari, .page-link {
            font-size: 18px;
        }
    }

    @media (min-width: 993px) {
        
        .berita-terkini {
            font-size: 24px;
        }
        .card-title-terkini {
            font-size: 20px;
        }
        .card-text-isi {
            font-size: 18px;
        }
        .btn-selengkapnya, .btn-cari, .page-link {
            font-size: 18px;
        }
    }
</style>
