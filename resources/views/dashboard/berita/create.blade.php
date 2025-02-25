@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class="h4">Membuat Berita Baru</h4>
  </div>
  <form method="post" action="/dashboard/berita" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
    @error('title')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="kategori" class="form-label">Oleh</label>
      <select class="form-select" name="kategori_id">
        @foreach ($kategoris as $kategori)
        @if(old('kategori_id') == $kategori->id)
        <option value="{{ $kategori->id }}" selected>{{ $kategori->name }}</option>
        @else
        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Gambar</label>
      <img class="img-preview img-fluid mb-2 col-sm-5">
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
      @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body') }}">
      <trix-editor input="body"></trix-editor>
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
    document.addEventListener("trix-file-accept", function(event) {
            event.preventDefault();
            alert("File attachments are disabled.");
        });

    function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFRevent) {
      imgPreview.src = oFRevent.target.result;
    }
    }
</script>
@endsection