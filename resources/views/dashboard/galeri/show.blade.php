@extends('dashboard.layouts.main')

@section('container')
<section class="detail-section mb-5">
    <div class="galeri-detail-hero">
        <div class="card-galeri">
            <div class="card-body-galeri">
                <h5 class="card-title-galeri">{{ $galeri->title }}</h5>
                <p class="card-text-galeri">{{ $galeri->formatted_date }}</p>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="image-container" style="max-height: 200px; overflow: hidden;">
                            @if($galeri->image1)
                            <img src="{{ asset('storage/' . $galeri->image1) }}" class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;" alt="Gereja">
                            @else
                            <img class="img-fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="image-container" style="max-height: 200px; overflow: hidden;">
                            @if($galeri->image2)
                            <img src="{{ asset('storage/' . $galeri->image2) }}" class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;" alt="Gereja">
                            @else
                            <img class="img-fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="image-container" style="max-height: 200px; overflow: hidden;">
                            @if($galeri->image3)
                            <img src="{{ asset('storage/' . $galeri->image3) }}" class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;" alt="Gereja">
                            @else
                            <img class="img-fluid rounded img-galeri" src="/img/Dalam Gereja.png" alt="Gereja">
                            @endif
                        </div>
                    </div>
                </div>
                @if ($galeri->url)
                <a href="{{ $galeri->url }}" target="_blank" class="btn btn-primary btn-dokumentasi">Dokumentasi Lainnya</a>
                @endif
            </div>
        </div>
        <a href="/dashboard/galeri" class="dashboard-kembali"><span data-feather="arrow-left"></span></a>
        <a href="/dashboard/galeri/{{ $galeri->slug }}/edit" class="dashboard-edit"><span data-feather="edit"></span></a>
        <form action="/dashboard/galeri/{{ $galeri->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="dashboard-delete border-0" onclick="return confirm('Apakah Anda yakin?')"><span data-feather="trash-2"></span></button>
        </form>
    </div>
</section>
@endsection

<style>
@media (max-width: 768px) {
    .detail-section {
        padding: 1% 3% !important;
    }

    .col-lg-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .card-galeri {
        padding: 2% 0 !important;
        border: none !important;
    }

    .card-title-galeri {
        font-size: 18px;
    }

    .card-text-galeri {
        font-size: 16px;
    }

    .btn-dokumentasi {
        font-size: 16px !important;
    }
}

@media (min-width: 768px) {
    .detail-section {
        padding: 1% 7% !important;
    }

    .card-galeri {
        padding: 2% 0 !important;
        border: none !important;
    }

    .card-title-galeri {
        font-size: 20px;
    }

    .card-text-galeri {
        font-size: 18px;
    }

    .btn-dokumentasi {
        font-size: 18px !important;
    }
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

.dashboard-kembali {
    color: var(--font-600, #004BA4) !important;
    width: auto;
    margin-right: 4px;
}

.dashboard-kembali:hover {
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
</style>
