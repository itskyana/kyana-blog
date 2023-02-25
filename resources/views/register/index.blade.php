@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-7">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="POST">

            @csrf

            <div class="form-floating">
                <input required type="text" name="name" class="form-control @error('name') is-invalid @enderror rounded-top" id="name" value="{{ old('name') }}" placeholder="Name">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{-- Message Error --}}
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input required type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}" placeholder="Username">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{-- Message Error --}}
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input required type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="email@example.com">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{-- Message Error --}}
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input required type="password" class="form-control @error('password') is-invalid @enderror rounded-bottom" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{-- Message Error --}}
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            <small class="mt-3 d-block text-center">Already Registerd? <a href="/login">Login Now!</a></small>
            <p class="mt-5 mb-3 text-muted text-center">&copy; Muhammad Rizky Perdana | 2023</p>
            </form>
        </main>
    </div>
</div>

@endsection
