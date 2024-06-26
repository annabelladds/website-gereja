@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class="h4">Selamat Datang, {{ auth()->user()->name }}!</h4>
    <div class="isi-welcome">
        <img src="/img/welcome.png" alt="welcome">
    </div>  
  </div>
@endsection

<style>
    img {
    width: 300px;
    height: 250px;
    }

    .isi-welcome {
    justify-content: center;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
</style>