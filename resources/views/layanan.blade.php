@extends('layouts.main')
@section ('container')
<section class="layanan-section">
    <p class="layanan-title text-center">Pendaftaran Jemaat Baru <br> HKBP Sultan Mazmur Pancawati</p>
    <div class="row justify-content-center">
        <div class="col-lg-10 login-card">
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
    .layanan-title {
        padding-top: 10%;
        color: var(--primary-600, #00397D);
        font-family: 'Nunito';
        font-size: 20px;
        font-weight: 700;
        line-height: 120%;
    }

    .form-layanan input {
        border-radius: 4px;
    }

    .btn-kirim {
        color: #FFFFFF !important;
        font-family: 'Nunito' !important;
        font-size: 18px !important;
        font-weight: 500 !important;
        background-color: #00397D !important;
    }

    .btn-kirim:hover {
        background-color: #005EC6 !important;
    }

    @media (max-width: 575.98px) {  
        .layanan-title {
            font-size: 16px;
        }

        .form-layanan input {
            font-size: 14px;
        }

        .btn-kirim {
            font-size: 16px !important;
        }
    }

    @media (min-width: 576px) and (max-width: 767.98px) {
        .layanan-title {
            font-size: 18px;
            padding-top: 15%;
        }

        .form-layanan input {
            font-size: 16px;
        }

        .btn-kirim {
            font-size: 17px !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .layanan-title {
            font-size: 19px;
            padding-top: 12%;
        }

        .form-layanan input {
            font-size: 17px;
        }

        .btn-kirim {
            font-size: 17px !important;
        }
    }

    @media (min-width: 992px) {
        .layanan-title {
            font-size: 20px;
        }

        .form-layanan input {
            font-size: 18px;
        }

        .btn-kirim {
            font-size: 18px !important;
        }
    }
</style>
