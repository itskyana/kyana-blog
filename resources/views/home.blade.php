@extends('layouts.main')

@section('container')
<div class="px-2 py-3 mx-auto text-center">
    <h2 class="display-4 fw-bold">Selamat Datang</h2>
    <h2 class="display-4 fw-bold">Di Aplikasi <span class="text-danger">Blogging Type Laravel</span></h2>

    <div class="mx-auto mt-5 mb-3">
    <p>Aplikasi sederhana yang dibuat oleh <i>Muhammad Rizky Perdana</i> menggunakan framework <span class="text-danger">PHP Laravel 8</span> dengan refrensi melalui  <a href="https://youtu.be/wNmgAm9xvwk" class="text-decoration-none text-danger">Youtube Channel Web Programming Unpas</a>. Ingin melihat postingan kami? silahkan klik tombol <a href="/posts" class="text-decoration-none text-danger">Lihat Selengkapnya</a> dibawah ini!</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a href="/posts" class="text-decoration-none">
            <button type="button" class="btn btn-danger btn-sm px-3">Lihat Selengkapnya</button>
        </a>
    </div>

    <p class="mt-5 mb-3 text-muted text-center">&copy; Muhammad Rizky Perdana | 2023</p>
</div>
@endsection
