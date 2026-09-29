@extends('layouts.app')

@section('title', 'Admin Panel - Kelola Produk')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Kelola Data Produk</h2>
        <a href="{{ route('admin.create') }}" class="btn btn-success">+ Tambah Produk</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0 p-3 mb-3">
        <form action="{{ route('admin.index') }}" method="GET" class="d-flex" style="max-width: 300px;">
            <input class="form-control me-2" type="search" name="search" placeholder="Cari nama/kategori..."
                value="{{ $search }}">
            <button class="btn btn-outline-primary" type="submit">Cari</button>
        </form>
    </div>

    <div class="table-responsive card shadow-sm border-0">
        <table class="table table-hover mb-0 align-middle">
            <thead class="table-primary">
                <tr>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td><strong>{{ $product->code }}</strong></td>
                        <td>{{ $product->name }}</td>
                        <td><span class="badge bg-info text-dark">{{ $product->category }}</span></td>
                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.destroy', $product->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-3">Data produk kosong.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
