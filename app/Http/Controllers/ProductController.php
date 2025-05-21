<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Dummy data
        $products = [
            ['id' => 1, 'name' => 'Produk A', 'price' => 10000],
            ['id' => 2, 'name' => 'Produk B', 'price' => 20000],
        ];
        return view('katalog', compact('products'));
    }

    public function show($id)
    {
        $product = ['id' => $id, 'name' => 'Produk ' . chr(64 + $id), 'price' => 10000 * $id];
        return view('produk-detail', compact('product'));
    }
}
