<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($angka)
    {
        // tambah angka dengan angka bebas, misal +10
        $hasil = $angka + 10;

        // lempar ke view
        return view('product.index', compact('hasil'));
    }
}
