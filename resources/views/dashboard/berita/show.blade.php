@extends('dashboard.layouts.main')
@section('container')
<p class="berita-detail col-md-8">{{ $berita->title }}</p>
<section class="detail-section mb-5">
    <div class="berita-detail-hero">
        <div class="row">
            <div class="col-md-8">
                @if($berita->image)
                    <div>
                        <img src="{{ asset('storage/' . $berita->image) }}" class="img-fluid mb-4 rounded" alt="Gereja">
                    </div>
                @else
                    <img src="/img/Dalam Gereja.png" class="img-fluid mb-4 rounded" alt="Gereja">
                @endif
                <a href="/dashboard/berita" class="dashboard-kembali"><span data-feather="arrow-left"></span></a>
                <a href="/dashboard/berita/{{ $berita->slug }}/edit" class="dashboard-edit"><span data-feather="edit"></span></a>
                <form action="/dashboard/berita/{{ $berita->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="dashboard-delete border-0" onclick="return confirm('Apakah Anda yakin?')"><span data-feather="trash-2"></span></button>
                </form>
                <article class="text-detail mt-2">
                    {!! $berita->body !!}
                </article>
            </div>
            <div class="col-md-4">
        </div>
        </div>
    </div>
   </div>
  </div>
</div>
@endsection

<style>
    .btn {
      padding-left: 0% !important;
      margin-bottom: 2%;
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

  .detail-section {
        padding: 1% 7% !important;
    }

    .berita-detail-hero {
        text-align: justify;
    }

    .berita-detail {
        padding-top: 3%;
        padding-left: 7%;
        color: var(--primary-600, black);
        font-family: 'Nunito';
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        text-align: start;
    }
    
    .tanggal-berita {
    background-color: inherit !important;
    color: inherit !important;
  }

    .btn-berita-jemaat {
    color: var(--font-600, #FFFFFF) !important;
    font-family: 'Nunito';
    font-size: 18px !important;
    font-style: normal;
    font-weight: 500 !important;
    width: auto;
    min-width: 150px;
    background-color: var(--font-600, #00397D) !important;
  }

  .btn-berita-jemaat:hover {
    color: var(--font-600, #FFFFFF) !important;
    font-family: 'Nunito';
    font-size: 18px !important;
    font-style: normal;
    font-weight: 500 !important;
    width: auto;
    min-width: 150px;
    background-color: var(--font-600, #005EC6) !important;
  }
</style>