@extends('dashboard-admin.layouts.main')

@section('container')
<h3 class="container mb-4">Product</h3>
<div class="container">
  <a href="products/create" class="bg-primary border border-primary mb-6 rounded text-white py-2 px-4 text-decoration-none">Tambah</a>
</div>
<table class="container table shadow mt-4">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Kategory</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)   
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $product->nama }}</td>
            <td>{{ $product->harga }}</td>
            <td>{{ $product->category->nama }}</td>
            <td class="d-flex" >
                <a href="/products/{{ $product->id }}/edit" class="text-success text-decoration-none">Edit</a>
                <form action="/products/{{ $product->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="text-danger border border-white">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection