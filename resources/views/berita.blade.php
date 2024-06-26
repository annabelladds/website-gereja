@extends('layouts.main')

@section ('container')
<section class="berita-section">
    <p class="berita-terkini mb-3 text-center">{{ $title }}</p>
    
    <div class="row mb-2 justify-content-center">
        <div class="col-md-5">
            <form action="/berita">
                @if (request('author'))
                 <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pencarian..." name="cari" value="{{ request('cari') }}">
                    <button class="btn btn-primary" type="submit">Cari</button>
                  </div>
            </form>
        </div>
    </div>
    {{-- https://source.unsplash.com/1600x900/?church --}}
    <!-- Kolom Kiri - Berita Paling Terbaru -->
    {{-- @if($berita->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/700x500/?church" class="card-img-top" alt="Gereja">
            <div class="card-body">
                <h5 class="card-title"><a href="/berita/{{ $berita[0]->slug }}" class="text-decoration-none text-dark">{{ $berita[0]->title }}</a></h5>
                <p>
                    <small class="text-muted">
                        Oleh <a href="/authors/{{ $berita[0]->author->username }}" class="text-decoration-none">{{ $berita[0]->author->name }}</a> {{ $berita[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $berita[0]->excerpt }}</p>
                <a href="/berita/{{ $berita[0]->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">Tidak Ada Berita yang Ditemukan!</p>
    @endif
             --}}
            <!-- Kolom Kanan - 3 Berita Terkini -->
            {{-- <div class="col-md-5">
                @if($berita->count())
                    <div class="card mb-3">
                        <img src="https://source.unsplash.com/400x200/?church" class="card-img-top" alt="Gereja">
                        <div class="card-body">
                        <h5 class="card-title"><a href="/berita/{{ $berita[1]->slug }}" class="text-decoration-none text-dark">{{ $berita[1]->title }}</a></h5>
                        <p>
                            <small class="text-muted">
                            Oleh <a href="/authors/{{ $berita[1]->author->username }}" class="text-decoration-none">{{ $berita[1]->author->name }}</a> {{ $berita[1]->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $berita[1]->excerpt }}</p>
                        <a href="/berita/{{ $berita[1]->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                @else
                    <p class="text-center fs-4">Tidak Ada Berita yang Ditemukan!</p>
                @endif
                @if($berita->count())
                    <div class="card mb-3">
                        <img src="https://source.unsplash.com/400x200/?church" class="card-img-top" alt="Gereja">
                        <div class="card-body">
                        <h5 class="card-title"><a href="/berita/{{ $berita[2]->slug }}" class="text-decoration-none text-dark">{{ $berita[2]->title }}</a></h5>
                        <p>
                            <small class="text-muted">
                            Oleh <a href="/authors/{{ $berita[2]->author->username }}" class="text-decoration-none">{{ $berita[2]->author->name }}</a> {{ $berita[2]->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $berita[2]->excerpt }}</p>
                        <a href="/berita/{{ $berita[2]->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                @else
                    <p class="text-center fs-4">Tidak Ada Berita yang Ditemukan!</p>
                @endif
                @if($berita->count())
                    <div class="card mb-3">
                        <img src="https://source.unsplash.com/400x200/?church" class="card-img-top" alt="Gereja">
                        <div class="card-body">
                        <h5 class="card-title"><a href="/berita/{{ $berita[3]->slug }}" class="text-decoration-none text-dark">{{ $berita[3]->title }}</a></h5>
                        <p>
                            <small class="text-muted">
                            Oleh <a href="/authors/{{ $berita[3]->author->username }}" class="text-decoration-none">{{ $berita[3]->author->name }}</a> {{ $berita[3]->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $berita[3]->excerpt }}</p>
                        <a href="/berita/{{ $berita[3]->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                @else
                    <p class="text-center fs-4">Tidak Ada Berita yang Ditemukan!</p>
                @endif
            </div> --}}
    <div class="berita-terkini-hero">
        @if($berita->count())
            <div class="card mb-3">
                {{-- <img src="https://source.unsplash.com/1200x500/?church" class="card-img-top" alt="Gereja"> --}}
                @if($berita[0]->image)
                <div  style="max-height: 450px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $berita[0]->image) }}" class="img-fluid mb-4 rounded"  style="object-fit: cover; width: 100%; height: 100%;" alt="Gereja">
                </div>
                @else
                <img src="/img/Dalam Gereja.png" class="card-img-top" alt="Gereja">
                @endif
                <div class="card-body">
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
                    {{-- <img src="https://source.unsplash.com/500x300/?church" class="card-img-top" alt="Gereja"> --}}
                    @if($beritadetail->image)
                        <img src="{{ asset('storage/' . $beritadetail->image) }}" class="img-fluid mb-4 rounded" alt="Gereja">
                    
                    @else
                    <img src="/img/Dalam Gereja.png" class="card-img-top" alt="Gereja">
                    @endif
                    
                    
                    <div class="card-body">
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

    /* .card-berita-terkini {
        min-height: 500px !important;
    } */

    .tidak-ada-berita {
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 120%;
    }
    
    .artikel-berita {
        color: inherit; /* Menggunakan warna teks induk (parent) */
        text-decoration: none; /* Menghilangkan garis bawah */
    }

    .berita-terkini {
        padding-top: 10%;
        /* margin-left: 4% !important; */
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        text-align: start;
    }

    .card-title-terkini {
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 120%;
        text-decoration: none;
    }

    .author-terkini {
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        text-decoration: none;
    }

    .card-text-isi {
        color: var(--primary-600, #004BA4);
        font-family: 'Nunito';
        font-size: 18px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%;
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
        margin-left: 5% !important;
        margin-right: 5% !important;
    }

    .berita-terkini-hero {
        margin-left: 4% !important;
        margin-right: 4% !important;
        text-align: center;
    }

    .container-berita {
        margin-left: 3% !important;
        margin-right: 3% !important;
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
        /* margin: 0 25% !important;
        bottom: 14px !important; */
  }
  
  .btn-selengkapnya:hover {
    color: var(--font-600, #FFFFFF) !important;
    font-family: 'Nunito';
    font-size: 18px !important;
    font-style: normal;
    font-weight: 500 !important;
    width: auto;
    background-color: var(--font-600, #005EC6) !important;
  }
</style>