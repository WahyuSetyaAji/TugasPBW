@extends('layouts.app')

@section('title', 'Halaman UTS')

@section('content')
<h2>Selamat datang di halaman UTS</h2>
<p>Pilih salah satu menu di bawah ini untuk melihat detail:</p>
<ul>
<li><a href="{{ url('/uts/web') }}">Menu UTS Pemrograman Web</a></li>
<li><a href="{{ url('/uts/database') }}">Menu UTS Database</a></li>
</ul>
@endsection