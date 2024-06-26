@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class="h4">Jemaat Baru</h4>
  </div>
  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Nomor HP</th>
          <th scope="col">Alamat</th>
          <th scope="col">Gereja Asal</th>
          <th scope="col">Surat Pindah</th>
          <th scope="col">Anggota Keluarga</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($layanans as $layanan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $layanan->name }}</td>
            <td>{{ $layanan->phone }}</td>
            <td>{{ $layanan->address }}</td>
            <td>{{ $layanan->church }}</td>
            <td>
              @if($layanan->file)
              <a class="dashboard-download border-0" href="{{ asset('storage/' . $layanan->file) }}"><span data-feather="download"></span></a>
              @else
              Tidak Ada File
              @endif
            </td>
            <td>{{ $layanan->family }}</td>
            <td>
                <form action="/dashboard/layanan/{{ $layanan->id }}" method="post" class="d-inline">
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
  .dashboard-download {
    color: var(--font-600, #004BA4) !important;
    width: auto;
    margin-right: 4px;
    background: none !important;
  }

  .dashboard-download:hover {
    color: var(--font-600, #579AFF) !important;
    width: auto;
    margin-right: 4px;
    background: none !important;
  }

  .dashboard-detail {
    color: var(--font-600, #004BA4) !important;
    width: auto;
    margin-right: 4px;
    background: none !important;
  }

  .dashboard-detail:hover {
    color: var(--font-600, #579AFF) !important;
    width: auto;
    margin-right: 4px;
    background: none !important;
  }

  .dashboard-edit {
    color: var(--font-600, #BF7600) !important;
    width: auto;
    margin-right: 4px;
    background: none !important;
  }

  .dashboard-edit:hover {
    color: var(--font-600, #F6BC70) !important;
    width: auto;
    margin-right: 4px;
    background: none !important;
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