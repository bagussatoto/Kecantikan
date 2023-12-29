@extends('dashboard-admin.layouts.main')

@section('container')
<h3 class="container mb-4">Tambah Product</h3>

<div class="container mb-3">
    <form action="/products" method="post">
        @csrf
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" required value="{{ old('nama') }}" id="nama" placeholder="Nama Product">

        <label for="harga" class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" required value="{{ old('harga') }}" id="harga" placeholder="harga Kategori">
        
        <label for="Kategory" class="form-label">Kategory</label>
        <select class="form-select" name="category_id" aria-label="Default select example">
            @foreach ($categories as $category)
            @if (old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->nama }}</option>
            @endif
        @endforeach
        </select>

        @error('harga')
            <p class="invalid-feedback text-danger">{{ $message }}</p>
        @enderror
        </div>
        <div class="container mb-3">
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

@endsection