@extends('dashboard-admin.layouts.main')

@section('container')
<h3 class="container mb-4">Edit Category</h3>

<div class="container mb-3">
    <form action="/categories/{{ $category->id }}" method="post">
        @method('put')
        @csrf
        <label for="nama" class="form-label">Nama Kategori</label>
        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" required value="{{ old('nama', $category->nama) }}" id="nama" placeholder="Nama Kategori">
        @error('nama')
            <p class="invalid-feedback text-danger">{{ $message }}</p>
        @enderror
        </div>
        <div class="container mb-3">
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection