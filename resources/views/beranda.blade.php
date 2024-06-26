@extends('layouts.main')
@extends('partials.hero')
@section ('container')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp

<section class="gereja-section">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div data-aos="fade-down-right" data-aos-duration="1500" class="col-md-6 order-md-1 order-2 mt-4 mt-md-0">
        <h1 class="gereja-title mb-3">HKBP SULTAN MAZMUR PANCAWATI</h1>
        <p class="gereja-desc">
          HKBP Sultan Mazmur Pancawati didirikan setelah beberapa individu berkeinginan membentuk Pos Pelayanan, sehingga St. P. L. Pangaribuan menyediakan tempat. Ibadah pertama dimulai oleh anak-anak sekolah minggu pada 8 Januari 2017, dilanjutkan oleh remaja pada minggu-minggu berikutnya. Ibadah umum perdana berlangsung pada 7 Mei 2017.
        </p><br>
        <p class="gereja-desc">
          Pada Desember 2018, kegiatan ibadah terganggu oleh demo warga setempat, sehingga jemaat harus berpindah tempat ke aula dan lapangan kantor kecamatan Klari. Setelah mediasi dengan Kesbangpol dan kantor Bupati, pada tahun 2019, HKBP Sultan Mazmur Pancawati memperoleh izin resmi dan dapat melaksanakan ibadah dengan aman.
        </p>
      </div>
      <div data-aos="fade-down-left" data-aos-duration="1500" class="col-md-6 order-md-2 order-1">
        <img alt="HKBP Sultan Mazmur Pancawati" src="/img/Hero II.jpg" class="gereja-img img-fluid" />
      </div>
    </div>
  </div>
</section>

<section class="jadwal-section">
  <div class="container-fluid">
    <div class="judul-ibadah pb-3">JADWAL IBADAH & KEGIATAN</div>
    <div class="row baris-ibadah">
      <div class="col-md-4 jadwal-ibadah">
        <p class="hari-ibadah">Minggu (Pukul 07.00 WIB)</p>
        <p class="kategorial">Bahasa Indonesia</p>
      </div>
      <div class="col-md-4 jadwal-ibadah">
        <p class="hari-ibadah">Minggu (Pukul 09.00 WIB)</p>
        <p class="kategorial">Sekolah Minggu</p>
      </div>
      <div class="col-md-4 jadwal-ibadah">
        <p class="hari-ibadah">Minggu (Pukul 10.00 WIB)</p>
        <p class="kategorial">Bahasa Batak</p>
      </div>
    </div>
    <div class="row baris-ibadah">
      <div class="col-md-4 jadwal-ibadah">
        <p class="hari-ibadah">Rabu & Kamis (Pukul 19.00 WIB)</p>
        <p class="kategorial">Partangiangan Sektor</p>
      </div>
      <div class="col-md-4 jadwal-ibadah">
        <p class="hari-ibadah">Jumat (Pukul 17.00 WIB)</p>
        <p class="kategorial">Kebaktian Punguan Ina</p>
        <p class="jadwal-ina-parompuan">*Minggu ke-1, ke-2, ke-4</p>
      </div>
      <div class="col-md-4 jadwal-ibadah">
        <p class="hari-ibadah">Jumat (Pukul 20.00 WIB)</p>
        <p class="kategorial">Kebaktian Punguan Ama</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 jadwal-ibadah">
        <p class="hari-ibadah">Sabtu (Pukul 15.00 WIB)</p>
        <p class="kategorial">Kebaktian Pra Remaja & Remaja</p>
      </div>
      <div class="col-md-4 jadwal-ibadah">
        <p class="hari-ibadah">Jumat (Pukul 17.00 WIB)</p>
        <p class="kategorial">Kebaktian Punguan Parompuan</p>
        <p class="jadwal-ina-parompuan">*Minggu ke-3</p>
      </div>
      <div class="col-md-4 jadwal-ibadah">
        <p class="hari-ibadah">Sabtu (Pukul 19.30 WIB)</p>
        <p class="kategorial">Kebaktian Naposo</p>
      </div>
    </div>
  </div>
</section>

<section class="warta-jemaat-section">
  <div class="container-fluid">
      <div class="judul-warta-jemaat pb-3">TATA IBADAH & WARTA JEMAAT</div>
      @if($warta->count())
          <ul class="list-group list-group-flush mt-3 warta-jemaat-isi">
              @foreach ($warta->take(5) as $wartadetail)
              <li class="list-group-item d-flex justify-content-between align-items-center mb-4 tanggal-warta">
                  {{ $wartadetail->title }}
                  <a class="btn btn-primary btn-warta-jemaat" href="{{ asset('storage/' . $wartadetail->file) }}">Download</a>
              </li>
              @endforeach
          </ul>
      @else
          <p class="text-center tidak-ada-warta">Tidak Ada Warta yang Ditemukan!</p>
      @endif
  </div>
</section>

