@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Membuat Warta Jemaat Baru</h1>
  </div>

  <form method="post" action="/dashboard/warta" class="mb-5" enctype="multipart/form-data">
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
        <label for="file" class="form-label">File</label>
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
    // const file = document.querySelector("#file");
    // const slug = document.querySelector("#slug");

    // file.addEventListener("keyup", function() {
    //     let preslug = file.value;
    //     preslug = preslug.replace(/ /g,"-");
    //     slug.value = preslug.toLowerCase();
    // });

//     document.addEventListener("DOMContentLoaded", function() {
//     const fileInput = document.querySelector("#file");
//     const slugInput = document.querySelector("#slug");

//     fileInput.addEventListener("change", function() {
//         let fileName = fileInput.files[0].name; // Ambil nama file
//         fileName = fileName.substring(0, fileName.lastIndexOf('.')); // Hapus ekstensi file
//         let preslug = fileName.replace(/ /g, "-"); // Ganti spasi dengan "-"
//         slugInput.value = preslug.toLowerCase(); // Ubah menjadi huruf kecil
//     });
// });

document.addEventListener("DOMContentLoaded", function() {
    const fileInput = document.querySelector("#file");
    const slugInput = document.querySelector("#slug");

    fileInput.addEventListener("change", function() {
        if (fileInput.files.length > 0) {
            let fileName = fileInput.files[0].name; // Ambil nama file
            fileName = fileName.substring(0, fileName.lastIndexOf('.')); // Hapus ekstensi file
            let preslug = fileName.replace(/ /g, "-"); // Ganti spasi dengan "-"
            slugInput.value = preslug.toLowerCase() + ".pdf"; // Ubah menjadi huruf kecil dan tambahkan .pdf
        }
    });
});

</script>
@endsection