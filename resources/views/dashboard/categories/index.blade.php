@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        Post Categories
    </h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
    {{ session('success') }}
</div>
@elseif (session()->has('delete'))
<div class="alert alert-danger col-lg-10" role="alert">
    {{ session('delete') }}
</div>
@elseif (session()->has('update'))
<div class="alert alert-warning col-lg-10" role="alert">
    {{ session('update') }}
</div>
@endif

<div class="table-responsive col-lg-10">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3
    ">Create New Category</a>
    <table class="table table-striped table-hover table-sm">
        <thead>
            <tr>
                <td>No</td>
                <td>Category Name</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    {{-- <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info" ><span data-feather="eye"></span></a> --}}

                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning" ><span data-feather="edit"></span></a>

                    <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this post?')"><span data-feather="trash"></span></button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
