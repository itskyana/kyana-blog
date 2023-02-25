@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="Perdana" width="200" class="img-thumbnail rounded-circle">
    <p class="mt-5 mb-5 text-muted text-center">&copy; Muhammad Rizky Perdana | 2023</p>
@endsection
