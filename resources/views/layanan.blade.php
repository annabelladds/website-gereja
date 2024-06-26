@extends('layouts.main')

@section ('container')
<section class="layanan-section">
    <p class="layanan-title text-center">Pendaftaran Jemaat Baru <br> HKBP Sultan Mazmur Pancawati</p>
    <div class="row justify-content-center">
    <div class="col-lg-10  login-card">
    <main class="form-layanan w-100 m-auto">
    <form>
        <div>
            <p class="mb-1 fw-normal">Nama</p>
            <div class="form-floating">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                <label for="nama">Masukkan nama lengkap Anda</label>
            </div>
        </div>
        <div>
            <p class="mb-1 fw-normal mt-4">Nomor HP</p>
            <div class="form-floating">
            <input type="number" name="number" class="form-control" id="number" placeholder="Number">
            <label for="number">Masukkan nomor HP Anda</label>
            </div>
        </div>
        <div>
            <p class="mb-1 fw-normal mt-4">Alamat</p>
            <div class="form-floating">
            <input type="text" name="address" class="form-control" id="address" placeholder="Address">
            <label for="address">Masukkan alamat rumah Anda</label>
            </div>
        </div>
        <div>
            <p class="mb-1 fw-normal mt-4">Gereja Asal</p>
            <div class="form-floating">
            <input type="text" name="church" class="form-control" id="church" placeholder="Church">
            <label for="church">Masukkan nama Gereja asal Anda</label>
            </div>
        </div>
        <div>
            <p class="mb-1 fw-normal mt-4">Upload Surat Pindah dari Gereja Asal</p>
            <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon" aria-label="Upload">
            </div>
            {{-- <div class="form-floating">
            <input type="text" name="file" class="form-control" id="file" placeholder="File">
            <label for="file">Tidak ada file yang dipilih</label>
            </div> --}}
        </div>
        <div>
            <p class="mb-1 fw-normal mt-4">Anggota Keluarga</p>
            <div class="form-floating">
            <input type="text" name="family" class="form-control" id="family" placeholder="Family">
            <label for="family">Masukkan daftar anggota keluarga Anda</label>
            </div>
        </div>
    <button class="btn btn-kirim" type="submit">Kirim</button>
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

    .login-section{
        /* padding-top: 10% !important; */
        font-family: 'Nunito' !important;
        font-style: normal;
        line-height: 120%;
    }

    .form-layanan input {
    border-radius: 4px;
  }

  .btn-kirim {
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
  
  .btn-kirim:hover {
    color: var(--font-600, #FFFFFF) !important;
    font-family: 'Nunito';
    font-size: 18px !important;
    font-style: normal;
    font-weight: 500 !important;
    width: auto;
    background-color: var(--font-600, #005EC6) !important;
  }
</style>
