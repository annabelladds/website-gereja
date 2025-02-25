@extends('dashboard.layouts.main')
@section('container')
<p class="warta-detail col-md-8">Detail Warta Jemaat</p>
<section class="detail-section mb-5">
    <div class="warta-detail-hero">
        <div class="row">
            <div class="col-md-8">
                @if($warta->count())
                <ul class="list-group list-group-flush mt-3 warta-jemaat-isi">
                  <li class="list-group-item-action d-flex justify-content-between align-items-center mb-4 tanggal-warta">
                    {{ $warta->title }}
                      <a class="btn btn-primary btn-warta-jemaat" href="{{ asset('storage/' . $warta->file) }}">Download</a>
                  </li>
                </ul>
                    @else
                        <p class="text-center fs-4">Tidak Ada Warta yang Ditemukan!</p>
                    @endif
                <a href="/dashboard/warta" class="dashboard-kembali"><span data-feather="arrow-left"></span></a>
                <a href="/dashboard/warta/{{ $warta->slug }}/edit" class="dashboard-edit"><span data-feather="edit"></span></a>
                <form action="/dashboard/warta/{{ $warta->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="dashboard-delete border-0" onclick="return confirm('Apakah Anda yakin?')"><span data-feather="trash-2"></span></button>
                </form>
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

    .warta-detail-hero {
        text-align: justify;
    }

    .warta-detail {
        padding-top: 3%;
        padding-left: 7%;
        color: var(--primary-600, #00397D) !important;
        font-family: 'Nunito';
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        text-align: start;
    }
    
    .tanggal-warta {
    background-color: inherit !important;
    color: var(--primary-600, #00397D) !important;
    font-family: 'Nunito';
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        text-align: start;
  }

    .btn-warta-jemaat {
    color: var(--font-600, #FFFFFF) !important;
    font-family: 'Nunito';
    font-size: 18px !important;
    font-style: normal;
    font-weight: 500 !important;
    width: auto;
    min-width: 150px;
    background-color: var(--font-600, #00397D) !important;
  }

  .btn-warta-jemaat:hover {
    color: var(--font-600, #FFFFFF) !important;
    font-family: 'Nunito';
    font-size: 18px !important;
    font-style: normal;
    font-weight: 500 !important;
    width: auto;
    min-width: 150px;
    background-color: var(--font-600, #005EC6) !important;
  }

  @media (max-width: 576px) {
    .action-icons, .warta-jemaat-isi {
        display: flex;
        flex-direction: column;
    }

    .dashboard-kembali, .dashboard-edit, .dashboard-delete {
        margin-bottom: 4px;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .action-icons, .warta-jemaat-isi {
        display: flex;
        flex-direction: column;
    }

    .dashboard-kembali, .dashboard-edit, .dashboard-delete {
        margin-bottom: 4px;
    }
}

@media (min-width: 769px) and (max-width: 992px) {
    .action-icons, .warta-jemaat-isi {
        display: flex;
        flex-direction: row;
    }
}

@media (min-width: 993px) {
    .action-icons, .warta-jemaat-isi {
        display: flex;
        flex-direction: row;
    }
}

.detail-section {
    padding: 1% 7%;
}

.warta-detail-hero {
    text-align: justify;
}

.warta-detail {
    padding-top: 3%;
    padding-left: 7%;
    color: var(--primary-600, #00397D);
    font-family: 'Nunito';
    font-size: 24px;
    font-weight: 700;
    line-height: 120%;
    text-align: start;
}

.tanggal-warta {
    background-color: inherit;
    color: var(--primary-600, #00397D);
    font-family: 'Nunito';
    font-size: 24px;
    font-weight: 700;
    line-height: 120%;
    text-align: start;
}

.btn-warta-jemaat {
    color: var(--font-600, #FFFFFF);
    font-family: 'Nunito';
    font-size: 18px;
    font-weight: 500;
    min-width: 150px;
    background-color: var(--font-600, #00397D);
}

.btn-warta-jemaat:hover {
    color: var(--font-600, #FFFFFF);
    background-color: var(--font-600, #005EC6);
}
</style>