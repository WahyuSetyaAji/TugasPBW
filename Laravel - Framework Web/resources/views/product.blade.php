@extends('layouts.app')

@section('title', 'Halaman Produk')

@section('content')
    <h1>Ini adalah halaman produk</h1>
    <h1>Selamat Datang {{ $nama }}</h1>
    
    <div class="alert alert-{{ $alertType }}">
        {{ $alertMessage }}
    </div>
@endsection