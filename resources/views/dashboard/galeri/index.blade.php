@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class="h4">Galeri</h4>
</div>
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
<div class="table-responsive small">
    <a href="/dashboard/galeri/create" class="btn btn-primary mb-3">Tambah Dokumentasi</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Waktu</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galeris as $galeri)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $galeri->title }}</td>
                <td>{{ $galeri->formatted_date }}</td>
                <td class="actions">
                  <form action="/dashboard/galeri/{{ $galeri->slug }}" method="show" class="d-inline">
                    @method('show')
                    @csrf
                    <button class="dashboard-detail border-0"><span data-feather="eye"></span></button>
                  </form>
                  <form action="/dashboard/galeri/{{ $galeri->slug }}/edit" method="edit" class="d-inline">
                    @method('edit')
                    @csrf
                    <button class="dashboard-edit border-0"><span data-feather="edit"></span></button>
                  </form>
                <form action="/dashboard/galeri/{{ $galeri->slug }}" method="post" class="d-inline">
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
.dashboard-detail,
.dashboard-edit,
.dashboard-delete {
    text-decoration: none;
    margin-right: 4px;
    display: inline-block;
}

.dashboard-detail {
    color: var(--font-600, #004BA4);
    background: none;
}

.dashboard-detail:hover {
    color: var(--font-600, #579AFF);
    background: none;
}

.dashboard-edit {
    color: var(--font-600, #BF7600);
    background: none;
}

.dashboard-edit:hover {
    color: var(--font-600, #F6BC70);
    background: none;
}

.dashboard-delete {
    color: var(--font-600, #9F0005);
    background: none;
    border: none;
}

.dashboard-delete:hover {
    color: var(--font-600, #F84030);
    background: none;
}

@media (max-width: 576px) {
    .actions {
        display: flex;
        flex-direction: column;
    }

    .dashboard-detail,
    .dashboard-edit,
    .dashboard-delete {
        margin-right: 0;
        margin-bottom: 4px;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .actions {
        display: flex;
        flex-direction: column;
    }

    .dashboard-detail,
    .dashboard-edit,
    .dashboard-delete {
        margin-bottom: 4px;
    }
}

@media (min-width: 769px) and (max-width: 992px) {
    .actions {
        display: flex;
        flex-direction: row;
    }
}

@media (min-width: 993px) {
    .actions {
        display: flex;
        flex-direction: row;
    }
}
</style>