<section class="jumlah-section">
  <div class="container-fluid">
    <div class="item">
      <img src="img/person.png" alt="Person" class="logo">
      <p class="angka" id="angka-jemaat">1+</p>
      <p class="tulisan">Jemaat</p>
    </div>
    <div class="item">
      <img src="img/family.png" alt="Family" class="logo">
      <p class="angka" id="angka-keluarga">1+</p>
      <p class="tulisan">Keluarga</p>
    </div>
    <div class="item">
      <img src="img/child.png" alt="Child" class="logo">
      <p class="angka" id="angka-anak">1+</p>
      <p class="tulisan">Anak</p>
    </div>
  </div>
  <script>
    function animateNumber(id, end, duration) {
      let start = 1;
      let range = end - start;
      let current = start;
      let increment = end > start ? 1 : -1;
      let stepTime = Math.abs(Math.floor(duration / range));
      let obj = document.getElementById(id);
      let timer = setInterval(function() {
        current += increment;
        let displayNumber = current > 1 ? current + '+' : current;
        obj.innerHTML = displayNumber;
        if (current == end) {
          clearInterval(timer);
        }
      }, stepTime);
    }
    function startNumberAnimation(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateNumber("angka-jemaat", 1000, 700);
          animateNumber("angka-keluarga", 300, 700);
          animateNumber("angka-anak", 150, 700);
        observer.unobserve(entry.target);
        }
      });
    }
    const observer = new IntersectionObserver(startNumberAnimation, { threshold: 0.5 });
    const jumlahSection = document.querySelector('.jumlah-section');
    if (jumlahSection) {
      observer.observe(jumlahSection);
    }
  </script>
</section> 

<section class="rek-gereja-section">
  <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
          <div data-aos="fade-down-right" data-aos-duration="1500" class="col-lg-8 col-md-8 order-1 text-center">
              <div class="text-center">
                  <h1 class="rek-gereja-title mb-3">REKENING GEREJA</h1>
                  <p class="rek-gereja-desc">
                      HKBP Sultan Mazmur Pancawati menyediakan rekening yang dapat digunakan oleh para jemaat untuk memberikan donasi, persembahan, ucapan terima kasih, dan berbagai keperluan lainnya. Kami menganggap setiap sumbangan dan dukungan dengan penuh rasa syukur, serta berkomitmen untuk menggunakannya dengan bijaksana demi kemuliaan Tuhan dan kepentingan bersama.
                  </p>
                  <p class="rek-gereja-desc text-center">
                      Mandiri : 173-00-1255667-7
                  </p>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection 

