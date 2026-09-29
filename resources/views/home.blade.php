@extends('layouts.app')

@section('title', 'Home - Katalog UMKM Siswa SMK')

@section('content')
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold text-primary">Katalog UMKM Siswa SMK</h1>
            <p class="col-md-8 fs-5 mx-auto text-secondary">
                Wadah kreatif karya dan produk buatan siswa-siswi SMK. Temukan berbagai produk fashion, aksesori, alat
                tulis, dan lainnya dengan kualitas terbaik.
            </p>
            <a href="{{ route('catalog') }}" class="btn btn-primary btn-lg shadow-sm">Lihat Katalog Produk</a>
        </div>
    </div>
@endsection
