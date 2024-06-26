@extends('dashboard.layouts.main')

@section('container')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Dokumentasi</h1>
  </div>

  <form method="post" action="/dashboard/galeri/{{ $galeri->slug }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $galeri->title) }}">
    @error('title')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $galeri->slug) }}">
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="event_date" class="form-label ">Pilih Tanggal</label>
      <input type="text" id="event_date" name="event_date" class="form-control @error('event_date') is-invalid @enderror" required value="{{ old('event_date', $galeri->event_date) }}">
      @error('event_date')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="formatted_date" class="form-label">Tanggal Terpilih</label>
      <input type="text" id="formatted_date" class="form-control @error('formatted_date') is-invalid @enderror" readonly value="{{ old('formatted_date', $galeri->formatted_date) }}">
      @error('formatted_date')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      </div>
    <div class="mb-3">
        <label for="image1" class="form-label">Gambar</label>
        <input type="hidden" name="oldImage1" value="{{ $galeri->image1 }}">
        @if($galeri->image1)
          <img src="{{ asset('storage/' . $galeri->image1) }}" class="img-preview img-fluid mb-2 col-sm-5 d-block">
        @else
          <img class="img-preview img-fluid mb-2 col-sm-5">
        @endif
        <img class="img-preview img-fluid mb-2 col-sm-5">
        <input class="form-control @error('image1') is-invalid @enderror" type="file" id="image1" name="image1" onchange="previewImage()">
        @error('image1')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image2" class="form-label">Gambar</label>
        <input type="hidden" name="oldImage2" value="{{ $galeri->image2 }}">
        @if($galeri->image2)
          <img src="{{ asset('storage/' . $galeri->image2) }}" class="img-preview img-fluid mb-2 col-sm-5 d-block">
        @else
          <img class="img-preview img-fluid mb-2 col-sm-5">
        @endif
        <img class="img-preview img-fluid mb-2 col-sm-5">
        <input class="form-control @error('image2') is-invalid @enderror" type="file" id="image2" name="image2" onchange="previewImage()">
        @error('image2')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image3" class="form-label">Gambar</label>
        <input type="hidden" name="oldImage3" value="{{ $galeri->image3 }}">
        @if($galeri->image3)
          <img src="{{ asset('storage/' . $galeri->image3) }}" class="img-preview img-fluid mb-2 col-sm-5 d-block">
        @else
          <img class="img-preview img-fluid mb-2 col-sm-5">
        @endif
        <img class="img-preview img-fluid mb-2 col-sm-5">
        <input class="form-control @error('image3') is-invalid @enderror" type="file" id="image3" name="image3" onchange="previewImage()">
        @error('image3')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="url" class="form-label">Dokumentasi Lainnya</label>
        <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" required autofocus value="{{ old('url', $galeri->url) }}">
      @error('url')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>

  <script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });

    // function previewImage(){
    // const image = document.querySelector('#image');
    // const imgPreview = document.querySelector('.img-preview');

    // imgPreview.style.display = 'block';

    // const oFReader = new FileReader();
    // oFReader.readAsDataURL(image.files[0]);

    // oFReader.onload = function(oFRevent) {
    //   imgPreview.src = oFRevent.target.result;
    // }
    // }

    // preview image1
    function previewImage1(){
    const image1 = document.querySelector('#image1');
    const imgPreview = document.querySelector('.img-preview1');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image1.files[0]);

    oFReader.onload = function(oFRevent) {
      imgPreview.src = oFRevent.target.result;
    }
    }

    // preview image2
    function previewImage2(){
    const image2 = document.querySelector('#image2');
    const imgPreview = document.querySelector('.img-preview2');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image2.files[0]);

    oFReader.onload = function(oFRevent) {
      imgPreview.src = oFRevent.target.result;
    }
    }

    // preview image3
    function previewImage3(){
    const image3 = document.querySelector('#image3');
    const imgPreview = document.querySelector('.img-preview3');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image3.files[0]);

    oFReader.onload = function(oFRevent) {
      imgPreview.src = oFRevent.target.result;
    }
    }


    document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#event_date", {
        dateFormat: "Y-m-d",
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
                longhand: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
            },
            months: {
                shorthand: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                longhand: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            }
        },
        onChange: function(selectedDates, dateStr, instance) {
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const date = new Date(dateStr);
            const dayName = days[date.getDay()];
            const formattedDate = dayName + ', ' + date.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
            document.querySelector("#formatted_date").value = formattedDate;
        }
    });
});    
</script>
@endsection