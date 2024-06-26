{{-- @extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Warta Jemaat</h1>
  </div>

  <form method="post" action="/dashboard/warta/{{ $warta->slug }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $warta->title) }}">
    @error('title')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="file" class="form-label">File</label>
      <input type="hidden" name="oldFile" value="{{ $warta->file }}">
      <input class="form-control @error('file') is-invalid @enderror" type="file" id="file" name="file">
      @error('file')
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

    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>

  <script>
    const file = document.querySelector("#file");
    const slug = document.querySelector("#slug");

    file.addEventListener("keyup", function() {
        let preslug = file.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });
</script>
@endsection --}}