@extends('layouts.app')
@section('title', 'Katalog Produk')
@section('content')
    <h2>Daftar Produk</h2>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>{{ $product['name'] }}</h5>
                    <p>Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                    <a href="{{ route('produk.detail', $product['id']) }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
