@extends('layouts.main')

@section ('container')
<section class="layanan-section">
    <p class="layanan-title text-center">Pendaftaran Jemaat Baru <br> HKBP Sultan Mazmur Pancawati</p>
    <div class="row justify-content-center">
    <div class="col-lg-10 layanan-card">
        
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
    <main class="form-layanan w-100 m-auto">
    <form action="/layanan" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <p class="mb-1 fw-normal">Nama</p>
            <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Masukkan nama lengkap Anda</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div>
            <p class="mb-1 fw-normal mt-4">Nomor HP</p>
            <div class="form-floating">
            <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Phone" required value="{{ old('phone') }}">
            <label for="phone">Masukkan nomor HP Anda</label>
            @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div>
            <p class="mb-1 fw-normal mt-4">Alamat</p>
            <div class="form-floating">
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Address" required value="{{ old('address') }}">
            <label for="address">Masukkan alamat rumah Anda</label>
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
        <div>
            <p class="mb-1 fw-normal mt-4">Gereja Asal</p>
            <div class="form-floating">
            <input type="text" name="church" class="form-control @error('church') is-invalid @enderror" id="church" placeholder="Church" required value="{{ old('church') }}">
            <label for="church">Masukkan nama Gereja asal Anda</label>
            @error('church')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
        <div>
            <p class="mb-1 fw-normal mt-4">Upload Surat Pindah dari Gereja Asal</p>
            <div class="input-group">
                <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="file" required value="{{ old('file') }}">
            </div>
            @error('file')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <p class="mb-1 fw-normal mt-4">Anggota Keluarga</p>
            <div class="form-floating">
            <input type="text" name="family" class="form-control @error('family') is-invalid @enderror" id="family" placeholder="Family" required value="{{ old('family') }}">
            <label for="family">Masukkan daftar anggota keluarga Anda</label>
            @error('family')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
    <button class="btn btn-primary w-100 mt-4 py-2" type="submit">Kirim</button>
    </form>
    </main>
    </div>
    </div>
</section>

@endsection  

<style>
    .layanan-title{
        padding-top: 10%;
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
    }

    .layanan-section{
        /* padding-top: 10% !important; */
        font-family: 'Nunito' !important;
        font-style: normal;
        line-height: 120%;
    }

    .form-layanan input {
    border-radius: 4px;
  }
</style>
