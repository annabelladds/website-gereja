@extends('layouts.main')

@section ('container')
{{-- <h1 class="mb-5">Berita Terkini</h1> --}}
{{-- <p class="berita-detail">{{ $berita->title }}</p> --}}
    {{-- <article class="mb-4 mx-5">
        <h3>{{ $berita->title }}</h3>
        <h5>{{ $berita->date }}</h5>
        {!! $berita->body !!}
    </article> --}}
    <p class="berita-detail col-md-8">{{ $berita->title }}</p>
<section class="detail-section">


    <div class="berita-detail-hero">
        <div class="row">
            <div class="col-md-8">
                {{-- <img src="https://source.unsplash.com/1200x700/?church" class="img-fluid mb-4 rounded" alt="Gereja"> --}}
                {{-- <img src="/img/Dalam Gereja.png" class="img-fluid mb-4 rounded" alt="Gereja"> --}}
                @if($berita->image)
                    <div>
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
            {{-- <div class="col-md-4">
                <p class="berita-detail">{{ $berita->title }}</p>
                <img src="https://source.unsplash.com/1200x700/?church" class="img-fluid mb-4 rounded" alt="Gereja">
                <p>
                    <small class="oleh-author-detail">
                    Oleh <a href="/authors/{{ $berita->author->username }}" class="author-detail">{{ $berita->author->name }}</a> {{ $berita->created_at->diffForHumans() }}
                    </small>
                </p>
                <article class="text-detail">
                    {!! $berita->excerpt !!}
                </article>
            </div> --}}
            <div class="col-md-4">
            {{-- @foreach ($berita->inRandomOrder()->limit(3)->get() as $berita) --}}
            @foreach ($rekomendasiBerita as $berita)
            
                <div class="card-rekomendasi">
                    {{-- <img src="https://source.unsplash.com/500x300/?church" class="card-img-top rounded-top" alt="Gereja"> --}}
                    @if($berita->image)
                    <div>
                        <img src="{{ asset('storage/' . $berita->image) }}" class="img-fluid mb-4 rounded" alt="Gereja">
                    </div>
                    @else
                    <img src="/img/Dalam Gereja.png" class="img-fluid mb-4 rounded" alt="Gereja">
                    @endif
                    <div class="card-body">
                      <h5 class="card-title-rekomendasi">{{ $berita->title }}</h5>
                      <p>
                        <small class="oleh-author-rekomendasi">
                        Oleh <a href="/berita?author={{ $berita->author->username }}" class="author-rekomendasi">{{ $berita->author->name }}</a> {{ $berita->created_at->diffForHumans() }}
                        </small>
                    </p>
                      <p class="card-text-isi-rekomendasi">{{ $berita->excerpt }}</p>
                      <a href="/berita/{{ $berita->slug }}" class="btn btn-primary btn-selengkapnya">Selengkapnya</a>
                    </div>
                  </div>
            
            @endforeach
        </div>
        </div>
    </div>
</section>
@endsection  

<style>

    .detail-section {
        padding: 1% 7% !important;
    }

    .card-rekomendasi {
        /* padding-top: 23% !important; */
        /* margin-left: 3% !important; */
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        /* font-size: 24px; */
        font-style: normal;
        /* font-weight: 700; */
        line-height: 120%;
        text-align: start;
        margin-bottom: 4% !important;
        border: 1px solid #DDDDDD !important;
        border-radius: 7px !important;
    }

    .card-title-rekomendasi {
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 120%;
        text-decoration: none;
        padding: 2% !important;
    }

    .author-rekomendasi {
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        text-decoration: none;
        padding: 2% !important;
    }

    .card-text-isi-rekomendasi {
        color: var(--primary-600, #004BA4);
        font-family: 'Nunito';
        font-size: 18px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%;
        text-decoration: none;
        text-align: justify;
        margin: 2% !important;
    }

    .oleh-author-rekomendasi {
        color: var(--primary-600, #9B9B9B);
        font-family: 'Nunito';
        font-size: 14px;
        font-style: normal;
        font-weight: 350;
        line-height: 120%;
        text-decoration: none;
        padding: 2% !important;
    }

    .berita-detail-hero {
        /* margin-left: 8% !important;
        margin-right: 8% !important; */
        text-align: justify;
    }

    .berita-detail {
        padding-top: 12%;
        padding-left: 8%;
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