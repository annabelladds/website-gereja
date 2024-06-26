{{-- @extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Warta Jemaat</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive small">
    <a href="/dashboard/warta/create" class="btn btn-primary mb-3">Tambah Warta Jemaat Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">File</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($wartas as $wartadetail)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $wartadetail->title }}</td>
            <td>{{ $wartadetail->slug }}</td>
            <td>
                <a href="/dashboard/warta/{{ $wartadetail->slug }}" class="feather-icon dashboard-detail"><span data-feather="eye"></span></a>
                <a href="/dashboard/warta/{{ $wartadetail->slug }}/edit" class="dashboard-edit"><span data-feather="edit"></span></a>
                <form action="/dashboard/warta/{{ $wartadetail->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="dashboard-delete border-0" onclick="return confirm('Apakah Anda yakin?')"><span data-feather="trash-2"></span></button>
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection

<style>

  .dashboard-detail {
    /* color: var(--font-600, #00397D) !important; */
    color: var(--font-600, #004BA4) !important;
    width: auto;
    margin-right: 4px;
  }

  .dashboard-detail:hover {
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
</style> --}}

@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Warta Jemaat</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive small">
    <a href="/dashboard/warta/create" class="btn btn-primary mb-3">Tambah Warta Jemaat Baru</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">File</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wartas as $wartadetail)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $wartadetail->title }}</td>
                <td>{{ $wartadetail->slug }}</td>
                <td class="action-icons">
                      <form action="/dashboard/warta/{{ $wartadetail->slug }}" method="show" class="d-inline">
                        @method('show')
                        @csrf
                        <button class="dashboard-detail border-0"><span data-feather="eye"></span></button>
                      </form>
                      <form action="/dashboard/warta/{{ $wartadetail->slug }}/edit" method="edit" class="d-inline">
                        @method('edit')
                        @csrf
                        <button class="dashboard-edit border-0"><span data-feather="edit"></span></button>
                      </form>
                    {{-- <button href="/dashboard/warta/{{ $wartadetail->slug }}" class="dashboard-detail border-0 d-inline"><span data-feather="eye"></span></button> --}}
                    {{-- <button href="/dashboard/warta/{{ $wartadetail->slug }}/edit" class="dashboard-edit border-0 d-inline"><span data-feather="edit"></span></button> --}}
                    <form action="/dashboard/warta/{{ $wartadetail->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="dashboard-delete border-0" onclick="return confirm('Apakah Anda yakin?')"><span data-feather="trash-2"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<style>
/* Base styles */
.dashboard-detail, .dashboard-edit, .dashboard-delete {
    width: auto;
    margin-right: 4px;
    text-decoration: none;
}

.dashboard-detail {
    color: var(--font-600, #004BA4) !important;
     background: none !important;
}

.dashboard-detail:hover {
    color: var(--font-600, #579AFF) !important;
     background: none !important;
}

.dashboard-edit {
    color: var(--font-600, #BF7600) !important;
     background: none !important;
}

.dashboard-edit:hover {
    color: var(--font-600, #F6BC70) !important;
     background: none !important;
}

.dashboard-delete {
    color: var(--font-600, #9F0005) !important;
    background: none !important;
}

.dashboard-delete:hover {
    color: var(--font-600, #F84030) !important;
    background: none !important;
}

/* Responsive styles */
@media (max-width: 576px) { /* Phones */
    .action-icons {
        display: flex;
        flex-direction: column;
    }

    .dashboard-detail, .dashboard-edit, .dashboard-delete {
        margin-bottom: 4px;
    }
}

@media (min-width: 577px) and (max-width: 768px) { /* Tablets */
    .action-icons {
        display: flex;
        flex-direction: column;
    }

    .dashboard-detail, .dashboard-edit, .dashboard-delete {
        margin-bottom: 4px;
    }
}

@media (min-width: 769px) and (max-width: 992px) { /* Small laptops */
    .action-icons {
        display: flex;
        flex-direction: row;
    }
}

@media (min-width: 993px) { /* Larger devices */
    .action-icons {
        display: flex;
        flex-direction: row;
    }
}
</style>
