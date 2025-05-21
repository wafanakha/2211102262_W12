@extends('layouts.app')
@section('title', 'Detail Produk')
@section('content')
    <h2>{{ $product['name'] }}</h2>
    <p>Harga: Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
    <a href="{{ route('katalog') }}" class="btn btn-secondary">Kembali ke Katalog</a>
@endsection