<style>
  .gereja-section {
    width: 100%;
    background: var(--primary-50, #EFF3FF);
    padding: 60px 30px !important;
}

.gereja-title {
    color: var(--primary-600, #00397D);
    font-family: 'Nunito';
    font-size: 24px;
    font-weight: 700;
    line-height: 1.2;
    margin-right: 20px !important;
}

.gereja-desc {
    color: var(--font-600, #004BA4);
    font-family: 'Nunito';
    font-size: 18px;
    font-weight: 500;
    line-height: 1.5;
    text-align: justify;
    margin-right: 20px !important;
}

.gereja-img {
    border-radius: 12px;
    width: 100%;
    height: auto;
    margin-right: 20px !important;
}

@media (max-width: 767px) {
    .gereja-title {
        font-size: 20px;
    }

    .gereja-desc {
        font-size: 16px;
    }

    .gereja-section {
        padding: 30px 15px !important;
    }

    .gereja-desc, .gereja-img, .gereja-title {
      margin: 0 !important;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .gereja-title {
        font-size: 22px;
    }

    .gereja-desc {
        font-size: 17px;
    }

    .gereja-desc, .gereja-img, .gereja-title {
      margin: 0 !important;
    }
}

  .warta-jemaat-section {
    background: var(--primary-50, #FFFFFF);
    padding: 20px 40px !important;
    font-family: 'Nunito';
}

.judul-warta-jemaat {
    margin-bottom: 10px;
    font-size: 24px;
    text-align: center;
    color: var(--primary-600, #00397D);
    font-weight: 700;
}

.tanggal-warta {
    background-color: transparent;
    color: var(--font-600, #00397D) !important;
    font-size: 20px !important;
    font-weight: 500;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}

.btn-warta-jemaat {
    font-size: 20px !important;
    font-weight: 400 !important;
    min-width: 120px !important;
    padding: 8px 16px !important;
    background-color: var(--font-600, #00397D) !important;
}

.btn-warta-jemaat:hover {
    font-size: 20px !important;
    font-weight: 400 !important;
    min-width: 120px !important;
    padding: 8px 16px !important;
    background-color: var(--font-600, #005EC6) !important;
}

.tidak-ada-warta {
        color: var(--primary-600, #00397D) !important;
        font-family: 'Nunito';
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 120%;
    }

@media (max-width: 768px) {
  .warta-jemaat-section {
    background: var(--primary-50, #FFFFFF);
    padding: 20px 10px !important;
    font-family: 'Nunito';
}

    .tanggal-warta {
        font-size: 18px !important;
    }
    .btn-warta-jemaat {
        font-size: 16px !important;
        min-width: 100px !important;
        padding: 6px 12px !important;
        font-weight: 400 !important;
        background-color: var(--font-600, #00397D) !important;
    }

    .btn-warta-jemaat:hover {
        font-size: 16px !important;
        min-width: 100px !important;
        padding: 6px 12px !important;
        font-weight: 400 !important;
        background-color: var(--font-600, #005EC6) !important;
    }

    .tidak-ada-warta {
        font-size: 16px;
    }
}

  .jadwal-section {
  width: 100%;
  background-color: #00397D;
  padding: 60px 15px;
  text-align: center;
}

.judul-ibadah {
  margin-bottom: 20px;
  font-size: 24px;
  font-weight: 700;
  color: #83AFFF;
  font-family: 'Nunito';
}

.jadwal-ibadah {
  color: #CEDCFF;
  font-size: 20px;
  font-weight: 400;
  margin-bottom: 20px;
  font-family: 'Nunito';
}

.hari-ibadah {
  color: #83AFFF;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Nunito';
}

.kategorial {
  color: #CEDCFF;
  font-size: 20px;
  font-weight: 400;
  font-family: 'Nunito';
}

.jadwal-ina-parompuan {
  color: #CEDCFF;
  font-size: 16px;
  font-weight: 300;
  font-family: 'Nunito';
}

.baris-ibadah {
  margin-bottom: 3%;
}

@media (max-width: 767.98px) {
  .jadwal-ibadah {
    font-size: 16px;
  }

  .hari-ibadah,
  .kategorial {
    font-size: 16px;
  }

  .jadwal-ina-parompuan {
    font-size: 14px;
  }
}

@media (min-width: 768px) and (max-width: 991.98px) {
  .jadwal-ibadah {
    font-size: 18px;
  }

  .hari-ibadah,
  .kategorial {
    font-size: 18px;
  }

  .jadwal-ina-parompuan {
    font-size: 16px;
  }
}

@media (min-width: 992px) {
  .jadwal-ibadah {
    font-size: 20px;
  }

  .hari-ibadah,
  .kategorial {
    font-size: 20px;
  }

  .jadwal-ina-parompuan {
    font-size: 16px;
  }
}

  .jumlah-section {
    background-color: #00397D;
    font-family: 'Nunito';
    text-align: center;
    padding: 60px 0px;
  }

  .logo {
    margin-bottom: 20px;
    width: 80;
  }
  
  .angka {
    font-size: 28px;
    font-weight: 800;
    margin-bottom: 10px;
    color: var(--primary-600, #AAC5FF);
  }
  
  .tulisan {
    font-size: 18px;
    font-size: 20px;
    font-weight: 400;
    color: var(--primary-600, #EFF3FF);
  }
  
  .item {
    display: inline-block;
    width: calc(33.33% - 20px);
    vertical-align: top;
  }

  .rek-gereja-section {
    background: var(--primary-50, #EFF3FF);
    padding: 60px 0 !important;
}

.rek-gereja-title {
    color: var(--primary-600, #00397D);
    font-family: 'Nunito';
    font-size: 24px;
    font-weight: 700;
    line-height: 1.5;
    margin-bottom: 20px;
    text-align: center;
}

.rek-gereja-desc {
    color: var(--font-600, #004BA4);
    font-family: 'Nunito';
    font-size: 20px !important;
    font-weight: 500;
    line-height: 1.6;
    margin-bottom: 20px;
    text-align: justify;
}

.rek-gereja-img {
    border-radius: 12px;
    max-width: 100%;
    height: auto;
    padding-right: 0 !important;
    margin-left: 8% !important;
}

@media (max-width: 992px) {
    .rek-gereja-section {
        padding: 40px 15px !important;
    }
}

@media (max-width: 768px) {
    .rek-gereja-section {
        padding: 30px 15px !important;
    }
    .rek-gereja-title {
        font-size: 22px;
    }
    .rek-gereja-desc {
        font-size: 16px;
    }
}

@media (max-width: 576px) {
    .rek-gereja-title, .gereja-title, .judul-ibadah, .angka {
        font-size: 20px !important;
    }
    .rek-gereja-desc, .gereja-desc, .tulisan {
        font-size: 16px !important;
    }

    .gereja-section, .jadwal-section, .jumlah-section, .warta-jemaat-section {
      padding: 8% 4% !important;
    }

    .tanggal-warta {
        font-size: 16px !important;
        padding-right: 4% !important;
    }
    .btn-warta-jemaat {
        font-size: 14px !important;
        width: 80px !important;
        padding: 4px 10px !important;
        font-weight: 400 !important;
        background-color: var(--font-600, #00397D) !important;
    }
    .btn-warta-jemaat:hover {
        font-size: 14px !important;
        width: 80px !important;
        padding: 4px 10px !important;
        font-weight: 400 !important;
        background-color: var(--font-600, #005EC6) !important;
    }
    .judul-warta-jemaat {
        font-size: 18px;
    }
}
</style>