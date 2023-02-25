@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        Edit Category
    </h1>
</div>

<div class="col-lg-8">
    {{-- Action otomatis ke store --}}
    <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input required type="text" name="name" class="form-control
          @error('name')
            is-invalid
          @enderror" id="name" value="{{ old('name', $category->name) }}" autofocus>
          @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input required type="text" name="slug" class="form-control
          @error('slug')
            is-invalid
          @enderror" id="slug" value="{{ old('slug', $category->slug) }}">
          @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Category</button>
      </form>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
        fetch('/dashboard/categories/checkSlug?name=' + name.value)
            .then(respone => respone.json())
            .then(data => slug.value = data.slug)
    })

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

</script>

@endsection
