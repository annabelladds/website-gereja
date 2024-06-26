@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Berita</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive small">
    <a href="/dashboard/berita/create" class="btn btn-primary mb-3">Tambah Berita Baru</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beritas as $berita)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $berita->title }}</td>
                <td>{{ $berita->kategori->name }}</td>
                <td class="actions">
                  <form action="/dashboard/berita/{{ $berita->slug }}" method="show" class="d-inline">
                    @method('show')
                    @csrf
                    <button class="dashboard-detail border-0"><span data-feather="eye"></span></button>
                  </form>
                  <form action="/dashboard/berita/{{ $berita->slug }}/edit" method="edit" class="d-inline">
                    @method('edit')
                    @csrf
                    <button class="dashboard-edit border-0"><span data-feather="edit"></span></button>
                  </form>
                <form action="/dashboard/berita/{{ $berita->slug }}" method="post" class="d-inline">
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

/* Responsive styles */
@media (max-width: 576px) { /* Phones */
    .actions {
        display: flex;
        flex-direction: column;
    }

    .dashboard-detail, .dashboard-edit, .dashboard-delete {
        margin-bottom: 4px;
    }
}

@media (min-width: 577px) and (max-width: 768px) { /* Tablets */
    .actions {
        display: flex;
        flex-direction: column;
    }

    .dashboard-detail, .dashboard-edit, .dashboard-delete {
        margin-bottom: 4px;
    }
}

@media (min-width: 769px) and (max-width: 992px) { /* Small laptops */
    .actions {
        display: flex;
        flex-direction: row;
    }
}

@media (min-width: 993px) { /* Larger devices */
    .actions {
        display: flex;
        flex-direction: row;
    }
}
</style>
