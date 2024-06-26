@extends('layouts.main')
@section('container')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
<link rel="icon" href="{{ asset('img/church (2).png') }}">
<section class="detail-section">
    <div class="berita-detail-hero">
        <div class="row">
            <div class="col-md-12">
                <p class="berita-detail title-detail">{{ $berita->title }}</p>
                @if($berita->image)
                    <div class="image-container-atas">
                        <img src="{{ asset('storage/' . $berita->image) }}" class="img-fluid mb-4 rounded" alt="Gereja">
                    </div>
                @else
                    <img src="/img/Dalam Gereja.png" class="img-fluid mb-4 rounded" alt="Gereja">
                @endif
                <p>
                    <small class="oleh-author-detail">
                    Oleh <a href="/berita?author={{ $berita->author->username }}" class="author-detail">{{ $berita->author->name }}</a> {{ $berita->created_at->diffForHumans() }}
                    </small>
                </p>
                <article class="text-detail">
                    {!! $berita->body !!}
                </article>
            </div>
        </div>
        <div class="row rekomendasi-container">
            <p class="berita-detail title-rekomendasi">Rekomendasi Berita</p>
            @foreach ($rekomendasiBerita as $rekomendasi)
                <div class="col-md-4 mb-3">
                    <div class="card-rekomendasi">
                        @if($rekomendasi->image)
                        <div class="image-container-bawah">
                            <img src="{{ asset('storage/' . $rekomendasi->image) }}" class="img-fluid mb-4 rounded-top-only" alt="Gereja">
                        </div>
                        @else
                        <img src="/img/Dalam Gereja.png" class="img-fluid mb-4 rounded-top-only" alt="Gereja">
                        @endif
                        <div class="card-body">
                          <h5 class="card-title-rekomendasi">{{ $rekomendasi->title }}</h5>
                          <p>
                            <small class="oleh-author-rekomendasi">
                            Oleh <a href="/berita?author={{ $rekomendasi->author->username }}" class="author-rekomendasi">{{ $rekomendasi->author->name }}</a> {{ $rekomendasi->created_at->diffForHumans() }}
                            </small>
                        </p>
                          <p class="card-text-isi-rekomendasi">{{ $rekomendasi->excerpt }}</p>
                          <a href="/berita/{{ $rekomendasi->slug }}" class="btn btn-primary btn-selengkapnya">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

<style>
.detail-section {
    padding: 2% 6% !important;
}

.image-container-atas {
    height: 380px;
    width: 100%;
    overflow: hidden;
    padding-bottom: 3%;
}
.image-container-bawah {
    height: 220px;
    width: 100%;
    overflow: hidden;
    padding-bottom: 3%;
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

.berita-detail-hero {
    text-align: justify;
}

.berita-detail {
    color: var(--primary-600, black) !important;
    font-family: 'Nunito';
    font-size: 24px !important;
    font-weight: 700 !important;
    line-height: 120% !important;
    text-align: center;
}

.card-rekomendasi {
    color: var(--primary-600, black);
    font-family: 'Nunito';
    text-align: start;
    margin-bottom: 4%;
    border: 1px solid #DDDDDD;
    border-radius: 7px;
}

.rounded-top-only {
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
}

.card-body {
    padding: 0% 4% 4% 4% !important
}

.card-title-rekomendasi {
    color: var(--primary-600, black);
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 10px;
}

.oleh-author-rekomendasi, .oleh-author-detail {
    color: var(--primary-600, #9B9B9B) !important;
    font-size: 14px !important;
    font-weight: 400 !important;
}

.card-text-isi-rekomendasi, .text-detail {
    color: var(--primary-600, black) !important;
    font-size: 16px !important;
    text-align: justify;
    margin-bottom: 20px;
}

.author-detail, .author-rekomendasi {
    color: var(--primary-600, #005EC6) !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    text-decoration: none;
}

.author-detail:hover, .author-rekomendasi:hover {
    color: var(--primary-600, #005EC6) !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    text-decoration: underline;
}

.btn-selengkapnya {
    color: #FFFFFF !important;
    font-family: 'Nunito' !important;
    font-size: 18px !important;
    font-weight: 500 !important;
    background-color: #00397D !important;
    text-decoration: none;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    margin: 0 auto !important;
    width: 50% !important;
}

.btn-selengkapnya:hover {
    background-color: #005EC6 !important;
}

@media (max-width: 576px) {
    .detail-section {
    padding: 14% 6% !important;
    }

    .berita-detail {
        padding-top: 5%;
        font-size: 18px;
    }

    .card-title-rekomendasi,
    .card-text-isi-rekomendasi {
        font-size: 18px;
    }

    .text-detail {
        font-size: 14px;
    }

    .image-container-atas, .image-container-bawah {
        height: 200px;
        width: 100%;
        overflow: hidden;
        padding-bottom: 6%;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .detail-section {
    padding: 10% 6% !important;
    } 

    .berita-detail {
        padding-top: 8%;
        font-size: 18px;
    }

    .card-title-rekomendasi,
    .card-text-isi-rekomendasi {
        font-size: 18px;
    }

    .text-detail {
        font-size: 14px;
    }

    .btn-selengkapnya, .btn-selengkapnya:hover {
    width: 70% !important;
    }
}

@media (min-width: 769px) and (max-width: 992px) {
    .btn-selengkapnya, .btn-selengkapnya:hover {
    width: 70% !important;
    }

    .title-detail {
        padding-top: 12%;
        font-size: 20px;
    }

    .title-rekomendasi {
        padding-top: 2% !important;
    }

    .card-title-rekomendasi,
    .card-text-isi-rekomendasi {
        font-size: 20px;
    }

    .text-detail {
        font-size: 16px !important;
    }
    .image-container-atas {
        height: 250px;
        width: 100%;
        overflow: hidden;
        padding-bottom: 6%;
    }
    .image-container-bawah {
        height: 180px;
        width: 100%;
        overflow: hidden;
        padding-bottom: 6%;
    }
}

@media (min-width: 993px) {
    .title-detail {
        padding-top: 8%;
        font-size: 20px;
    }

    .title-rekomendasi {
        padding-top: 2% !important;
    }

    .card-title-rekomendasi,
    .card-text-isi-rekomendasi {
        font-size: 20px;
    }

    .text-detail {
        font-size: 18px !important;
    }

    .rekomendasi-container {
        display: flex;
        justify-content: space-between;
    }

    .col-md-4 {
        display: flex;
        flex-direction: column;
    }
}
</style>
