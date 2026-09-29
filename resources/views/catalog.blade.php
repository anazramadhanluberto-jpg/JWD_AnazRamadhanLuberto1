@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Daftar Produk</h2>
        <form action="{{ route('catalog') }}" method="GET" class="d-flex" style="max-width: 300px;">
            <input class="form-control me-2" type="search" name="search" placeholder="Cari produk/kategori..."
                value="{{ $search }}">
            <button class="btn btn-outline-primary" type="submit">Cari</button>
        </form>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @forelse($products as $product)
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                            style="height: 180px; object-fit: cover;" alt="{{ $product->name }}">
                    @else
                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center"
                            style="height: 180px;">
                            <span>Tidak ada gambar</span>
                        </div>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-secondary mb-2 align-self-start">{{ $product->category }}</span>
                        <h5 class="card-title fw-semibold">{{ $product->name }}</h5>
                        <p class="card-text text-primary fw-bold mb-1">Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                        <small class="text-muted mb-3">Stok: {{ $product->stock }}</small>
                        <a href="{{ route('detail', $product->id) }}" class="btn btn-outline-primary mt-auto">Detail
                            Produk</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">Produk tidak ditemukan.</div>
            </div>
        @endforelse
    </div>
@endsection
