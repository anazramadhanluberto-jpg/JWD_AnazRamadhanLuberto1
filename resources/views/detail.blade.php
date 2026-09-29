@extends('layouts.app')

@section('title', 'Detail - ' . $product->name)

@section('content')
    <div class="card shadow-sm border-0 p-4">
        <div class="row g-4">
            <div class="col-md-5">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded shadow-sm"
                        alt="{{ $product->name }}">
                @else
                    <div class="bg-secondary text-white d-flex align-items-center justify-content-center rounded"
                        style="height: 300px;">
                        <span>Tidak ada gambar</span>
                    </div>
                @endif
            </div>
            <div class="col-md-7">
                <span class="badge bg-primary mb-2">{{ $product->category }}</span>
                <h2 class="fw-bold">{{ $product->name }}</h2>
                <p class="text-muted small">Kode Produk: <strong>{{ $product->code }}</strong></p>
                <h3 class="text-primary fw-bold my-3">Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
                <p><strong>Stok Tersedia:</strong> {{ $product->stock }} pcs</p>
                <p class="mt-3"><strong>Deskripsi:</strong><br>{{ $product->description }}</p>
                <a href="{{ route('catalog') }}" class="btn btn-secondary mt-3">Kembali ke Katalog</a>
            </div>
        </div>
    </div>
@endsection
